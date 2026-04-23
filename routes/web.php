<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ctrlDatos;
use App\Http\Controllers\JsonAlvaroController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});
Route::get('/datos', [ctrlDatos::class, 'AccesoDatosVista']);
Route::get('/datos-link', [ctrlDatos::class, 'AccesoDatosVistaLink']);
Route::get('/api-mia', [ctrlDatos::class, 'AccesoDatosApiMia']);

//ruta en netflify

Route::get('/alvarus', [ctrlDatos::class, 'AccesoAlvarus']);
Route::get('/vista_mundo', [ctrlDatos::class, 'AccesosDatosLiinkMundoITI']);

Route::get('/apiMia', function () {
    $jsonPath = base_path('apiMia.json');

    if (!file_exists($jsonPath)) {
        abort(404);
    }

    $jsonContent = file_get_contents($jsonPath);

    return response($jsonContent, 200)->header('Content-Type', 'application/json');
});
Route::get('/datosapinia', [ctrlDatos::class, 'AccesoDatosJsonAlvaro']);

Route::get('/json-alvaro', [JsonAlvaroController::class, 'index'])->name('json.alvaro.index');
Route::get('/json-alvaro/detalle/{index}', [JsonAlvaroController::class, 'show'])->name('json.alvaro.show');

use App\Http\Controllers\CategoryWebController;
use App\Http\Controllers\ProductWebController;
use App\Http\Controllers\Api\ProductController as ApiProductController;
use App\Http\Controllers\Api\CategoryController as ApiCategoryController;

// CRUD visual: Categories y Products (Blade)
Route::resource('categories', CategoryWebController::class)->except(['show']);
Route::resource('products', ProductWebController::class)->except(['show']);

// Ruta web de vista tipo tienda para los endpoints de API (preview HTML)
// NOTA: No devuelve JSON, es una vista web separada para visualización humana.
Route::get('api/products/view', [ProductWebController::class, 'index'])->name('api.products.view');

// Allow /api/products to serve JSON for API clients and redirect browsers to the Blade listing.
Route::get('api/products', function (\Illuminate\Http\Request $request, ApiProductController $apiCtrl) {
    if ($request->wantsJson() || str_contains($request->header('Accept', ''), 'application/json')) {
        return $apiCtrl->index();
    }
    return redirect()->route('products.index');
});

// Allow /api/categories to serve JSON for API clients and show Blade categories shop for browsers
Route::get('api/categories', function (\Illuminate\Http\Request $request, ApiCategoryController $apiCtrl) {
    if ($request->wantsJson() || str_contains($request->header('Accept', ''), 'application/json')) {
        return $apiCtrl->index();
    }
    // Resolve the controller instance and call index() on it (non-static)
    return app()->make(CategoryWebController::class)->index();
});

require __DIR__.'/auth.php';
