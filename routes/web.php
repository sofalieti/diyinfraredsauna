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


Auth::routes();
Route::get('/', "PageController@home")->name('home');
Route::get('/homenew/', "PageController@home_new")->name('home_new');
//Route::get('/reviews.html', "ReviewController@index")->name('reviews');
//Route::get('/reviews/{type}.html', "ReviewController@show_by_type")->name('review');
Route::get('/projects.html', "ProjectController@index")->name('projects');
Route::get('/projects/{slug}.html', "ProjectController@show")->name('project');
Route::get('/ajax/project/{id}', "ProjectController@ajax_by_id")->name('project_ajax_by_id');
Route::get('/configure-you-diy-sauna.html', "PageController@calculator")->name('calculator');
Route::get('/test.html', "PageController@test")->name('pages.test');
Route::post('/send_form', 'FormController@send_form')->name('send_form');
Route::get('/steps.html', "PageController@show_steps")->name('pages.show_steps');
Route::get('/{slug}.html', "PageController@show")->name('pages.show');
Route::get('/sitemap.xml', "SitemapController@index")->name('sitemap');

/*
Route::get('/test_form', function(){
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, [
        "zf_referrer_name" => "",
        "zf_redirect_url" => "",
        "zc_gad" => "",
        "SingleLine3" => "Form name",
        "SingleLine" => "Name",
        "SingleLine1" => "Email",
        "SingleLine2" => "Phone",
        "MultiLine" => "Description"
    ]);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json', 'Content-Type:multipart/form-data']);
    curl_setopt($ch, CURLOPT_URL, "https://forms.zohopublic.com/zohopeople267/form/DiyForms/formperma/4eAo5F2px9T7AzTZYfWt6oJ-sh0ocHMry9nv-5BnI-s/htmlRecords/submit");
    curl_setopt($ch, CURLOPT_HEADER, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $zoho_response = curl_exec($ch);
    $zoho_response_info = curl_getinfo($ch);
    curl_close($ch);
    print_r($zoho_response);
    print_r($zoho_response_info);
    die('test');
    
});

*/