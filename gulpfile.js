var gulp = require('gulp'),
    minifyHtml = require("gulp-minify-html"),
    minifyCss = require("gulp-minify-css"),
    imagemin = require('gulp-imagemin'),
    stylus = require('gulp-stylus'),
    sourcemaps = require('gulp-sourcemaps'),
    data = require('gulp-data'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync');

var paths = {
    app:    'app/',
    dist:   'dist/',
    stylus: 'stylus/',
    css:    'css/',
    js:     'js/*.js',
    //html:    '*.html'
    images: 'assets/images/'
};

// gulp.task('minify-html', function () {
//     gulp.src('app/*.html') // path to your files
//         .pipe(minifyHtml())
//         .pipe(gulp.dest('dist'));
// });

gulp.task('html', function () {
    gulp.src(paths.app + '*.html')
        .pipe(gulp.dest(paths.dist))
        .pipe(browserSync.reload({stream:true}));
});

gulp.task('js', function () {
    gulp.src(paths.app + paths.js)
        .pipe(gulp.dest(paths.dist + paths.js))
        .pipe(browserSync.reload({stream:true}));
});

gulp.task('minify-css', function () {
    gulp.src(paths.app + paths.css + 'main.css')
        .pipe(autoprefixer())
        .pipe(minifyCss())
        .pipe(gulp.dest(paths.dist + 'css'))
        .pipe(browserSync.reload({stream:true}));
});

gulp.task('compress-images', function() {
    gulp.src(paths.images + '*')
        .pipe(imagemin())
        .pipe(gulp.dest(paths.dist + paths.images))
        .pipe(browserSync.reload({stream:true}));
});

gulp.task('stylus', function () {
    return gulp.src(paths.app + paths.stylus + 'main.styl')
        .pipe(stylus())
        .pipe(gulp.dest(paths.app + paths.css));
});

gulp.task('watcher',function(){
    gulp.watch(paths.app + paths.stylus + '*.styl', ['stylus']);
    gulp.watch(paths.app + paths.css + '*.css', ['minify-css']);
    gulp.watch(paths.app + '*.html', ['html']);
    gulp.watch(paths.app + paths.images + '*', ['compress-images']);
    gulp.watch(paths.app + paths.js, ['js']);
});

gulp.task('browser-sync', function() {
    browserSync({
        server: {
            baseDir: "dist"
        },
        port: 8080,
        open: true,
        notify: false
    });
});

gulp.task('default', ['watcher', 'browser-sync']);
gulp.task('prod', ['stylus', 'minify-css', 'html', 'compress-images', 'js']);
