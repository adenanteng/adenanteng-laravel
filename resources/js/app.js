require('./bootstrap');

import Alpine from 'alpinejs';
import Tooltip from "@ryangjchandler/alpine-tooltip";
import Clipboard from "@ryangjchandler/alpine-clipboard";
import intersect from '@alpinejs/intersect';
// import Iconify from '@iconify/iconify';

Alpine.plugin(Tooltip);
Alpine.plugin(Clipboard);
Alpine.plugin(intersect);
// Alpine.plugin(Iconify);

Alpine.plugin(Clipboard.configure({
    onCopy: () => {
        console.log('Copied!')
    }
}))

window.Alpine = Alpine;

Alpine.start();
