import { defineConfig } from 'vite';

export default defineConfig({
    publicDir: false,
    build: {
        outDir: 'public/build',
        manifest: true,
        rollupOptions: {
            input: {
                app: 'resources/css/app.css'
            }
        }
    },
    css: {
        postcss: false
    }
});
