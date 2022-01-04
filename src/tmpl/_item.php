<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_multi_layouts
 *
 * @copyright   (C) 2022 Valentin Garcia <https://htmgarcia.com>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Layout\LayoutHelper;
?>

<h4 class="newsflash-title">
	<a href="<?php echo $item->link; ?>">
		<?php echo $item->title; ?>
	</a>
</h4>

<?php if (!empty($item->imageIntroSrc)) : ?>
	<figure class="newsflash-image">
		<img src="<?php echo $item->imageIntroSrc; ?>" alt="<?php echo $item->imageIntroAlt; ?>">
		<?php if (!empty($item->imageIntroCaption)) : ?>
			<figcaption>
				<?php echo $item->imageIntroCaption; ?>
			</figcaption>
		<?php endif; ?>
	</figure>
<?php endif; ?>

<?php if (!$params->get('intro_only')) : ?>
	<?php echo $item->afterDisplayTitle; ?>
<?php endif; ?>

<?php echo $item->beforeDisplayContent; ?>

<?php echo $item->introtext; ?>

<?php echo $item->afterDisplayContent; ?>

<?php if (isset($item->link) && $item->readmore != 0) : ?>
	<?php echo LayoutHelper::render('joomla.content.readmore', array('item' => $item, 'params' => $item->params, 'link' => $item->link)); ?>
<?php endif; ?>
