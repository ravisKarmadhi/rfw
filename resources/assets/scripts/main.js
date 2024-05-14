import $ from 'jquery';
import '@popperjs/core';
import 'bootstrap/dist/js/bootstrap';
import "select2/dist/js/select2.js";
import { App } from './parts/app.js'
import { Plugins } from './parts/plugins.js'
import { Parts } from './parts/parts.js'
import { Button } from './parts/button.js'
import { Home } from './parts/home.js'
import { Video } from './parts/video.js'
import { Filter } from './parts/filter.js';
import { Menulink } from './parts/menulink.js';

// export for others scripts to use
window.$ = $;
window.jQuery = jQuery;

$(function () {

  window.windowWidth = $(window).width();
  window.windowHeight = $(window).height();

  window.isiPhone = navigator.userAgent.toLowerCase().indexOf('iphone');
  window.isiPad = navigator.userAgent.toLowerCase().indexOf('ipad');
  window.isiPod = navigator.userAgent.toLowerCase().indexOf('ipod');

  //Functions List Below

  window.app = new App();
  window.app.init();

  window.plugins = new Plugins();
  window.plugins.init();

  window.parts = new Parts();
  window.parts.init();

  window.filter = new Filter();
  window.filter.init();

  window.button = new Button();
  window.button.init();

  window.home = new Home();
  window.home.init();

  window.video = new Video();
  window.video.init();

  window.menulink = new Menulink();
  window.menulink.init();
});

// ===========================================================================