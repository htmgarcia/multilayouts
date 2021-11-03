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

if (!$list)
{
	return;
}

?>
<div class="mod-articlesnews newsflash">
	<?php foreach ($list as $item) : ?>
		<div class="mod-articlesnews__item" itemscope itemtype="https://schema.org/Article">
			<?php require ModuleHelper::getLayoutPath('mod_multi_layouts', '_item'); ?>
		</div>
	<?php endforeach; ?>
</div>
