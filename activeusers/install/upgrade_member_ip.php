<?php
/**
 * @package   havefnubb
 * @subpackage activeusers
 * @author   Laurent Jouanneau
 * @copyright 2022 Laurent Jouanneau
 * @link      https://havefnubb.jelix.org
 * @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
 */

class activeusersModuleUpgrader_member_ip extends \Jelix\Installer\Module\Installer {

    public $targetVersions = array('1.2.1');

    function install(\Jelix\Installer\Module\API\InstallHelpers $helpers)
    {
        $helpers->database()->execSQLScript('sql/upgrade_member_ip');
    }
}
