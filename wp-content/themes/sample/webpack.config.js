const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
var path = require('path');

const jsPath = './js';
const cssPath = './scss';
const outputPath = 'dist';
const localDomain = 'http://wordpress-sample.local';
const entryPoints = {
    'app': jsPath + '/app.js',
    'style': cssPath + '/style.scss',
};

module.exports = {
    entry: entryPoints,
    output: {
        path: path.resolve(__dirname, outputPath),
        filename: '[name].js',
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '[name].css',
        }),
        new BrowserSyncPlugin({
            proxy: localDomain,
            files: [outputPath + '/*.css'],
            injectCss: true,
        }, { reload: false, }),
    ],
    module: {
        rules: [
            {
                test: /\.(sa|sc)ss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'sass-loader'
                ]
            },
            {
                test: /\.(jpg|jpeg|png|gif|woff|woff2|eot|ttf|svg)$/i,
                use: 'url-loader'
            }
        ]
    },
    optimization: {
        minimize: true,
        minimizer: [
            new UglifyJsPlugin({
                uglifyOptions: {
                    output: {
                        comments: false,
                    },
                },
            }),
            new OptimizeCSSAssetsPlugin({
                cssProcessorPluginOptions: {
                    preset: ['default', { discardComments: { removeAll: true } }],
                }
            })
        ],
    }
};