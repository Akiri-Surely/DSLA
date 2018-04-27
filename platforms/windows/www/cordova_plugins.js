cordova.define('cordova/plugin_list', function(require, exports, module) {
module.exports = [
    {
        "id": "onesignal-cordova-plugin.OneSignal",
        "file": "plugins/onesignal-cordova-plugin/www/OneSignal.js",
        "pluginId": "onesignal-cordova-plugin",
        "clobbers": [
            "OneSignal"
        ]
    },
    {
        "id": "onesignal-cordova-plugin.OneSignalPushProxy",
        "file": "plugins/onesignal-cordova-plugin/src/windows/OneSignalPushProxy.js",
        "pluginId": "onesignal-cordova-plugin",
        "merges": [
            ""
        ]
    }
];
module.exports.metadata = 
// TOP OF METADATA
{
    "cordova-plugin-whitelist": "1.3.3",
    "onesignal-cordova-plugin": "2.3.3"
};
// BOTTOM OF METADATA
});