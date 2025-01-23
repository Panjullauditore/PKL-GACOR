import './bootstrap';
import Alpine from 'alpinejs';
import darkMode from './darkMode';

window.Alpine = Alpine;
Alpine.data('darkMode', darkMode);
Alpine.start();