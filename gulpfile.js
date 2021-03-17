const URL = 'techno.develop'

const { src, dest, parallel, series, watch } = require('gulp')
const browserSync = require('browser-sync').create()
const sass = require('gulp-sass')
const sassGlob = require('gulp-sass-glob')
const cleanCss = require('gulp-clean-css')
const autoprefixer = require('gulp-autoprefixer')
const rename = require('gulp-rename')
const imagemin = require('gulp-imagemin')
const iconfont = require('gulp-iconfont')
const iconfontCss = require('gulp-iconfont-css')
const del = require('del')

const timestamp = Math.round(Date.now() / 1000);

function browserSyncInit() {
    browserSync.init({
        proxy: URL,
        open: false
    })
}

function styles() {
    return src(['assets/scss/**/*.scss', '!assets/scss/**/_*.scss'])
        .pipe(sassGlob())
        .pipe(sass())
        .pipe(autoprefixer({ grid: true }))
        .pipe(cleanCss({ level: { 1: { specialComments: 0 } } }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(dest('assets/css'))
        .pipe(browserSync.stream())
}

function images() {
    return src(['assets/images/**/*.{jpg,jpeg,png,webp,svg,gif}'])
        .pipe(imagemin())
        .pipe(dest('assets/images'))
        .pipe(browserSync.stream())
}

function icons() {
    return src(['assets/icons/*.svg'])
        .pipe(iconfontCss({
            fontName: 'TechnoIcons',
            targetPath: '../scss/_icons.scss',
            fontPath: '../fonts/',
            cssClass: 'ti'
        }))
        .pipe(iconfont({
            fontName: 'TechnoIcons',
            prependUnicode: true,
            formats: ['ttf', 'eot', 'woff', 'woff2', 'svg'],
            timestamp
        }))
        .pipe(dest('assets/fonts'))
        .pipe(browserSync.stream())
}

function clean() {
    return del(['assets/css', 'assets/fonts/TechnoIcons.*'], { force: true })
}

function startWatch() {
    watch('assets/scss/**/*.scss', { usePolling: true }, styles)
    watch('assets/images/**/*.{jpg,jpeg,png,webp,svg,gif}', { usePolling: true }, images)
    watch('assets/icons/**/*.svg', { usePolling: true }, icons)
    watch(['**/*.{php,js}', '!{node_modules,vendor}/**'], { usePolling: true }).on('change', browserSync.reload)
}


exports.clean = clean
exports.styles = styles
exports.images = images
exports.icons = icons
exports.assets = series(icons, styles, images)
exports.build = series(clean, exports.assets)
exports.default = series(exports.assets, parallel(browserSyncInit, startWatch))
