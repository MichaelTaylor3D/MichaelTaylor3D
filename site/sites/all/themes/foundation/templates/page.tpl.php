
  	<div class="Nav">
    <div class="Nav_content">
        <span class="font dark title">MichaelTaylor</span>
        <span class="font blue title">3D</span>     
        
   		<? if ($main_menu): ?>
	    	<span class="font small">
		      	
		        	<?php print theme('links__system_main_menu', array(
		          						'links' => $main_menu,
		          						'attributes' => array(
			            					'id' => 'main-menu-links',
			            					'class' => array('links', 'clearfix')),
		          						'heading' => array(
		            					'text' => t('Main menu'),
		            					'level' => 'h2',
		            					'class' => array('element-invisible'),
		          ),
		        )); ?>
		      <!-- /#main-menu -->
		      <? endif; ?>
        	</span>     
	    </div>
	</div> 
	
	<!--<div class="social">
	<ul>
		<a href="https://www.facebook.com/michaeltaylor3d" target="_blank"><li class="facebook">Facebook</li></a>
		<a href="http://twitter.com/#!/michaeltaylor3d" target="_blank"><li class="twitter">Twitter</li></a>
		<a href="https://plus.google.com/u/0/111843871207996664518/about" target="_blank"><li class="google">Google</li></a>
		<a href="https://github.com/MichaelTaylor3D" target="_blank"><li class="github">Github</li></a>
		<a href="http://stackoverflow.com/users/1603933/michaeltaylor3d" target="_blank"><li class="stackoverflow">StackOverflow</li></a>
		<a href="http://www.turbosquid.com/Search/Artists/MichaelTaylor3D?referral=MichaelTaylor3D" target="_blank"><li class="turbosquid">Turbosquid</li></a>
		<a href="#contact" target="_blank"><li class="email">Email</li></a>
	</ul>-->
</div>

<div class="page_content">
	<div class="header">				
        <? print render($page['header']); ?>
    </div>
    <div class="content"> 	
        <? print render($page['content']); ?>
    </div>
    
    <div name="footer" class="footer">
        <? print render($page['footer']); ?>
    </div>
</div>
