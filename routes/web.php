<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ArticlesController;

use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\MessageController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.control-panel');
})->middleware(['auth'])->name('dashboard');

// ==== routele de administrare ====>
Route::prefix('admin')->middleware(['admin'])->group(function () {

    Route::get('/users', [UsersController::class, 'showUsers'])->name('users');
    Route::get('/user-new', [UsersController::class, 'newUser'])->name('users.new');
    Route::post('/user-new', [UsersController::class, 'createUser'])->name('users.create');

    // ====> Editare Users =====
    Route::get('/user-edit/{id}', [UsersController::class, 'showEditForm'])->name('users.editForm');
    Route::put('/user-edit/{id}', [UsersController::class, 'updateUser'])->name('users.update');
    Route::delete('/user-delete/{id}', [UsersController::class, 'deleteUser'])->name('users.delete');

    Route::get('/messages', [MessageController::class, 'showMessages'])->name('admin.messages');
    Route::delete('/messages/{id}', [MessageController::class, 'deleteMessage'])->name('admin.message.delete');


    // ====>Rutele pentru paginile info

});

// ===> routele pentru categorii
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {

    // afisam categoriile
    Route::get('categories', [CategoryController::class, 'showCategories'])->name('admin.categories');
    Route::get('categories/new', [CategoryController::class, 'newCategory'])->name('admin.categories.new');
    Route::post('categories/new', [CategoryController::class, 'addCategory'])->name('admin.categories.add');

    Route::get('categories/edit/{id}', [CategoryController::class, 'editCategory'])->name('admin.categories.edit');
    Route::put('categories/edit/{id}', [CategoryController::class, 'updateCategory'])->name('admin.categories.update');
    Route::delete('categories/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('admin.categories.delete');



    // <==== routele pentru pagini ====
    Route::get('pages', [ArticlesController::class, 'showPages'])->name('admin.pages');
    Route::get('pages/new', [ArticlesController::class, 'newPage'])->name('admin.pages.new');
    Route::post('pages/new', [ArticlesController::class, 'addPage'])->name('admin.pages.add');

    Route::get('pages/edit/{id}', [ArticlesController::class, 'editPage'])->name('admin.pages.edit');
    Route::put('pages/edit/{id}', [ArticlesController::class, 'updatePage'])->name('admin.pages.update');
    Route::delete('pages/delete/{id}', [ArticlesController::class, 'deletePage'])->name('admin.pages.delete');

    Route::get('pages/categories/{id}', [ArticlesController::class, 'showCategories'])->name('admin.pages.showCategories');
    Route::put('pages/categories/{id}', [ArticlesController::class, 'setCategories'])->name('admin.pages.setCategories');

    // ==== rutele pentru galeria foto a paginilor
    Route::get('page-photos/{id}', [PhotoController::class, 'showForm'])->name('admin.pages.galery');
    Route::post('page-photos/{id}', [PhotoController::class, 'uploadPhotos'])->name('admin.pages.upload.photos');
    Route::put('page-photo/{id}', [PhotoController::class, 'savePhoto'])->name('admin.pages.save.photo');
    Route::delete('page-photos/{id}', [PhotoController::class, 'deleteAllPhotos'])->name('admin.pages.delete-all.photos');
    Route::delete('page-singlePhoto/{id}', [PhotoController::class, 'deletePhoto'])->name('admin.pages.delete.photo');
});

// <==== routele de administrare ====

// ==== routele pentru utilizatori ====>

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('profile', [ProfileController::class, 'showProfile'])->name('user.profile');
    Route::put('profile', [ProfileController::class, 'updateProfile'])->name('user.profile-update');

    //=== ruta pentru resetarea parolei
    Route::put('reset-password', [ProfileController::class, 'resetPassword'])->name('user.reset-password');
});

// <==== routele pentru utilizatori ====


// ====>rutele publice ===
Route::get('/', [PagesController::class, 'homePage'])->name('home');
Route::get('/category/{category:slug}', [PagesController::class, 'categoryPage'])->name('category');

// ==== ruta pentru paginile categoriei site-info
Route::get('/site-info', [PagesController::class, 'categoryInfo'])->name('category.info');
Route::get('/pages-info/{page:slug}', [PagesController::class, 'pageInfo'])->name('page.info');

Route::post('site-info', [MessageController::class, 'newMessage'])->name('new-message');

// <==== ruta pentru paginile categoriei site-info

Route::get('/articles', [PagesController::class, 'showArticles'])->name('articles');
Route::get('/article/{page:slug}', [PagesController::class, 'showSingleArticle'])->name('article');



Route::get('clear-cache', function () {
    // Artisan::call('key: generate');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');

    return "Cache is cleared";
});
Route::get('/test-online', function () {
    dd('i am online ^_^');
});


require __DIR__ . '/auth.php';
