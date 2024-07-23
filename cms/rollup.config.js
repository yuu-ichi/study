import { nodeResolve } from "@rollup/plugin-node-resolve";
import commonjs from "@rollup/plugin-commonjs";
import terser from "@rollup/plugin-terser";

const config = {
    input: "./resources/main.js",
    output: [
        {
            file: "./webroot/dist/bundle.js",
            format: "es",
        },
        {
            file: "./webroot/dist/bundle.min.js",
            format: "iife",
            name: "version",
            plugins: [terser()],
        },
    ],
    plugins: [nodeResolve(), commonjs()],
};

export default config;
