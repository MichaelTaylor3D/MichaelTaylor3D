<?php if ($rows): ?>
    <div class="row model-gallery">
    	<div class="model-container">
    		<?php print $rows; ?>
    	</div>      
    </div>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>