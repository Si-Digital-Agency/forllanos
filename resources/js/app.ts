import '../css/app.css';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import type { DefineComponent } from 'vue';
import { createApp, h } from 'vue';
import { ZiggyVue } from 'ziggy-js';
import { initializeTheme } from './composables/useAppearance';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';
/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

import { 
    faChevronCircleLeft,
    faChevronCircleRight,
    faChevronCircleUp,
    faPhone,
    faEnvelope
 } from '@fortawesome/free-solid-svg-icons';

 import {
    faInstagram,
    faWhatsapp
 } from '@fortawesome/free-brands-svg-icons';
/* import specific icons */




/* add icons to the library */
library.add(
    faChevronCircleLeft,
    faChevronCircleRight,
    faChevronCircleUp,
    faPhone,
    faEnvelope,
    faInstagram,
    faWhatsapp
)

createInertiaApp({
    title: (title) => (title ? `${title} - ${appName}` : appName),
    resolve: (name) => resolvePageComponent(`./pages/${name}.vue`, import.meta.glob<DefineComponent>('./pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component('font-awesome-icon', FontAwesomeIcon)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});

// This will set light / dark mode on page load...
initializeTheme();
