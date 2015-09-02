<?php 
	$colors = Array(9 => "black", 5 => "darkgreen", 1 => "darkred");
?>

<div class='ocDashboard tasks items'>
    <!--<div class="newtask">
        <form action="" method="">
            <input type="text" size="20" id="addTaskSummary" name="addTaskSummary" />
            <label>normal<input class="addTaskStarred" type="radio" name="addTaskStarred" value="0" checked /></label>
            <label>favorite<input class="addTaskStarred" type="radio" name="addTaskStarred" value="1" /></label>
            <select id="addTaskCalendarId" name="addTaskCalendarId">
            <?php
            foreach ($additionalparams['calendars'] as $key => $cal) {
                    print_unescaped('<option value="'.$key.'">'.$cal.'</option>');
                }
            ?>
            </select>
            <input type="submit" value="Add" id="addTaskSubmit">
        </form>
    </div>-->

    <?php
    //print_r($additionalparams['tasks']);
	foreach ($additionalparams['tasks'] as $task) {
        if($task['completed'] != 1) {
            if(count($additionalparams['tasks']) > 0 && isset($additionalparams['calendars'][$task['calendarid']])) {
                print_unescaped('<div class="task calendar" style="color: '.$task['calendarcolor'].'">'.$additionalparams['calendars'][$task['calendarid']].'</div>');
                unset($additionalparams['calendars'][$task['calendarid']]);
            }
            ?>

            <div class='ocDashboard tasks item' >
                <!--<span id="task-<?php p($task['id']); ?>" >&#10003;&nbsp;</span>-->
                <?php if($task['starred'] == 1) {print_unescaped('&#10038;&nbsp;');} ?><?php p($task['name']); ?>
            </div>
            <?php
        }
    }
	?>
</div>

<!--<div id="addTask">+</div>-->