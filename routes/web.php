<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PasswordController;
use App\Http\Controllers\Admin\ContactusController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PropertySolutionController;
use App\Http\Controllers\Admin\JobManagementController;
use App\Http\Controllers\Admin\ImportPropertyController;
use App\Http\Controllers\Admin\ImportAgentsController;
use App\Http\Controllers\Admin\SyncApiImportAgentsController;
use App\Http\Controllers\Admin\JobApplicationController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SyncApiPropertyImportController;

use App\Http\Controllers\MainController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Admin\PageMangementController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\AgentsContactController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\EmailPropertyAlertController;
use App\Http\Controllers\ShareLinkToFriendController;
use App\Http\Controllers\ForRentController;
use App\Http\Controllers\ForSaleController;
use App\Http\Controllers\UnSubscribePropertyAlertController;
use App\Http\Controllers\CommercialPropertyController;
use App\Http\Controllers\CommercialPropertySaleController;
use App\Http\Controllers\CommercialPropertyRentController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\QuickContactController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CovidController;
use App\Http\Controllers\AppliedJobController;
use App\Http\Controllers\NewsLetterSubscriberController;
use App\Http\Controllers\Admin\WeeklyPropertyReportController;
use App\Http\Controllers\Admin\RemoveSoldPropertyController;
use App\Http\Controllers\Admin\CustomPageController;
use App\Http\Controllers\Admin\CustomSubPageController;
use App\Http\Controllers\Admin\ManageMetaTagController;
use App\Http\Controllers\Admin\DownloadPropertySheetController;

use App\Http\Controllers\ContractorController;
use App\Http\Controllers\DynamicPageController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Models\Page;
use App\Http\Controllers\RentController;
use App\Http\Controllers\Admin\RentPageController;
use App\Http\Controllers\PropertyRentByArea;
use App\Http\Controllers\PropertyFinanceController;
use App\Http\Controllers\PropertyInsuranceController;
use App\Http\Controllers\PropertyManagementController;
use App\Http\Controllers\CommunitySchemeManagementController;
use App\Http\Controllers\EstateManagementController;
use App\Http\Controllers\ManagingAgentController;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Job;



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

//test changes


