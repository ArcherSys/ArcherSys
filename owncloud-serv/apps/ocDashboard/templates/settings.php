<form id="ocDashboardSettings" class="section">
	<fieldset class="personalblock"> 
    <h2><?php p($l->t('Dashboard Settings')); ?></h2>

	<?php 
		foreach ($_['widgets'] as $widget) {
			$id = $widget['widget']['id'];
			$name = $widget['widget']['name'];
			$enable = ($widget['enable'] == "yes")?"checked":""; ?>
			<div class="widgetItem <?php p($id); ?>">
			<input type="checkbox" name="ocDashboard_<?php p($id); ?>" id="ocDashboard_<?php  p($id); ?>" class="checkbox" value="1" <?php p($enable); ?> />
			<label class="widgetName" for="ocDashboard_<?php p($id); ?>" >&nbsp;&nbsp;<?php p($l->t($name)); ?></label>
			<br /><br />

			<?php
			if(isset($widget['conf']) && !empty($widget['conf'])) {
				foreach ($widget['conf'] as $c) {
					// tooltip
					if(isset($c['tooltip']) && $c['tooltip'] != "") {
						$span = "<span>".$l->t($c['tooltip'])."</span>";
						$classTooltipLabel = "tooltipLabel";
					} else {
						$span = "";
						$classTooltipLabel = "";
					}
					
					switch ($c['type']) {
						case 'string':
							$default = (isset($c['default']))?$c['default']:"";
							$value = (isset($c['value'])) ? $c['value']: ""; ?>
							<label for="ocDashboard_<?php p($id); ?>_<?php p($c['id']); ?>" class="<?php p($classTooltipLabel); ?>"><?php p($l->t($c['name'])); ?>
							<?php print_unescaped($span); ?>
							</label>
							<input type="text" value="<?php p($value); ?>" placeholder="<?php p($l->t($default)); ?>" name="ocDashboard_<?php p($id); ?>_<?php p($c['id']); ?>" id="ocDashboard_<?php p($id); ?>_<?php p($c['id']); ?>" />
							<?php
							break;
                        case 'radio': ?>
                            <label class="<?php p($classTooltipLabel); ?>">&nbsp;&nbsp;<?php p($l->t($c['name'])); ?>
                                <?php print_unescaped($span); ?>
                            </label>
                            <?php
                            foreach ($c['options'] as $option) {
                                $default = (isset($c['default'])) ? $c['default'] : ""; // fallback value
                                $value = (isset($c['value']) && $c['value'] != "") ? $c['value']: $default; // if value is set in db
                                $checked = ($option['id'] == $value) ?  "checked": ""; // if this is actual choosen ?>
                                &nbsp;&nbsp;&nbsp;<input type="radio" id="ocDashboard_<?php p($id); ?>_<?php p($c['id']); ?>_<?php p($option['id']); ?>" name="ocDashboard_<?php p($id); ?>_<?php p($c['id']); ?>" value="<?php p($option['id']); ?>" class="ocDashboard_<?php p($id); ?>_<?php p($c['id']); ?>" <?php p($checked); ?> /><label for="ocDashboard_<?php p($id); ?>_<?php p($c['id']); ?>_<?php p($option['id']); ?>"><?php p($l->t($option['name'])); ?></label>
                            <?php
                            }
                            break;
                        case 'select': ?>
                            <label>
                                &nbsp;&nbsp;<?php p($l->t($c['name'])); ?>
                            </label>
                               <select name="ocDashboard_<?php p($id); ?>_<?php p($c['id']); ?>" id="ocDashboard_<?php p($id); ?>_<?php p($c['id']); ?>">
                                <?php
                                foreach ($c['options'] as $option) {
                                    $default = (isset($c['default'])) ? $c['default'] : ""; // fallback value
                                    $value = (isset($c['value']) && $c['value'] != "") ? $c['value']: $default; // if value is set in db
                                    $checked = ($option['id'] == $value) ?  "selected='selected'": ""; // if this is actual choosen ?>
                                    &nbsp;&nbsp;&nbsp;<option id="ocDashboard_<?php p($id); ?>_<?php p($c['id']); ?>_<?php p($option['id']); ?>" value="<?php p($option['id']); ?>" <?php p($checked); ?> /><?php p($l->t($option['name'])); ?></option>
                                <?php
                                }
                                ?>
                               </select>
                            <?php
                            break;
						case 'password': ?>
							<label for="ocDashboard_<?php p($id); ?>_<?php p($c['id']); ?>" class="<?php p($classTooltipLabel); ?>"><?php p($l->t($c['name'])); ?>
							<?php print_unescaped($span); ?>
							</label>
							<input type="password" value placeholder="<?php p($l->t($c['default'])); ?>" name="ocDashboard_<?php p($id); ?>_<?php p($c['id']); ?>" id="ocDashboard_<?php p($id); ?>_<?php p($c['id']); ?>" />
							<?php
							break;
						case 'label': ?>
							<div class="ocDashboard_label"><?php p($l->t($c['name'])); ?></div>
							<?php
							break;
					}
	
				} 
			} ?>

    		</div>
    	<?php
		}
		print_unescaped($l->t('<p style="padding-top: 20px;">There are some background colors for the widgets.<ul><li>red: Error</li><li>orange: missconfiguration</li><li>green: there is something new</li><li></li></ul></p>'));
	?>
	
	</fieldset> 
</form>