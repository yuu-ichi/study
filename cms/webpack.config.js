const webpack = require("webpack");
const path = require("path");

// NOTE:https://webpack.js.org/configuration/mode/
module.exports = {
    target: "node",
    output: {
        path: path.resolve(__dirname) + "/webroot/dist/",
        filename: "bundle.node_modules.js",
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: "babel-loader",
                options: {
                    presets: [["@babel/preset-env", { targets: "defaults" }]],
                },
            },
        ],
    },
};
