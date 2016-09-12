const elixir = require('laravel-elixir');


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir.config.sourcemaps = false;
elixir(mix => {
    mix.sass('app.scss')
    mix.sass('admin/admin.scss','public/css/admin/admin.css');
    mix.scripts([
            './node_modules/jquery/dist/jquery.min.js',
            './node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js',
            './node_modules/owl.carousel/dist/owl.carousel.min.js',
            './node_modules/moment/moment.js',
            './node_modules/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
            './node_modules/parsleyjs/dist/parsley.js',
            './node_modules/toastr/build/toastr.min.js',
            './node_modules/select2/dist/js/select2.min.js',
            './node_modules/dropzone/dist/min/dropzone.min.js',
            'main.js'
        ],
        'public/js/main.js');
    mix.scripts([
      './node_modules/handlebars/dist/handlebars.min.js'
    ],'public/js/handlebar.min.js');
    // Admin Section
    mix.scripts([
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        './node_modules/angular/angular.min.js',
        './node_modules/angular-resource/angular-resource.min.js',
        './node_modules/angular-ui-router/release/angular-ui-router.min.js',
        './node_modules/angular-ui-bootstrap/dist/ui-bootstrap-tpls.js',
        'admin/light-bootstrap-dashboard.js',
        'admin/angular/app.js'
    ],
    'public/js/admin/admin.min.js');

    //mix.scriptsIn(
    //'resources/assets/js/admin/angular/dir',
    //  'public/js/admin/admin-angular.min.js'
    //);
    // mix.copy('./node_modules/bootstrap-sass/assets/fonts/**/*', 'public/fonts');

  //mix.browserSync({
  //  proxy: 'job_search.dev',
  //})
});