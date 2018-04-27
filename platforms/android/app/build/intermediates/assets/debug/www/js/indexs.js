(function () {
    //"use strict";

    document.addEventListener( 'deviceready', onDeviceReady.bind( this ), false );

    function onDeviceReady()
    {
        document.addEventListener( 'pause', onPause.bind( this ), false );
        document.addEventListener('resume', onResume.bind(this), false);

        var notificationOpenedCallback = function (jsonData) 
        {
            console.log('notificationOpenedCallback: ' + JSON.stringify(jsonData));
        };

        window.plugins.OneSignal
            .startInit("93a6948e-17a8-4b75-ae6d-834b4b1784cd")
            .handleNotificationOpened(notificationOpenedCallback)
            .endInit(); 
    }

    function onPause() {
        // TODO: This application has been suspended. Save application state here.
    }

    function onResume() {
        // TODO: This application has been reactivated. Restore application state here.
    }
} )();