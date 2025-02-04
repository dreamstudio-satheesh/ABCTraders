<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Auth::routes();

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['middleware' => ['auth'], 'as' => 'admin.', 'prefix' => 'admin'], function () {

    // Dashboard
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');


    // Roles
    Route::resource('role', App\Http\Controllers\Admin\RoleController::class);

























    

    //Pages
    Route::put('page/status/{id}', [App\Http\Controllers\Admin\PageController::class, 'status'])->name('page.status');
    Route::resource('page', App\Http\Controllers\Admin\PageController::class);

    //Blog
    Route::resource('blog', App\Http\Controllers\Admin\BlogController::class);
    Route::put('blog/status/{id}', [App\Http\Controllers\Admin\BlogController::class, 'status'])->name('blog.status');
    Route::get('blog/remove-image/{id}', [App\Http\Controllers\Admin\BlogController::class, 'removeImage'])->name('blog.removeImage');

    //Category
    Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);
    Route::post('category/update-orders', [App\Http\Controllers\Admin\CategoryController::class, 'updateOrders'])->name('category.update.orders');

    //Tag
    Route::resource('tag', App\Http\Controllers\Admin\TagController::class);
    Route::put('tag/status/{id}', [App\Http\Controllers\Admin\TagController::class, 'status'])->name('tag.status');

    //Users
    Route::resource('user', App\Http\Controllers\Admin\UserController::class);
    Route::put('user/status/{id}', [App\Http\Controllers\Admin\UserController::class, 'status'])->name('user.status');
    Route::get('user/remove-image/{id}', [App\Http\Controllers\Admin\UserController::class, 'removeImage'])->name('user.removeImage');

    //User_Profile
    Route::get('profile-edit', [App\Http\Controllers\Admin\UserController::class, 'editProfile'])->name('user.edit-profile');
    Route::get('get-state', [App\Http\Controllers\Admin\UserController::class, 'getStates'])->name('user.get-states');
    Route::post('update-profile', [App\Http\Controllers\Admin\UserController::class, 'updateProfile'])->name('user.update-profile');


    //Dashboards
    //Route::view('index', 'dashboards.index')->name('dashboard');
    Route::view('ecommerce', 'dashboards.ecommerce')->name('ecommerce');
    Route::view('project', 'dashboards.project')->name('project');

    //widgets
    Route::view('general-widget', 'widgets.general-widget')->name('general-widget');
    Route::view('chart-widget', 'widgets.chart-widget')->name('chart-widget');



    //Page Layouts
    Route::view('box-layout', 'page-layouts.box-layout')->name('box-layout');
    Route::view('layout-rtl', 'page-layouts.layout-rtl')->name('layout-rtl');
    Route::view('layout-dark', 'page-layouts.layout-dark')->name('layout-dark');
    Route::view('hide-on-scroll', 'page-layouts.hide-on-scroll')->name('hide-on-scroll');
    Route::view('footer-light', 'page-layouts.footer-light')->name('footer-light');
    Route::view('footer-dark', 'page-layouts.footer-dark')->name('footer-dark');
    Route::view('footer-fixed', 'page-layouts.footer-fixed')->name('footer-fixed');

    //Project
    Route::view('list-project', 'project.projects')->name('projects');
    Route::view('create-project', 'project.projectcreate')->name('projectcreate');

    //file-manager
    Route::view('file-manager', 'file-manager')->name('file-manager');

    //kanban
    Route::view('kanban', 'kanban')->name('kanban');

    //ECommerce
    Route::view('add-product', 'e-commerce.add-product')->name('add-product');
    Route::view('products', 'e-commerce.products')->name('products');
    Route::view('all-category', 'e-commerce.category')->name('category');
    Route::view('product-page', 'e-commerce.product-page')->name('product-page');
    Route::view('list-products', 'e-commerce.list-products')->name('list-products');
    Route::view('payment-details', 'e-commerce.payment-details')->name('payment-details');
    Route::view('order-history', 'e-commerce.order-history')->name('order-history');
    Route::view('invoice-1', 'e-commerce.invoice.invoice-1')->name('invoice-1');
    Route::view('invoice-2', 'e-commerce.invoice.invoice-2')->name('invoice-2');
    Route::view('invoice-3', 'e-commerce.invoice.invoice-3')->name('invoice-3');
    Route::view('invoice-4', 'e-commerce.invoice.invoice-4')->name('invoice-4');
    Route::view('invoice-5', 'e-commerce.invoice.invoice-5')->name('invoice-5');
    Route::view('invoice-template', 'e-commerce.invoice.invoice-template')->name('invoice-template');
    Route::view('cart', 'e-commerce.cart')->name('cart');
    Route::view('list-wish', 'e-commerce.list-wish')->name('list-wish');
    Route::view('checkout', 'e-commerce.checkout')->name('checkout');
    Route::view('pricing', 'e-commerce.pricing')->name('pricing');

    //Latter Box
    Route::view('letter-box', 'letter-box')->name('letter-box');

    //Chats
    Route::view('private-chat', 'chats.private-chat')->name('private-chat');
    Route::view('group-chat', 'chats.group-chat')->name('group-chat');

    //Users
    Route::view('profile-user', 'users.user-profile')->name('user-profile');
    Route::view('edit-profile', 'users.edit-profile')->name('edit-profile');
    Route::view('cards-user', 'users.user-cards')->name('user-cards');

    //Bookmark
    Route::view('bookmark', 'bookmark')->name('bookmark');

    //Contacts
    Route::view('contacts', 'contacts')->name('contacts');

    //Task
    Route::view('task', 'task')->name('task');

    //Calendar-Basic
    Route::view('calendar-basic', 'calendar-basic')->name('calendar-basic');

    //Social-App
    Route::view('social-app', 'social-app')->name('social-app');

    //To-Do
    Route::view('to-do', 'to-do')->name('to-do');

    //Search
    Route::view('search', 'search')->name('search');

    //Forms->Form Controls
    Route::view('form-validation', 'forms.form-controls.form-validation')->name('form-validation');
    Route::view('base-input', 'forms.form-controls.base-input')->name('base-input');
    Route::view('radio-checkbox-control', 'forms.form-controls.radio-checkbox-control')->name('radio-checkbox-control');
    Route::view('input-group', 'forms.form-controls.input-group')->name('input-group');
    Route::view('input-mask', 'forms.form-controls.input-mask')->name('input-mask');
    Route::view('megaoptions', 'forms.form-controls.megaoptions')->name('megaoptions');

    //Forms->Form Widgets
    Route::view('datepicker', 'forms.form-widgets.datepicker')->name('datepicker');
    Route::view('touchspin', 'forms.form-widgets.touchspin')->name('touchspin');
    Route::view('select2', 'forms.form-widgets.select2')->name('select2');
    Route::view('switch', 'forms.form-widgets.switch')->name('switch');
    Route::view('typeahead', 'forms.form-widgets.typeahead')->name('typeahead');
    Route::view('clipboard', 'forms.form-widgets.clipboard')->name('clipboard');

    //Forms->Form Layout
    Route::view('form-wizard', 'forms.form-layout.form-wizard')->name('form-wizard');
    Route::view('two-form-wizard', 'forms.form-layout.form-wizard-two')->name('form-wizard-two');
    Route::view('two-factor', 'forms.form-layout.two-factor')->name('two-factor');

    //Tables->Bootstrap Table
    Route::view('bootstrap-basic-table', 'tables.bootstrap-table.bootstrap-basic-table')->name('bootstrap-basic-table');
    Route::view('table-components', 'tables.bootstrap-table.table-components')->name('table-components');

    //Data Tables->Datatable Basic Init
    Route::view('datatable-basic-init', 'tables.datatables.datatable-basic-init')->name('datatable-basic-init');
    Route::view('datatable-advance', 'tables.datatables.datatable-advance')->name('datatable-advance');
    Route::view('datatable-API', 'tables.datatables.datatable-API')->name('datatable-API');
    Route::view('datatable-data-source', 'tables.datatables.datatable-data-source')->name('datatable-data-source');

    //Data Tables->Datatable Ext Autofill
    Route::view('datatable-ext-autofill', 'tables.datatable-ext-autofill')->name('datatable-ext-autofill');

    //Data Tables->Jsgrid Table
    Route::view('jsgrid-table', 'tables.jsgrid-table')->name('jsgrid-table');

    //UI Kits
    Route::view('typography', 'ui-kits.typography')->name('typography');
    Route::view('avatars', 'ui-kits.avatars')->name('avatars');
    Route::view('helper-classes', 'ui-kits.helper-classes')->name('helper-classes');
    Route::view('grid', 'ui-kits.grid')->name('grid');
    Route::view('pills-tag', 'ui-kits.tag-pills')->name('tag-pills');
    Route::view('progress-bar', 'ui-kits.progress-bar')->name('progress-bar');
    Route::view('modal', 'ui-kits.modal')->name('modal');
    Route::view('alert', 'ui-kits.alert')->name('alert');
    Route::view('popover', 'ui-kits.popover')->name('popover');
    Route::view('tooltip', 'ui-kits.tooltip')->name('tooltip');
    Route::view('dropdown', 'ui-kits.dropdown')->name('dropdown');
    Route::view('according', 'ui-kits.according')->name('according');
    Route::view('tab-bootstrap', 'ui-kits.tab-bootstrap')->name('tab-bootstrap');
    Route::view('list', 'ui-kits.list')->name('list');

    //Bonus UI
    Route::view('scrollable', 'bonus-ui.scrollable')->name('scrollable');
    Route::view('tree', 'bonus-ui.tree')->name('tree');
    Route::view('toasts', 'bonus-ui.toasts')->name('toasts');
    Route::view('rating', 'bonus-ui.rating')->name('rating');
    Route::view('dropzone', 'bonus-ui.dropzone')->name('dropzone');
    Route::view('tour', 'bonus-ui.tour')->name('tour');
    Route::view('sweet-alert2', 'bonus-ui.sweet-alert2')->name('sweet-alert2');
    Route::view('animated-modal', 'bonus-ui.modal-animated')->name('modal-animated');
    Route::view('owl-carousel', 'bonus-ui.owl-carousel')->name('owl-carousel');
    Route::view('ribbons', 'bonus-ui.ribbons')->name('ribbons');
    Route::view('pagination', 'bonus-ui.pagination')->name('pagination');
    Route::view('breadcrumb', 'bonus-ui.breadcrumb')->name('breadcrumb');
    Route::view('range-slider', 'bonus-ui.range-slider')->name('range-slider');
    Route::view('image-cropper', 'bonus-ui.image-cropper')->name('image-cropper');
    Route::view('basic-card', 'bonus-ui.basic-card')->name('basic-card');
    Route::view('creative-card', 'bonus-ui.creative-card')->name('creative-card');
    Route::view('dragable-card', 'bonus-ui.dragable-card')->name('dragable-card');
    Route::view('timeline-v-1', 'bonus-ui.timeline-v-1')->name('timeline-v-1');

    //Animation
    Route::view('animate', 'animation.animate')->name('animate');
    Route::view('scroll-reval', 'animation.scroll-reval')->name('scroll-reval');
    Route::view('AOS', 'animation.AOS')->name('AOS');
    Route::view('tilt', 'animation.tilt')->name('tilt');
    Route::view('wow', 'animation.wow')->name('wow');

    //Icons
    Route::view('flag-icon', 'icons.flag-icon')->name('flag-icon');
    Route::view('font-awesome', 'icons.font-awesome')->name('font-awesome');
    Route::view('ico-icon', 'icons.ico-icon')->name('ico-icon');
    Route::view('themify-icon', 'icons.themify-icon')->name('themify-icon');
    Route::view('feather-icon', 'icons.feather-icon')->name('feather-icon');
    Route::view('whether-icon', 'icons.whether-icon')->name('whether-icon');

    //Buttons
    Route::view('buttons', 'buttons')->name('buttons');

    //Charts
    Route::view('echarts', 'charts.echarts')->name('echarts');
    Route::view('chart-apex', 'charts.chart-apex')->name('chart-apex');
    Route::view('chart-google', 'charts.chart-google')->name('chart-google');
    Route::view('chart-sparkline', 'charts.chart-sparkline')->name('chart-sparkline');
    Route::view('chart-flot', 'charts.chart-flot')->name('chart-flot');
    Route::view('chart-knob', 'charts.chart-knob')->name('chart-knob');
    Route::view('chart-morris', 'charts.chart-morris')->name('chart-morris');
    Route::view('chartjs', 'charts.chartjs')->name('chartjs');
    Route::view('chartist', 'charts.chartist')->name('chartist');
    Route::view('chart-peity', 'charts.chart-peity')->name('chart-peity');

    //Sample Page
    Route::view('sample-page', 'sample-page')->name('sample-page');

    //Internationalization
    Route::view('internationalization', 'internationalization')->name('internationalization');

    //Others->Error Page
    Route::view('error-400', 'others.error-page.error-400')->name('error-400');
    Route::view('error-401', 'others.error-page.error-401')->name('error-401');
    Route::view('error-403', 'others.error-page.error-403')->name('error-403');
    Route::view('error-404', 'others.error-page.error-404')->name('error-404');
    Route::view('error-500', 'others.error-page.error-500')->name('error-500');
    Route::view('error-503', 'others.error-page.error-503')->name('error-503');

    //Others->Authentication
    // Route::view('login', 'others.authentication.login')->name('login');
    Route::view('login_one', 'others.authentication.login_one')->name('login_one');
    Route::view('login_two', 'others.authentication.login_two')->name('login_two');
    Route::view('login-bs-validation', 'others.authentication.login-bs-validation')->name('login-bs-validation');
    Route::view('login-bs-tt-validation', 'others.authentication.login-bs-tt-validation')->name('login-bs-tt-validation');
    Route::view('login-sa-validation', 'others.authentication.login-sa-validation')->name('login-sa-validation');
    Route::view('sign-up', 'others.authentication.sign-up')->name('sign-up');
    Route::view('sign-up-one', 'others.authentication.sign-up-one')->name('sign-up-one');
    Route::view('sign-up-two', 'others.authentication.sign-up-two')->name('sign-up-two');
    Route::view('sign-up-wizard', 'others.authentication.sign-up-wizard')->name('sign-up-wizard');
    Route::view('unlock', 'others.authentication.unlock')->name('unlock');
    Route::view('forget-password', 'others.authentication.forget-password')->name('forget-password');
    Route::view('reset-password', 'others.authentication.reset-password')->name('reset-password');
    Route::view('maintenance', 'others.authentication.maintenance')->name('maintenance');

    //Others->Coming Soon
    Route::view('comingsoon', 'others.coming-soon.comingsoon')->name('comingsoon');
    Route::view('comingsoon-bg-video', 'others.coming-soon.comingsoon-bg-video')->name('comingsoon-bg-video');
    Route::view('comingsoon-bg-img', 'others.coming-soon.comingsoon-bg-img')->name('comingsoon-bg-img');

    //Others->Email templates
    Route::view('basic-template', 'others.email-templates.basic-template')->name('basic-template');
    Route::view('email-header', 'others.email-templates.email-header')->name('email-header');
    Route::view('template-email', 'others.email-templates.template-email')->name('template-email');
    Route::view('template-email-2', 'others.email-templates.template-email-2')->name('template-email-2');
    Route::view('ecommerce-templates', 'others.email-templates.ecommerce-templates')->name('ecommerce-templates');
    Route::view('email-order-success', 'others.email-templates.email-order-success')->name('email-order-success');

    //Gallery->Gallery Grid
    Route::view('gallery', 'gallery.gallery')->name('gallery');
    Route::view('gallery-with-description', 'gallery.gallery-with-description')->name('gallery-with-description');
    Route::view('gallery-masonry', 'gallery.gallery-masonry')->name('gallery-masonry');
    Route::view('masonry-gallery-with-disc', 'gallery.masonry-gallery-with-disc')->name('masonry-gallery-with-disc');
    Route::view('gallery-hover', 'gallery.gallery-hover')->name('gallery-hover');

    //Blogs
    Route::view('all-blog', 'blog.blog')->name('blog');
    Route::view('single-blog', 'blog.blog-single')->name('blog-single');
    Route::view('add-post', 'blog.add-post')->name('add-post');

    //Faq
    Route::view('faq', 'faq')->name('faq');

    //Job Search->Cards view
    Route::view('job-cards-view', 'job-search.job-cards-view')->name('job-cards-view');
    Route::view('job-list-view', 'job-search.job-list-view')->name('job-list-view');
    Route::view('job-details', 'job-search.job-details')->name('job-details');
    Route::view('job-apply', 'job-search.job-apply')->name('job-apply');

    //learning
    Route::view('learning-list-view', 'learning.learning-list-view')->name('learning-list-view');
    Route::view('learning-detailed', 'learning.learning-detailed')->name('learning-detailed');

    //maps
    Route::view('map-js', 'maps.map-js')->name('map-js');
    Route::view('vector-map', 'maps.vector-map')->name('vector-map');

    //editors
    Route::view('quill-editor', 'editors.quill-editor')->name('quill-editor');
    Route::view('ace-code-editor', 'editors.ace-code-editor')->name('ace-code-editor');

    //knowledgebase
    Route::view('knowledgebase', 'knowledgebase')->name('knowledgebase');

    //support_ticket
    Route::view('support-ticket', 'support-ticket')->name('support-ticket');

});
