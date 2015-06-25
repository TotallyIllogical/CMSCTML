
module.exports = function(grunt) {

    // CONFIGURE GRUNT 
    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        sass: {
            development: {
                options:{
                    style: 'compressed',
                    compass: true,
                    sourcemap: false
                },
                files: {
                   'style/style.css' : 'style/style.scss' 
                }
            }
        },
        jshint: {
             all: [ 'script/slider.js' ],
        },
        uglify: {
            my_target: {
                files: {
                    'script/script.min.js': ['script/slider.js', 'script/bootstrap.min.js']
                }
            }
        },
        watch: {
            sass: {
                files: 'style/*.scss',
                tasks: ['sass'],
                option: {
                    livereload: true,
                }
            },
            js: {
                files: [
                  '<%= jshint.all %>'
                ],
                tasks: ['jshint', 'uglify']
            },
        }

    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

};
