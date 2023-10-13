const path = require('path')
const devMode = process.env.NODE_ENV !== "production";
const MiniCssExtractPlugin = require("mini-css-extract-plugin")
const NodePolyfillPlugin = require('node-polyfill-webpack-plugin')
const HtmlWebPackPlugin = require("html-webpack-plugin")

module.exports = {
	mode: 'development',
	devtool: 'inline-source-map',
    entry: {
		app: ['./assets/scripts/select2/js/select2.full.js', './assets/scripts/select2/js/i18n/it.js', './assets/scripts/select2/scss/core.scss', './assets/scripts/main.js', './assets/scripts/landing.js', './assets/styles/main.scss']
	},
	output: {
        filename: devMode ? '[name].dev.js' : '[name].bundle.js',
		path: path.resolve(__dirname, 'dist'),
		assetModuleFilename: 'assets/img/[hash][ext][query]',
        publicPath: '',
		clean: true,
    },
    module: {
        rules: [
			{
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env'],
                    },
                },
            },
			{
				test: /\.s[ac]ss$/i,
				exclude: /node_modules/,
				use: [
					MiniCssExtractPlugin.loader,
					{ loader: "css-loader", options: { import: false } },
					{ loader: 'resolve-url-loader' },
					{
						loader: 'sass-loader',
						options: {
							sourceMap: true,
							implementation: require("sass"),
						}
					}
				]
			},
			{
				test: /\.(woff2?|ttf|otf|eot)$/,
				exclude: /node_modules/,
				type: 'asset/inline',
			},
			{
				test: /\.(png|jpg|jpeg|webp|svg)$/i,
				type: 'asset/resource',
			},
        ],
    },
	devServer: {
		host: 'localhost',
		contentBase: path.join(__dirname, 'dist'),
		compress: true,
		port: 3008,
		proxy: {
			// Star(*) defines all the valid requests
			'*': {
			  target: `http://localhost/gesac/`,
			},
		},
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: devMode ? "[name].css" : "[name].[contenthash].css",
    		chunkFilename: devMode ? "[id].css" : "[id].[contenthash].css",
			linkType: "text/css",
		}),
		new NodePolyfillPlugin(),
		new HtmlWebPackPlugin({
			title: devMode ? 'Development' : 'Production',
			template: path.join(__dirname, 'index.php'),
			chunks: ['index'],
			filename: 'index.php',
		}),
	],
	optimization: {
		runtimeChunk: 'single',
		splitChunks: {
			cacheGroups: {
			  vendor: {
				test: /[\\/]node_modules[\\/]/,
				name: 'vendor',
				chunks: 'all',
			  },
			},
		},
	},
}