<?php
/*
 * displays tasks from Taskapp by ownCloud
 * copyright 2013
 *
 * @version 0.1
 * @date 01-08-2013
 * @author Florian Steffens (flost@live.no)
 */


class tasks extends ocdWidget implements interfaceWidget {


	// ======== INTERFACE METHODS ================================
	
	/*
	 * @return Array of all data for output
	 * this array will be routed to the subtemplate for this widget 
	 */
	public function getWidgetData() {
        //$this->newTask("neu#|#0#|#1");
        $return = Array(
            "tasks" => $this->getTasks(),
            "calendars" => $this->getCalendars()
        );
        return $return;
	}
	
	// ======== END INTERFACE METHODS =============================


    private function getCalendars() {
        $calendars = Array();
        foreach( OC_Calendar_Calendar::allCalendars($this->user, true) as $cal ) {
            $calendars[$cal['id']] = $cal['displayname'];
        }
        return $calendars;
    }


    /*
     * called by ajaxService
     *
     * @NoAdminRequired
     * @param data for new task
     * @return boolean if success
     */
    public function newTask($data) {
        $split = explode("#|#",$data);

        $param = Array(
            'name'          => $split[0],
            'calendarID'    => $split[2],
            'starred'       => $split[1],
            'due'           => null,
            'start'         => date('c', time())
        );

        $tasksApp = new \OCA\Tasks_enhanced\Dispatcher($param);
        $tasksContainer = $tasksApp->getContainer();
        $tasksController = $tasksContainer->query('TasksController');

        if( $tasksController->addTask() != null ) {
            return true;
        }
        return false;
    }


	/*
	 * called by ajaxService
	 * 
	 * @param $id of task
	 * @return boolean if success
	 */
	public function markAsDone($id) {
        $param = Array( "taskID" => $id );
        $tasksApp = new \OCA\Tasks_enhanced\Dispatcher($param);
        $tasksContainer = $tasksApp->getContainer();
        $tasksController = $tasksContainer->query('TasksController');
        $tasksController->completeTask();
        return true;
	}


    /**
     * @return Array with tasks as array
     */
    private function getTasks() {
        $tasksApp = new \OCA\Tasks_enhanced\Dispatcher(null);
        $tasksContainer = $tasksApp->getContainer();
        $tasksController = $tasksContainer->query('TasksController');
        $data = $tasksController->getTasks()->getData();
        return $data
        ['data']['tasks'];
    }
	
}