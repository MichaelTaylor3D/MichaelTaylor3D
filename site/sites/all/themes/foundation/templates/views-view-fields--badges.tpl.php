<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>

  <?php print $field->wrapper_prefix; ?>
    <?php print $field->label_html; ?>
    <div class="large-3 columns" style="width: 100%;">
    	<?php print $field->content; ?>
    </div>    
  <?php print $field->wrapper_suffix; ?>
<?php endforeach; ?>