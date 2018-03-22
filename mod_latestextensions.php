<?php
defined('_JEXEC') or die;

require_once __DIR__ . '/helper.php';

$list = mod_latestextensionsHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
//The last line of code tells the module to load the default layout in our view, which is in /tmpl/default.php .
require JModuleHelper::getLayoutPath('mod_latestextensions', $params->get('layout', 'default'));
