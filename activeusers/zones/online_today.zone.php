<?php
/**
* @package   havefnubb
* @subpackage havefnubb
* @author    FoxMaSk
* @contributor Laurent Jouanneau
* @copyright 2008-2011 FoxMaSk, 2021 Laurent Jouanneau
* @link      https://havefnubb.jelix.org
* @licence  http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public Licence, see LICENCE file
*/
/**
 * Class the displays the online members of the day
 */
class online_todayZone extends jZone {
    /**
     *@var string $_tplname the template name used by the zone
     */
    protected $_tplname='zone.online_today';
    /**
     * function to manage data before assigning to the template of its zone
     */
    protected function _prepareTpl(){
        $today  = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
        $connectedUsers = new \Havefnubb\ActiveUsers\ConnectedUsers();
        list($nbAnonymous, $members, $bots) = $connectedUsers->getConnectedList($today, true);

        try {
            \jApp::getModulePath('jcommunity');
            $this->_tpl->assign('hasJCommunity', true);
        }
        catch(\Exception $e)
        {
            $this->_tpl->assign('hasJCommunity', false);
        }

        $this->_tpl->assign('nbAnonymous',$nbAnonymous);
        $this->_tpl->assign('members',$members);
        $this->_tpl->assign('nbMembers',count($members));
        $this->_tpl->assign('bots',$bots);
    }
}
