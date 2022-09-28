<?php

declare(strict_types=1);

/*
 * This file is part of contao-jobs-bundle.
 *
 * (c) Stephan Buder 2022 <stephan@maniax-at-work.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/maniaxatwork/contao-jobs-bundle
 */

namespace ManiaxAtWork\ContaoJobsBundle\Helper;

use Contao\BackendUser;
use Contao\StringUtil;
use Contao\UserGroupModel;

class PermissionsHelper
{
    public static function canAccessModule($name, $module = 'contao_jobs'): bool
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
