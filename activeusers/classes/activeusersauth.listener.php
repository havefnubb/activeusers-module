<?php
/**
 * @package   havefnubb
 * @subpackage activeusers
 * @author    Laurent Jouanneau
 * @contributor 
 * @copyright 2010-2022 Laurent Jouanneau
 * @link      https://havefnubb.jelix.org
 * @license  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
 */
/**
 * Listener to answer to Auth events
 */
class activeusersauthListener extends jEventListener{

    /**
    * to answer to AuthLogin event
    * @param object $event the given event to answer to
    */
    function onAuthLogin ($event) {
        $login = $event->getParam('login');
        $connectedUsers = new \Havefnubb\ActiveUsers\ConnectedUsers();
        $connectedUsers->connectUser($login);
    }

    /**
    * to answer to AuthLogout event
    * @param object $event the given event to answer to
    */
    function onAuthLogout($event) {
        $login = $event->getParam('login');
        $connectedUsers = new \Havefnubb\ActiveUsers\ConnectedUsers();
        $connectedUsers->disconnectUser($login);
    }

    function onAuthRemoveUser($event) {
        $login = $event->getParam('login');
        $connectedUsers = new \Havefnubb\ActiveUsers\ConnectedUsers();
        $connectedUsers->disconnectUser($login);
    }
}
