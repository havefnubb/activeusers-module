<?php
/**
 * @package   havefnubb
 * @subpackage activeusers_admin
 * @author    Laurent Jouanneau
 * @copyright 2022 Laurent Jouanneau
 * @link      https://havefnubb.jelix.org
 * @license   http://www.gnu.org/licenses/gpl.html GNU Lesser General Public Licence, see LICENCE file
 */

use Jelix\Installer\Module\API\ConfigurationHelpers;
use Jelix\Routing\UrlMapping\EntryPointUrlModifier;
use Jelix\Routing\UrlMapping\MapEntry\MapInclude;

class activeusers_adminModuleConfigurator extends \Jelix\Installer\Module\Configurator
{
    public function getDefaultParameters()
    {
        return array( );
    }

    public function declareUrls(EntryPointUrlModifier $registerOnEntryPoint)
    {
        $registerOnEntryPoint->havingName(
            'admin',
            array(
                new MapInclude('urls.xml')
            )
        )
        ;
    }

    public function configure(ConfigurationHelpers $helpers)
    {

    }

}
