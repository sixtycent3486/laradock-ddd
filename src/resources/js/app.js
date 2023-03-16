import './bootstrap';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import './lib/coreui.min.js';
import './custom.js';

import PerScrollbar from 'perfect-scrollbar';
let PerfectScrollbar = PerScrollbar.default;
