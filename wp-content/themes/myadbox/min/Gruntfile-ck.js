module.exports=function(s){s.initConfig({pkg:s.file.readJSON("package.json"),sass:{option:{paths:"sass",yuicompress:!0},files:{"style.css":"sass/main.sass"}},watch:{sass:{files:"sass/**/*.sass",tasks:"sass"}}}),s.loadNpmTasks("grunt-contrib-watch"),s.loadNpmTasks("grunt-contrib-sass"),s.registerTask("default",["sass","watch"])};