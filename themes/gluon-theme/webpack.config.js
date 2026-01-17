/**
 * Webpack Configuration for Gluon Theme Blocks
 *
 * Extends @wordpress/scripts default config to customize entry/output.
 *
 * @package Gluon_Theme
 * @since 1.0.0
 */

const defaultConfig = require('@wordpress/scripts/config/webpack.config');
const path = require('path');

module.exports = {
    ...defaultConfig,
    entry: {
        index: path.resolve(__dirname, 'assets/blocks/site-logo/index.jsx'),
    },
    output: {
        ...defaultConfig.output,
        path: path.resolve(__dirname, 'assets/blocks-build/site-logo'),
        filename: '[name].js',
    },
};
