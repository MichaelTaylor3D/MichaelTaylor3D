<span class="anchor" id="skills"></span>
<div class="row">
	<?php if ($rows): ?>
	    <div class="view-content">
	      <?php print $rows; ?>
	    </div>
	  <?php elseif ($empty): ?>
	    <div class="view-empty">
	      <?php print $empty; ?>
	    </div>
	<?php endif; ?>
</div>

<? if ($_GET['q'] != 'resume') : ?>
	<center>
		<div class="meetme button">
			See My Full Resume
		</div>
	</center>
<? endif ?>