Route::get('sitemap', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/sitemap/regenerate', [SitemapController::class, 'regenerate'])->name('sitemap.regenerate');
Route::get('/generate-sitemap', [SitemapController::class, 'generateSitemap'])->name('sitemap.generate');
Route::get('/updated-sitemap.xml', [SitemapController::class, 'updatedSitemap'])->name('updated-sitemap');

Route::get('lost-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('lost-password');

// create route for MainController controller 
Route::get('/', [MainController::class, 'index'])->name('/');
Route::get('get-news', [MainController::class, 'getNewsApi'])->name('get-news-api');
Route::get('landing', [MainController::class, 'landing'])->name('landing');
Route::get('/profile', [MainController::class, 'profile'])->name('/profile');
Route::get('favourite-property', [MainController::class, 'favouriteProperty'])->name('favourite-property');

Route::get('about-us', [MainController::class, 'aboutUs'])->name('about-us');
Route::get('contact-us', [MainController::class, 'contactUs'])->name('contact-us');

Route::get('body-corporate-hoa-and-share-block-loans', [MainController::class, 'bodyCorporate'])->name('body-corporate-hoa-and-share-block-loans');
Route::get('useful-links', [MainController::class, 'usefulLinks'])->name('useful-links');
Route::get('online-services', [MainController::class, 'onlineServices'])->name('online-services');
Route::get('online-services/online-applications', [MainController::class, 'onlineApplications'])->name('online-services.online-applications');
Route::get('property-insurance/faqs', [MainController::class, 'insureFaqs'])->name('property-insurance.faqs');
Route::get('commercialreports', [MainController::class, 'commercialreports'])->name('commercialreports');
Route::get('email-disclaimer', [MainController::class, 'emailDisclaimer'])->name('email-disclaimer');

Route::get('sell', [MainController::class, 'sell'])->name('sell');
Route::post('searchrefrence', [MainController::class, 'getSearchRefrence'])->name('searchrefrence');

//property management 
Route::permanentRedirect('/manage', '/property-management')->name('manage');
Route::get('property-management', [PropertyManagementController::class, 'index'])->name('property-management');
Route::get('property-management/caretaker-services', [PropertyManagementController::class, 'caretakerServices'])->name('property-management.caretaker-services');
Route::get('property-management/community-scheme-management', [PropertyManagementController::class, 'communitySchemeManagement'])->name('property-management.community-scheme-management');
Route::get('/property-management/property-management-company', [PropertyManagementController::class, 'propertyManagementCompany'])->name('property-management.property-management-company');
Route::get('property-management/property-management-service-provider', [PropertyManagementController::class, 'propertyManagementServiceProvider'])->name('property-management.property-management-service-provider');

//community-scheme-management
Route::get('property-management/sectional-title-management', [CommunitySchemeManagementController::class, 'sectionalTitleManagement'])->name('property-management.sectional-title-management');
Route::get('property-management/body-corporate-management', [CommunitySchemeManagementController::class, 'bodyCorporateManagement'])->name('property-management.body-corporate-management');
Route::get('property-management/home-owners-association-management', [CommunitySchemeManagementController::class, 'homeOwnersAssociationManagement'])->name('property-management.home-owners-association-management');

//estate management
Route::get('/property-management/estate-management', [EstateManagementController::class, 'index'])->name('property-management.estate-management');
Route::get('/property-management/hoa-estate-management', [EstateManagementController::class, 'hoaEstateManagement'])->name('property-management.hoa-estate-management');
Route::get('/property-management/golf-estate-management', [EstateManagementController::class, 'golfEstateManagement'])->name('property-management.golf-estate-management');
Route::get('/property-management/retirement-village-management', [EstateManagementController::class, 'retirementVillageManagement'])->name('property-management.retirement-village-management');

//managing agent/
Route::get('/managing-agent', [ManagingAgentController::class, 'index'])->name('managing-agent');
Route::get('/managing-agent/property-management-agent', [ManagingAgentController::class, 'propertyManagementAgent'])->name('managing-agent.property-management-agent');
Route::get('/managing-agent/body-corporate-managing-agent', [ManagingAgentController::class, 'bodyCorporateManagingAgent'])->name('managing-agent.body-corporate-managing-agent');
Route::get('/managing-agent/community-scheme-managing-agent', [ManagingAgentController::class, 'communitySchemeManagingAgent'])->name('managing-agent.community-scheme-managing-agent');
Route::get('/managing-agent/executive-managing-agent', [ManagingAgentController::class, 'executiveManagingAgent'])->name('managing-agent.executive-managing-agent');
Route::get('/managing-agent/hoa-managing-agent', [ManagingAgentController::class, 'hoaManagingAgent'])->name('managing-agent.hoa-managing-agent');
Route::get('/managing-agent/sectional-title-managing-agent', [ManagingAgentController::class, 'sectionalTitleManagingAgent'])->name('managing-agent.sectional-title-managing-agent');
Route::get('/managing-agent/shareblock-managing-agents', [ManagingAgentController::class, 'shareblockManagingAgents'])->name('managing-agent.shareblock-managing-agents');
Route::get('/managing-agent/homeowners-association-managing-agent', [ManagingAgentController::class, 'homeownersAssociationManagingAgent'])->name('managing-agent.homeowners-association-managing-agent');
Route::get('/managing-agent/ema', [ManagingAgentController::class, 'ema'])->name('managing-agent.ema');

//Property Finance
Route::permanentRedirect('/finance', '/property-finance')->name('finance');
Route::get('property-finance', [PropertyFinanceController::class, 'index'])->name('property-finance');
Route::get('property-finance/body-corporate-loans', [PropertyFinanceController::class, 'bodyCorporateLoans'])->name('property-finance.body-corporate-loans');
Route::get('property-finance/sectional-title-loans', [PropertyFinanceController::class, 'sectionalTitleLoans'])->name('property-finance.sectional-title-loans');
Route::get('property-finance/levy-finance', [PropertyFinanceController::class, 'levyFinance'])->name('property-finance.levy-finance');
Route::get('property-finance/body-corporate-finance', [PropertyFinanceController::class, 'bodyCorporateFinance'])->name('property-finance.body-corporate-finance');
Route::get('property-finance/sectional-title-finance', [PropertyFinanceController::class, 'sectionalTitleFinance'])->name('property-finance.sectional-title-finance');

//Property insurance
Route::permanentRedirect('/insure', '/property-insurance')->name('insure');
Route::get('property-insurance', [PropertyInsuranceController::class, 'index'])->name('property-insurance');
Route::get('property-insurance/community-scheme-insurance', [PropertyInsuranceController::class, 'communitySchemeInsurance'])->name('property-insurance.community-scheme-insurance');
Route::get('property-insurance/hoa-insurance', [PropertyInsuranceController::class, 'hoaInsurance'])->name('property-insurance.hoa-insurance');
Route::get('property-insurance/sectional-title-insurance', [PropertyInsuranceController::class, 'sectionalTitleInsurance'])->name('property-insurance.sectional-title-insurance');
Route::get('property-insurance/shareblock-insurance', [PropertyInsuranceController::class, 'shareblockInsurance'])->name('property-insurance.shareblock-insurance');

Route::get('property-insurance/community-scheme-insurance-broker', [PropertyInsuranceController::class, 'communitySchemeInsuranceBroker'])->name('property-insurance.community-scheme-insurance-broker');
Route::get('property-insurance/hoa-insurance-broker', [PropertyInsuranceController::class, 'hoaInsuranceBroker'])->name('property-insurance.hoa-insurance-broker');
Route::get('property-insurance/sectional-title-insurance-broker', [PropertyInsuranceController::class, 'sectionalTitleInsuranceBroker'])->name('property-insurance.sectional-title-insurance-broker');

// create route for CovidController controller
Route::get('covid-19', [CovidController::class, 'covid'])->name('covid-19');
Route::post('covidform', [CovidController::class, 'covidform'])->name('covidform');


Auth::routes();
Route::get('/admin', function () {
    return view('auth.adminlogin');
})->middleware('guest')->name('admin');

//// admin login route group ////
Route::group(['prefix' => 'admin',  'middleware' => 'admin'], function () {
    Route::get('download-property-report', [DownloadPropertySheetController::class, 'downloadPropertyReport'])->name('admin.download-property-report');
    Route::get('property-report', [DownloadPropertySheetController::class, 'index'])->name('admin.property-report');
    Route::get('job-applications', [JobApplicationController::class, 'index'])->name('admin.job-applications');
    Route::put('job-applications/change-status/{id}', [JobApplicationController::class, 'changeStatus'])->name('admin.job-applications.change-status');
    Route::put('job-applications/add-note/{id}', [JobApplicationController::class, 'addNote'])->name('admin.job-applications.add-note');
    Route::delete('job-applications/destroy/{id}', [JobApplicationController::class, 'destroy'])->name('admin.job-applications.destroy');
    Route::get('job-applications/show/{id}', [JobApplicationController::class, 'show'])->name('admin.job-applications.show');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile');
    Route::post('/profile', [ProfileController::class, 'update'])->name('admin.profile');
    Route::get('/password', [PasswordController::class, 'index'])->name('admin.password');
    Route::post('/password', [PasswordController::class, 'update'])->name('admin.password');
    Route::get('/setting', [SettingController::class, 'index'])->name('admin.setting');
    Route::get('/user', [UserController::class, 'index'])->name('admin.user');
    Route::post('/setting', [SettingController::class, 'update'])->name('admin.setting.update');
    Route::get('sitemap', [SettingController::class, 'sitemap'])->name('admin.sitemap');
    Route::resource('contactus', ContactusController::class, ['as' => 'admin']);
    Route::get('/agent-contact-list', [ContactusController::class, 'contactAgent'])->name('admin.agent-contact-list');
    Route::get('/agent-contact-for-property', [ContactusController::class, 'contactAgentProperty'])->name('admin.agent-contact-for-property');
    Route::resource('propertysolution', PropertySolutionController::class, ['as' => 'admin']);
    Route::get('/propertysolution/display/{id}', [PropertySolutionController::class, 'display'])->name('admin.propertysolution.display');
    Route::get('/propertysolution/notDisplay/{id}', [PropertySolutionController::class, 'notDisplay'])->name('admin.propertysolution.not-display');

    Route::resource('job-management', JobManagementController::class, ['as' => 'admin']);
    Route::get('/job-order',[JobManagementController::class,'order'])->name('admin.job.order');
    Route::post('job-update-order',[JobManagementController::class,'updateOrder'])->name('admin.job.update.order');
    Route::get('job-management/display/{id}', [JobManagementController::class, 'display'])->name('admin.job-management.display');
    Route::get('job-management/notDisplay/{id}', [JobManagementController::class, 'notDisplay'])->name('admin.job-management.not-display');

    Route::get('/importproperty/durban', [ImportPropertyController::class, 'durban'])->name('admin.importproperty.durban');
    Route::get('/importproperty/pretoria', [ImportPropertyController::class, 'pretoria'])->name('admin.importproperty.pretoria');
    Route::get('/importproperty', [ImportPropertyController::class, 'index'])->name('admin.importproperty.index');
    Route::get('/importproperty/ct', [ImportPropertyController::class, 'capeTown'])->name('admin.importproperty.ct');
    Route::get('/importproperty/jb', [ImportPropertyController::class, 'johannesBurg'])->name('admin.importproperty.jb');
    Route::get('/importproperty/pe', [ImportPropertyController::class, 'portElizabeth'])->name('admin.importproperty.pe');
    Route::get('/importproperty/ic', [ImportPropertyController::class, 'innerCity'])->name('admin.importproperty.ic');
    Route::get('/importproperty/el', [ImportPropertyController::class, 'eastLondon'])->name('admin.importproperty.el');
    Route::get('/importproperty/new-property-alert-to-user', [ImportPropertyController::class, 'newPropertyAlertToUser'])->name('admin.importproperty.new-property-alert-to-user');

    // create route for ImportAgentsController controller
    Route::get('/importagents/durban', [ImportAgentsController::class, 'durban'])->name('admin.importagents.durban');
    Route::get('/importagents/pretoria', [ImportAgentsController::class, 'pretoria'])->name('admin.importagents.pretoria');
    Route::get('/importagents', [ImportAgentsController::class, 'index'])->name('admin.importagents.index');
    Route::get('/importagents/ct', [ImportAgentsController::class, 'capeTown'])->name('admin.importagents.ct');
    Route::get('/importagents/jb', [ImportAgentsController::class, 'johannesBurg'])->name('admin.importagents.jb');
    Route::get('/importagents/pe', [ImportAgentsController::class, 'portElizabeth'])->name('admin.importagents.pe');
    Route::get('/importagents/inner-city', [ImportAgentsController::class, 'innerCity'])->name('admin.importagents.inner-city');
    Route::get('/importagents/east-london', [ImportAgentsController::class, 'eastLondon'])->name('admin.importagents.east-london');

    // create route for SyncApiImportAgentsController controller
    Route::get('/syncapiimportagents/unibaseAgentApiData', [SyncApiImportAgentsController::class, 'unibaseAgentApiData'])->name('admin.syncapiimportagents.unibaseAgentApiData');
    Route::get('/syncapiimportagents/trafalgar-property-mangement-pretoria', [SyncApiImportAgentsController::class, 'trafalgarPropertyMangementPretoria'])->name('admin.syncapiimportagents.trafalgar-property-mangement-pretoria');
    Route::get('/syncapiimportagents/trafalgar-property-mangement', [SyncApiImportAgentsController::class, 'trafalgarPropertyMangement'])->name('admin.syncapiimportagents.trafalgar-property-mangement');
    Route::get('/syncapiimportagents', [SyncApiImportAgentsController::class, 'index'])->name('admin.syncapiimportagents.index');
    Route::get('/syncapiimportagents/east-london', [SyncApiImportAgentsController::class, 'eastLondon'])->name('admin.syncapiimportagents.east-london');
    Route::get('/syncapiimportagents/pretoria', [SyncApiImportAgentsController::class, 'pretoria'])->name('admin.syncapiimportagents.pretoria');
    Route::get('/syncapiimportagents/capetown', [SyncApiImportAgentsController::class, 'capeTown'])->name('admin.syncapiimportagents.capetown');
    Route::get('/syncapiimportagents/johannesburg', [SyncApiImportAgentsController::class, 'johannesBurg'])->name('admin.syncapiimportagents.johannesburg');
    Route::get('/syncapiimportagents/port-elizabeth', [SyncApiImportAgentsController::class, 'portElizabeth'])->name('admin.syncapiimportagents.port-elizabeth');

    // create route for NewsController controller
    Route::resource('news', NewsController::class, ['as' => 'admin']);
    Route::post('/news/ckimageupload', [NewsController::class, 'ckImageUpload'])->name('admin.news.ckimageupload');
    Route::get('/news/display/{id}', [NewsController::class, 'display'])->name('admin.news.display');
    Route::get('/news/notDisplay/{id}', [NewsController::class, 'notDisplay'])->name('admin.news.not-display');

    // create route for PageMangementController controller
    Route::get('/pagemanagement/terms-conditions', [PageMangementController::class, 'index'])->name('admin.pagemanagement.terms-conditions');
    Route::get('/pagemanagement/disclaimer', [PageMangementController::class, 'index'])->name('admin.pagemanagement.disclaimer');
    Route::get('/pagemanagement/supplier-privacy-policy', [PageMangementController::class, 'index'])->name('admin.pagemanagement.supplier-privacy-policy');
    Route::get('/pagemanagement/privacy-policy', [PageMangementController::class, 'index'])->name('admin.pagemanagement.privacy-policy');
    Route::put('/pagemanagement/{id}', [PageMangementController::class, 'update'])->name('admin.pagemanagement.update');

    // create route for NewsletterController controller
    Route::get('/news-letter-subscriber', [NewsletterController::class, 'index'])->name('admin.news-letter-subscriber');
    Route::get('/news-letter-subscriber/display/{id}', [NewsletterController::class, 'display'])->name('admin.news-letter-subscriber.display');
    Route::get('/news-letter-subscriber/notDisplay/{id}', [NewsletterController::class, 'notDisplay'])->name('admin.news-letter-subscriber.not-display');
    Route::get('/newletter-export', [NewsletterController::class, 'export'])->name('admin.newletter-export');

    // create route for PageController controller
    Route::get('/custom-page/add-page', [CustomPageController::class, 'create'])->name('admin.custom-page.add-page');
    Route::post('/custom-page/store-page', [CustomPageController::class, 'store'])->name('admin.custom-page.store-page');
    Route::get('/custom-page/page-list', [CustomPageController::class, 'index'])->name('admin.custom-page.page-list');
    Route::get('custom-page/display/{id}', [CustomPageController::class, 'display'])->name('admin.custom-page.display');
    Route::get('custom-page/notDisplay/{id}', [CustomPageController::class, 'notDisplay'])->name('admin.custom-page.not-display');
    Route::get('custom-page/edit/{id}', [CustomPageController::class, 'edit'])->name('admin.custom-page.edit');
    Route::put('custom-page/update/{id}', [CustomPageController::class, 'update'])->name('admin.custom-page.update');

    // create route for CustomSubPageController controller
    Route::get('/custom-sub-page/add-subpage/{id}', [CustomSubPageController::class, 'index'])->name('admin.custom-sub-page.add-subpage');
    Route::post('/custom-sub-page/store-subpage', [CustomSubPageController::class, 'store'])->name('admin.custom-sub-page.store-subpage');
    Route::get('/custom-sub-page/all-subpages/{id}', [CustomSubPageController::class, 'allSubPages'])->name('admin.custom-sub-page.all-subpages');
    Route::get('custom-sub-page/display/{id}', [CustomSubPageController::class, 'display'])->name('admin.custom-sub-page.display');
    Route::get('custom-sub-page/notDisplay/{id}', [CustomSubPageController::class, 'notDisplay'])->name('admin.custom-sub-page.not-display');
    Route::delete('custom-sub-page/destroy/{id}', [CustomSubPageController::class, 'destroy'])->name('admin.custom-sub-page.destroy');
    Route::get('custom-sub-page/edit/{id}', [CustomSubPageController::class, 'edit'])->name('admin.custom-sub-page.edit');
    Route::put('custom-sub-page/update/{id}', [CustomSubPageController::class, 'update'])->name('admin.custom-sub-page.update');
    Route::get('rent-pages', [RentPageController::class, 'index'])->name('admin.rent-pages');
    Route::get('edit-rent-page/{id}', [RentPageController::class, 'editRentPage'])->name('admin.edit-rent-page');

    Route::put('admin/rent-page/update/{id}', [RentPageController::class, 'update'])->name('admin.rent-page.update');

    Route::get('static-page-meta-tag', [ManageMetaTagController::class, 'index'])->name('admin.static-page-meta-tag.index');
    Route::get('static-page-meta-tag/edit/{id}', [ManageMetaTagController::class, 'edit'])->name('admin.static-page-meta-tag');
    Route::put('admin/static-page-meta-tag/update/{id}', [ManageMetaTagController::class, 'update'])->name('admin.static-page-meta-tag.update');

    Route::group(['prefix' => 'syncapi',], function () {
        Route::get('/', [SyncApiPropertyImportController::class, 'index'])->name('admin.syncapi.index');
        Route::get('unibaseApiData', [SyncApiPropertyImportController::class, 'unibaseApiData'])->name('admin.syncapi.unibaseApiData');
        Route::get('portElizabeth', [SyncApiPropertyImportController::class, 'portElizabeth'])->name('admin.syncapi.portElizabeth');
        Route::get('pretoria', [SyncApiPropertyImportController::class, 'pretoria'])->name('admin.syncapi.pretoria');
        Route::get('capeTown', [SyncApiPropertyImportController::class, 'capeTown'])->name('admin.syncapi.capeTown');
        Route::get('johannesBurg', [SyncApiPropertyImportController::class, 'johannesBurg'])->name('admin.syncapi.johannesBurg');
        Route::get('eastLondon', [SyncApiPropertyImportController::class, 'eastLondon'])->name('admin.syncapi.eastLondon');
        Route::get('trafalgarPropertyMangement', [SyncApiPropertyImportController::class, 'trafalgarPropertyMangement'])->name('admin.syncapi.trafalgarPropertyMangement');
        Route::get('trafalgarPropertyMangementPvtLtd', [SyncApiPropertyImportController::class, 'trafalgarPropertyMangementPvtLtd'])->name('admin.syncapi.trafalgarPropertyMangementPvtLtd');
    });
});


Route::get('/property', [PropertyController::class, 'index'])->name('property');
Route::get('/agent', [PropertyController::class, 'agent'])->name('agent');
Route::get('/agentdetail', [PropertyController::class, 'agentdetail'])->name('agentdetail');

Route::get('/property-for-rent/{p_suburb}/{p_town}/{p_province}/{p_ref}', [PropertyController::class, 'propertydetail'])->name('property-for-rent');
Route::get('/property-for-sale/{p_suburb}/{p_town}/{p_province}/{p_ref}', [PropertyController::class, 'propertydetail'])->name('property-for-sale');
Route::get('/fetch-image', [PropertyController::class, 'fetchImage'])->name('property.fetch-image');

Route::post('agentContactMail', [AgentsContactController::class, 'agentContactMail'])->name('agent-contact-mail');
Route::post('apply-property', [AgentsContactController::class, 'applicationForProperty'])->name('apply-property');
Route::get('thanks-to-contact-agent', [AgentsContactController::class, 'thanksToContactAgent'])->name('thanks-to-contact-agent');
Route::get('thanks-for-property-application', [AgentsContactController::class, 'thanksForPropertyApplication'])->name('thanks-for-property-application');


Route::get('/terms-conditions', [PageController::class, 'index'])->name('terms-conditions');
Route::get('/disclaimer', [PageController::class, 'index'])->name('disclaimer');
Route::get('/privacy-policy', [PageController::class, 'index'])->name('privacy-policy');


// create route for ManageController controller
Route::get('property-management/sectional-title-and-hoa-management', [ManageController::class, 'sectionalTitleAndHoa'])->name('property-management.sectional-title-and-hoa-management');
Route::get('property-management/commercial-property-management', [ManageController::class, 'commercialPropertyManagement'])->name('property-management.commercial-property-management');
Route::get('property-management/sectional-title-and-hoa-management/developer-services', [ManageController::class, 'developerServices'])->name('property-management.sectional-title-and-hoa-management.developer-services');
Route::get('property-management/commercial-property-management/commercial-brokering-services', [ManageController::class, 'commercialBrokeringServices'])->name('property-management.commercial-property-management.commercial-brokering-services');
Route::get('property-management/commercial-property-management/commercial-landlord-services', [ManageController::class, 'commercialLandlordServices'])->name('property-management.commercial-property-management.commercial-landlord-services');
Route::get('property-management/executive-managing-agent', [ManageController::class, 'executiveManagingAgent'])->name('property-management.executive-managing-agent');
Route::get('property-management/faqs', [ManageController::class, 'faqs'])->name('property-management.faqs');
Route::get('property-management/stsm-act', [ManageController::class, 'stsmAct'])->name('property-management.stsm-act');
Route::get('property-management/sectional-title-and-hoa-management/sectional-title-management/stsm-act', [ManageController::class, 'stsmActCopy'])->name('property-management.sectional-title-and-hoa-management.sectional-title-management.stsm-act');
Route::get('property-management/easy-guide-to-body-corporate-resolutions', [ManageController::class, 'easyGuideToBodyCorporateResolution'])->name('property-management.easy-guide-to-body-corporate-resolutions');
Route::get('property-management-tips', [ManageController::class, 'propertyManagementTips'])->name('property-management-tips');
Route::get('property-management/sectional-title-and-hoa-management/sectional-title-management', [ManageController::class, 'sectionalTitleManagement'])->name('property-management.sectional-title-and-hoa-management.sectional-title-management');
Route::get('property-management/sectional-title-and-hoa-management/hoa-management', [ManageController::class, 'hoaManagement'])->name('property-management.sectional-title-and-hoa-management.hoa-management');
Route::get('property-management/sectional-title-and-hoa-management/estate-management', [ManageController::class, 'estateManagementNew'])->name('property-management.sectional-title-and-hoa-management.estate-management');
Route::get('property-management/sectional-title-and-hoa-management/financial-management', [ManageController::class, 'financialManagement'])->name('property-management.sectional-title-and-hoa-management.financial-management');
Route::get('property-management/commercial-property-management/commercial-tenant-services', [ManageController::class, 'commercialTenantServices'])->name('property-management.commercial-property-management.commercial-tenant-services');
Route::get('property-management/commercial-property-management/faqs-commercial', [ManageController::class, 'faqsCommercial'])->name('property-management.commercial-property-management.faqs-commercial');
Route::get('property-management/sectional-title-and-hoa-management/sectional-title-hoa/reference-sites-managed-by-trafalgar', [ManageController::class, 'referenceSitesManagedByTrafalgar'])->name('property-management.sectional-title-and-hoa-management.sectional-title-hoa.reference-sites-managed-by-trafalgar');
Route::get('sample-property-management-reports', [ManageController::class, 'samplePropertyManagementReports'])->name('sample-property-management-reports');

Route::get('jozicbdrentals', [ManageController::class, 'jozicbdrentals'])->name('jozicbdrentals');
Route::post('jozicbdrentalsform', [ManageController::class, 'jozicbdrentalsform'])->name('jozicbdrentalsform');
Route::get('jozicbdrentals/jozicbdrentals-thank', [ManageController::class, 'jozicbdrentalsThank'])->name('jozicbdrentals.jozicbdrentals-thank');

Route::get('pier-14-brand-new-apartments-to-rent-in-north-end-port-elizabeth', [ManageController::class, 'pier14'])->name('pier-14-brand-new-apartments-to-rent-in-north-end-port-elizabeth');
Route::post('pier14form', [ManageController::class, 'pier14Form'])->name('pier14form');
Route::get('pier-14-thank-you', [ManageController::class, 'pier14ThankYou'])->name('pier-14-thank-you');

Route::get('the-summit-brand-new-apartments-to-rent-in-amanzimtoti', [ManageController::class, 'theSummitBrand'])->name('the-summit-brand-new-apartments-to-rent-in-amanzimtoti');
Route::post('theSummitBrandForm', [ManageController::class, 'theSummitBrandForm'])->name('theSummitBrandForm');
Route::get('the-summit-thank-you', [ManageController::class, 'summitThankYou'])->name('the-summit-thank-you');
Route::get('newlegislation', [ManageController::class, 'newlegislation'])->name('newlegislation');
Route::post('newlegislationForm', [ManageController::class, 'newlegislationForm'])->name('newlegislationForm');
Route::post('newLegislationQuestionsForm', [ManageController::class, 'newLegislationQuestionsForm'])->name('newLegislationQuestionsForm');
Route::get('newlegislation/new-legislation-questions', [ManageController::class, 'newLegislationQuestions'])->name('newlegislation.new-legislation-questions');
Route::get('newlegislation/newlegislation-thank', [ManageController::class, 'newlegislationThank'])->name('newlegislation.newlegislation-thank');

Route::group(['middleware' => 'userAuth'], function () {
    Route::get('/addfavourite/{id}', [FavouriteController::class, 'addFavourite'])->name('addfavourite');
    Route::get('/removeFavourite/{id}', [FavouriteController::class, 'removeFavourite'])->name('removeFavourite');
    Route::get('favourite-properties', [FavouriteController::class, 'favouritePropertyList'])->name('favourite-properties');
    Route::get('/user-profile', [UserProfileController::class, 'index'])->name('user-profile');
    Route::post('update-profile', [UserProfileController::class, 'updateProfile'])->name('update-profile');
    Route::post('update-password', [UserProfileController::class, 'updatePassword'])->name('update-password');
    Route::get('change-password', [UserProfileController::class, 'changePassword'])->name('change-password');
});

Route::get('email-property-alert', [EmailPropertyAlertController::class, 'index'])->name('email-property-alert');
Route::post('set-email-property-alert', [EmailPropertyAlertController::class, 'setEmailPropertyAlert'])->name('set-email-property-alert');
Route::get('get-suburb-dynamic-by-town', [EmailPropertyAlertController::class, 'getSuburbDynamicByTown'])->name('get-suburb-dynamic-by-town');

Route::post('Share-link-to-friend', [ShareLinkToFriendController::class, 'index'])->name('Share-link-to-friend');

Route::get('/to-rent/{url_city?}/{url_town?}/{url_province?}/{web_ref?}', [ForRentController::class, 'toRent'])->name('to-rent');
Route::get('/to-rent/multiple-areas/{pid?}', [ForRentController::class, 'toMultipleAreas'])->name('to-rent.multiple-areas');
Route::get('get-rent/getprovience', [ForRentController::class, 'getprovience'])->name('get-rent.getprovience');

Route::get('unsubscribe-property-alert', [UnSubscribePropertyAlertController::class, 'index'])->name('unsubscribe-property-alert');

Route::get('/for-sale/{url_city?}/{url_town?}/{url_province?}/{web_ref?}', [ForSaleController::class, 'forSale'])->name('for-sale');
Route::get('/for-sale/multiple-areas/{pid?}', [ForSaleController::class, 'forSale'])->name('for-sale.multiple-areas');

Route::get('get-sale/getprovience', [ForSaleController::class, 'getprovience'])->name('get-sale.getprovience');

Route::get('commercial-property', [CommercialPropertyController::class, 'index'])->name('commercial-property');
Route::get('/commercial-property-for-sale/{url_city?}/{url_town?}/{url_province?}/{web_ref?}', [CommercialPropertySaleController::class, 'index'])->name('commercial-property-for-sale');
Route::get('/commercial-property-for-sale/multiple-areas/{pid?}', [CommercialPropertySaleController::class, 'index'])->name('commercial-property-for-sale.multiple-areas');
Route::get('/commercial-property-sale/getprovience', [CommercialPropertySaleController::class, 'getprovience'])->name('commercial-property-sale.getprovience');
Route::get('/commercial-property-for-rent/{url_city?}/{url_town?}/{url_province?}/{web_ref?}', [CommercialPropertyRentController::class, 'index'])->name('commercial-property-for-rent');
Route::get('/commercial-property-for-rent/multiple-areas/{pid?}', [CommercialPropertyRentController::class, 'index'])->name('commercial-property-for-rent.multiple-areas');
Route::get('/commercial-property-rent/getprovience', [CommercialPropertyRentController::class, 'getprovience'])->name('commercial-property-rent.getprovience');

Route::get('/agent-search', [AgentController::class, 'index'])->name('agent-search');

Route::post('quick-contact', [QuickContactController::class, 'index'])->name('quick-contact');
Route::post('contactus', [QuickContactController::class, 'contactUs'])->name('contactus');
Route::post('insure-contact-mail', [QuickContactController::class, 'insureContactMail'])->name('insure-contact-mail');
Route::post('finance-contact-mail', [QuickContactController::class, 'financeContactMail'])->name('finance-contact-mail');
Route::post('sell-contact-mail', [QuickContactController::class, 'sellContactMail'])->name('sell-contact-mail');
Route::get('thanks-sell-contact-mail', [QuickContactController::class, 'thanksRedirectSellContactMail'])->name('thanks-sell-contact-mail');

Route::get('jobs', [JobController::class, 'jobs'])->name('jobs');
Route::get('job/{job_title}', [JobController::class, 'jobdetail'])->name('job');
Route::post('job_applied/thank_you', [JobController::class, 'thankYou'])->name('job.thank_you');
Route::post('apply-for-job', [AppliedJobController::class, 'applyForJob'])->name('apply-for-job');

Route::get('property-management-quote-request', [PropertyManagementController::class, 'propertyManagementQuoteRequest'])->name('property-management-quote-request');
Route::get('online-services/online-applications/property-management-quote-request', [PropertyManagementController::class, 'propertyManagementQuoteRequests'])->name('online-services.online-applications.property-management-quote-request');
Route::post('property-quote-request-email', [PropertyManagementController::class, 'propertyQuoteRequestEmail'])->name('property-quote-request-email');
Route::get('report-maintenance-issues', [PropertyManagementController::class, 'reportMaintenanceIssues'])->name('report-maintenance-issues');
Route::get('online-services/report-maintenance-issues', [PropertyManagementController::class, 'reportMaintenanceIssuess'])->name('online-services.report-maintenance-issues');
Route::post('report-maintenance-issues-email', [PropertyManagementController::class, 'reportMaintenanceIssuesEmail'])->name('report-maintenance-issues-email');


Route::post('subscriber-newsletter', [NewsLetterSubscriberController::class, 'subscriberdNewLetter'])->name('subscriber-newsletter');
Route::get('newsletter-signup', [NewsLetterSubscriberController::class, 'index'])->name('newsletter-signup');

Route::get('admin/export-weekly-property-report', [WeeklyPropertyReportController::class, 'export'])->name('admin.export-weekly-property-report');

Route::get('admin/remove-sold-property', [RemoveSoldPropertyController::class, 'removeSoldProperty'])->name('admin.remove-sold-property');

Route::get('contractors', [ContractorController::class, 'index'])->name('contractors');
Route::get('contractors/contractors-thank-you', [ContractorController::class, 'thanks'])->name('contractors.contractors-thank-you');
Route::post('applyContractor', [ContractorController::class, 'applyContractor'])->name('applyContractor');


Route::get('property-to-rent-by-area', [PropertyRentByArea::class, 'index'])->name('property-to-rent-by-area');
Route::get('cape-town/property-to-rent-atlantic-seaboard', [PropertyRentByArea::class, 'atlanticSeaboardPropertyArea'])->name('cape-town.property-to-rent-atlantic-seaboard');
Route::get('cape-town/property-to-rent-southern-suburbs', [PropertyRentByArea::class, 'southernSuburbsPropertyArea'])->name('cape-town.property-to-rent-southern-suburbs');
Route::get('cape-town/property-to-rent-somerset-west', [PropertyRentByArea::class, 'somersetWestPropertyArea'])->name('cape-town.property-to-rent-somerset-west');
Route::get('cape-town/property-to-rent-northern-suburbs', [PropertyRentByArea::class, 'northernSuburbsPropertyArea'])->name('cape-town.property-to-rent-northern-suburbs');

Route::get('durban/property-to-rent-berea', [PropertyRentByArea::class, 'bereaPropertyArea'])->name('durban.property-to-rent-berea');
Route::get('durban/property-to-rent-durban-central', [PropertyRentByArea::class, 'durbanCentralPropertyArea'])->name('durban.property-to-rent-durban-central');
Route::get('durban/property-to-rent-golden-mile', [PropertyRentByArea::class, 'goldenMilePropertyArea'])->name('durban.property-to-rent-golden-mile');
Route::get('durban/property-to-rent-pinetown', [PropertyRentByArea::class, 'pineTownPropertyArea'])->name('durban.property-to-rent-pinetown');
Route::get('durban/property-to-rent-umhlanga', [PropertyRentByArea::class, 'umhlangaPropertyArea'])->name('durban.property-to-rent-umhlanga');

Route::get('east-london/property-to-rent-southernwood', [PropertyRentByArea::class, 'southernwoodPropertyArea'])->name('east-london.property-to-rent-southernwood');
Route::get('east-london/property-to-rent-quigney', [PropertyRentByArea::class, 'quigneyPropertyArea'])->name('east-london.property-to-rent-quigney');
Route::get('east-london/property-to-rent-beacon-bay', [PropertyRentByArea::class, 'beaconbayPropertyArea'])->name('east-london.property-to-rent-beacon-bay');
Route::get('east-london/property-to-rent-gonubie', [PropertyRentByArea::class, 'gonubiePropertyArea'])->name('east-london.property-to-rent-gonubie');
Route::get('east-london/property-to-rent-nahoon', [PropertyRentByArea::class, 'nahoonPropertyArea'])->name('east-london.property-to-rent-nahoon');

Route::get('johannesburg/property-to-rent-sandton', [PropertyRentByArea::class, 'sandtonPropertyArea'])->name('johannesburg.property-to-rent-sandton');
Route::get('johannesburg/property-to-rent-modderfontein', [PropertyRentByArea::class, 'modderfonteinPropertyArea'])->name('johannesburg.property-to-rent-modderfontein');
Route::get('johannesburg/property-to-rent-midrand', [PropertyRentByArea::class, 'midrandPropertyArea'])->name('johannesburg.property-to-rent-midrand');
Route::get('johannesburg/sandton/property-to-rent-fourways', [PropertyRentByArea::class, 'fourwaysPropertyArea'])->name('johannesburg.sandton.property-to-rent-fourways');
Route::get('johannesburg/property-to-rent-bedfordview', [PropertyRentByArea::class, 'bedfordviewPropertyArea'])->name('johannesburg.property-to-rent-bedfordview');


Route::get('johannesburg/property-to-rent-yeoville', [PropertyRentByArea::class, 'yeovillePropertyArea'])->name('johannesburg.property-to-rent-yeoville');
Route::get('johannesburg/property-rent-in-hillbrow-berea', [PropertyRentByArea::class, 'hillbrowBereaPropertyArea'])->name('johannesburg.property-rent-in-hillbrow-berea');
Route::get('johannesburg/property-to-rent-braamfontein', [PropertyRentByArea::class, 'braamfonteinPropertyArea'])->name('johannesburg.property-to-rent-braamfontein');
Route::get('johannesburg/property-rent-in-joubert-park', [PropertyRentByArea::class, 'joubertParkPropertyArea'])->name('johannesburg.property-rent-in-joubert-park');


Route::get('portelizabeth/property-to-rent-summerstrand', [PropertyRentByArea::class, 'summerstrandPropertyArea'])->name('portelizabeth.property-to-rent-summerstrand');
Route::get('portelizabeth/property-to-rent-kabega-park', [PropertyRentByArea::class, 'kabegaPropertyArea'])->name('portelizabeth.property-to-rent-kabega-park');
Route::get('portelizabeth/property-to-rent-westering', [PropertyRentByArea::class, 'westringPropertyArea'])->name('portelizabeth.property-to-rent-westering');
Route::get('portelizabeth/property-to-rent-central', [PropertyRentByArea::class, 'centralPropertyArea'])->name('portelizabeth.property-to-rent-central');
Route::get('portelizabeth/property-to-rent-lorraine', [PropertyRentByArea::class, 'lorrainePropertyArea'])->name('portelizabeth.property-to-rent-lorraine');

Route::get('pretoria/property-to-rent-pretoria-north', [PropertyRentByArea::class, 'pretoriaNorthPropertyArea'])->name('pretoria.property-to-rent-pretoria-north');
Route::get('pretoria/property-to-rent-pretoria-east', [PropertyRentByArea::class, 'pretoriaEastPropertyArea'])->name('pretoria.property-to-rent-pretoria-east');
Route::get('pretoria/property-to-rent-moot', [PropertyRentByArea::class, 'mootPropertyArea'])->name('pretoria.property-to-rent-moot');
Route::get('pretoria/property-to-rent-centurion', [PropertyRentByArea::class, 'centurionPropertyArea'])->name('pretoria.property-to-rent-centurion');
Route::get('pretoria/property-to-rent-arcadia', [PropertyRentByArea::class, 'arcadiaPropertyArea'])->name('pretoria.property-to-rent-arcadia');

Route::get('cape-town/property-to-rent-cbd-cape-town', [PropertyRentByArea::class, 'capeTownPropertyArea'])->name('cape-town.property-to-rent-cbd-cape-town');

// create route for RentController controller
Route::get('rent', [RentController::class, 'index'])->name('rent');
Route::get('rent/rental-services', [RentController::class, 'rentalServices'])->name('rent.rental-services');
Route::get('rent/tenant-services', [RentController::class, 'tenantServices'])->name('rent.tenant-services');
Route::get('rent/vacancy-marketing', [RentController::class, 'vacancyMarketing'])->name('rent.vacancy-marketing');
Route::get('rent/tenant-screening', [RentController::class, 'tenantScreening'])->name('rent.tenant-screening');
Route::get('rent/tenant-guide', [RentController::class, 'tenantGuide'])->name('rent.tenant-guide');
Route::get('rental-reports', [RentController::class, 'rentalReports'])->name('rental-reports');
Route::get('rent/faqs', [RentController::class, 'faqs'])->name('rent.faqs');
