const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
	.sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/admin/app.js', 'public/js/ftp4')
	.sass('resources/sass/admin/admin.scss', 'public/css/ftp4');
