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
]);

Route::post('message', [
    'uses' => 'FrontController@postMessage',
    'as'   => 'message'
]);

Route::post('form', [
    'uses' => 'FrontController@postForm',
    'as'   => 'form'
]);

Route::get('/findDemandName','FrontController@findDemandName');


Route::get('about-us', [
    'uses' => 'FrontController@getAbout',
    'as'   => 'about-us'
]);

Route::get('messages', [
   'uses' => 'FrontController@getMessages',
    'as'  => 'messages'
]);

Route::get('documentation', [
    'uses' => 'FrontController@getDocumentation',
    'as'  => 'documentation'
]);

Route::get('selection-deployment', [
    'uses' => 'FrontController@getSelection',
    'as'  => 'selection'
]);

Route::get('terms-conditions', [
    'uses' => 'FrontController@getTerms',
    'as'  => 'terms'
]);

Route::get('apply-online/{company_id?}', [
    'uses' => 'FrontController@getForm',
    'as'   => 'apply-online'
]);


Route::get('nepalese-workers', [
    'uses' => 'FrontController@getNepalese_Workers',
    'as'   => 'nepalese-workers'
]);

Route::get('services', function(){
    return view('frontend.services');
})->name('services');

Route::get('licenses', function(){
    return view('frontend.licenses');
})->name('licenses');

Route::get('clients', [
    'uses' => 'FrontController@getClients',
    'as'   => 'clients'
]);

Route::get('jobs-categories', [
    'uses' => 'FrontController@getJobs_Categories',
    'as'   => 'jobs-categories'
]);

Route::get('contacts', function(){
    return view('frontend.contacts');
})->name('contacts');

Route::get('demands', [
    'uses' => 'FrontController@getDemands',
    'as' => 'demands'
]);

Route::get('demands/{demand_slug}', [
    'uses' => 'FrontController@getSingle',
    'as'   => 'single'
]);

Route::get('download-application', [
    'uses' => "FrontController@getApplication",
    'as'   => 'download'
]);

Route::get('hot-jobs', [
    'uses' => 'FrontController@getJobs',
    'as'   => 'hot-jobs'
]);

Route::get('nepal', [
    'uses' => 'FrontController@getNepal',
    'as'   => 'nepal'
]);

Route::get('login', [
    'uses' => 'UserController@getLogin',
    'as'   => 'admin.login.get'
]);

Route::post('login', [
    'uses' => 'UserController@postLogin',
    'as'  => 'admin.login.post'
]);
//------------------------------------------------------------------------------------
//------------------------------END OF FRONTEND ROUTE---------------------------------


//---------------------------------ADMIN MIDDLEWARE------------------------------------
//-------------------------------------------------------------------------------------

