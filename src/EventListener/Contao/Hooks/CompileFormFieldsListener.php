<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Holiday Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoHoliday\EventListener\Contao\Hooks;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\Config;
use Contao\Database;
use Contao\Form;
use Contao\FormFieldModel;
use Contao\FrontendTemplate;
use Contao\StringUtil;
use Contao\Widget;
use InspiredMinds\ContaoFieldsetDuplication\Helper\EventListener;
use InspiredMinds\ContaoFieldsetDuplication\Helper\FieldHelper;

/**
 * @Hook("compileFormFields")
 */
class CompileFormFieldsListener{
    public function __invoke(array $fields, string $formId, Form $form): array
    {
        static $alreadyProcessed = false;

        // Ensure the listener is called only once (e.g. in combination with MPForms)
        if ($alreadyProcessed) {
            return $fields;
        }

        $alreadyProcessed = true;
        $submittedData = [];

        // Get the submitted data from the request
        if (($request = $this->requestStack->getCurrentRequest()) !== null) {
            $submittedData = $request->request->all();
        }

        // check if form was submitted
        if (($submittedData['FORM_SUBMIT'] ?? null) === $formId) {
            $fieldsetGroups = $this->buildFieldsetGroups($fields);

            $processed = [];
            $fieldsetDuplicates = [];

            // search for duplicates
            foreach (array_keys($submittedData) as $duplicateName) {
                // check if already processed
                if (\in_array($duplicateName, $processed, true)) {
                    continue;
                }

                // check if it is a duplicate
                if (false !== ($intPos = strpos($duplicateName, '_duplicate_'))) {
                    // get the non duplicate name
                    $originalName = substr($duplicateName, 0, $intPos);

                    // get the duplicate number
                    $duplicateNumber = (int) (substr($duplicateName, -1));

                    // clone the fieldset
                    foreach ($fieldsetGroups as $fieldsetGroup) {
                        foreach ($fieldsetGroup as $field) {
                            if ($field->name === $originalName) {
                                // new sorting base number
                                $sorting = $fieldsetGroup[\count($fieldsetGroup) - 1]->sorting;

                                $duplicatedFields = [];

                                foreach ($fieldsetGroup as $field) {
                                    // set the actual duplicate name
                                    $duplicateName = $field->name.'_duplicate_'.$duplicateNumber;

                                    // clone the field
                                    $clone = clone $field;

                                    // remove allow duplication class
                                    if ($this->fieldHelper->isFieldsetStart($clone)) {
                                        $clone->class = implode(' ', array_diff(explode(' ', $clone->class), ['allow-duplication']));
                                        $clone->class .= ($clone->class ? ' ' : '').'duplicate-fieldset-'.$field->id.' duplicate';
                                    }

                                    // set the id
                                    $clone->id = $field->id.'_duplicate_'.$duplicateNumber;

                                    // set the original id
                                    $clone->originalId = $field->id;

                                    // set the name
                                    $clone->name = $duplicateName;

                                    // set the sorting
                                    $clone->sorting = ++$sorting;

                                    // add the clone
                                    $duplicatedFields[] = $clone;

                                    // add to processed
                                    $processed[] = $duplicateName;
                                }

                                $fieldsetDuplicates[] = $duplicatedFields;

                                break 2;
                            }
                        }
                    }
                }
            }

            // reverse the fieldset duplicates
            $fieldsetDuplicates = array_reverse($fieldsetDuplicates);

            // process $fields
            $fields = array_values($fields);

            // go through the duplicated fieldsets
            foreach ($fieldsetDuplicates as $duplicatedFieldset) {
                // search for the stop field
                $stopId = null;
                foreach ($duplicatedFieldset as $duplicatedField) {
                    if ($this->fieldHelper->isFieldsetStop($duplicatedField)) {
                        $stopId = $duplicatedField->originalId;
                        break;
                    }
                }

                // search for the index position of the original stop field
                if (null !== $stopId) {
                    $stopIdx = null;
                    for ($i = 0; $i < \count($fields); ++$i) {
                        if ($fields[$i]->id === $stopId) {
                            $stopIdx = $i;
                            break;
                        }
                    }

                    // insert fields after original stop field
                    if (null !== $stopIdx) {
                        array_splice($fields, $stopIdx + 1, 0, $duplicatedFieldset);
                    }
                }
            }
        }

        // return the fields
        return $fields;
    }

    /**
     * @param array|Widget[]|FormFieldModel[] $fields
     */
    private function buildFieldsetGroups(array $fields): array
    {
        // field set groups
        $fieldsetGroups = [];

        // field set group
        $fieldsetGroup = [];

        // go through each field
        foreach ($fields as $field) {
            // check if we can process duplicates
            if ($this->fieldHelper->isFieldsetStart($field)) {
                $fieldsetGroup[] = $field;
            } elseif ($this->fieldHelper->isFieldsetStop($field)) {
                $fieldsetGroup[] = $field;
                $fieldsetGroups[$fieldsetGroup[0]->id] = $fieldsetGroup;
                $fieldsetGroup = [];
            } elseif (!empty($fieldsetGroup)) {
                $fieldsetGroup[] = $field;
            }
        }

        return $fieldsetGroups;
    }
}
