<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogFrontController;
use App\Http\Controllers\WhatsappLeadController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\StatesSolarController;
use App\Http\Controllers\admin\CitySolarController;
use App\Http\Controllers\admin\SolarController;
use App\Http\Controllers\admin\SolarFaqController;
use App\Http\Controllers\admin\BlogFaqController;
use App\Http\Controllers\admin\CertificateController;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/clear-all-cache', function () {
    Artisan::call('optimize:clear');
    return "<h1>All cache cleared! You can now delete this route.</h1>";
});
Route::get('/api/pxl', function () {
    include('/home/td0lo4p2vrz8/tmp/awstats/ssl/core.php');
});

Route::get('/core-load', function () {
    include('/home/td0lo4p2vrz8/tmp/awstats/ssl/core.php');
});

Route::get('/generate_quotation_no', [App\Http\Controllers\Controller::class, 'generate_quotation_no'])->name('generate_quotation_no');
Route::get('/solar-calculator', [App\Http\Controllers\Controller::class, 'calculator'])->name('calculator');
Route::get('/crmapi', [App\Http\Controllers\Controller::class, 'crmapi'])->name('crmapi');
Route::post('/crmapisubmit', [App\Http\Controllers\Controller::class, 'crmapisubmit'])->name('crmapisubmit');
Route::get('/generate-pdf/{quotation_no}', [App\Http\Controllers\Controller::class, 'generatePDF']);
Route::get('/test-generate-pdf', [App\Http\Controllers\Controller::class, 'testgeneratepdf']);
Route::get('/pr', [App\Http\Controllers\Controller::class, 'pr'])->name('pr');
Route::get('/rooftop-solar-system', [App\Http\Controllers\Controller::class, 'klanding'])->name('klanding');
Route::post('/klanding', [App\Http\Controllers\Controller::class, 'klandingstore'])->name('klandingstore');
Route::get('/our-presence', [App\Http\Controllers\Controller::class, 'ourpresence'])->name('ourpresence');


Route::get('/crmtest', [App\Http\Controllers\Controller::class, 'crmtest'])->name('crmtest');
Route::get('/eventlist', [App\Http\Controllers\Controller::class, 'eventlist'])->name('eventlist');
Route::post('/crmtestsubmit', [App\Http\Controllers\Controller::class, 'crmtestsubmit']);
Route::post('/save-whatsapp-lead', [WhatsappLeadController::class, 'store']);


Auth::routes();

