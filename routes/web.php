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



Route::get('/', [
    'uses' => 'FrontController@getHome',
    'as'   => 'home'
])->name('home');

Route::get('about-us', function(){
    return view('frontend.about-us');
})->name('about');

Route::get('messages', function(){
    return view('frontend.messages');
})->name('messages');

Route::get('clients', function(){
    return view('frontend.clients');
})->name('clients');

Route::get('contacts', function(){
    return view('frontend.contacts');
})->name('contacts');

Route::get('demands', function(){
    return view('frontend.demands');
})->name('demands');

Route::get('documentation', function(){
    return view('frontend.documentation');
})->name('documentation');

Route::get('download', function(){
    return view('frontend.download');
})->name('download');

Route::get('hot-jobs', function(){
    return view('frontend.hotjobs');
})->name('hotjobs');

Route::get('jobs-categories', function(){
    return view('frontend.jobscategories');
})->name('jobscategories');

Route::get('nepal', function(){
    return view('frontend.nepal');
})->name('nepal');

Route::get('nepalese-workers', function(){
    return view('frontend.nepaleseworkers');
})->name('nepaleseworkers');

Route::get('selection', function(){
    return view('frontend.selection');
})->name('selection');

Route::get('services', function(){
    return view('frontend.services');
})->name('services');

Route::get('terms', function(){
    return view('frontend.licenses');
})->name('licenses');


Route::get('login', [
    'uses' => 'UserController@getLogin',
    'as'   => 'admin.login.get'
]);

Route::post('login', [
    'uses' => 'UserController@postLogin',
    'as'  => 'admin.login.post'
]);

//---------------------------------ADMIN MIDDLEWARE------------------------------------
//-------------------------------------------------------------------------------------

