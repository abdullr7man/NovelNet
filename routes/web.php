<?php
use App\Http\Controllers\BookController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\AdminBorrowedController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\AdminAuthorController;
use App\Http\Controllers\UserProfileController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/home/books', [HomeController::class, 'books'] )->name('home.books');
Route::get('/home/authors', [HomeController::class, 'authors'] )->name('home.authors');
Route::get('/home/comunity', [HomeController::class, 'comunity'] )->name('home.comunity');
Route::get('/home/aboutus', [HomeController::class, 'about'] )->name('home.about-us');
Route::get('/home/contactus', [HomeController::class, 'contact'] )->name('home.contact-us');
Route::get('/home/search', [HomeController::class, 'search'] )->name('home.search');
Route::get('/admin/register', [AdminRegisterController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/admin/register', [AdminRegisterController::class, 'register']);
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard')->middleware("isadmin");
Route::middleware(['auth', 'isadmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('books', AdminBookController::class);
});


// Books routes
Route::get('admin/books', [AdminBookController::class, 'index'])->name('admin.books.index');

// Users routes
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users.index');
    // Other routes like show, edit, destroy, etc.
});


// // Requests routes
// Route::get('admin/requests', [AdminRequestController::class, 'index'])->name('admin.requests.index');

// Borrowed Books routes
Route::get('admin/borrowed', [AdminBorrowedController::class, 'index'])->name('admin.borrowed.index');


// Route for viewing a user
Route::get('/admin/users/{user}', [UserController::class, 'show'])->name('admin.users.show');
// Add this route for deleting borrowed books
Route::delete('/borrowed-books/{id}', [AdminBorrowedController::class, 'destroy'])->name('borrowed.destroy');


// Route for deleting a user
Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');

Route::post('/borrow/{book}', [BorrowController::class, 'requestBorrow'])->name('borrow.request');
Route::post('/borrow', [BorrowController::class, 'store'])->name('borrow.store');

Route::prefix('admin')->middleware(['auth', 'isadmin'])->group(function () {
    Route::resource('authors', AdminAuthorController::class);
});

Route::get('/authors/{author}', [AdminAuthorController::class, 'show'])->name('authors.show');


// routes/web.php
Route::get('/profile', [UserProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [UserProfileController::class, 'update'])->name('profile.update');



Route::get('/my-borrowed-books', [BorrowController::class, 'index'])->name('user.borrowed-books');
Auth::routes();

