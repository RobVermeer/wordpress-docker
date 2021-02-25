import { nodeResolve } from '@rollup/plugin-node-resolve'
import commonjs from '@rollup/plugin-commonjs'
import { terser } from "rollup-plugin-terser"

export default {
  input: 'theme/src/js/index.js',
  output: {
    file: 'theme/app.js',
    format: 'iife',
    compact: true,
    sourcemap: true,
  },
  plugins: [
    nodeResolve(),
    commonjs(),
    terser({
      output: {
        comments: false,
      }
    }),
  ],
}