Route::group(['prefix' => 'admin',
    'middleware' => 'auth'], function() {


    Route::get('/', function () {
        return view('backend.dashboard');
    })->name('backend.dashboard');


    Route::get('notification', function () {
        return view('backend.notification');
    })->name('backend.notification');

//----------------------------------pages route---------------------------------------
    Route::get('pages', [
        'uses' => 'PageController@getPage',
        'as' => 'backend.pages'
    ]);

    Route::get('pages/create', [
        'uses' => 'PageController@getCreatePage',
        'as' => 'backend.pages.get.create'
    ]);

    Route::post('pages', [
        'uses' => 'PageController@postPage',
        'as' => 'backend.pages.post.create'
    ]);

    Route::get('pages/edit/{page_id}', [
        'uses' => 'PageController@getUpdate',
        'as' => 'backend.pages.get.update'
    ]);

    Route::post('pages/update', [
        'uses' => 'PageController@postUpdate',
        'as' => 'backend.pages.post.update'
    ]);

    Route::get('pages/delete/{page_id}', [
        'uses' => 'PageController@getDelete',
        'as' => 'backend.pages.delete'
    ]);

    Route::get('pages/single/{page_slug}', [
        'uses' => 'PageController@getSinglePage',
        'as' => 'backend.pages.single.page'
    ]);

    Route::get('page/trash/{page_id}', [
        'uses' => 'PageController@getTrash',
        'as' => 'backend.pages.trash'
    ]);

    Route::get('pages/trash', [
        'uses' => 'PageController@DeleteForever',
        'as' => 'backend.pages.delete.page'
    ]);

    Route::get('pages/restore/{page_id}', [
        'uses' => 'PageController@Restore',
        'as' => 'backend.pages.restore'
    ]);

//----------------------end of pages route---------------------------------------


//--------------------------banner route----------------------------------
    Route::get('banner', [
        'uses' => 'BannerController@getBanner',
        'as' => 'backend.banner'
    ]);

    Route::get('banner/create', [
        'uses' => 'BannerController@getCreateBanner',
        'as' => 'backend.banner.get.create'
    ]);

    Route::post('banner/create', [
        'uses' => 'BannerController@postCreateBanner',
        'as' => 'backend.banner.post.create'
    ]);

    Route::get('banner/edit/{banner_id}', [
        'uses' => 'BannerController@getUpdate',
        'as' => 'backend.banner.get.update'
    ]);

    Route::post('banner/update', [
        'uses' => 'BannerController@postUpdate',
        'as' => 'backend.banner.post.update'
    ]);

    Route::get('banner/delete/{banner_id}', [
        'uses' => 'BannerController@getDelete',
        'as' => 'backend.banner.delete'
    ]);

    Route::get('banner/single/{banner_slug}', [
        'uses' => 'BannerController@getSingleBanner',
        'as' => 'backend.banner.single.banner'
    ]);

    Route::get('banner/trash/{banner_id}', [
        'uses' => 'BannerController@getTrash',
        'as' => 'backend.banner.trash'
    ]);

    Route::get('banner/trash', [
        'uses' => 'BannerController@DeleteForever',
        'as' => 'backend.banner.delete.page'
    ]);

    Route::get('banner/restore/{banner_id}', [
        'uses' => 'BannerController@Restore',
        'as' => 'backend.banner.restore'
    ]);

    Route::get('banner/{filename}', [
        'uses' => 'BannerController@getImage',
        'as' => 'backend.banner.image'
    ]);

//----------------------end of banner route---------------------

//--------------------------job route----------------------------------
    Route::get('job', [
        'uses' => 'JobsController@getJob',
        'as' => 'backend.job'
    ]);

    Route::get('job/create', [
        'uses' => 'JobsController@getCreateJob',
        'as' => 'backend.job.get.create'
    ]);

    Route::post('job/create', [
        'uses' => 'JobsController@postCreateJob',
        'as' => 'backend.job.post.create'
    ]);

    Route::get('job/edit/{job_id}', [
        'uses' => 'JobsController@getUpdate',
        'as' => 'backend.job.get.update'
    ]);

    Route::post('job/update', [
        'uses' => 'JobsController@postUpdate',
        'as' => 'backend.job.post.update'
    ]);

    Route::get('job/delete/{job_id}', [
        'uses' => 'JobsController@getDelete',
        'as' => 'backend.job.delete'
    ]);

    Route::get('job/single/{job_slug}', [
        'uses' => 'JobsController@getSingleJob',
        'as' => 'backend.job.single.job'
    ]);

    Route::get('job/trash/{job_id}', [
        'uses' => 'JobsController@getTrash',
        'as' => 'backend.job.trash'
    ]);

    Route::get('job/trash', [
        'uses' => 'JobsController@DeleteForever',
        'as' => 'backend.job.delete.page'
    ]);

    Route::get('job/restore/{job_id}', [
        'uses' => 'JobsController@Restore',
        'as' => 'backend.job.restore'
    ]);

    Route::get('job/{filename}', [
        'uses' => 'JobsController@getImage',
        'as' => 'backend.job.image'
    ]);

//----------------------end of job route---------------------

//--------------------------client route----------------------------------
    Route::get('client', [
        'uses' => 'ClientsController@getClient',
        'as' => 'backend.client'
    ]);

    Route::get('client/create', [
        'uses' => 'ClientsController@getCreateClient',
        'as' => 'backend.client.get.create'
    ]);

    Route::post('client/create', [
        'uses' => 'ClientsController@postCreateClient',
        'as' => 'backend.client.post.create'
    ]);

    Route::get('client/edit/{client_id}', [
        'uses' => 'ClientsController@getUpdate',
        'as' => 'backend.client.get.update'
    ]);

    Route::post('client/update', [
        'uses' => 'ClientsController@postUpdate',
        'as' => 'backend.client.post.update'
    ]);

    Route::get('client/delete/{client_id}', [
        'uses' => 'ClientsController@getDelete',
        'as' => 'backend.client.delete'
    ]);

    Route::get('client/single/{client_slug}', [
        'uses' => 'ClientsController@getSingleClient',
        'as' => 'backend.client.single.client'
    ]);

    Route::get('client/trash/{client_id}', [
        'uses' => 'ClientsController@getTrash',
        'as' => 'backend.client.trash'
    ]);

    Route::get('client/trash', [
        'uses' => 'ClientsController@DeleteForever',
        'as' => 'backend.client.delete.page'
    ]);

    Route::get('client/restore/{client_id}', [
        'uses' => 'ClientsController@Restore',
        'as' => 'backend.client.restore'
    ]);

    Route::get('client/{filename}', [
        'uses' => 'ClientsController@getImage',
        'as' => 'backend.client.image'
    ]);

//----------------------end of client route---------------------

//-----------------------Review route---------------------------

    Route::get('review', [
        'uses' => 'ReviewsController@getReview',
        'as' => 'backend.review'
    ]);

    Route::get('review/create', [
        'uses' => 'ReviewsController@getCreateReview',
        'as' => 'backend.review.get.create'
    ]);

    Route::post('review/create', [
        'uses' => 'ReviewsController@postCreateReview',
        'as' => 'backend.review.post.create'
    ]);

    Route::get('review/edit/{review_id}', [
        'uses' => 'ReviewsController@getUpdate',
        'as' => 'backend.review.get.update'
    ]);

    Route::post('review/update', [
        'uses' => 'ReviewsController@postUpdate',
        'as' => 'backend.review.post.update'
    ]);

    Route::get('review/delete/{review_id}', [
        'uses' => 'ReviewsController@getDelete',
        'as' => 'backend.review.delete'
    ]);

    Route::get('review/single/{category_slug}', [
        'uses' => 'ReviewsController@getSingleReview',
        'as' => 'backend.review.single.review'
    ]);

    Route::get('review/trash/{review_id}', [
        'uses' => 'ReviewsController@getTrash',
        'as' => 'backend.review.trash'
    ]);

    Route::get('review/trash', [
        'uses' => 'ReviewsController@DeleteForever',
        'as' => 'backend.review.delete.page'
    ]);

    Route::get('review/restore/{review_id}', [
        'uses' => 'ReviewsController@Restore',
        'as' => 'backend.review.restore'
    ]);

//-------------------------end of review route---------------------------------

});

