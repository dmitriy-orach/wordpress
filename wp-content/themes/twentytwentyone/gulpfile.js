const { src, dest, parallel, series, watch } = require('gulp');
const concat = require('gulp-concat');
const terser = require('gulp-terser').default;
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const del = require('del');
const iconfont = require('gulp-iconfont');
const iconfontCss = require('gulp-iconfont-css');

/* styles function for the site */
function stylesFunc() {
    return src('assets/source/sass/main.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(concat('main.min.css'))
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 10 versions'],
            grid: true
        }))
        .pipe(cleanCSS({
            level: {
                1: {
                    specialComments: 0
                }
            }
        }))
        .pipe(sourcemaps.write('maps/'))
        .pipe(dest('stylesheet/'))
}

/* JS function for the site */
function scriptsFunc() {
    return src('assets/source/js/**/*.js')
        .pipe(sourcemaps.init())
        .pipe(concat('main.min.js'))
        .pipe(terser())
        .pipe(sourcemaps.write('maps/'))
        .pipe(dest('javascript/'))
}

/* iconfonts function for the site */
function iconFontsFunc() {
    return src(['assets/source/images/icon-fonts/*.svg'], {base: 'assets/source'})
        .pipe(iconfontCss({
            targetPath: '../../../assets/source/sass/base/_icon-fonts.scss',
            fontPath: 'fonts/icon-fonts/',
            fontName: 'icons'
        }))
        .pipe(iconfont({
            fontName: 'icons',
            formats: ['svg', 'ttf', 'eot', 'woff', 'woff2'],
            normalize: true,
            fontHeight: 1001
        }))
        .pipe(dest('stylesheet/fonts/icon-fonts/'))
}

/* transfer images to build folder */
function imagesFunc() {
    return src([
        'assets/source/images/**/*'
    ])
        .pipe(dest('image/design/'))
}

/* transfer fonts to build folder */
function fontsFunc() {
    return src([
        'assets/source/fonts/**/*'
    ])
        .pipe(dest('stylesheet/fonts/'))
}

function cleanBuildFunc() {
    return del('assets/build/**/*', { force: true })
}

function startWatchFunc() {
    watch('assets/source/sass/**/*', stylesFunc);
    watch('assets/source/js/**/*.js', scriptsFunc);
}

exports.scriptsTask = scriptsFunc;
exports.stylesTask = stylesFunc;
exports.imagesTask = imagesFunc;
exports.fontsTask = fontsFunc;
exports.cleanBuildTask = cleanBuildFunc;
exports.iconFontsTask = iconFontsFunc;

exports.default = parallel(stylesFunc, scriptsFunc, fontsFunc, iconFontsFunc, imagesFunc, startWatchFunc);
exports.build = series(cleanBuildFunc, stylesFunc, scriptsFunc, fontsFunc, iconFontsFunc, imagesFunc);