
  	<div class="Nav">
    <div class="Nav_content">
        <span class="font dark title">MichaelTaylor</span>
        <span class="font blue title">3D</span>     
        
   		<?php if ($main_menu): ?>
	    	<span class="font small">
		      	
		        	<?php print theme('links__system_main_menu', array(
		          						'links' => $main_menu,
		          						'attributes' => array(
		            					'id' => 'main-menu-links',
		            					'class' => array('links', 'clearfix'),
		          					),'heading' => array(
		            					'text' => t('Main menu'),
		            					'level' => 'h2',
		            					'class' => array('element-invisible'),
		          ),
		        )); ?>
		      <!-- /#main-menu -->
		      <?php endif; ?>
        	</span>     
	    </div>
	</div> 

<div class="page_content">
    <div class="content">
        <?php print render($page['content']); ?>
    </div>
    
    <div class="footer">
        <?php print render($page['footer']); ?>
    </div>
</div>