//--------------------------application route----------------------------------
Route::get('application', [
    'uses' => 'ApplicationsController@getApplication',
    'as' => 'backend.application'
]);

Route::get('application/create', [
    'uses' => 'ApplicationsController@getCreateApplication',
    'as' => 'backend.application.get.create'
]);

Route::post('application/create', [
    'uses' => 'ApplicationsController@postCreateApplication',
    'as' => 'backend.application.post.create'
]);

Route::get('application/edit/{application_id}', [
    'uses' => 'ApplicationsController@getUpdate',
    'as' => 'backend.application.get.update'
]);

Route::post('application/update', [
    'uses' => 'ApplicationsController@postUpdate',
    'as' => 'backend.application.post.update'
]);

Route::get('application/delete/{application_id}', [
    'uses' => 'ApplicationsController@getDelete',
    'as' => 'backend.application.delete'
]);

Route::get('application/single/{application_slug}', [
    'uses' => 'ApplicationsController@getSingleApplication',
    'as' => 'backend.application.single.application'
]);

Route::get('application/trash/{application_id}', [
    'uses' => 'ApplicationsController@getTrash',
    'as' => 'backend.application.trash'
]);

Route::get('application/trash', [
    'uses' => 'ApplicationsController@DeleteForever',
    'as' => 'backend.application.delete.page'
]);

Route::get('application/restore/{application_id}', [
    'uses' => 'ApplicationsController@Restore',
    'as' => 'backend.application.restore'
]);

Route::get('application/{filename}', [
    'uses' => 'ApplicationsController@getImage',
    'as' => 'backend.application.image'
]);

//----------------------end of job route---------------------
