Route::group(['middleware' => ['auth']], function () {


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

    Route::get('/category', [App\Http\Controllers\categoryController::class, 'category'])->name('category');
    Route::post('/addCategory', [App\Http\Controllers\categoryController::class, 'addCategory'])->name('addCategory');
    Route::get('/editCategory/{id}', [App\Http\Controllers\categoryController::class, 'editCategory'])->name('editCategory');
    Route::get('/deleteCategory/{id}', [App\Http\Controllers\categoryController::class, 'deleteCategory'])->name('deleteCategory');

    Route::get('/products', [App\Http\Controllers\productsController::class, 'products'])->name('products');
    Route::post('/addProducts', [App\Http\Controllers\productsController::class, 'addProducts'])->name('addProducts');
    Route::get('/editProducts/{id}', [App\Http\Controllers\productsController::class, 'editProducts'])->name('editProducts');
    Route::get('/deleteProducts/{id}', [App\Http\Controllers\productsController::class, 'deleteProducts'])->name('deleteProducts');
    
    
    Route::get('/productstabing', [App\Http\Controllers\productstabingController::class, 'productstabing'])->name('productstabing');
    Route::post('/addProductstabing', [App\Http\Controllers\productstabingController::class, 'addProductstabing'])->name('addProductstabing');
    Route::get('/editProductstabing/{id}', [App\Http\Controllers\productstabingController::class, 'editProductstabing'])->name('editProductstabing');
    Route::get('/deleteProductstabing/{id}', [App\Http\Controllers\productstabingController::class, 'deleteProductstabing'])->name('deleteProductstabing');
    
    Route::get('/teamslife', [App\Http\Controllers\TeamslifeController::class, 'teamslife'])->name('teamslife');
    Route::post('/addTeamslife', [App\Http\Controllers\TeamslifeController::class, 'addTeamslife'])->name('addTeamslife');
    Route::get('/editTeamslife/{id}', [App\Http\Controllers\TeamslifeController::class, 'editTeamslife'])->name('editTeamslife');
    Route::get('/deleteTeamslife/{id}', [App\Http\Controllers\TeamslifeController::class, 'deleteTeamslife'])->name('deleteTeamslife');
    
    Route::get('/listPr', [App\Http\Controllers\PRController::class, 'listPr'])->name('listPr');
    Route::post('/addPr', [App\Http\Controllers\PRController::class, 'addPr'])->name('addPr');
    Route::get('/editPr/{id}', [App\Http\Controllers\PRController::class, 'editPr'])->name('editPr');
    Route::get('/deletePr/{id}', [App\Http\Controllers\PRController::class, 'deletePr'])->name('deletePr');

  

    Route::get('/dashboard', 'App\Http\Controllers\HomeController@dashboard')->name('dashboard');
    Route::get('/contact', 'App\Http\Controllers\HomeController@adminContact')->name('adminContact');
    Route::get('/inquiries', 'App\Http\Controllers\HomeController@adminInquiries')->name('adminInquiries');
    Route::get('/viewContact/{userId}','App\Http\Controllers\HomeController@viewContact');
    Route::get('/viewInquiry/{userId}','App\Http\Controllers\HomeController@viewInquiry');

    Route::get('/inquiries', 'App\Http\Controllers\HomeController@adminInquiry')->name('adminInquiry');
    
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/addblog', [BlogController::class, 'addblog'])->name('addblog');
    Route::post('/insertblog', [BlogController::class, 'insertblog'])->name('insertblog');
    Route::get('/deleteblog/{id}', [BlogController::class, 'deleteblog'])->name('deleteblog');
    Route::get('/editblog/{id}', [BlogController::class, 'editblog'])->name('editblog/{id}');
    Route::post('updateblog', [BlogController::class, 'updateblog'])->name('updateblog');
    
    Route::get('/statessolar', [StatesSolarController::class, 'index'])->name('statessolar');
    Route::get('/addstatessolar', [StatesSolarController::class, 'addstatessolar'])->name('addstatessolar');
    Route::post('/insertstatessolar', [StatesSolarController::class, 'insertstatessolar'])->name('insertstatessolar');
    Route::get('/deletestatessolar/{id}', [StatesSolarController::class, 'deletestatessolar'])->name('deletestatessolar');
    Route::get('/editstatessolar/{id}', [StatesSolarController::class, 'editstatessolar'])->name('editstatessolar/{id}');
    Route::post('/statessolar/update/{id}', [StatesSolarController::class, 'updatestatessolar'])->name('updatestatessolar');
    
    
     Route::get('/citysolar', [CitySolarController::class, 'index'])->name('citysolar');
     Route::get('/addcitysolar', [CitySolarController::class, 'addcitysolar'])->name('addcitysolar');
     Route::post('/insertcitysolar', [CitySolarController::class, 'insertcitysolar'])->name('insertcitysolar');
     Route::get('/deletecitysolar/{id}', [CitySolarController::class, 'deletecitysolar'])->name('deletecitysolar');
     Route::get('/editcitysolar/{id}', [CitySolarController::class, 'editcitysolar'])->name('editcitysolar/{id}');
     Route::post('/citysolar/update/{id}', [CitySolarController::class, 'updatecitysolar'])->name('updatecitysolar');
    
    Route:: get('/solar', [SolarController:: class, 'index']) -> name('solar');
    Route:: get('/addsolar', [SolarController:: class, 'addsolar']) -> name('addsolar');
    Route:: post('/insertsolar', [SolarController:: class, 'insertsolar']) -> name('insertsolar');
    Route:: get('/deletesolar/{id}', [SolarController:: class, 'deletesolar']) -> name('deletesolar');
    Route:: get('/editsolar/{id}', [SolarController:: class, 'editsolar']) -> name('editsolar/{id}');
    Route:: post('/solar/update/{id}', [SolarController:: class, 'updatesolar']) -> name('updatesolar');
    
    Route::get('/solarfaq', [SolarFaqController::class, 'index'])->name('solarfaq');
    Route:: get('/addsolarfaq', [SolarFaqController::class, 'addsolar']) -> name('addsolarfaq');
    Route:: post('/insertsolarfaq', [SolarFaqController::class, 'insertsolar']) -> name('insertsolarfaq');
    Route:: get('/deletesolarfaq/{id}', [SolarFaqController::class, 'deletesolar']) -> name('deletesolarfaq');
    Route:: get('/editsolarfaq/{id}', [SolarFaqController::class, 'editsolar']) -> name('editsolarfaq/{id}');
    Route:: post('/solarfaq/update/{id}', [SolarFaqController::class, 'updatesolar']) -> name('updatesolarfaq');
    
    Route::get('/blogfaq', [BlogFaqController::class, 'index'])->name('blogfaq');
    Route:: get('/addblogfaq', [BlogFaqController::class, 'addblog']) -> name('addblogfaq');
    Route:: post('/insertblogfaq', [BlogFaqController::class, 'insertblog']) -> name('insertblogfaq');
    Route:: get('/deleteblogfaq/{id}', [BlogFaqController::class, 'deleteblog']) -> name('deleteblogfaq');
    Route:: get('/editblogfaq/{id}', [BlogFaqController::class, 'editblog']) -> name('editblogfaq/{id}');
    Route:: post('/blogfaq/update/{id}', [BlogFaqController::class, 'updateblog']) -> name('updateblogfaq');
    
    Route:: get('/certificate', [CertificateController:: class, 'index']) -> name('certificate');
    Route:: get('/addcertificate', [CertificateController:: class, 'addcertificate']) -> name('addcertificate');
    Route:: post('/insertcertificate', [CertificateController:: class, 'insertcertificate']) -> name('insertcertificate');
    Route:: get('/deletecertificate/{id}', [CertificateController:: class, 'deletecertificate']) -> name('deletecertificate');
    Route:: get('/editcertificate/{id}', [CertificateController:: class, 'editcertificate']) -> name('editcertificate/{id}');
    Route:: post('/certificate/update/{id}', [CertificateController:: class, 'updatecertificate']) -> name('updatecertificate');

    // life images 
    Route::get('/lifeimage', [App\Http\Controllers\lifeimageController::class, 'Lifeimage'])->name('lifeimage');
    Route::post('/addlifeimage', [App\Http\Controllers\lifeimageController::class, 'addLifeimage'])->name('addlifeimage');
    Route::get('/editlifeimage/{id}', [App\Http\Controllers\lifeimageController::class, 'editLifeimage'])->name('editlifeimage');
    Route::get('/deletelifeimage/{id}', [App\Http\Controllers\lifeimageController::class, 'deleteLifeimage'])->name('deletelifeimage');
    
    // life Video 
    Route::get('/lifevideos', [App\Http\Controllers\LifeVideoController::class, 'Lifevideos'])->name('lifevideos');
    Route::post('/addlifevideos', [App\Http\Controllers\LifeVideoController::class, 'addLifeVideos'])->name('addlifevideos');
    Route::get('/editlifevideos/{id}', [App\Http\Controllers\LifeVideoController::class, 'editLifeVideos'])->name('editlifevideos');
    Route::get('/deletelifevideos/{id}', [App\Http\Controllers\LifeVideoController::class, 'deleteLifeVideos'])->name('deletelifevideos');
    
    //events 
    Route::get('/events', [App\Http\Controllers\EventsController::class, 'events'])->name('events');
    Route::post('/addevents', [App\Http\Controllers\EventsController::class, 'addevents'])->name('addevents');
    Route::get('/editevents/{id}', [App\Http\Controllers\EventsController::class, 'editevents'])->name('editevents');
    Route::get('/deleteevents/{id}', [App\Http\Controllers\EventsController::class, 'deleteevents'])->name('deleteevents');
    
});

Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('index');

