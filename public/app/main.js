require.config({
    paths: {
        'domReady': '../assets/libraries/domReady/domReady',
        'angular': '../assets/libraries/angular/angular',
        'angular-route': '../assets/libraries/angular-route/angular-route',
        'coreModule': 'coreModule'
    },

    shim: {
        'angular': {
            deps: ['domReady']
        },

        'angular-route': {
            deps: ['angular']
        },

        'coreModule': {
            deps: ['angular']
        }
    }
});

require(['coreModule']);