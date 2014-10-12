module.exports = function(grunt) {

    var baseDir = "";
    var source = baseDir + "source/";
    var assets = baseDir + "assets/";
    var theme = "site/sites/all/themes/boilerplate/";

    var javascript = {
        libraries: [        
            //add libraries here
        ],
        theme: [
            //Global Files
            source + "js/global/settings.js",
            source + "js/global/utilities.js",
            source + "js/global/script.js",

            //Page Specific Files
            source + "js/pages/*.js",

            //Main is last, and should initialize the site
            source + "js/main.js"
        ],
        all: []
    };

    Array.prototype.push.apply(javascript.all,javascript.libraries);
    Array.prototype.push.apply(javascript.all,javascript.theme);

    grunt.initConfig({

            pkg: grunt.file.readJSON('package.json'),
            // This is where we configure JSHint
            jshint: {
                all: {
                    src: javascript.theme,
                    options: {
                        bitwise: true,
                        camelcase: false,
                        curly: true,
                        eqeqeq: true,
                        forin: true,
                        immed: true,
                        indent: 4,
                        latedef: false,
                        newcap: false,
                        noarg: true,
                        noempty: true,
                        nonew: true,
                        regexp: true,
                        undef: false,
                        unused: false,
                        trailing: true
                    },
                   
                }
            },
            
            concat: {
                options: {

                    process: function(src, filepath) {
                            return '\n\n// file: ' + filepath + '\n\n' + src + ';';
                        }
                },
                dist: {
                    src: javascript.all,
                    dest: assets + "scripts.js",
                },
            },

            uglify: {
                options: {
                    mangle: false,
                    preserveComments: 'some'
                },
                my_target: {
                    files: (function() {
                        var files = {};
                        files[theme + "js/scripts.min.js"] = [assets + "scripts.js"];
                        return files;
                    })()
                }
            },

            less: {
                development: {
                    options: {
                        compress: true,
                        yuicompress: true,
                        optimization: 2
                    },
                    files: (function() {
                        var files = {};
                        files[theme + "css/styles.min.css"] = source + "less/main.less";
                        return files;
                    })()
                }
            },

            coffee: {
                compile: {
                    expand: true,
                    flatten: true,
                    cwd: "" + __dirname + "/" + source + "/coffee/",
                    src: ['*.coffee'],
                    dest: source + 'js/global/',
                    ext: '.js'
                }
            },


            watch: {
                styles: {
                    files: [source + 'less/**/*.less'], // which files to watch
                    tasks: ['less'],
                    options: {
                        nospawn: true
                    }
                },
                js: {
                    files: [source + 'js/**/*.js'],
                    tasks: ['jshint', 'concat', 'uglify']
                },
                coffee: {
                    files: [source + 'coffee/**/*.coffee'],
                    tasks: ['coffee:compile']
                }

            }
        });

grunt.loadNpmTasks('grunt-contrib-less');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-contrib-jshint');
grunt.loadNpmTasks('grunt-contrib-concat');
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-coffee');

grunt.registerTask('default', ['watch']);
};