<div id="ocDashboard">

	<?php 
	// base domain
	$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
	$sp = strtolower($_SERVER["SERVER_PROTOCOL"]);
	$protocol = substr($sp, 0, strpos($sp, "/")) . $s;
	$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
	$x = $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
	$y = explode("index.php", $x);
	$base = $y[0];

	foreach ( $_['widgets'] as $widget) {

        $last = "";
        if($widget == end($_['widgets'])) {
            $last = " lastItem";
        }

		// add icon if availible
		if($widget['icon'] != "") {
			$style = "background-image: url('".$base."apps/ocDashboard/img/".$widget['icon']."'); background-repeat: no-repeat; background-position: 280px 0px; background-size: 35px 35px;";
		} else {
			$style = "";
		} ?>

		
		<div class="dashboardItem<?php print_unescaped($last); ?>" id="<?php print_unescaped($widget['id']); ?>" style="display: none; <?php print_unescaped($style); ?>"  data-interval="<?php print_unescaped($widget['interval']); ?>" data-status="<?php print_unescaped($widget['status']); ?>">
		
		<?php 
			// for single widget output --------------------------------------------------------------------------
			if(isset($_['singleOutput']) && $_['singleOutput']) { print_unescaped("###?###"); } 
		?>
		
		<!--  add wait symbol -->
		<div class="ocDashboard inAction <?php print_unescaped($widget['id']); ?>" style="display: none;">&nbsp;</div>

		<?php 
		// add reload button
		if (isset($widget['interval']) && $widget['interval'] != "") {
			$reload = "<span>&nbsp;&#8635;</span>";
		} else {
			$reload = "";
		}
		
		if(isset($widget['link']) AND $widget['link'] != "") { ?>
		
			<div class="ocDashboard head"><a href="<?php print_unescaped($base.$widget['link']); ?>"><?php print_unescaped($l->t($widget['name'])); ?></a><?php print_unescaped($reload); ?></div>

		<?php 
		} else { ?>
			<div class="ocDashboard head"><?php print_unescaped($l->t($widget['name'])); ?><?php print_unescaped($reload); ?></div>
		<?php 
		}
		?>
				
		<?php 
		// if error, just show error message
		if(isset($widget['error']) && $widget['error'] != "") { ?>
			<div class='ocDashboard error'>
				<?php print_unescaped($l->t($widget['error'])); ?>
			</div>
			
			<?php 
		} else {
			print_unescaped($this->inc('/widgets/'.$widget['id'].'.inc', $widget));
		} ?>
			
		<?php 
			// for single widget output ----------------------------------------------------------------------------
			if(isset($_['singleOutput']) && $_['singleOutput']) { print_unescaped("###?###"); } 
		?>
		
		</div>
		
	<?php 
	} ?>
	
</div>