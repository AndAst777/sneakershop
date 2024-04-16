    <?php

    use App\Http\Controllers\PostController;
    use App\Http\Controllers\ProductController;
    use App\Http\Controllers\ProfileController;
    use App\Models\Product;
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

    // Route::get('/blog', function () {
    //     return view('blog');
    // });

    Route::get('/', [ProductController::class, 'index'])->name('main');

    Route::get('blog', [PostController::class, 'blog'])->name('blog')->middleware(['auth', 'verified'])->name('blog');

    //Товары
    Route::post('product', [ProductController::class, 'store'])->name('product.store');
    Route::get('product{product} ', [ProductController::class, 'show'])->name('posts.show');
    // Route::post('product{product}', [ProductController::class, 'destroy'])->name('product.delete');
    Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('product{product}', [ProductController::class, 'show'])->name('product');
    Route::get('basket', [ProductController::class, 'basket'])->name('basket');
    // Route::get('addBasket_id', [ProductController::class, 'storebasket'])->name('basket')

    Route::get('admin', [ProductController::class, 'admin'])->middleware(['auth', 'verified'])->name('admin');

    // Route::get('admin', [PostController::class, 'admin'])->name('admin');
    //Новости
    Route::get('adminpost', [PostController::class, 'adminpost'])->name('adminpost');
    Route::post('post', [PostController::class, 'store'])->name('post.store');



    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__ . '/auth.php';
