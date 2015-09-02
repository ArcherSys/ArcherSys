<div class='ocDashboard weather box'>
	 <div class='today'><?php p($l->t("Today")); ?></div>
		 Min. <?php print_unescaped($additionalparams['today']["low"] . $additionalparams['unit']["temperature"]); ?><br />
		 Max. <?php print_unescaped($additionalparams['today']["high"] . $additionalparams['unit']["temperature"]); ?>
		 <div class='ocDashboard weather imgToday'>
		 	<img src='<?php p($additionalparams['today']['imageUrl']); ?>' />
		 </div>
	 </div>
		
	 <div class='ocDashboard weather box'>
		 <div class='city'><?php p($additionalparams['city']); ?></div>
	 </div>
		
	 <div class='ocDashboard weather box'>
		 <div class='tomorrow'><?php p($l->t("Tomorrow")); ?></div>
		 Min. <?php print_unescaped($additionalparams['tomorrow']["low"] . $additionalparams['unit']["temperature"]); ?><br />
		 Max. <?php print_unescaped($additionalparams['tomorrow']["high"] . $additionalparams['unit']["temperature"]); ?>
		 <div class='ocDashboard weather imgTomorrow'>
		 	<img src='<?php p($additionalparams['tomorrow']['imageUrl']); ?>' />
		 </div>
	 </div>
		
	 <div class='ocDashboard weather box2'>
	 	<table>
		 <tr>
		 	<td><?php p($l->t("Temperature")); ?></td>
		 	<td>&nbsp;&nbsp;</td>
		 	<td align='right' style='text-align: right;'><?php p($additionalparams['today']['actual']); ?></td>
		 	<td align='left'><?php  print_unescaped($additionalparams['unit']['temperature']); ?></td>
		 </tr>
		 <tr>
		 	<td><?php p($l->t("Windspeed")); ?></td>
		 	<td>&nbsp;&nbsp;</td>
		 	<td align='right' style='text-align: right;'><?php p($additionalparams['today']['speed']); ?></td>
		 	<td align='left'>&nbsp;<?php print_unescaped($additionalparams['unit']['speed']); ?></td>
		 </tr>
		 <tr>
		 	<td><?php p($l->t("Humidity")); ?></td>
		 	<td>&nbsp;&nbsp;</td>
		 	<td align='right' style='text-align: right;'><?php p($additionalparams['today']['humidity']); ?></td>
		 	<td align='left'>&nbsp;%</td>
		 </tr>
		 <tr>
		 	<td><?php p($l->t("Pressure")); ?> <?php print_unescaped($additionalparams['today']['pressureSymbol']); ?></td>
		 	<td>&nbsp;&nbsp;</td>
		 	<td align='right' style='text-align: right;'><?php p($additionalparams['today']['pressure']); ?></td>
		 	<td align='left'>&nbsp;<?php print_unescaped($additionalparams['unit']['pressure']); ?></td>
		 </tr>
		</table>
	</div>