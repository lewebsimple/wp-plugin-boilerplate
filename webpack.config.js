const { resolve } = require('path');
const { merge } = require('webpack-merge');
const { DefinePlugin } = require('webpack');
const webpackDefaults = require('webpack-defaults');

const mode = process.argv.includes('production') ? 'production' : 'development';
const pkg = require('./package.json');

const baseConfig = {

  entry: {
    'wp-plugin-boilerplate': './src/scripts/wp-plugin-boilerplate.js',
  },

  output: {
    filename: 'js/[name].js',
    path: resolve(__dirname, 'assets'),
    publicPath: '/wp-content/plugins/wp-plugin-boilerplate/assets/',
  },

  externals: { jquery: 'jQuery' },

  plugins: [

    // Define useful constants
    new DefinePlugin({
      MODE: JSON.stringify(mode),
      NAME: JSON.stringify(pkg.name),
      DESCRIPTION: JSON.stringify(pkg.description),
      VERSION: JSON.stringify(pkg.version),
    }),

  ],
};

module.exports = merge(baseConfig, webpackDefaults);
