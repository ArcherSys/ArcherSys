$(document).ready(function() {
    bindMarkAsRead();
    bindNewTask();
});


// bind mark as read action
function bindMarkAsRead() {
	$('.ocDashboard.tasks.item span').each(function(i, current) {
			tmp = current.id.split("-");
			id = tmp[1];
            // TODO use on() instead of live()
            $("#task-" + id).unbind('click');
            bindSingleMarkAsRead(id);
        }
	);
}


function bindSingleMarkAsRead(id) {
    $("#task-" + id).live('click',function() {
            markAsRead(id);
        }
    );
}


// bind function for adding new tasks
function bindNewTask() {
    $('#addTask').live('click', function(event) {
        $(".newtask").slideDown();
        $('#addTaskSummary').focus();
    });

    $('#addTaskSubmit').live('click', function(event) {
        newTask();
        event.preventDefault();
    });
}


// ajax action for mar as read
function markAsRead(id) {
	showWaitSymbol('tasks');
	$("#task-" + id).parent().fadeOut();
	ajaxService('tasks',
				'markAsDone',
				id,
				function(res) {
                    //bindMarkAsRead();
				}
	);
    hideWaitSymbol('tasks');
}


// ajax action for adding new task
function newTask() {
    showWaitSymbol('tasks');
    var value = $("#addTaskSummary").val() + "#|#" + $("input[name=addTaskStarred]:checked").val() + "#|#" + $("#addTaskCalendarId").val();
    alert(value);
    ajaxService('tasks',
        'newTask',
        value,
        function(res) {
            loadWidget('tasks');
            setTimeout(function(){ bindMarkAsRead(); },500);
        }
    );
}
