// The "wrapper" function
module.exports = function(grunt) {

  // Project and task configuration
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    /**
    * Grunt Sass
    * Compile Sass to CSS using grunt-contrib-sass
    * https://www.npmjs.com/package/grunt-contrib-sass
    */
    sass: {
      dev: {
        options: {
          style: 'expanded',
          sourcemap: 'none',
        },
        files: {
          'style-human.css' : 'scss/eclipse.scss'
        }
      },
      dist: {
        options: {
          style: 'compressed',
          sourcemap: 'none',
        },
        files: {
          'style.css' : 'scss/eclipse.scss'
        }
      }
    },

    /**
    * Grunt Contrib Watch
    * Monitor files and execute task
    * https://www.npmjs.com/package/grunt-contrib-watch
    */
    watch: {
      sass: {

        files : [
          '**/*.scss'
        ],
        tasks : [
        'sass'
        ]

      },
      scripts: {

        files : [
          'assets/js/*.js'
        ],
        tasks : [
        'uglify'
        ]
      }
    },

    /**
    * Grunt Contrib Uglify
    * Monitor files and execute task
    * https://www.npmjs.com/package/grunt-contrib-uglify
    */
    uglify: {
      my_target:{
        files: {
          'js/scripts.js' : ['assets/js/script.js', 'assets/js/bootstrap.min.js']
        }
      }
    }

  }); // initConfig

  //Loading Grunt plugings and tasks
  require('load-grunt-tasks')(grunt);

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('default', ['watch']);


}; // wrapper function
