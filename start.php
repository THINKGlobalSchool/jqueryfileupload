<?php
/**
 * Elgg jQuery File Upload
 *
 * @package jqueryfileupload
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2014
 * @link http://www.thinkglobalschool.com/
 *
 */

elgg_register_event_handler('init', 'system', 'jfu_init');

function jfu_init() {
	// Register cachable views
	elgg_register_external_view('js/jquery.ui.widget', true);
	elgg_register_external_view('js/jquery.iframe-transport', true);
	elgg_register_external_view('js/jquery.fileupload', true);
	return TRUE;
}