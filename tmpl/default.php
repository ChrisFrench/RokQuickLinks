<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<div class="cpanel">

	<?php foreach ($quicklinks as $ql) : ?>
		<?php if ($ql != null) : ?>
		<div class="icon-wrapper">
	<div class="icon">
			<a href="<?php echo $ql[1]; ?>"<?php echo $ql[3] == 'blank' ? ' target="_blank"' : ''; ?>>
				<span class="rok-quicklink-box">
					<img src="<?php echo $iconpath.$ql[0]; ?>" alt="<?php echo $ql[2]; ?>" /><br />
					<span><?php echo $ql[2]; ?></span>
				</span>
			</a>
		</div>
	</div>
		<?php endif; ?>
	<?php endforeach; ?>
</div>