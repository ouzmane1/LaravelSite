<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\OrderController;


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

Route::get('/', [WebsiteController::class, 'Accueil'])->name('websites.accueil');
Route::get('/about', [WebsiteController::class, 'About'])->name('websites.about');
Route::get('/produit', [WebsiteController::class, 'Produit'])->name('websites.produit');
Route::get('/contact', [WebsiteController::class, 'Contact'])->name('websites.contact');

Route::post('/contact/save', [WebsiteController::class, 'save'])->name('websites.save');

Route::middleware(['auth'])->group( function(){

Route::resource('categories',CategoriesController::class);//->middleware("auth");// elle genere 7 route
Route::resource('products',ProductsController::class);//->middleware("auth");// elle genere 7 route
// Route::get("/account",[WebsiteController::class,'Account'])->name('website.account');

});

// detail produit
Route::get('/detail-produit', [WebsiteController::class,'DetailProduit'])->name('website.product-detail');

Route::get('/inscription',[WebsiteController::class,'Inscription'])->name('websites.inscription');
Route::get('/connexion',[WebsiteController::class,'Connecter'])->name('websites.connexion');

Route::get("/account",[WebsiteController::class,'Account'])->name('website.account');

// route panier
Route::post("panier/addToCard", [PanierController::class,'addToCard'])->name('panier.addToCard');

Route::get('/checkout', [WebsiteController::class,'Checkout'])->name('website.checkout');

Route::get('/panier', [PanierController::class,'panier'])->name('website.panier');
Route::get('panier/delete/{indice}', [PanierController::class,'supProPanier'])->name('panier.supProPanier');
Route::get('panier:vide', [PanierController::class,'viderPanier'])->name('panier.viderPanier');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('orders',OrderController::class);
Route::resource('customers',CustomersController::class);
