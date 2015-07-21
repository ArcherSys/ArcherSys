/** @namespace
* Neokit Module Definer
*/
 requirejs.config({
    baseUrl: "/core/js/",
    paths:{
        jquery:"jquery",
        activity: "activity"
    },
    shim:{
        "activity":{
            exports: "ActivityManager"
        }
    }
});
