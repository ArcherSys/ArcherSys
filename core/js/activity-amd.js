define(function(){
    /** @namespace
     * Activity Manager for ArcherSys OS
     * @author Weldon Henson
     */
    var ActivityManager = {};
    ActivityManager.NOTIDEX = [];
    /** Notification Aggregator for the Activity Manager
     * Only use this in plugins.
     * Creates Notifications for the NOTIDEX
     * refer to this by {@link ActivityManager.pushNotification}
     * @param {string} title - The Title of the Notification
     * @param {string} body - The Body of the Notification
     *
     */
    ActivityManager.pushNotification = function(title, body) {
        ActivityManager.NOTIDEX.push(new Notification(title, {
            icon: "/core/media/img/notidar.ico",
            body: body
        }));
    };
    /**
     * @constructor
     * Activity Base Class for an ArcherSys Activity
     * Users are given a 5 second warning
     * before the Activity is started by redirecting
     * the user to the Activity URL.
     *
     * @param {string} title - the title used in the notification for this activity
     * @param {string} url - the url that opens  the activity application in the same window as the starter app
     * @example
     * return new ActivityManager.ActivityStem(title,url);
     * @returns {Object} a new ActivityStem for the Activity Plugin
     *
     */
    ActivityManager.ActivityStem = function(title, url) {

        this.title = title;
        this.url = url;
        this.start = function() {
            window.Notification.requestPermission(function(status) {
                ActivityManager.pushNotification(this.title, "The Activity " + this.title + "will be starting shortly.");
                window.setTimeout(function() {
                    window.location.assign(this.url);
                }, 5000);
            });
        };
    };
    /** @constructor
     * Actual Implementation of The Activity Stem
     *
     */
    ActivityManager.Activity = function(title, url) {
        return new ActivityManager.ActivityStem(title, url);
    };
    ActivityManager.SilverDriveActivity = function() {
        return new ActivityManager.Activity("SilverDrive", "https://silverdrive-acosf.c9.io");
    };
    ActivityManager.LogoutActivity = function() {
        return new ActivityManager.Activity("Logout of ASOS", "http://localhost/logout.php");
    };
    ActivityManager.YiiTubeActivity = function(channel) {
        return new ActivityManager.Activity("My YiiTube TV", "http://localhost/entetainment/yiitube?channel=" + channel);
    };
    ActivityManager.ChemistryChannelActivity = function() {
        return new ActivityManager.YiiTubeActivity("chemistry");
    };
    ActivityManager.BrowserAuthActivity = function(url) {
        return new Activity("Browser Login", url);
    };
    ActivityManager.GH = {};
    ActivityManager.GH.PARAMCODE = [];
    ActivityManager.GH.PARAMCODE[0] = "?response_type=code";
    ActivityManager.GH.PARAMCODE[1] ="&client_id=095447377bd289fa5201";
    ActivityManager.GH.PARAMCODE[2] = "&redirect_uri=" + "http%3A%2F%2Flocalhost%2Findex.php".encodeURIComponent();
    ActivityManager.GH.PARAMCODE[3] = "&scope=user%3Aemail";
    ActivityManager.GHAuthActivity = function(){
        return new Activity("Github Auth", "https://github.com/login/oauth/authorize?" + ActivityManager.GH.PARAMCODE[0] + ActivityManager.GH.PARAMCODE[1] + ActivityManager.GH.PARAMCODE[2] + ActivityManager.GH.PARAMCODE[3]);
    };
    }
});


