import { nodeResolve } from '@rollup/plugin-node-resolve'
import commonjs from '@rollup/plugin-commonjs'
import { terser } from "rollup-plugin-terser"

export default {
  input: 'src/js/index.js',
  output: {
    file: 'app.js',
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
