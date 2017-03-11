var gulp = require('gulp');
//Añadimos browsersync
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

gulp.task('serve', function(){

	//Variables para que sepa que archivos refrescar 
	 var files = [
    	'./style.css',
    	'./*.php',
        './parts/*.php',
        '**/*.js',
                '**/*.svg',
                '**/*.ttf',
                '**/*.otf',
                '**/*.eot',
                '**/*.woff',
                '**/*.woff2',

                // include specific files and folders
                'screenshot.png',
    	];

    // Serve files from the root of this project
    browserSync.init(files, {
      
             proxy: "localhost/portafolio/",
       
    });

	
});

gulp.task('default', ['serve']);