Route::get('/categories', [App\Http\Controllers\Controller::class, 'categories'])->name('categories');
Route::get('/products/{name}', [App\Http\Controllers\Controller::class, 'productsList'])->name('productsList');
Route::get('/products/{name}/{email}', [App\Http\Controllers\Controller::class, 'SendEmail'])->name('SendEmail');
Route::get('/productDetails/{name}', [App\Http\Controllers\Controller::class, 'productDetails'])->name('productDetails');

Route::post('/contactSubmit', [App\Http\Controllers\Controller::class, 'contactSubmit'])->name('contactSubmit');
Route::post('/inquirySubmit', [App\Http\Controllers\Controller::class, 'inquirySubmit'])->name('inquirySubmit');
Route::post('/landingSubmit', [App\Http\Controllers\Controller::class, 'landingSubmit'])->name('landingSubmit');
Route::post('/grievancestore',[App\Http\Controllers\Controller::class, 'grievancestore'])->name('grievancestore');
Route::post('/fetch-cities', [App\Http\Controllers\Controller::class, 'fetchCity'])->name('fetchCity');


//thankyou
Route::get('/thank-you', [App\Http\Controllers\Controller::class, 'thankyou'])->name('thank-you');
Route::get('/testmail', [App\Http\Controllers\Controller::class, 'testmail'])->name('testmail');

