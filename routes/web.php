<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProdutoController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function() {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::resource('produtos', ProdutoController::class)->middleware(['auth:sanctum', 'verified']);


Route::get('/insert-json-file-to-database-table', function(){
	$json = file_get_contents(storage_path('./produtos/produtos.json'));
	$objs = json_decode($json,true);
	foreach ($objs as $obj)  {
		foreach ($obj as $key => $value) {
			$insertArr[str_slug($key,'_')] = $value;
		}
		DB::table('produtos')->insert($insertArr);
	}
	dd("Produtos adicionados a lista com sucesso!");
});