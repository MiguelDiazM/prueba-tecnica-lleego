const { defineConfig } = require("cypress");

module.exports = defineConfig({
  e2e: {
    setupNodeEvents(on, config) {
      on('before:browser:launch', (browser = {}, launchOptions) => {
        if (browser.family === 'chromium') {
          // Forzar el idioma a español para navegadores basados en Chromium.
          launchOptions.args.push('--lang=es-ES');
          console.log('Idioma forzado a es-ES');
        }
        return launchOptions;
      });
      return config;
    },
  },
});