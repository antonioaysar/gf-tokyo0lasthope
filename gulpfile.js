const elixir = require('laravel-elixir');
require('laravel-elixir-vue');

const gulp = require('gulp');
// Require Gulp Sass plugin
const sass = require('gulp-sass');
// Other requires
const plumber = require('gulp-plumber');
const notify = require('gulp-notify');
const browserSync = require('browser-sync');
const autoprefixer = require('gulp-autoprefixer');
const sassdoc = require('sassdoc');
const sourcemaps = require('gulp-sourcemaps');
const bower = require('gulp-bower');
const eslint = require('gulp-eslint');
const concat = require('gulp-concat');

// Path Variables

var resourcesPath = './resources';
var assetsPath = resourcesPath + '/assets';

var paths = {
	bowerPath : './bower_components',
	fontsPath : assetsPath + '/fonts',
	scssPath : assetsPath + '/scss',
	cssPath : 'public/assets/css', //assetsPath + '/css';
	jsDir : assetsPath + '/js',
};



// Functions

function customPlumber(errTitle){
	return plumber({
		errorHandler : notify.onError({
			title: errTitle || "Error running Gulp",
			message: "Error: <%= error.message %>", 
		})
	});
}

// Tasks

gulp.task('bower', function() {
    return bower()
		.pipe(gulp.dest(bowerPath))
});

gulp.task('browserSync', function(){
	browserSync({
		proxy: "tokyo0lasthope"
	});
})


var sassOption = {
	//outputStyle: 'compressed',
        includePaths: [
		paths.bowerPath + '/breakpoint-sass/stylesheets',	
		paths.bowerPath + '/font-awesome-sass/assets/stylesheets',
		paths.bowerPath + '/susy/sass',
	]
};


gulp.task('sass', function(){
	return gulp.src(paths.scssPath + '/**/*.scss')
		.pipe(customPlumber('Error Running Sass'))
//		.pipe(sourcemaps.init())
		.pipe(sass(sassOption))
		.pipe(autoprefixer())
//	  	.pipe(sourcemaps.write('maps/'))
		.pipe(gulp.dest(paths.cssPath))
		// Tells Browser Sync to reload files task is done
		.pipe(browserSync.reload({
			stream: true
		}))
});


gulp.task('eslint', function(){
	return gulp.src(paths.jsDir + '/tokyo0/**/*.js')
		.pipe(eslint())
		.pipe(eslint.format())
		.pipe(eslint.failAfterError());
});


gulp.task('build-app', function(){
	return gulp.src(paths.jsDir + '/**/*.js')
		.pipe(sourcemaps.init())
		.pipe(concat('app.js'))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('public/assets/js'))
});


gulp.task('watch', ['browserSync', 'eslint', 'build-app','sass'], function(){
	gulp.watch(paths.scssPath + '/**/*.scss', ['sass']);
	gulp.watch(paths.jsDir + '/tokyo0/**/*.js', ['eslint']);
});





gulp.task('sassdoc', function () {
  return gulp
    .src(paths.scssPath + '/**/*.scss')
    .pipe(sassdoc())
    .resume();
});

gulp.task('prod', ['sassdoc'], function () {
  return gulp
    .src(paths.scssPath + '/**/*.scss')
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(gulp.dest('app/css'));
});











/*

elixir(mix => {
	// Copy Bower Normalizer
	mix.copy(bowerPath + '/normalize-scss/sass', sassPath + '/3_generic');
	
	// Copy Animate
	/*mix.copy(bowerPath + '/animatewithsass/_properties.scss', sassPath + '/8_vendor/animatewithsass');
	mix.copy(bowerPath + '/animatewithsass/_fading-entrances', sassPath + '/8_vendor/animatewithsass/_fading-entrances');
	mix.copy(bowerPath + '/animatewithsass/_fading-exits', sassPath + '/8_vendor/animatewithsass/_fading-exits');
	mix.copy(bowerPath + '/animatewithsass/animate.scss', sassPath + '/8_vendor/animatewithsass');
	
	//Copy Font-Awesome Fonts
	mix.copy(bowerPath + '/font-awesome-sass/assets/fonts', fontsPath + '/');
	mix.copy(bowerPath + '/font-awesome-sass/assets/stylesheets', sassPath + '/8_vendor/font-awesome');
});


//Copy Fonts in Public
elixir(mix => {
	mix.copy('./resources/assets/fonts', 'public/assets/fonts');
});

// SASS Compiler
elixir(mix => {
    mix.sass('./resources/sass/style.scss', 'public/assets/css');
});


// Versioning Final Resources
elixir(mix => {
	mix.version([
	             'public/assets/css/style.css', 
	             ]);
});

/*

elixir(mix => {
	mix.copy('./resources/assets/images', 'public/assets/images');
});


elixir(mix => {
    mix.sass('./resources/assets/sass/app.scss', 'public/assets/css');
});

elixir(mix => {
	mix.copy('./resources/assets/images', 'public/assets/images');
});

elixir(mix => {
	mix.copy('./resources/assets/fonts', 'public/build/assets/fonts');
});

elixir(mix => {
    mix.scripts([
            'jquery/jquery-2.2.0.min.js',
            'bootstrap/bootstrap.min.js',
            'bootstrap/ie10-viewport-bug-workaround.js',
            'news-ticker-master/jquery.newsTicker.min.js',
            'tab-styles-inspiration/cbpFWTabs.js',
            'tab-styles-inspiration/modernizr.custom.js',
            'gdrcd/changetitle.js',
            'gdrcd/corefunctions.js',
            'gdrcd/popupchoise.js',
            'gdrcd/tooltip.js',
            't0lh/popup.js',
//            'laravel/auth.js',
            't0lh/t0lh.js',
            't0lh/chat.js',
//            't0lh/burger.js',
            't0lh/fadeout.js',
            ], 'public/assets/js/all.js', jsDir);

});

elixir(mix => {
    mix.scripts([
            't0lh/welcome-js/starlight.js'
            ], 'public/assets/js/welcome-js.js', jsDir);

});

elixir(mix => {
    mix.scripts([
            't0lh/rulebook-js/rulebook.js'
            ], 'public/assets/js/rulebook-js.js', jsDir);

});

elixir(mix => {
    mix.scripts([
            't0lh/world-js/world.js'
            ], 'public/assets/js/world-js.js', jsDir);

});

elixir(mix => {
    mix.scripts([
            't0lh/register-js/register-stats.js'
            ], 'public/assets/js/register-js.js', jsDir);

});

elixir(mix => {
    mix.scripts([
            't0lh/all-app-js/burger.js'
            ], 'public/assets/js/all-app-js.js', jsDir);

});

elixir(mix => {
    mix.scripts([
            't0lh/map-js/map.js'
            ], 'public/assets/js/map-js.js', jsDir);

});

//elixir(mix => {
//    mix.scripts([
//            't0lh/all-game-js/.js'
//            ], 'public/assets/js/all-app-js.js', jsDir);
//
//});

elixir(mix => {
	mix.version([
	             'public/assets/css/app.css', 
	             'public/assets/js/all.js', 
	             'public/assets/js/welcome-js.js',
	             'public/assets/js/rulebook-js.js',
	             'public/assets/js/world-js.js',
	             'public/assets/js/register-js.js',
	             'public/assets/js/all-app-js.js',
	             'public/assets/js/map-js.js'
	             ]);
});

*/