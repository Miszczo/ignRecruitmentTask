import { resolve } from 'node:path';

export default {
  base: '/wp-content/plugins/acf-block/',
  build: {
    outDir: '.',
    emptyOutDir: false,
    rollupOptions: {
      input: {
        section: resolve(__dirname, 'blocks/promo-section/style.scss'),
        main: resolve(__dirname, 'assets/scss/main.scss')
      },
      output: {
        assetFileNames: (assetInfo) => {
          if (assetInfo.name && assetInfo.name.endsWith('.css')) {
            if (assetInfo.name === 'main.css') {
              return 'assets/css/main.css';
            }
            return 'blocks/promo-section/style.css';
          }
          return 'assets/[name][extname]';
        }
      }
    }
  }
};


