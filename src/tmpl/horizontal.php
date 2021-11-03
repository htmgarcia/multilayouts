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

/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $app->getDocument()->getWebAssetManager();
$wa->registerAndUseStyle('mod_modules', 'mod_multi_layouts/template.css');

if (empty($list))
{
	return;
}

?>
<ul class="mod-articlesnews-horizontal newsflash-horiz mod-list">
	<?php foreach ($list as $item) : ?>
		<li itemscope itemtype="https://schema.org/Article">
			<?php require ModuleHelper::getLayoutPath('mod_multi_layouts', '_item'); ?>
		</li>
	<?php endforeach; ?>
</ul>
