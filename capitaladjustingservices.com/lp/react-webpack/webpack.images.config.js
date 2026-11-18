const path = require('path');
var ImageminPlugin = require('imagemin-webpack-plugin').default;
const imageminMozjpeg = require('imagemin-mozjpeg');
const CopyWebpackPlugin = require('copy-webpack-plugin');
var imageVars = require('./config/image-config');
console.log('ImageVars', imageVars);
module.exports = {
    entry: './src/js/images.js',
    output: {
        filename: '_delete_me.txt',
        path: path.resolve(__dirname, imageVars.destinationFolder),
    },
    module: {
        rules: [
            // {
            //     test: /\.css$/,
            //     use: [
            //         'style-loader',
            //         'css-loader'
            //     ]
            // },
            // {
            //     test: /\.(png|svg|jpg|gif)$/,
            //     use: [
            //         'file-loader'
            //     ]
            // }
        ]
    },
    plugins: [
        new CopyWebpackPlugin([{
            from: imageVars.sourceFolder
        }]),
        new ImageminPlugin({
            test: /\.(jpe?g|png|gif|svg)$/i,
            plugins: [
                imageminMozjpeg({
                    quality: imageVars.jpgQuality,
                    progressive: true
                })
            ],
            pngquant: {
                quality: imageVars.pngQuality
            }
        })
    ]
};
