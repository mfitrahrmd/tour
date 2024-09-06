import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'
import { resolve } from 'path'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [react()],
  build: {
    outDir: "react",
    rollupOptions: {
      input: resolve(__dirname, "./src/react.jsx"),
      output: {
        entryFileNames: "react.js",
        assetFileNames: "[name].[ext]"
      }
    }
  }
})
