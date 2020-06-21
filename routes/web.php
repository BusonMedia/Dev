<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function(){
  Route::get('giris','Back\AuthController@login')->name('login');
  Route::post('giris','Back\AuthController@loginPost')->name('login.post');
});
Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function(){
  Route::get('panel','Back\Dashboard@index')->name('dashboard');

    //MAKALE ROUTE'S
  Route::get('makaleler.silinenler','Back\ArticleController@trashed')->name('trashed.article');
  Route::resource('makaleler','Back\ArticleController');
  Route::get('/switch','Back\ArticleController@switch')->name('switch');
  Route::get('/deletearticle/{id}','Back\ArticleController@delete')->name('delete.article');
  Route::get('/harddeletearticle/{id}','Back\ArticleController@hardDelete')->name('hard.delete.article');
  Route::get('/recoverarticle/{id}','Back\ArticleController@recover')->name('recover.article');

  //Page ROUTE's
    Route::resource('sayfalar','Back\PageController');
    Route::get('/switchpage','Back\PageController@switch')->name('switch.page');
    Route::get('/deletepage/{id}','Back\PageController@delete')->name('delete.page');


    Route::resource('settings','Back\SettingsController');
    Route::post('settings/update','Back\SettingsController@update')->name('settings.update');

    Route::resource('profile','Back\ProfileController');
    Route::post('profile/update','Back\ProfileController@update')->name('profile.update');


    Route::resource('content','Back\ContentController');
    Route::post('content/update','Back\ContentController@update')->name('content.update');
    Route::post('content/store','Back\ContentController@store')->name('content.store');
    Route::get('/switchcontent','Back\ContentController@switch')->name('switch.content');


    //Language ROUTE's
    Route::resource('language','Back\MultilanguageController');
    Route::get('/switchpage','Back\PageController@switch')->name('switch.page');
    Route::get('/deletepage/{id}','Back\PageController@delete')->name('delete.page');


    //Language ROUTE's
    Route::resource('support','Back\SupportController');

    Route::resource('demand','Back\DemandController');
    Route::get('/switchdemand','Back\DemandController@switch')->name('switch.demand');


    Route::resource('logs','Back\LogController');





    //KATEGORİ ROUTE's
  Route::get('/kategoriler','Back\CategoryController@index')->name('category.index');
  Route::post('/kategoriler/create','Back\CategoryController@create')->name('category.create');
  Route::post('/kategoriler/update','Back\CategoryController@update')->name('category.update');
  Route::post('/kategoriler/delete','Back\CategoryController@delete')->name('category.delete');
  Route::get('/kategori/status','Back\CategoryController@switch')->name('category.switch');
  Route::get('/kategori/getData','Back\CategoryController@getData')->name('category.getdata');

  Route::get('cikis','Back\AuthController@logout')->name('logout');
});

/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
*/


Route::get('/','Front\Homepage@index')->name('homepage');
Route::get('sayfa','Front\Homepage@article');
Route::get('/iletisim','Front\Homepage@contact')->name('contact');
Route::get('/blog','Front\Homepage@article')->name('blog');
Route::get('/changeLanguage/{locate}','Front\Homepage@setLanguageSession')->name('changeLanguage');
Route::post('/iletisim','Front\Homepage@contactpost')->name('contact.post');
Route::get('/kategori/{category}','Front\Homepage@category')->name('category');
Route::get('/{category}/{slug}','Front\Homepage@single')->name('single');
Route::get('/{sayfa}','Front\Homepage@page')->name('page');
