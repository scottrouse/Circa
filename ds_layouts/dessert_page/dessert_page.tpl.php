<div class="<?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  
  <?php if ($left_top or $right_top): ?>
  	<div class="ds-top_wrapper clearfix">
  <?php if ($left_top): ?>
    <div class="ds-left_top<?php print $left_top_classes; ?>">
      <?php print $left_top; ?>
    </div>
  <?php endif; ?>

  <?php if ($right_top): ?>
    <div class="ds-right_top<?php print $right_top_classes; ?>">
      <?php print $right_top; ?>
    </div>
  <?php endif; ?>
	</div> <!-- .ds-top_wrapper -->
  <?php endif; ?>
  
  <?php if ($left_bottom or $right_bottom or $right_bottom_left or $right_bottom_right): ?>
	<div class="ds-bottom_wrapper clearfix">
  <?php if ($left_bottom): ?>
    <div class="ds-left_bottom<?php print $left_bottom_classes; ?>">
      <?php print $left_bottom; ?>
    </div>
  <?php endif; ?>

  <?php if ($right_bottom or $right_bottom_left or $right_bottom_right): ?>
	<div class="ds-right_bottom-wrapper clearfix">
  <?php if ($right_bottom): ?>
    <div class="ds-right_bottom<?php print $right_bottom_classes; ?>">
      <?php print $right_bottom; ?>
    </div>
  <?php endif; ?>
  <?php if ($right_bottom_left or $right_bottom_right): ?>
  	<div class="ds-right_bottom_bottom-wrapper clearfix">
  <?php if ($right_bottom_left): ?>
    <div class="ds-right_bottom_left<?php print $right_bottom_left_classes; ?>">
      <?php print $right_bottom_left; ?>
    </div>
  <?php endif; ?>
  <?php if ($right_bottom_right): ?>
    <div class="ds-right_bottom_right<?php print $right_bottom_right_classes; ?>">
      <?php print $right_bottom_right; ?>
    </div>
  <?php endif; ?>
  	</div> <!-- .ds-right_bottom_bottom-wrapper -->
  	<?php endif; ?>
  	</div> <!-- .ds-right_bottom-wrapper -->
  <?php endif; ?>
  	</div> <!-- .ds-bottom_wrapper -->
  <?php endif; ?>
  
</div>