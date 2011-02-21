<?php
/**
 * @version $Id$
 * Kunena Component
 * @package Kunena
 *
 * @Copyright (C) 2008 - 2011 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();
?>
<div id="kadmin-menu">
	<a class="kadmin-mainmenu icon-cp-sm" href="<?php echo JURI::base(); ?>index.php?option=com_kunena"><?php echo JText::_('COM_KUNENA_CP'); ?></a>
	<a class="kadmin-mainmenu icon-config-sm" href="<?php echo JURI::base(); ?>index.php?option=com_kunena&amp;view=config"><?php echo JText::_('COM_KUNENA_C_FBCONFIG'); ?></a>
	<a class="kadmin-mainmenu icon-adminforum-sm" href="<?php echo JURI::base(); ?>index.php?option=com_kunena&amp;view=categories"><?php echo JText::_('COM_KUNENA_C_FORUM'); ?></a>
	<a class="kadmin-mainmenu icon-profiles-sm" href="<?php echo JURI::base(); ?>index.php?option=com_kunena&amp;task=showprofiles"><?php echo JText::_('COM_KUNENA_C_USER'); ?></a>
	<a class="kadmin-mainmenu icon-template-sm" href="<?php echo JURI::base(); ?>index.php?option=com_kunena&amp;view=templates"><?php echo JText::_('COM_KUNENA_A_TEMPLATE_MANAGER'); ?></a>
	<a class="kadmin-mainmenu icon-smilies-sm" href="<?php echo JURI::base(); ?>index.php?option=com_kunena&amp;view=smilies"><?php echo JText::_('COM_KUNENA_EMOTICONS_EMOTICON_MANAGER'); ?></a>
	<a class="kadmin-mainmenu icon-ranks-sm" href="<?php echo JURI::base(); ?>index.php?option=com_kunena&amp;view=ranks"><?php echo JText::_('COM_KUNENA_RANK_MANAGER'); ?></a>
	<a class="kadmin-mainmenu icon-files-sm" href="<?php echo JURI::base(); ?>index.php?option=com_kunena&amp;task=browseFiles"><?php echo JText::_('COM_KUNENA_C_FILES'); ?></a>
	<a class="kadmin-mainmenu icon-images-sm" href="<?php echo JURI::base(); ?>index.php?option=com_kunena&amp;task=browseImages"><?php echo JText::_('COM_KUNENA_C_IMAGES'); ?></a>
	<a class="kadmin-mainmenu icon-prune-sm" href="<?php echo JURI::base(); ?>index.php?option=com_kunena&amp;view=prune"><?php echo JText::_('COM_KUNENA_C_PRUNETAB'); ?></a>
	<a class="kadmin-mainmenu icon-syncusers-sm" href="<?php echo JURI::base(); ?>index.php?option=com_kunena&amp;view=syncusers"><?php echo JText::_('COM_KUNENA_SYNC_USERS'); ?></a>
	<a class="kadmin-mainmenu icon-recount-sm" href="<?php echo JURI::base(); ?>index.php?option=com_kunena&amp;view=recount"><?php echo JText::_('COM_KUNENA_RECOUNTFORUMS'); ?></a>
	<a class="kadmin-mainmenu icon-trash-sm" href="<?php echo JURI::base(); ?>index.php?option=com_kunena&amp;view=trash"><?php echo JText::_('COM_KUNENA_TRASH_VIEW'); ?></a>
	<a class="kadmin-mainmenu icon-stats-sm" href="<?php echo JURI::base(); ?>index.php?option=com_kunena&amp;view=stats"><?php echo JText::_('COM_KUNENA_STATS_GEN_STATS'); ?></a>
	<a class="kadmin-mainmenu icon-systemreport-sm" href="<?php echo JURI::base(); ?>index.php?option=com_kunena&amp;view=report"><?php echo JText::_('COM_KUNENA_REPORT_SYSTEM'); ?></a>
	<a class="kadmin-mainmenu icon-support-sm" href="http://www.kunena.org" target="_blank"><?php echo JText::_('COM_KUNENA_C_SUPPORT'); ?></a>
</div>
