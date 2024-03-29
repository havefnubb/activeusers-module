<?php
/**
* @package    havefnubb
* @subpackage activeusers
* @author     Laurent Jouanneau
* @contributor
* @copyright  2010-2022 Laurent Jouanneau
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/

/**
 * Class that manages the timeout of the connection of the user
 */
class activeusersCoordPlugin implements jICoordPlugin {
    public $config;

    function __construct($conf){
        $this->config = $conf;
    }

    public function beforeAction ($params)
    {
        $connectedUsers = new \Havefnubb\ActiveUsers\ConnectedUsers();
        $connectedUsers->check();
        return null;
    }

    public function beforeOutput(){}

    public function afterProcess (){}

}
