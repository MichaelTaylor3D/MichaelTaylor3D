<?php
	$wrapper = $node_wrapper = entity_metadata_wrapper('node', $node);
?>

<div class="resume">
	<span class="anchor" id="work"></span>
	<h1>Work Experiance</h1>
	<? foreach ($wrapper->field_resume as $field_resume) : ?>
		<section>
			<h2><? print $field_resume->field_title->value() ?></h2>
			<h3><? print $field_resume->field_company->value() ?></h3>
			<h4>
				<?php 
					 $timestamp = $field_resume->field_timeframe->value();
					 print date("F Y", $timestamp['value'] ); 
					 if ($timestamp['value'] != $timestamp['value2']) {					 						 
						 print ' - ' . date("F Y", $timestamp['value2'] );					 
					 } else {
					 	print ' - Present';
					 }
				?>			
			</h4>
			<div class="list">
				<ul>
					<? foreach ($field_resume->field_responsibilities as $field_responsibilities ) : ?>
						<li><? print $field_responsibilities->value() ?></li>
					<? endforeach ?>
				</ul>	
			</div>
		</section>	
	<? endforeach ?>
	
	<span class="anchor" id="education"></span>
	<h1>Education</h1>
	<? foreach ($wrapper->field_education as $field_education) : ?>
		<section>
			<h2><? print $field_education->field_school->value() ?></h2>
			<h3><? print $field_education->field_program->value() ?></h3>
			<h4>
				<?php 
					 $timestamp = $field_education->field_timeframe->value();
					 print date("Y", $timestamp['value'] ); 			 						 
				     print ' - ' . date("Y", $timestamp['value2'] );					
				?>			
			</h4>
			<div class="list">
				<ul class="double">
					<? foreach ($field_education->field_responsibilities as $field_responsibilities ) : ?>
						<li><? print $field_responsibilities->value() ?></li>
					<? endforeach ?>
				</ul>
			</div>	
		</section>	
	<? endforeach ?>	
	
	<span class="anchor" id="activities"></span>
	
</div>