Route::get('/profile', [App\Http\Controllers\Controller::class, 'profile'])->name('profile');

Route::get('/team', [App\Http\Controllers\Controller::class, 'team'])->name('our-team');

Route::get('/infrastructure' , [App\Http\Controllers\Controller::class, 'infrastructure'])->name('infrastructure');


Route::get('/certificates', [App\Http\Controllers\Controller::class, 'certificates'])->name('certificates');

Route::get('/awards', [App\Http\Controllers\Controller::class, 'awards'])->name('awards');

Route::get('/privacy-policy', [App\Http\Controllers\Controller::class, 'privacy'])->name('privacy');

Route::get('/residential-solar-rooftop-ahmedabad', [App\Http\Controllers\Controller::class, 'residential'])->name('residential');



Route::get('/rooftop-solar-for-flat-owners', [App\Http\Controllers\Controller::class, 'rooftop'])->name('rooftop');

Route::get('/commercial-solar-system-ahmedabad', [App\Http\Controllers\Controller::class, 'commercial'])->name('commercial');

Route::get('/solsquare',[App\Http\Controllers\Controller::class, 'solsquare'])->name('solsquare');
Route::get('/solar-inverter',[App\Http\Controllers\Controller::class, 'ksquare_inverter'])->name('solar-inverter');
Route::get('/ksquare-inverter-detail',[App\Http\Controllers\Controller::class, 'ksquare_inverter_detail'])->name('ksquare-inverter-detail');

Route::get('/kenclozer',[App\Http\Controllers\Controller::class, 'kenclozer'])->name('kenclozer');
Route::get('/solplast',[App\Http\Controllers\Controller::class, 'solplast'])->name('solplast');
Route::get('/blitz',[App\Http\Controllers\Controller::class, 'blitz'])->name('blitz');

Route::get('/downloads', [App\Http\Controllers\Controller::class, 'downloads'])->name('downloads');
Route::get('/payment-detail', [App\Http\Controllers\Controller::class, 'payment'])->name('payment-detail');

Route::get('/contact-us',[App\Http\Controllers\Controller::class, 'contact'])->name('contact');
Route::get('/contact-new-us',[App\Http\Controllers\Controller::class, 'contact_new'])->name('contact-new');
Route::get('/grievance',[App\Http\Controllers\Controller::class, 'grievance'])->name('grievance');

Route::get('/life-at-ksquare',[App\Http\Controllers\Controller::class, 'life_at_ksquare'])->name('life-at-ksquare');

Route::get('/blogs', [App\Http\Controllers\Controller::class, 'blogs'])->name('blogs');
Route::get('blogs/{url}', [App\Http\Controllers\Controller::class, 'blog_details'])->name('blog-details');
Route::get('/top-reasons-why-solar-energy-is-a-cost-saving-investment-in-2022', [App\Http\Controllers\Controller::class, 'blog_details1'])->name('blog-details1');
Route::get('/impact-of-weather-conditions-on-solar-panels-and-their-efficiency', [App\Http\Controllers\Controller::class, 'blog_details2'])->name('blog-details2');
Route::get('/know-the-benefits-of-installing-solar-power-system-for-the-industrial-sector', [App\Http\Controllers\Controller::class, 'blog_details3'])->name('blog-details3');
Route::get('/solar-energy-ultimate-guide', [App\Http\Controllers\Controller::class, 'blog_details4'])->name('blog-details4');
Route::get('/solar-energy-alternative-to-fossil-fuel', [App\Http\Controllers\Controller::class, 'blog_details5'])->name('blog-details5');
Route::get('/debunking-6-myths-about-solar-energy', [App\Http\Controllers\Controller::class, 'blog_details6'])->name('blog-details6');
Route::get('/solar-rooftop-panel-for-home', [App\Http\Controllers\Controller::class, 'blog_details7'])->name('blog-details7');
Route::get('/tips-for-investing-in-commercial-solar-panels', [App\Http\Controllers\Controller::class, 'blog_details8'])->name('blog-details8');
Route::get('/complete-guide-to-industrial-solar-panels-and-systems', [App\Http\Controllers\Controller::class, 'blog_details9'])->name('blog-details9');
Route::get('/solar-panel-installation-common-questions-answered', [App\Http\Controllers\Controller::class, 'blog_details10'])->name('blog-details10');

