<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_multi_layouts
 *
 * @copyright   (C) 2021 Valentin Garcia <https://htmgarcia.com>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\Module\MultiLayouts\Site\Helper\MultiLayoutsHelper;

$list = MultiLayoutsHelper::getList($params);

require ModuleHelper::getLayoutPath('mod_multi_layouts', $params->get('layout', 'horizontal'));
