// webpack.mix.js

let mix = require('laravel-mix');
require('mix-tailwindcss');
const path = require('path');

const cwv_theme_dist = 'web/themes/custom/cwv_theme/dist';

mix.setPublicPath(path.normalize('../'));

