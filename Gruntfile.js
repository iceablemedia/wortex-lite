module.exports = function(grunt) {

  require('load-grunt-tasks')(grunt, {scope: 'devDependencies'});

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        sourceMap: false,
        outputStyle: 'expanded',
      },
      dist: {
        files: {
          'assets/css/wortex.dev.css': 'assets/scss/wortex.scss',
          'assets/css/wortex-unresponsive.dev.css': 'assets/scss/wortex-unresponsive.scss',
        }
      }
    },

    postcss: {
      options: {
        processors: [
          require('autoprefixer')({browsers: 'last 2 versions'}),
        ]
      },
      dist: {
        src: 'assets/css/*.dev.css'
      }
    },

    csscomb: {
      dist: {
        options: {
          config: 'assets/css/csscomb.json'
        },
        files: {
          'css/wortex.dev.css': 'assets/css/wortex.dev.css',
          'css/wortex-unresponsive.dev.css': 'assets/css/wortex-unresponsive.dev.css',
        }
      }
    },

    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
        files: {
          'css/wortex.min.css': 'css/wortex.dev.css',
          'css/wortex-unresponsive.min.css': 'css/wortex-unresponsive.dev.css',
        }
      }
    },

    clean: ['assets/css/*.css'],

    jshint: {
      files: ['Gruntfile.js', 'assets/js/wortex.js'],
      options: {
        globals: {
          jQuery: true
        }
      }
    },

    concat: {
     options: {
      separator: '\n\n',
     },
     dist: {
      src: [
        'assets/js/wortex.js',
        'assets/js/superfish.js',
      ],
      dest: 'js/wortex.dev.js',
     },
    },

    uglify: {
      build: {
        src: 'js/wortex.dev.js',
        dest: 'js/wortex.min.js'
      }
    },

    makepot: {
      target: {
        options: {
          domainPath: '/languages/',
          potFilename: 'wortex-lite.pot',
          type: 'wp-theme'
        }
      }
    },

    watch: {
        scss: {
            files: ['assets/scss/*.scss'],
            tasks: ['sass', 'postcss', 'csscomb', 'cssmin', 'clean'],
            options: {
              interrupt: true,
            },
          },
        js: {
            files: ['assets/js/*.js'],
            tasks: ['jshint', 'concat', 'uglify'],
            options: {
              interrupt: true,
            },
          },
        pot: {
            files: ['*.php', '**/*.php', '**/**/*.php'],
            tasks: ['makepot'],
            options: {
              interrupt: true,
            },
          }
    },


});

grunt.registerTask('default', ['sass', 'postcss', 'csscomb', 'cssmin', 'clean', 'jshint', 'concat', 'uglify', 'makepot']);

};
