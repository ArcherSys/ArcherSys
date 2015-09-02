<?php
/*
 * displays activitys from owncloud activity app by ownCloud
 * copyright 2013
 *
 * @version 0.1
 * @date 18-03-2014
 * @author Florian Steffens (flost@live.no)
 */
class activity extends ocdWidget implements interfaceWidget {

	// ======== INTERFACE METHODS ================================
	
	/*
	 * @return Array of all data for output
	 * this array will be routed to the subtemplate for this widget 
	 */
	public function getWidgetData() {

        $result = \OCA\Activity\Api::get(null);
        $act = $result->getData();
        return Array("activitys" => $act);
	}
	
	// ======== END INTERFACE METHODS =============================

    /*
     * delete all items with the same subject,
     * only display the last change for one item
     *
     * @param array of activitys
     * @return array of activitys
     */
    private function distinctItems($act) {
        foreach($act as $k => $v) {
           foreach($act as $k2 => $v2) {
               if($k != $k2 && $act[$k]['subject'] == $act[$k2]['subject']) {
                   unset($act[$k2]);
               }
           }
        }
        return $act;
    }


    /*
     * delete all items, that are older than in the settings defined
     *
     * @param array of activitys
     * @return array of activitys
     */
    private function deleteOldItems($act) {
        $oldestAccepted = time() - ( OCP\Config::getUserValue($this->user, "ocDashboard", "ocDashboard_activity_maxAge",1) * 60 * 60 );
        foreach($act as $k => $v) {
            if($act[$k]['timestamp'] < $oldestAccepted) {
                unset($act[$k]);
            }
        }
        return $act;
    }

}