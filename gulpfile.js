/*

	Source Maps
	===========
	
	The final production ready files built via gulp are compressed and hard to
	read as is.  Source maps allows us to map from a compressed file back to its
	original, more readable form.  Chrome & Firefox support source maps. 

	Source map tutorial: http://blog.teamtreehouse.com/introduction-source-maps

	Globs
	=====

	gulp uses node-glob for parsing file paths.  This allows for wildcards and
	the like in the file paths, e.g. "js/*.js" will match any files with a .js
	extension in the js/ folder.

	More info: https://github.com/isaacs/node-glob

	livereload
	==========

	livereload allows us to trigger a refresh in the browser any time a file is
	changed.  We start up a livereload server from the node side which then
	communicates with a browser extension (http://livereload.com/extensions/).
	When a change is made to a watched file, pipe the changes to livereload so
	that it can notify the browser extension as to what has changed.

	livereload gulp tutorial: https://www.youtube.com/watch?v=r5fvdIa0ETk

*/

// _____________________________________________________________________________
// Setup

// Gulp & gulp plugins
var gulp = require("gulp");
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var sourcemaps = require("gulp-sourcemaps");
var liveReload = require("gulp-livereload");
var merge = require("merge-stream");
var ghPages = require("gulp-gh-pages");
var open = require('gulp-open');
var concat = require("gulp-concat");
var uglify = require("gulp-uglify");
var nunjucksRender = require("gulp-nunjucks-render");
var newer = require("gulp-newer");

// Other modules
var express = require("express");
var path = require("path");
var fs = require("fs");


// _____________________________________________________________________________
// Build Tasks

gulp.task("icons", function () {
	return gulp.src("bower_components/font-awesome/fonts/**.*")
		.pipe(gulp.dest("public/fonts"));
});

gulp.task("images", function () {
	return gulp.src("source/images/**/*.*")
		.pipe(newer("public/images"))
		.pipe(gulp.dest("public/images"));
});

gulp.task("nunjucks", function () {
	nunjucksRender.nunjucks.configure(["source/templates/layouts", "source/templates/partials"], {watch: false});
	return gulp.src("source/templates/pages/**/*.nunjucks")
		.pipe(nunjucksRender())
		.pipe(gulp.dest("public"))
		.pipe(liveReload());
});

// Convert from sass to css adding vendor prefixes along the way and generating
// a source map to allow for easier debugging in chrome.
gulp.task("sass", function () {
	// Configure a sass stream so that it logs errors properly
	var sassStream = sass({
		outputStyle: "expanded",
		includePaths: [
			"bower_components/bootstrap-sass/assets/stylesheets",
			"bower_components/font-awesome/scss",
			"bower_components/awesome-bootstrap-checkbox",
		]
	});
	sassStream.on("error", sass.logError);

	return gulp.src("source/scss/**/*.scss")
		.pipe(sourcemaps.init())
			.pipe(sassStream)
			.pipe(autoprefixer({
				browsers: [
					// https://github.com/twbs/bootstrap-sass#sass-autoprefixer
					"Android 2.3",
					"Android >= 4",
					"Chrome >= 20",
					"Firefox >= 24",
					"Explorer >= 8",
					"iOS >= 6",
					"Opera >= 12",
					"Safari >= 6"
				],
				cascade: true
			}))
		.pipe(sourcemaps.write("maps"))
		.pipe(gulp.dest("public/css"))
		.pipe(liveReload());
});

// Copy bootstrap and jquery vendor libraries files into public/js folder
gulp.task("vendor-js", function() {
	var jquery = gulp.src("bower_components/jquery/dist/jquery.min.js")
		.pipe(gulp.dest("public/js"));
	var bootstrap = gulp.src("bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js")
		.pipe(gulp.dest("public/js"));
	return merge(jquery, bootstrap);
});

// Uglify and sourcemap custom JS for the project into public/js/all.js
gulp.task("js", function() {
	return gulp.src("source/js/**/*.js")
		.pipe(sourcemaps.init())
			// .pipe(concat("all.js")) Disabling so separate pages can have separate JS!
			.pipe(uglify())
		.pipe(sourcemaps.write("maps"))
		.pipe(gulp.dest("public/js"))
		.pipe(liveReload());
});

gulp.task("build", [
	"icons",
	"images",
	"nunjucks",
	"sass",
	"vendor-js",
	"js"
]);


// _____________________________________________________________________________
// Running Tasks

// Watch for changes to HTML/SASS files and start a liveReload server
gulp.task("watch", function () {
	liveReload.listen();
	gulp.watch("source/js/**/*.js", ["js"]);
	gulp.watch("source/scss/**/*.scss", ["sass"]);
	gulp.watch("source/templates/**/*.nunjucks", ["nunjucks"]);
});

// Start an express server that serves public/ to localhost:8080
gulp.task("express-server", function () {
	var app = express();
	app.use(express.static(path.join(__dirname, "public")));
	app.listen(8080);
});

gulp.task("open", function() {
	return gulp.src(__filename)
		.pipe(open({ uri: "http://127.0.0.1:8080" }));
});

gulp.task("run", [
	"watch",
	"express-server",
	"open"
]);


// _____________________________________________________________________________
// Deploying Tasks

// Build & deploy the public/ folder to gh-pages
gulp.task("deploy", ["build"], function () {
  return gulp.src("./public/**/*")
	.pipe(ghPages({
		remoteUrl: "https://github.com/CodeAbodeChicago/CodeAbode-Website.git"
	}));
});


// _____________________________________________________________________________
// Deploying Tasks

// Default task is run when "gulp" is run from terminal
gulp.task("default", [
	"build",
	"run"
]);