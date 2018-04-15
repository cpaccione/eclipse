module.exports = function(grunt) {
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    // sass task
    sass: {
      dev: {
        options: {
          style: 'expanded',
          sourcemap: 'none',
        },
        files: {
          'style-human.css':
          'scss/eclipse.scss'
        }
      },
      dist: {
        options: {
          style: 'compressed',
          sourcemap: 'none',
        },
        files: {
          'style.css':
          'scss/eclipse.scss'
        }
      }
    },

    watch: {
      scripts: {
        files: [
          '**/*.scss'
        ],
        tasks: ['sass']
      }
    }

  }); // initConfig

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['watch']);


}; // wrapper function
