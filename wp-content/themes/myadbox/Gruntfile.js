module.exports = function(grunt) {  

	grunt.initConfig({ 
		pkg: grunt.file.readJSON('package.json'),

		// Compile sass
		sass: {
			dev: {
        option: {
          paths: 'sass',
          unixNewlines: true,
          style: 'compressed'
        },
        files: {
          'style.css' : 'sass/main.sass'
        }
			}
		},

		// watch file changes
		watch: {
			sass: {
				files: 'sass/**/*.sass',
				tasks: 'sass'
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');

	grunt.registerTask('default', ['sass', 'watch'])

}