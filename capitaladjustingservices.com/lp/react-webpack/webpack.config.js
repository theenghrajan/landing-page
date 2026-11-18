const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const UglifyJsPlugin = require("uglifyjs-webpack-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const devMode = process.env.NODE_ENV !== 'production';
var cssConfig = require('./config/css-config');
var jsConfig = require('./config/js-config');
console.log('cssConfig', cssConfig);
console.log('jsConfig', jsConfig);
// var glob = require("glob");
// console.log('PATH',__dirname);
module.exports = {
    // entry: glob.sync("./src/index.js"),
    entry: path.resolve(__dirname, 'src/index.js'),
    output: {
        path: path.resolve(__dirname, jsConfig.outputDestination),
        filename: jsConfig.outputFilename
    },
    // entry: {

    //     // path:path.resolve(__dirname, 'src/css/style1.css'),
    //     // 'main.min': [
    //     //     path.resolve(__dirname, 'src/css/style1.css'),
    //     //     // path.resolve(__dirname, 'src/css/style.less'),

    //     // ],
    //     'mainsass.css': [
    //         path.resolve(__dirname, 'src/css/style1.css'),
    //         path.resolve(__dirname, 'src/css/style.scss'),
    //         path.resolve(__dirname, 'src/css/style.less'),
    //     ]
    //     // 'bundle.js': [
    //     //     path.resolve(__dirname, 'src/js/one.js'),
    //     //     path.resolve(__dirname, 'src/js/two.js')
    //     // ]
    // },
    // output: {
    //     filename: '[name]',
    //     path: path.resolve(__dirname, 'dist'),
    // },
    // module: {
    //     rules: [
    //         // {
    //         //     test: /\.js$/,
    //         //     exclude: /node_module/,
    //         //     use: {
    //         //         loader: 'babel-loader'
    //         //     }
    //         // },
    //         // {
    //         //     test: /\.css$/,

    //         //     use: ExtractTextPlugin.extract({
    //         //         fallback: 'style-loader',
    //         //         // // use: [
    //         //         // //     { loader: 'css-loader', options: { minimize: true } }
    //         //         // // ]
    //         //         // use: 'css-loader',
    //         //         use: [{
    //         //             loader: 'css-loader'
    //         //         }]
    //         //     })

    //         //     // use: [
    //         //     //     // {
    //         //     //     //     loader: 'style-loader'
    //         //     //     // },
    //         //     //     {
    //         //     //         loader: MiniCssExtractPlugin.loader,
    //         //     //         // options: {
    //         //     //         //     // you can specify a publicPath here
    //         //     //         //     // by default it use publicPath in webpackOptions.output
    //         //     //         //     publicPath: 'bundle.min.css'
    //         //     //         // }
    //         //     //     },
    //         //     //     "css-loader"
    //         //     // ]


    //         //     // use: [{
    //         //     //     loader: 'style-loader'
    //         //     // }, {
    //         //     //     loader: 'css-loader'
    //         //     // }]
    //         // },
    //         // {
    //         //     test: /\.scss$/,

    //         //     use: ExtractTextPlugin.extract({
    //         //         use: [{
    //         //             // loader: 'sass-loader'
    //         //             loader: 'style-loader'
    //         //         }]

    //         //     })
    //         //     // use: [{
    //         //     //     loader: 'style-loader'
    //         //     // }, {
    //         //     //     loader: 'css-loader'
    //         //     // }, {
    //         //     //     loader: 'sass-loader'
    //         //     // }]
    //         // },
    //         // {
    //         //     test: /\.less$/,

    //         //     use: [{
    //         //         loader: 'style-loader'
    //         //     }, {
    //         //         loader: 'css-loader'
    //         //     }, {
    //         //         loader: 'less-loader'
    //         //     }]
    //         // }
    //     ]
    // },
    // plugins: [
    //     // new HtmlWebpackPlugin({
    //     //     template: './src/index.html'
    //     // })
    //     new ExtractTextPlugin("bundle.min.css"),
    // ]


    // plugins: [
    //     new MiniCssExtractPlugin({
    //       // Options similar to the same options in webpackOptions.output
    //       // both options are optional
    //       filename: "[name].css",
    //       chunkFilename: "[id].css"
    //     })
    //   ],
    //   module: {
    //     rules: [
    //       {
    //         test: /\.css$/,
    //         use: [
    //           {
    //             loader: MiniCssExtractPlugin.loader,
    //             options: {
    //               // you can specify a publicPath here
    //               // by default it use publicPath in webpackOptions.output
    //               publicPath: 'distro'
    //             }
    //           },
    //           "css-loader"
    //         ]
    //       }
    //     ]
    //   }

    // plugins: [
    //     new MiniCssExtractPlugin({
    //       // Options similar to the same options in webpackOptions.output
    //       // both options are optional
    //       filename: devMode ? '[name].css' : '[name].[hash].css',
    //       chunkFilename: devMode ? '[id].css' : '[id].[hash].css',
    //     })
    //   ],
    //   module: {
    //     rules: [
    //       {
    //         test: /\.(sa|sc|c)ss$/,
    //         use: [
    //           devMode ? 'style-loader' : MiniCssExtractPlugin.loader,
    //           'css-loader',
    //           'postcss-loader',
    //           'sass-loader',
    //         ],
    //       }
    //     ]
    //   }

    optimization: {
        minimizer: [
            new UglifyJsPlugin({
                cache: true,
                parallel: true,
                sourceMap: true // set to true if you want JS source maps
            }),
            new OptimizeCSSAssetsPlugin({})
        ]
    },
    // plugins: [
    //     new MiniCssExtractPlugin({
    //         filename: "[name].css",
    //         chunkFilename: "[id].css"
    //     })
    // ],
    // module: {
    //     rules: [
    //         {
    //             test: /\.css$/,
    //             use: [
    //                 MiniCssExtractPlugin.loader,
    //                 "css-loader"
    //             ]
    //         },
    //         {
    //             test: /\.scss$/,
    //             use: [
    //                 // fallback to style-loader in development
    //                 process.env.NODE_ENV !== 'production' ? 'style-loader' : MiniCssExtractPlugin.loader,
    //                 "css-loader",
    //                 "sass-loader"
    //             ]
    //         }
    //     ]
    // }


    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_module/,
                use: {
                    loader: 'babel-loader'
                }
            },
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: ['css-loader', 'sass-loader']
                })
            },
            {
                test: /\.css$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: [{
                        loader: 'css-loader'
                    }]
                })
            },
            {
                test: /\.less$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: ['css-loader', 'less-loader']
                })
            },
        ]
    },
    plugins: [
        new ExtractTextPlugin('../' + cssConfig.outputDestination),
        //if you want to pass in options, you can do so:
        //new ExtractTextPlugin({
        //  filename: 'style.css'
        //})
        // new HtmlWebpackPlugin({
        //     template: './src/index.html'
        // })
    ]
};