Route::group(['prefix' => 'admin',
    'middleware' => 'auth'], function() {


    Route::get('/change-password', function () {
        return view('backend.change_password');
    })->name('backend.changepassword');

    Route::post('/change-password/update', [
        'uses' => 'UserController@changePassword',
        'as'   => 'backend.update.password'
    ]);

//----------------------------------pages route---------------------------------------
    Route::get('/', [
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

//----------------------end of application route---------------------

//--------------------------application route----------------------------------
    Route::get('company', [
        'uses' => 'CompaniesController@getCompany',
        'as' => 'backend.company'
    ]);

    Route::get('company/create', [
        'uses' => 'CompaniesController@getCreateCompany',
        'as' => 'backend.company.get.create'
    ]);

    Route::post('company/create', [
        'uses' => 'CompaniesController@postCreateCompany',
        'as' => 'backend.company.post.create'
    ]);

    Route::get('company/edit/{company_id}', [
        'uses' => 'CompaniesController@getUpdate',
        'as' => 'backend.company.get.update'
    ]);

    Route::post('company/update', [
        'uses' => 'CompaniesController@postUpdate',
        'as' => 'backend.company.post.update'
    ]);

    Route::get('company/delete/{company_id}', [
        'uses' => 'CompaniesController@getDelete',
        'as' => 'backend.company.delete'
    ]);

    Route::get('company/single/{company_slug}', [
        'uses' => 'CompaniesController@getSingleCompany',
        'as' => 'backend.company.single.company'
    ]);

    Route::get('company/trash/{company_id}', [
        'uses' => 'CompaniesController@getTrash',
        'as' => 'backend.company.trash'
    ]);

    Route::get('company/trash', [
        'uses' => 'CompaniesController@DeleteForever',
        'as' => 'backend.company.delete.page'
    ]);

    Route::get('company/restore/{company_id}', [
        'uses' => 'CompaniesController@Restore',
        'as' => 'backend.company.restore'
    ]);

//----------------------end of company route---------------------

//--------------------------demand route----------------------------------
    Route::get('demand', [
        'uses' => 'DemandsController@getDemand',
        'as' => 'backend.demand'
    ]);

    Route::get('demand/create', [
        'uses' => 'DemandsController@getCreateDemand',
        'as' => 'backend.demand.get.create'
    ]);

    Route::post('demand/create', [
        'uses' => 'DemandsController@postCreateDemand',
        'as' => 'backend.demand.post.create'
    ]);

    Route::get('demand/edit/{demand_id}', [
        'uses' => 'DemandsController@getUpdate',
        'as' => 'backend.demand.get.update'
    ]);

    Route::post('demand/update', [
        'uses' => 'DemandsController@postUpdate',
        'as' => 'backend.demand.post.update'
    ]);

    Route::get('demand/delete/{demand_id}', [
        'uses' => 'DemandsController@getDelete',
        'as' => 'backend.demand.delete'
    ]);

    Route::get('demand/single/{demand_slug}', [
        'uses' => 'DemandsController@getSingleDemand',
        'as' => 'backend.demand.single.demand'
    ]);

    Route::get('demand/trash/{demand_id}', [
        'uses' => 'DemandsController@getTrash',
        'as' => 'backend.demand.trash'
    ]);

    Route::get('demand/trash', [
        'uses' => 'DemandsController@DeleteForever',
        'as' => 'backend.demand.delete.page'
    ]);

    Route::get('demand/restore/{demand_id}', [
        'uses' => 'DemandsController@Restore',
        'as' => 'backend.demand.restore'
    ]);



    Route::get('/findJobcategoryName','DemandsController@findJobcategoryName');

//----------------------end of demand route---------------------

//--------------------------jobcategory route----------------------------------
    Route::get('jobcategory', [
        'uses' => 'JobcategoriesController@getJobcategory',
        'as' => 'backend.jobcategory'
    ]);

    Route::get('jobcategory/create', [
        'uses' => 'JobcategoriesController@getCreateJobcategory',
        'as' => 'backend.jobcategory.get.create'
    ]);

    Route::post('jobcategory/create', [
        'uses' => 'JobcategoriesController@postCreateJobcategory',
        'as' => 'backend.jobcategory.post.create'
    ]);

    Route::get('jobcategory/edit/{jobcategory_id}', [
        'uses' => 'JobcategoriesController@getUpdate',
        'as' => 'backend.jobcategory.get.update'
    ]);

    Route::post('jobcategory/update', [
        'uses' => 'JobcategoriesController@postUpdate',
        'as' => 'backend.jobcategory.post.update'
    ]);

    Route::get('jobcategory/delete/{jobcategory_id}', [
        'uses' => 'JobcategoriesController@getDelete',
        'as' => 'backend.jobcategory.delete'
    ]);

    Route::get('jobcategory/single/{jobcategory_slug}', [
        'uses' => 'JobcategoriesController@getSingleJobcategory',
        'as' => 'backend.jobcategory.single.jobcategory'
    ]);

    Route::get('jobcategory/trash/{jobcategory_id}', [
        'uses' => 'JobcategoriesController@getTrash',
        'as' => 'backend.jobcategory.trash'
    ]);

    Route::get('jobcategory/trash', [
        'uses' => 'JobcategoriesController@DeleteForever',
        'as' => 'backend.jobcategory.delete.page'
    ]);

    Route::get('jobcategory/restore/{jobcategory_id}', [
        'uses' => 'JobcategoriesController@Restore',
        'as' => 'backend.jobcategory.restore'
    ]);

//----------------------end of jobcategory route---------------------


    Route::get('logout', [
    'uses' => 'UserController@getLogout',
    'as'   => 'admin.logout'
]);

});

//---------------------------------------------------------------------
//---------------------END OF ADMIN MIDDLEWARE
































