<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
});



Route::get('/project-details', function () {
    return view('projectDetails');
});


Route::get('/project-list', function () {
    return view('projectList');
});


Route::get('/news-details', function () {
    return view('newsDetails');
});

Route::get('/news-list', function () {
    return view('newsList');
});

Route::get('/phone-directory', function () {
    return view('phoneDirectory');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/gallary', function () {
    return view('gallary');
});


Route::get('/gallary-details', function () {
    return view('gallarydetails');
});


Route::get('/contact-us', function () {
    return view('contact');
});


Route::get('/customer-register', function () {
    return view('register');
});

//Route::get('/dashboard', 'Admin\Dashboard_cont@index')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/logout', 'Admin\Dashboard_cont@index');


Route::group(['middleware' => 'role:admin'], function() {
    /*Route::get('/dashboard', function() {
        return 'Welcome Admin';
    });*/

    Route::get('/admin', 'Admin\Dashboard_cont@index');
    Route::get('/admin/news', 'Admin\News_cont@index');
    Route::get('admin/news/create', 'Admin\News_cont@create')->name('news.create');
    Route::post('admin/news/create', 'Admin\News_cont@store')->name('news.store');
    Route::get('admin/news/edit/{id}', 'Admin\News_cont@edit')->name('news.edit');
    Route::post('admin/news/update', 'Admin\News_cont@update')->name('news.update');
    Route::get('admin/news/update', 'Admin\News_cont@update')->name('news.update2');
    Route::get('admin/news/delete/{id}', 'Admin\News_cont@delete')->name('news.delete');


    Route::get('/admin/content/category', 'Admin\category_cont@index');
    Route::get('admin/content/category/create', 'Admin\category_cont@create')->name('category.create');
    Route::post('admin/content/category/create', 'Admin\category_cont@store')->name('category.store');
    Route::get('admin/content/category/edit/{id}', 'Admin\category_cont@edit')->name('category.edit');
    Route::post('admin/content/category/update', 'Admin\category_cont@update')->name('category.update');
    Route::get('admin/content/category/update', 'Admin\category_cont@update')->name('category.update2');
    Route::get('admin/content/category/delete/{id}', 'Admin\category_cont@delete')->name('category.delete');

    Route::get('/admin/content/page', 'Admin\page_cont@index');
    Route::get('admin/content/page/create', 'Admin\page_cont@create')->name('page.create');
    Route::post('admin/content/page/create', 'Admin\page_cont@store')->name('page.store');
    Route::get('admin/content/page/edit/{id}', 'Admin\page_cont@edit')->name('page.edit');
    Route::post('admin/content/page/update', 'Admin\page_cont@update')->name('page.update');
    Route::get('admin/content/page/update', 'Admin\page_cont@update')->name('page.update2');
    Route::get('admin/content/page/delete/{id}', 'Admin\page_cont@delete')->name('page.delete');

    Route::get('/admin/banners', 'Admin\banner_cont@index');
    Route::get('admin/banners/create', 'Admin\banner_cont@create')->name('banners.create');
    Route::post('admin/banners/create', 'Admin\banner_cont@store')->name('banners.store');
    Route::get('admin/banners/edit/{id}', 'Admin\banner_cont@edit')->name('banners.edit');
    Route::post('admin/banners/update', 'Admin\banner_cont@update')->name('banners.update');
    Route::get('admin/banners/update', 'Admin\banner_cont@update')->name('banners.update2');
    Route::get('admin/banners/delete/{id}', 'Admin\banner_cont@delete')->name('banners.delete');

    Route::get('/admin/banners/category', 'Admin\banner_category_cont@index');
    Route::get('admin/banners/category/create', 'Admin\banner_category_cont@create')->name('bannerscategory.create');
    Route::post('admin/banners/category/create', 'Admin\banner_category_cont@store')->name('bannerscategory.store');
    Route::get('admin/banners/category/edit/{id}', 'Admin\banner_category_cont@edit')->name('bannerscategory.edit');
    Route::post('admin/banners/category/update', 'Admin\banner_category_cont@update')->name('bannerscategory.update');
    Route::get('admin/banners/category/update', 'Admin\banner_category_cont@update')->name('bannerscategory.update2');
    Route::get('admin/banners/category/delete/{id}', 'Admin\banner_category_cont@delete')->name('bannerscategory.delete');

    Route::get('/admin/settings', 'Admin\setting_cont@index');
    Route::get('admin/settings/create', 'Admin\setting_cont@create')->name('settings.create');
    Route::post('admin/settings/create', 'Admin\setting_cont@store')->name('settings.store');
    Route::get('admin/settings/edit/{id}', 'Admin\setting_cont@edit')->name('settings.edit');
    Route::post('admin/settings/update', 'Admin\setting_cont@update')->name('settings.update');
    Route::get('admin/settings/update', 'Admin\setting_cont@update')->name('settings.update2');
    Route::get('admin/settings/delete/{id}', 'Admin\setting_cont@delete')->name('settings.delete');

    Route::get('/admin/contact', 'Admin\contact_cont@index');
    Route::get('admin/contact/create', 'Admin\contact_cont@create')->name('contact.create');
    Route::post('admin/contact/create', 'Admin\contact_cont@store')->name('contact.store');
    Route::get('admin/contact/edit/{id}', 'Admin\contact_cont@edit')->name('contact.edit');
    Route::post('admin/contact/update', 'Admin\contact_cont@update')->name('contact.update');
    Route::get('admin/contact/update', 'Admin\contact_cont@update')->name('contact.update2');
    Route::get('admin/contact/delete/{id}', 'Admin\contact_cont@delete')->name('contact.delete');

    Route::get('/admin/album', 'Admin\album_cont@index');
    Route::get('admin/album/create', 'Admin\album_cont@create')->name('album.create');
    Route::post('admin/album/create', 'Admin\album_cont@store')->name('album.store');
    Route::get('admin/album/edit/{id}', 'Admin\album_cont@edit')->name('album.edit');
    Route::post('admin/album/update', 'Admin\album_cont@update')->name('album.update');
    Route::get('admin/album/update', 'Admin\album_cont@update')->name('album.update2');
    Route::get('admin/album/delete/{id}', 'Admin\album_cont@delete')->name('album.delete');

    Route::get('/admin/album/photos', 'Admin\album_photo_cont@index');
    Route::get('admin/album/photos/create', 'Admin\album_photo_cont@create')->name('albumphotos.create');
    Route::post('admin/album/photos/create', 'Admin\album_photo_cont@store')->name('albumphotos.store');
    Route::get('admin/album/photos/edit/{id}', 'Admin\album_photo_cont@edit')->name('albumphotos.edit');
    Route::post('admin/album/photos/update', 'Admin\album_photo_cont@update')->name('albumphotos.update');
    Route::get('admin/album/photos/update', 'Admin\album_photo_cont@update')->name('albumphotos.update2');
    Route::get('admin/album/photos/delete/{id}', 'Admin\album_photo_cont@delete')->name('albumphotos.delete');

    Route::get('/admin/layouts', 'Admin\layout_cont@index');
    Route::get('admin/layouts/create', 'Admin\layout_cont@create')->name('layouts.create');
    Route::post('admin/layouts/create', 'Admin\layout_cont@store')->name('layouts.store');
    Route::get('admin/layouts/edit/{id}', 'Admin\layout_cont@edit')->name('layouts.edit');
    Route::post('admin/layouts/update', 'Admin\layout_cont@update')->name('layouts.update');
    Route::get('admin/layouts/update', 'Admin\layout_cont@update')->name('layouts.update2');
    Route::get('admin/layouts/delete/{id}', 'Admin\layout_cont@delete')->name('layouts.delete');

    Route::get('/admin/layouts/footer', 'Admin\footer_cont@index');
    Route::get('admin/layouts/footer/create', 'Admin\footer_cont@create')->name('layoutsfooter.create');
    Route::post('admin/layouts/footer/create', 'Admin\footer_cont@store')->name('layoutsfooter.store');
    Route::get('admin/layouts/footer/edit/{id}', 'Admin\footer_cont@edit')->name('layoutsfooter.edit');
    Route::post('admin/layouts/footer/update', 'Admin\footer_cont@update')->name('layoutsfooter.update');
    Route::get('admin/layouts/footer/update', 'Admin\footer_cont@update')->name('layoutsfooter.update2');
    Route::get('admin/layouts/footer/delete/{id}', 'Admin\footer_cont@delete')->name('layoutsfooter.delete');

    // for another time

    Route::get('/admin/content/custom_fields', 'Admin\customfields_cont@index');
    Route::get('admin/content/custom_fields/create', 'Admin\customfields_cont@create')->name('customfields.create');
    Route::post('admin/content/custom_fields/create', 'Admin\customfields_cont@store')->name('customfields.store');
    Route::get('admin/content/custom_fields/edit/{id}', 'Admin\customfields_cont@edit')->name('customfields.edit');
    Route::post('admin/content/custom_fields/update', 'Admin\customfields_cont@update')->name('customfields.update');
    Route::get('admin/content/custom_fields/update', 'Admin\customfields_cont@update')->name('customfields.update2');
    Route::get('admin/content/custom_fields/delete/{id}', 'Admin\customfields_cont@delete')->name('customfields.delete');

    Route::get('/admin/content/custom_field/values', 'Admin\customfieldvalues_cont@index');
    Route::get('admin/content/custom_field/values/create', 'Admin\customfieldvalues_cont@create')->name('customfieldvalues.create');
    Route::post('admin/content/custom_field/values/create', 'Admin\customfieldvalues_cont@store')->name('customfieldvalues.store');
    Route::get('admin/content/custom_field/values/edit/{id}', 'Admin\customfieldvalues_cont@edit')->name('customfieldvalues.edit');
    Route::post('admin/content/custom_field/values/update', 'Admin\customfieldvalues_cont@update')->name('customfieldvalues.update');
    Route::get('admin/content/custom_field/values/update', 'Admin\customfieldvalues_cont@update')->name('customfieldvalues.update2');
    Route::get('admin/content/custom_field/values/delete/{id}', 'Admin\customfieldvalues_cont@delete')->name('customfieldvalues.delete');

    Route::get('/admin/events', 'Admin\event_cont@index');
    Route::get('admin/events/create', 'Admin\event_cont@create')->name('events.create');
    Route::post('admin/events/create', 'Admin\event_cont@store')->name('events.store');
    Route::get('admin/events/edit/{id}', 'Admin\event_cont@edit')->name('events.edit');
    Route::post('admin/events/update', 'Admin\event_cont@update')->name('events.update');
    Route::get('admin/events/update', 'Admin\event_cont@update')->name('events.update2');
    Route::get('admin/events/delete/{id}', 'Admin\event_cont@delete')->name('events.delete');

    Route::get('/admin/staff', 'Admin\staff_cont@index');
    Route::get('admin/staff/create', 'Admin\staff_cont@create')->name('staff.create');
    Route::post('admin/staff/create', 'Admin\staff_cont@store')->name('staff.store');
    Route::get('admin/staff/edit/{id}', 'Admin\staff_cont@edit')->name('staff.edit');
    Route::post('admin/staff/update', 'Admin\staff_cont@update')->name('staff.update');
    Route::get('admin/staff/update', 'Admin\staff_cont@update')->name('staff.update2');
    Route::get('admin/staff/delete/{id}', 'Admin\staff_cont@delete')->name('staff.delete');

    Route::get('/admin/social', 'Admin\sociallinks_cont@index');
    Route::get('admin/social/create', 'Admin\sociallinks_cont@create')->name('social.create');
    Route::post('admin/social/create', 'Admin\sociallinks_cont@store')->name('social.store');
    Route::get('admin/social/edit/{id}', 'Admin\sociallinks_cont@edit')->name('social.edit');
    Route::post('admin/social/update', 'Admin\sociallinks_cont@update')->name('social.update');
    Route::get('admin/social/update', 'Admin\sociallinks_cont@update')->name('social.update2');
    Route::get('admin/social/delete/{id}', 'Admin\sociallinks_cont@delete')->name('social.delete');


    Route::get('/admin/users', 'Admin\profile_cont@index');
    Route::get('admin/users/create', 'Admin\profile_cont@create')->name('users.create');
    Route::post('admin/users/create', 'Admin\profile_cont@store')->name('users.store');
    Route::get('admin/users/edit/{id}', 'Admin\profile_cont@edit')->name('users.edit');
    Route::post('admin/users/update', 'Admin\profile_cont@update')->name('users.update');
    Route::get('admin/users/update', 'Admin\profile_cont@update')->name('users.update2');
    Route::get('admin/users/delete/{id}', 'Admin\profile_cont@delete')->name('users.delete');

  //  Route::get('/admin/article', 'Admin\ArticleCrudController');
  //  Route::get('/admin/category', 'Admin\CategoryCrudController');
  //  Route::get('/admin/tag', 'Admin\TagCrudController');

});
