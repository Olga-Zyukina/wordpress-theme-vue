const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const TerserPlugin = require('terser-webpack-plugin');
module.exports = (env, argv) => {
  return {
    entry: {
      "calc.min.js": [path.resolve(__dirname, "src/js/calc.js")],
      "calcBlock.min.js": [path.resolve(__dirname, "src/js/calcBlock.js")],
      "calcD300.min.js": [path.resolve(__dirname, "src/js/calcD300.js")],
      "calcD400.min.js": [path.resolve(__dirname, "src/js/calcD400.js")],
      "calcD500.min.js": [path.resolve(__dirname, "src/js/calcD500.js")],
      "details.min.js": [path.resolve(__dirname, "src/js/details.js")],
      "frontPage.min.js": [path.resolve(__dirname, "src/js/front-page.js")],
      "main.min.js": [path.resolve(__dirname, "src/js/main.js")],
      "preloader.min.js": [path.resolve(__dirname, "src/js/preloader.js")],
      "switch.min.js": [path.resolve(__dirname, "src/js/switch.js")],
      calcBlock: [path.resolve(__dirname, "src/css/calcBlock.css")],
      calcD300: [path.resolve(__dirname, "src/css/calcD300.css")],
      calcD400: [path.resolve(__dirname, "src/css/calcD400.css")],
      calcD500: [path.resolve(__dirname, "src/css/calcD500.css")],
      frontPage: [path.resolve(__dirname, "src/css/front-page.css")],
      main: [path.resolve(__dirname, "src/css/main.css")],
    },
    output: {
      path: path.resolve(__dirname, "dist"),
      filename: "js/[name]",
      clean: true,
    },
    externals: {
      jquery: "jQuery",
      "@wordpress/blocks": ["wp", "blocks"],
      "@wordpress/element": ["wp", "element"],
      "@wordpress/components": ["wp", "components"],
    },
    module: {
      rules: [
        {
          test: /\.js$/,
          exclude: /node_modules/,
          use: {
            loader: "babel-loader",
            options: { sourceMaps: true },
          },
        },
        {
          test: /\.(scss|css)$/,
          use: [
            MiniCssExtractPlugin.loader,
                   {
            loader: 'css-loader',
            options: {
              url: false  // Let WordPress handle image URLs
            }
          }
          ],
        },
      ],
    },
    optimization: {
      minimize: true,
      minimizer: [
        new TerserPlugin({
          terserOptions: {
            compress: {
              drop_console: true,
            },
          },
        }),
        new CssMinimizerPlugin(),
      ],
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: "css/[name].min.css",
      }),
    ],
  };
};