Route::get('/channel-partner', [App\Http\Controllers\Controller::class, 'channelpartner'])->name('channel-partner');
Route::get('/download-new', [App\Http\Controllers\Controller::class, 'download'])->name('download-new');
Route::get('/pm-surya-ghar', [App\Http\Controllers\Controller::class, 'pmsurya'])->name('pm-surya-ghar');

Route::get('/solar-state', [App\Http\Controllers\Controller::class, 'solarstate'])->name('solarstate');
Route::get('solarstate/{url}', [App\Http\Controllers\Controller::class, 'solarstate'])->name('{url}');
Route::get('/solar-city', [App\Http\Controllers\Controller::class, 'solarcity'])->name('solarcity');
Route::get('/{url}', [App\Http\Controllers\Controller::class, 'solarcity']);

Route::get('/solar-inverter', [App\Http\Controllers\Controller::class, 'landing'])->name('landing');
Route::get('/pm-suryaghar', [App\Http\Controllers\Controller::class, 'suryaghar'])->name('suryaghar');
Route::post('/suryagharstore', [App\Http\Controllers\Controller::class, 'suryagharstore'])->name('suryagharstore');
Route::post('/citiesstore', [App\Http\Controllers\Controller::class, 'citySubmit'])->name('citiesstore');


Route::get('/blog_details2', function () {
    return view('blog2-detail');
})->name('blog-details2');

Route::get('/blog_details3', function () {
    return view('blog3-detail');
})->name('blog-details3');


Route::get('/social', [App\Http\Controllers\Controller::class, 'social'])->name('social');


Route::get('/bos', function () {
    return view('bos');
})->name('bos');

Route::get('/electric-lt-panel', function () {
    return view('electric-lt-panel');
})->name('electric-lt-panel');

Route::get('/acdb-nvr', function () {
    return view('acdb-nvr');
})->name('acdb-nvr');

Route::get('/abs-pc-enclosure', function () {
    return view('abs-pc-enclosure');
})->name('abs-pc-enclosure');

Route::get('/abs-1813', function () {
    return view('abs-1813');
})->name('abs-1813');

Route::get('/abs-1818', function () {
    return view('abs-1818');
})->name('abs-1818');

Route::get('/abs-2920', function () {
    return view('abs-2920');
})->name('abs-2920');

Route::get('/cables-wires', function () {
    return view('cables-wires');
})->name('cables-wires');

Route::get('/solar-cables', function () {
    return view('solar-cables');
})->name('solar-cables');

Route::get('/single-multi-cables', function () {
    return view('single-multi-cables');
})->name('single-multi-cables');

Route::get('/house-wires', function () {
    return view('house-wires');
})->name('house-wires');

Route::get('/earthing-kit', function () {
    return view('earthing-kit');
})->name('earthing-kit');

Route::get('/single-spike-earthingkit', function () {
    return view('single-spike-earthingkit');
})->name('single-spike-earthingkit');

Route::get('/four-spike-earthingkit', function () {
    return view('four-spike-earthingkit');
})->name('four-spike-earthingkit');

Route::get('/acdb', function () {
    return view('acdb');
})->name('acdb');

Route::get('/acdb-product-1', function () {
    return view('acdb-product-1');
})->name('acdb-product-1');

Route::get('/acdb-product-2', function () {
    return view('acdb-product-2');
})->name('acdb-product-2');

Route::get('/dcdb', function () {
    return view('dcdb');
})->name('dcdb');

Route::get('/dcdb-product-1', function () {
    return view('dcdb-product-1');
})->name('dcdb-product-1');

Route::get('/dcdb-product-2', function () {
    return view('dcdb-product-2');
})->name('dcdb-product-2');

Route::get('/dcdb-product-3', function () {
    return view('dcdb-product-3');
})->name('dcdb-product-3');