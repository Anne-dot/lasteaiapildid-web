// @ts-check
import { defineConfig } from 'astro/config';

import tailwindcss from '@tailwindcss/vite';

import icon from 'astro-icon';

// https://astro.build/config
export default defineConfig({
  // Production: site: 'https://lasteaiapildid.ee',
  site: 'https://anne-dot.github.io',
  base: '/lasteaiapildid-web',
  vite: {
    plugins: [tailwindcss()]
  },

  integrations: [icon()]
});