<?php 
	$weekDays = Array("", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
	$months = Array("","January","February","March","April","May","June","July","August","September","October","November","December");
?>	
	<canvas id="c1" class="CoolClock:ownCloud:70" width="100" height="100" style="width: 100px; height: 100px; "></canvas>

	<?php 
	if(OC_L10N::findLanguage() == "de" || OC_L10N::findLanguage() == "de_DE") {
	?>
		<div class="clock date"><?php print_unescaped($l->t($weekDays[date("N")]).', den '. date("j").'. '.$l->t($months[date("n")]).' '.date("Y")); ?></div>
	<?php 
	} else {
	?>
		<div class="clock date"><?php print_unescaped(date("F d",time()).'<sup>'.date("S",time()).'</sup> '.date("Y",time())); ?></div>
	<?php 
	}
	?>