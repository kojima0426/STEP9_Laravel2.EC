<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\MyPageController;

Route::get('/', [ProductController::class, 'index']);
// 商品登録画面を開く

//マイページを開く
Route::get('/mypage',[MyPageController::class, 'index'])->middleware('auth')->name('mypage');

Route::get('/products/create', [ProductController::class, 'create']) ->name('products.create');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products', [ProductController::class, 'index']) ->name('products.index');

Route::get('/products/{product}/purchase', [ProductController::class, 'purchase'])
    ->name('products.purchase');

Route::post('/products/{product}/purchase', [ProductController::class, 'purchaseStore'])
    ->name('products.purchase.store');

Route::get('/dashboard', function () {
    return redirect()->route('products.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/products/{product}/like', [LikeController::class, 'store'])
    ->name('products.like');

Route::delete('/products/{product}/like', [LikeController::class, 'unlikeProduct'])
    ->name('products.unlike');

require __DIR__.'/auth.php';

// 商品登録画面を開く
Route::get('/products/create', [ProductController::class, 'create'])
    ->name('products.create');

// 商品を登録
Route::post('/products', [ProductController::class, 'store'])
    ->name('products.store');
