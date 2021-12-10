require('./bootstrap');

import Alpine from 'alpinejs';
// import Tooltip from "@ryangjchandler/alpine-tooltip";
import intersect from '@alpinejs/intersect';
// import Iconify from '@iconify/iconify';

// Alpine.plugin(Tooltip);
Alpine.plugin(intersect);
// Alpine.plugin(Iconify);

window.Alpine = Alpine;

Alpine.start();
