const path = require("path");
const miniCss = require("mini-css-extract-plugin");
module.exports = (env, argv) => {
  const isProduction = argv.mode === "development";
  return {
    entry: {
      calc: [path.resolve(__dirname, "src/js/calc.js")],
      calcBlock: [path.resolve(__dirname, "src/js/calcBlock.js")],
      calcD300: [path.resolve(__dirname, "src/js/calcD300.js")],
      calcD400: [path.resolve(__dirname, "src/js/calcD400.js")],
      calcD500: [path.resolve(__dirname, "src/js/calcD500.js")],
      details: [path.resolve(__dirname, "src/js/details.js")],
      frontPage: [path.resolve(__dirname, "src/js/front-page.js")],
      main: [path.resolve(__dirname, "src/js/main.js")],
      preloader: [path.resolve(__dirname, "src/js/preloader.js")],
      switch: [path.resolve(__dirname, "src/js/switch.js")],
    },
    output: {
      path: path.resolve(__dirname, "dist"),
      filename: "js/[name].min.js",
      clean: true,
    },
    devtool: isProduction ? "source-map" : "eval-source-map",
    stats: {
  preset: 'normal',
  moduleTrace: true,
  errorDetails: true,
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
            miniCss.loader,
            {
              loader: "css-loader",
            //   options: {
            //     modules: true,
            //   },
            },
            // "sass-loader",
          ],
        },
      ],
    },
    plugins: [
      new miniCss({
        filename: "css/[name].min.css",
      }),
    ],
  };
};
