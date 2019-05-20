<?php

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

// Route::prefix('brediinstitucional')->group(function() {
//     Route::get('/', 'BrediInstitucionalController@index');
// });


Route::prefix(config('bredidashboard.prefix'))->middleware('auth', Bredi\BrediDashboard\Http\Middleware\ValidaPermissao::class)->as('brediinstitucional::')->group(
function () {
    Route::get('quem-somos/form', ['uses' => 'QuemSomosController@edit', 'permissao' => 'controle.quem-somos.edit'])->name('controle.quem-somos.edit');
    Route::post('quem-somos/update', ['uses' => 'QuemSomosController@update', 'permissao' => 'controle.quem-somos.update'])->name('controle.quem-somos.update');
    
    Route::get('empresa-contato/form', ['uses' => 'EmpresaContatoController@edit', 'permissao' => 'controle.empresa-contato.edit'])->name('controle.empresa-contato.edit');
    Route::post('empresa-contato/update', ['uses' => 'EmpresaContatoController@update', 'permissao' => 'controle.empresa-contato.update'])->name('controle.empresa-contato.update');
});