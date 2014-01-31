'use strict';

module.exports = function (grunt) {
  require('load-grunt-tasks')(grunt);

  grunt.initConfig({
    watch: {
      haml: {
        files: ['./haml/**/*.haml'],
        tasks: ['haml2smarty:pre', 'exec:middleman', 'haml2smarty:post','clean:tmp'],
        options: {
          livereload: true
        }
      },
      smarty: {
        files: ['source/**/*.php'],
        tasks: ['clean:php', 'exec:middleman'],
        options: {
          livereload: true
        }
      }
    },

    haml2smarty: {
      pre: {
        files: [{
          expand: true,
          cwd: 'haml',
          src: '**/*.haml',
          dest: 'source',
          ext: '.haml'
        }],
        options: {
          scope: "pre"
        }
      },
      post: {
        files: [{
          expand: true,
          cwd: 'build',
          src: '{,*/}*.html',
          dest: 'smarty/templates',
          ext: '.tpl'
        }],
        options: {
          scope: "post"
        }
      }
    },

    exec: {
      middleman: {
        command: 'middleman build',
        args: ['--force']
      }
    },

    haml: {
      dist: {
        files: [{
          expand: true,
          cwd: '.tmp',
          src: '{,*/}*.haml',
          dest: '.tmp',
          ext: '.haml.tmp'
        }]
      },
    },

    clean: {
      php: {
        files: [{
          expand: true,
          cwd: 'smarty/templates_c',
          src: '{,*/}*'
        }],
        options: {
          force: true
        }
      },
      tmp: {
        files: [{
          expand: true,
          cwd: 'build',
          src: '{,*/}*.html'
        },
        {
          expand: true,
          cwd: 'source',
          src: './*.haml'
        },
        {
          cwd: '.tmp',
          src: '{,*/}*'
        }]
      }
    },
  });

  grunt.registerTask('default', function (target) {
    grunt.task.run([
      'watch'
    ]);
  });
};
