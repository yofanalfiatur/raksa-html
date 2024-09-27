const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const cleanCSS = require("gulp-clean-css");
const autoprefixer = require("gulp-autoprefixer");
const sourcemaps = require("gulp-sourcemaps");
const rename = require("gulp-rename");
const uglify = require("gulp-uglify");
const imagemin = require("gulp-imagemin");
const browserSync = require("browser-sync").create();

// SASS Task
gulp.task("sass", function () {
  return gulp
    .src("./assets/sass/**/*.scss")
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError)) // Handle Sass errors gracefully
    .pipe(autoprefixer("last 2 versions"))
    .pipe(gulp.dest("assets/css"))
    .pipe(cleanCSS())
    .pipe(rename({ suffix: ".min" }))
    .pipe(
      sourcemaps.write("", {
        includeContent: false,
        sourceRoot: function (file) {
          return "../../assets/sass";
        },
      })
    )
    .pipe(gulp.dest("dist/css"))
    .pipe(browserSync.stream());
});

// JS Task
gulp.task("js", function () {
  return gulp
    .src("./assets/javascript/**/*.js")
    .pipe(sourcemaps.init())
    .pipe(uglify({ mangle: { reserved: ["lenis"] } }))
    .pipe(rename({ suffix: ".min" }))
    .pipe(
      sourcemaps.write("", {
        includeContent: false,
        sourceRoot: function (file) {
          return "../../assets/javascript";
        },
      })
    )
    .pipe(gulp.dest("dist/javascript"))
    .pipe(browserSync.stream({ once: true }));
});

// Image Task
gulp.task("imagemin", function () {
  return gulp
    .src("./assets/img/**/*")
    .pipe(imagemin())
    .pipe(gulp.dest("dist/img"))
    .pipe(browserSync.stream());
});

// Watch some task for changes in SASS and JS
gulp.task("watch", function () {
  browserSync.init({
    proxy: "localhost:3000",
    port: 3000,
    files: ["*.html", "**/*.css", "**.*.js", "**.*.php"],
  });
  gulp.watch("./assets/sass/**/*.scss", gulp.series("sass"));
  gulp.watch("./assets/javascript/**/*.js", gulp.series("js"));
  gulp.watch("./assets/img/**/*", gulp.series("imagemin"));
});

gulp.task("default", gulp.series("sass", "js", "imagemin", "watch"));
