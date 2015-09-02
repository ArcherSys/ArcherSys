<div class="ocDashboard calendar items">

	<?php
	
	foreach ($additionalparams['events'] as $e)
	{	
		if($e['type'] == "headline") {
			?>
			<h2><?php p($l->t($e['value'])); ?></h2>
			<?php 
		} else {
			
			// birthday
			if (isset($e['event']['type']) && $e['event']['type'] == "birthday") {
			?>
				<div class="calendarItem birthday"><?php p($e['event']['title']); ?></div>
				<div class="ocDashboard calendar date"><?php p($e['event']['date']); ?></div>
			<?php
			} else {
			?>
		
				<?php // no birthday, normal events ?>
				<div class="calendarItem"><?php print_unescaped($e['event']['title']); ?> <span style="color:<?php p($e['event']['color']); ?>; font-style: italic; opacity: 0.6; filter:alpha(opacity=60);"><?php p($e['event']['calendar']); ?></span></div>
			
				<?php 
				if($e['event']['location'] != "") {
					?>
					<div class="calendarItem location" style="font-style: italic; opacity: 0.75; filter:alpha(opacity=75);"><?php print_unescaped($e['event']['location']); ?></div>
					<?php 
				}
				?>
			
				<div class="ocDashboard calendar date"><?php p($e['event']['date']); ?></div>
		
		<?php
			}
		} 
	}
	?>		
		
</div>