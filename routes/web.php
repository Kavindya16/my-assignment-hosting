<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\CheckoutPage;
use App\Http\Livewire\ManageProducts;
use App\Models\Order;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;














/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect('/home');
});
Route::get('/', function () {
    return redirect('/home');
});



/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard');

  Route::get('/home', function () {
    return view('home');
})->name('home');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Route::resource('pets', PetController::class);
});
/*
|--------------------------------------------------------------------------|
| Shop Routes (Public)
|--------------------------------------------------------------------------|
*/
Route::get('/shop', function () {
    return view('shop-all');
})->name('shop.home');

Route::get('/shop/all', function () {
    $products = \App\Models\Pet::with('category')->get();
    return view('shop.index', compact('products'));
})->name('shop.all');

Route::get('/shop/category/{category}', function ($category) {
    $products = \App\Models\Pet::where('category_id', $category)->get();
    return view('shop.category', compact('products'));
})->name('shop.category');




Route::get('/shop/wear', function () {
    return view('shop.wear');
})->name('shop.wear');

Route::get('/shop/walk', function () {
    return view('shop.walk');
})->name('shop.walk');

Route::get('/shop/living', function () {
    return view('shop.living');
})->name('shop.living');

Route::get('/shop/travel', function () {
    return view('shop.travel');
})->name('shop.travel');

Route::get('/shop/{category}', function ($category) {
    return view('shop.category', compact('category'));
});

Route::get('/shop-all', function () {
    return view('shop-all');
});

Route::get('/shop/wear', function () {
    return view('shop.wear');
})->name('shop.wear');

Route::get('/shop/walk', function () {
    return view('shop.walk');
})->name('shop.walk');

Route::get('/shop/living', function () {
    return view('shop.living');
})->name('shop.living');

Route::get('/shop/travel', function () {
    return view('shop.travel');
})->name('shop.travel');

Route::get('/bakery', function () {
    return view('bakery');
});

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');








Route::get('/cart', function () {
    $cart = session()->get('cart', []);
    return view('cart', compact('cart'));
})->name('cart.index');


/*
|--------------------------------------------------------------------------
| CART PAGE
|--------------------------------------------------------------------------
*/
Route::get('/cart', function () {
    $cart = session()->get('cart', []);
    return view('cart', compact('cart'));
})->name('cart.index');


/*
|--------------------------------------------------------------------------
| ADD TO CART
|--------------------------------------------------------------------------
*/
Route::get('/add-to-cart', function () {

    $id = request('id');   // product unique id

    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['qty']++;
    } else {
        $cart[$id] = [
            'name'  => request('name'),
            'price' => request('price'),
            'image' => request('image'),
            'qty'   => 1
        ];
    }

    session()->put('cart', $cart);

    return redirect()->route('cart.index');

})->name('cart.add');


/*
|--------------------------------------------------------------------------
| INCREASE QTY
|--------------------------------------------------------------------------
*/
Route::get('/cart/increase/{id}', function ($id) {
    $cart = session()->get('cart');

    if (isset($cart[$id])) {
        $cart[$id]['qty']++;
        session()->put('cart', $cart);
    }

    return back();
})->name('cart.increase');


/*
|--------------------------------------------------------------------------
| DECREASE QTY
|--------------------------------------------------------------------------
*/
Route::get('/cart/decrease/{id}', function ($id) {
    $cart = session()->get('cart');

    if (isset($cart[$id]) && $cart[$id]['qty'] > 1) {
        $cart[$id]['qty']--;
        session()->put('cart', $cart);
    }

    return back();
})->name('cart.decrease');


/*
|--------------------------------------------------------------------------
| REMOVE ITEM
|--------------------------------------------------------------------------
*/
Route::get('/cart/remove/{id}', function ($id) {
    $cart = session()->get('cart');

    if (isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }

    return back();
})->name('cart.remove');




Route::get('/manage-products', ManageProducts::class)->name('manage.products');









Route::get('/admin-orders', function(){
    $orders = \App\Models\Order::latest()->get();
    return view('admin-orders', compact('orders'));
    
});


Route::get('/admin/orders', function () {
    $orders = Order::latest()->get();
    return view('admin-orders', compact('orders'));
})->name('admin.orders');

Route::middleware(['auth'])->group(function(){

    Route::get('/manage-products', function () {
        if (!auth()->user()->is_admin) abort(403);
        return view('manage-products');
    });

   Route::get('/admin/orders', function () {
    abort_unless(auth()->user()->is_admin, 403);

    $orders = \App\Models\Order::latest()->get();
    return view('admin-orders', compact('orders'));
});


});

Route::middleware(['auth','admin'])->group(function () {

    Route::get('/manage-products', function () {
        return view('manage-products');
    });

    Route::get('/admin/orders', function () {
        $orders = \App\Models\Order::latest()->get();
        return view('admin.orders', compact('orders'));
    });

});





Route::post('/place-order', function () {
    $cart = Session::get('cart', []);

    if (empty($cart)) {
        return redirect('/cart');
    }

    // For now just clear the cart and go to thank you
    Session::forget('cart');

    return redirect('/home')->with('success', 'Order placed successfully!');
})->name('place.order');


Route::post('/place-order', [OrderController::class, 'store'])->name('place.order')->middleware('auth');


Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thankyou');







Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/my-orders', function () {
    $orders = \App\Models\Order::where('email', auth()->user()->email)
                ->latest()
                ->get();

    return view('my-orders', compact('orders'));
})->middleware('auth');




Route::get('/admin/products', ManageProducts::class)->middleware('auth');



Route::middleware(['auth'])->group(function () {

    Route::get('/admin', [AdminController::class, 'dashboard']);


    Route::get('/admin/orders', [AdminController::class, 'orders']);

});

Route::post('/place-order', [CheckoutController::class, 'placeOrder']);


Route::get('/checkout', function () {
    return view('checkout');
});



Route::post('/place-order', [CheckoutController::class, 'placeOrder']);

Route::get('/admin/products', [AdminController::class, 'products']);
Route::post('/admin/products', [AdminController::class, 'storeProduct']);
Route::post('/admin/products/update/{id}', [AdminController::class, 'updateProduct']);
Route::get('/admin/products/delete/{id}', [AdminController::class, 'deleteProduct']);


Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});
