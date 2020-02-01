const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const {
    CleanWebpackPlugin
} = require('clean-webpack-plugin');

module.exports = {

    entry: {
        'bundle': './src/index.js'
    },

    // entry: './src/index.js',

    // output: {
    //     filename: 'bundle.js',
    //     path: path.resolve(__dirname, './dist')
    // },

    output: {
        filename: '[name].js',
        path: path.resolve(__dirname, './dist'),
        publicPath: ''
    },

    mode: 'production',

    optimization: {
        splitChunks: {
            chunks: 'all',
            minSize: 10000,
            automaticNameDelimiter: '_'
        }
    },

    module: {

        rules:
            [
                {
                    test: /\.(png|jpg)$/,
                    use: [
                        'file-loader'
                    ]
                },

                {
                    test: /\.css$/,
                    use: [
                        MiniCssExtractPlugin.loader, 'css-loader'
                    ]
                },

                {
                    test: /\.scss$/,
                    use: [
                        MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader'
                    ]
                },

                {
                    test: /\.js$/,
                    exclude: /node_modules/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['@babel/env'],
                            plugins: ['transform-class-properties']
                        }
                    }
                },
            ]
    },
    plugins: [

        new MiniCssExtractPlugin({
            filename: '[name].css'
            // filename: '[name].[contenthash].css'
        }),

        new CleanWebpackPlugin()

    ]

}