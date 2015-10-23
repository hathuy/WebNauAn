<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
if(!JFactory::getUser()->authorise('code.manage','com_hocvien'))
{
    return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}
$controller = JControllerLegacy::getInstance('hocvien');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
?>