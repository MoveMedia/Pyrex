import { defineConfig } from 'vite'
import path from 'path'
console.log('custom conf')
export default defineConfig({
    build: {
        rollupOptions: {
          input:{
            main: path.resolve(__dirname, 'main.ts')
          },
          output: {
            entryFileNames: `[name].js`,
            chunkFileNames: `[name].js`,
            assetFileNames: `[name].[ext]`
          }
        }
      }
})