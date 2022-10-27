<?php

declare(strict_types=1);

/**
 * maniax-at-work.de Contao Holiday Bundle for Contao Open Source CMS
 *
 * @copyright     Copyright (c) 2022, maniax-at-work.de
 * @author        maniax-at-work.de <https://www.maniax-at-work.de>
 * @link          https://github.com/maniaxatwork/
 */

namespace Maniax\ContaoHoliday\Helper;

use Contao\BackendUser;
use Contao\StringUtil;
use Contao\UserGroupModel;

class PermissionsHelper
{
    public static function canAccessModule($name, $module = 'contao_holiday'): bool
    {
        $user = BackendUser::getInstance();

        if ($user->isAdmin) {
            return true;
        }
        if (!empty($user->groups)) {
            foreach ($user->groups as $groupId) {
                $group = UserGroupModel::findByIdOrAlias($groupId);
                $moduleArr = StringUtil::deserialize($group->{$module});
                if (\is_array($moduleArr) && \in_array($name, $moduleArr, true)) {
                    return true;
                }
            }
        }

        return false;
    }
}
