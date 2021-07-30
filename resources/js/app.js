require('bootstrap');
require('./script');

document.Dropzone = require('dropzone');
Dropzone.autoDiscover = false;

require('./announcementImages');
window.$=window.jQuery=require('jquery');