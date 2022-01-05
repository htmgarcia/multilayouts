<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_multi_layouts
 *
 * @copyright   (C) 2022 Valentin Garcia <https://htmgarcia.com>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $app->getDocument()->getWebAssetManager();
$wa->registerAndUseStyle('mod_modules', 'mod_multi_layouts/style.css');

if (!$list)
{
	return;
}

?>
<div class="multilayouts-container multilayouts-two-columns">
	<?php foreach ($list as $item) : ?>
		<div itemscope itemtype="https://schema.org/Article">
			<?php require ModuleHelper::getLayoutPath('mod_multi_layouts', '_item'); ?>
		</div>
	<?php endforeach; ?>
</div>
