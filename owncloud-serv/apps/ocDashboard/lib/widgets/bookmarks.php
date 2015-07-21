<?php
/*
 * displays bookmarks from Bookmarks-App by ownCloud
 * copyright 2014
 *
 * @version 0.1
 * @date 01-02-2014
 * @author Florian Steffens (flost@live.no)
 * @author Simeon Ackermann (amseon@web.de)
 */
class bookmarks extends ocdWidget implements interfaceWidget {

    private $bookmarks = Array();

    // ======== INTERFACE METHODS ================================

    /*
     * @return Array of all data for output
     * this array will be routed to the subtemplate for this widget
     */
    public function getWidgetData() {
        if(empty($this->bookmarks)) {
            $this->getBookmarks();
        }
        return Array("bookmarks" => $this->bookmarks);
    }

    // ======== END INTERFACE METHODS =============================


    /*
     * gets bookmarks
    */
    private function getBookmarks () {
        $filters = OCP\Config::getUserValue($this->user, "ocDashboard", "ocDashboard_bookmarks_tags", ""); // default value doesnt work if empty
        if ( empty($filters) ) $filters = $this->getDefaultValue("tags");
        $filters = explode(',', $filters);

        $params=array(OCP\USER::getUser());

        $sql = "SELECT *, (SELECT GROUP_CONCAT(`tag`) from `*PREFIX*bookmarks_tags` WHERE `bookmark_id` = `b`.`id`) as `tags`
				FROM `*PREFIX*bookmarks` `b`
				WHERE `user_id` = ? ";

        // filter clause
        $sql .= " AND	exists (SELECT `id` FROM  `*PREFIX*bookmarks_tags`
			`t2` WHERE `t2`.`bookmark_id` = `b`.`id` AND ( `tag` = ? " . str_repeat(' OR `tag` = ? ', count($filters)-1) . " ) ) ";

        $params = array_merge($params, $filters);

        $sql .= " ORDER BY lastmodified DESC ";

        $query = OCP\DB::prepare($sql);
        $results = $query->execute($params)->fetchAll();

        $this->bookmarks = $results;
    }

}