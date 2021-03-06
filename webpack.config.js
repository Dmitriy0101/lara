const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin')
const MiniExtractPlugin = require("mini-css-extract-plugin");

let mode = 'development'
if (process.env.NODE_ENV === 'production') {
    mode = 'production'
}
console.log(mode + ' mode')

module.exports = {
    context: path.resolve(__dirname, 'resources'),
    mode: mode,
    entry: {
        main: './js/index.js',
    },
    output: {
        path: path.resolve(__dirname, 'public/dist'),
        publicPath: '/dist/',
        filename: 'js/[name].bundle.js',
        chunkFilename: 'js/modules/[name].js',
        clean: true,
    },
    devtool: /*false */'source-map',
    /*optimization: {
        splitChunks: {
            chunks: 'all',
        }
    },*/
    externals: {
        jquery: 'jQuery',
    },
    //plugins
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'css/[name].css',
            chunkFilename: 'css/[name].css'
        }),
        new SVGSpritemapPlugin(path.resolve(__dirname, './resources/assets/sprite/*.svg'), {
            output: {
                filename: 'icons.svg',
            },
            sprite: {
                prefix: false,
                generate: {
                    title: false,
                },
            }
        })
    ],
    //loaders
    module: {
        rules: [
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader']
            },
            {
                test: /\.scss$/,
                use: [{
                    loader: MiniExtractPlugin.loader
                }, {
                    loader: 'css-loader',
                    options: {
                        url: false
                    }
                }, {
                    loader: 'sass-loader'
                }]
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: 'babel-loader',
                        options: {
                            presets: ['@babel/preset-env']
                        }
                    }
                ]
            }

        ]
    },
};
