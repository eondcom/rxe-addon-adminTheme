<?php
/**
 * @file adminTheme.addon.php
 * @brief adminTheme 애드온
 * @author 이온디(eond@eond.com)
 */
if(!defined('__XE__')) exit();
if(Context::get('module') !== 'admin') return;

if($called_position == 'before_display_content')
{
	$addon_info->skin_path = './addons/adminTheme/skins';
	$skin = '/'.$addon_info->skin;
	Context::addCSSFile($addon_info->skin_path.$skin.$skin.'.css');
	return;
}
