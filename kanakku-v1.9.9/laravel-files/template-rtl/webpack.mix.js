const mix = require('laravel-mix');
const lodash = require("lodash");
const folder = {
    src: "resources/", // source files
    dist: "public/", // build files
    dist_assets: "public/assets/" //build assets files
};
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
 var third_party_assets = {
        css_js: [
            {"name": "jquery", "assets": ["./node_modules/jquery/dist/jquery.min.js"]},
            {"name": "mask", "assets": ["./node_modules/jquery.maskedinput/lib/jquery-1.9.0.min.js"]},
            {"name": "feather-icons", "assets": ["./node_modules/feather-icons/dist/feather.min.js"]},
            {"name": "jquery-ui", "assets": ["./node_modules/jquery-ui-dist/jquery-ui.min.js"]},
            {"name": "moment", "assets": ["./node_modules/moment/min/moment.min.js"]},
            {"name": "apexcharts", "assets": ["./node_modules/apexcharts/dist/apexcharts.min.js"]},
            {"name": "fullcalendar", "assets": ["./node_modules/fullcalendar/dist/fullcalendar.min.js", "./node_modules/fullcalendar/dist/fullcalendar.min.css"]},
            {"name": "select2", "assets": ["./node_modules/select2/dist/js/select2.min.js", "./node_modules/select2/dist/css/select2.min.css"]}

        ]
    };

    //copying third party assets
    lodash(third_party_assets).forEach(function (assets, type) {
        if (type == "css_js") {
            lodash(assets).forEach(function (plugin) {
                var name = plugin['name'],
                    assetlist = plugin['assets'],
                    css = [],
                    js = [];
                lodash(assetlist).forEach(function (asset) {
                    var ass = asset.split(',');
                    for (let i = 0; i < ass.length; ++i) {
                        if(ass[i].substr(ass[i].length - 3)  == ".js") {
                            js.push(ass[i]);
                        } else {
                            css.push(ass[i]);
                        }
                    };
                });
                if(js.length > 0){
                    mix.combine(js, folder.dist_assets + "/libs/" + name + "/" + name + ".min.js");
                }
                if(css.length > 0){
                    mix.combine(css, folder.dist_assets + "/libs/" + name + "/" + name + ".min.css");
                }
            });
        }
    });


     // copy all jvectormap 
    var out = folder.dist_assets + "libs/jvectormap";
    mix.copyDirectory(folder.src + "jvectormap", out);


    mix.copy('resources/css/app.css', 'public/assets/css/app.css');
    mix.copy('resources/js/app.js', 'public/assets/js/app.js');
    mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/assets/libs/fontawesome/webfonts');
    mix.copy('node_modules/@fortawesome/fontawesome-free/css', 'public/assets/libs/fontawesome/css');
    mix.copy('node_modules/@fortawesome/fontawesome-free/js', 'public/assets/libs/fontawesome/js');
    mix.copy('node_modules/jquery.maskedinput/src/jquery.maskedinput.js', 'public/assets/libs/mask');
    mix.copy('node_modules/moment/min/moment.min.js.map', 'public/assets/libs/moment');
    mix.copy('node_modules/bootstrap/dist/css', 'public/assets/libs/bootstrap/css');
    mix.copy('node_modules/bootstrap/dist/js', 'public/assets/libs/bootstrap/js');
    mix.copy('resources/js/jquery.fullcalendar.js', 'public/assets/libs/fullcalendar/jquery.fullcalendar.js');
    mix.copy('resources/css/feather.css', 'public/assets/css/feather.css');
    mix.copy('resources/fonts', 'public/assets/fonts');
    mix.copy('resources/css/ckeditor.css', 'public/assets/css/ckeditor.css');
    mix.copy('resources/js/ckeditor.js', 'public/assets/js');
    mix.copy('resources/img', 'public/assets/img');
    mix.copy('resources/js/jquery.maskedinput.min.js', 'public/assets/js');
    mix.copy('resources/js/pages/mask.js', 'public/assets/js');
    mix.copy('resources/js/pages/icons', 'public/assets/libs/icons');
    mix.copy('resources/js/pages/chart-datac3.js', 'public/assets/libs/c3');
    mix.copy('resources/js/pages/chart-dataflot.js', 'public/assets/libs/flot');
    mix.copy('resources/js/pages/chart-datachart.js', 'public/assets/libs/chartjs');
    mix.copy('resources/js/pages/chart-datamorris.js', 'public/assets/libs/morris');
    mix.copy('resources/js/pages/chart-datapeity.js', 'public/assets/libs/peity');
    mix.copy('resources/js/jquery.missofis-countdown.js', 'public/assets/libs/counterup');
    mix.copy('resources/js/drag-drop.min.js', 'public/assets/libs/dragula');
    mix.copy('resources/js/custom-select.js', 'public/assets/libs/select2');
    mix.copy('resources/js/pages/horizontal-timeline.js', 'public/assets/js');
    mix.copy('resources/js/pages/custom-alertify.min.js', 'public/assets/libs/alertify');
    mix.copy('resources/js/pages/custom-rangeslider.js', 'public/assets/libs/ion-rangeslider');
    mix.copy('resources/js/pages/custom.raty.js', 'public/assets/libs/raty');
    mix.copy('resources/js/pages/images-raty', 'public/assets/libs/raty/images');
    mix.copy('resources/js/pages/fileupload.min.js', 'public/assets/js/fileupload.min.js');

    mix.copy('node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css', 'public/assets/libs/bootstrap-tagsinput');
    mix.copy('node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.js', 'public/assets/libs/bootstrap-tagsinput');
    mix.copy('node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js', 'public/assets/libs/bootstrap-tagsinput');


    mix.copy('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css', 'public/assets/libs/datatables');
    mix.copy('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js', 'public/assets/libs/datatables');
    mix.copy('node_modules/datatables.net/js/jquery.dataTables.min.js', 'public/assets/libs/datatables');
    mix.copy('node_modules/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', 'public/assets/js');
    mix.copy('node_modules/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css', 'public/assets/css');
    mix.copy('node_modules/jquery-slimscroll/jquery.slimscroll.min.js', 'public/assets/js');
    mix.copy('node_modules/jquery-slimscroll/jquery.slimscroll.js', 'public/assets/js');
    mix.copy('node_modules/c3/c3.min.css', 'public/assets/libs/c3');
    mix.copy('node_modules/c3/c3.min.js', 'public/assets/libs/c3');
    mix.copy('node_modules/d3/dist/d3.min.js', 'public/assets/libs/c3');
    mix.copy('node_modules/jquery.flot/jquery.flot.js', 'public/assets/libs/flot');
    mix.copy('node_modules/jquery.flot/jquery.flot.pie.js', 'public/assets/libs/flot');
    mix.copy('node_modules/jquery.flot/jquery.flot.fillbetween.js', 'public/assets/libs/flot');
    mix.copy('node_modules/chart.js/dist/chart.js', 'public/assets/libs/chartjs');
    mix.copy('node_modules/chart.js/dist/chart.min.js', 'public/assets/libs/chartjs');
    mix.copy('node_modules/morris.js/morris.min.js', 'public/assets/libs/morris');
    mix.copy('node_modules/morris.js/morris.js', 'public/assets/libs/morris');
    mix.copy('node_modules/raphael/raphael.min.js', 'public/assets/libs/morris');
    mix.copy('node_modules/peity/jquery.peity.min.js', 'public/assets/libs/peity');
    mix.copy('node_modules/dragula/dist', 'public/assets/libs/dragula');
    mix.copy('node_modules/clipboard/dist', 'public/assets/libs/clipboard');
    mix.copy('node_modules/counterup/jquery.counterup.min.js', 'public/assets/libs/counterup');
    mix.copy('node_modules/counterup/jquery.counterup.js', 'public/assets/libs/counterup');
    mix.copy('node_modules/waypoints/lib/jquery.waypoints.min.js', 'public/assets/libs/counterup');
    mix.copy('node_modules/feather-icons/dist/feather.min.js', 'public/assets/js');
    mix.copy('node_modules/feather-icons/dist/feather.min.js.map', 'public/assets/libs/feather-icons');
    mix.copy('node_modules/alertifyjs/build/alertify.min.js', 'public/assets/libs/alertify');
    mix.copy('node_modules/alertifyjs/build/css/alertify.min.css', 'public/assets/libs/alertify');
    mix.copy('node_modules/ion-rangeslider/css', 'public/assets/libs/ion-rangeslider');
    mix.copy('node_modules/ion-rangeslider/js', 'public/assets/libs/ion-rangeslider');
    mix.copy('node_modules/summernote/dist', 'public/assets/libs/summernote/dist');
    mix.copy('node_modules/raty-js/lib/jquery.raty.js', 'public/assets/libs/raty');
  
    //copying demo pages related assets
    var app_pages_assets = {
        js: [
            folder.src + "js/pages/select2.init.js",
            folder.src + "js/pages/slimscroll.init.js",
            folder.src + "js/pages/form-validation.init.js",
            folder.src + "js/pages/chart-data.init.js",
            folder.src + "js/pages/datetimepicker.init.js",
            folder.src + "js/pages/datatable.init.js",
            folder.src + "js/pages/vectormap.init.js",
            
        ]
    };

    var out = folder.dist_assets + "js/";
    lodash(app_pages_assets).forEach(function (assets, type) {
        for (let i = 0; i < assets.length; ++i) {
            mix.js(assets[i], out + "pages");
        };
    });
