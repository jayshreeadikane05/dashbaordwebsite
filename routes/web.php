<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GetInTouchController;
use App\Http\Controllers\StoredController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login')->middleware('guest:admin');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function () {

 
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/contactentrie', [AdminController::class, 'contactentrie'])->name('admin.contactentrie');
    Route::get('/admin/newsletterentries', [AdminController::class, 'newsletterentries'])->name('admin.newsletterentries');
    Route::get('/admin/export', [AdminController::class, 'export'])->name('admin.export');
    Route::get('/admin/exportNewsletter', [AdminController::class, 'exportNewsletter'])->name('admin.exportNewsletter');
    Route::get('/admin/addblog', [BlogController::class, 'showForm'])->name('admin.addblog'); 
    Route::get('/admin/viewblog', [BlogController::class, 'viewBlog'])->name('admin.viewblog'); 
    Route::post('/upload-image', [BlogController::class, 'uploadImage'])->name('admin.uploadImage');

    Route::post('/admin/addblog', [BlogController::class, 'store'])->name('admin.storeblog');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/admin/editblog/{id}', [BlogController::class, 'edit'])->name('admin.editblog');
    Route::get('/admin/previewblog/{id}', [BlogController::class, 'previewblog'])->name('admin.previewblog');
    Route::delete('/blogs/{id}', [BlogController::class, 'delete'])->name('blogs.delete');
    Route::put('/admin/updateblog', [BlogController::class, 'update'])->name('admin.updateblog');
    Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::delete('/category/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/{id}', [CategoryController::class, 'preview'])->name('admin.preview');
    Route::post('/tag', [TagsController::class, 'store'])->name('tag.store');
    Route::get('/admin/tag', [TagsController::class, 'index'])->name('admin.tag');
    Route::delete('/tag/{id}', [TagsController::class, 'delete'])->name('tag.delete');
    Route::get('/tag/{id}/edit', [TagsController::class, 'edit'])->name('tag.edit');
    Route::put('/tag/{id}', [TagsController::class, 'update'])->name('tag.update');
    Route::get('/tag/{id}', [TagsController::class, 'preview'])->name('admin.preview');
 
    Route::post('/admin/addvideo', [VideoController::class, 'store'])->name('admin.storevideo');
    Route::get('/admin/addvideo', [VideoController::class, 'showForm'])->name('admin.addvideo');
    Route::get('/admin/viewvideo', [VideoController::class, 'viewvideo'])->name('admin.viewvideo'); 
    Route::delete('/videos/{id}', [VideoController::class, 'delete'])->name('videos.delete');
    Route::get('/admin/editvideo/{id}', [VideoController::class, 'edit'])->name('admin.editvideo');
    Route::put('/admin/updatevideo', [VideoController::class, 'update'])->name('admin.updatevideo');


    Route::get('/admin/users', [AdminAuthController::class, 'getUsers'])->name('admin.users');

    Route::get('/admin/create-user', [AdminAuthController::class, 'showCreateUserForm'])->name('admin.createUser');
    Route::post('/admin/create-user', [AdminAuthController::class, 'storeUser'])->name('admin.storeUser');

    Route::get('/admin/pages', [PageController::class, 'viewpage'])->name('admin.viewpage'); 
});

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/services', [ServicesController::class, 'services'])->name('services');

Route::get('/about-us',[AboutUsController::class, 'index'])->name('about-us');
Route::get('/contact',[ContactController::class, 'index'])->name('contact');
Route::get('/cookies',[StoredController::class, 'index'])->name('cookies');
Route::get('/privacy',[StoredController::class, 'privacy'])->name('privacy');
Route::get('/gdpr-policy',[StoredController::class, 'gdpr'])->name('gdpr-policy');
Route::get('/subscription',[StoredController::class, 'subscription'])->name('subscription');



Route::prefix('services')->group(function () {
    Route::get('/digital-marketing', [ServicesController::class, 'digitalmarketing'])->name('services.digital-marketing');
    Route::get('/advertising-operation', [ServicesController::class, 'advertising'])->name('services.advertising-operation');
    Route::get('/visual-content', [ServicesController::class, 'visualcontent'])->name('services.visual-content');
    Route::get('/enhanced-marketing', [ServicesController::class, 'enhancedmarketing'])->name('services.enhanced-marketing');

});
Route::post('/subscribe', [SubscriptionController::class, 'store']);


Route::post('/submit-form', [ContactController::class, 'submitForm'])->name('submitForm');

Route::post('/getintouchentry', [GetInTouchController::class, 'getintouchentry'])->name('getintouchentry');

