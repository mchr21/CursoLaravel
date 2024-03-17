<?php

use App\Http\Controllers\ProductoController;
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

Route::get('/', function () {
      return view('welcome');
   // return "bienvenidos";
});

// Route::get('producto', [ProductoController::class, 'index']); 
        
// Route::get('producto/crear', [ProductoController::class, 'crear']); 

// Route::get('producto/{x}', [ProductoController::class, 'show']); 

Route::controller(ProductoController::class)->group(function () {     
  //RUTA PARA EL METODO INDEX     
  Route::get('producto', "index");      
  //RUTA PARA EL METODO CREATE     
  Route::get('producto/create', 'create');      
  //RUTA PARA EL METODO SHOW    
  Route::get('producto/{var}', 'show'); 
 });






// Route::get('/', function () {
//   //    return view('welcome');
//   return "bienvenidos";
// });

// Route::get('mensaje', function () {
//   return "este es un mensaje";
// });
      
// Route::get('producto/{variable}', function ($variable) {
//   return "este es un producto: $variable";
// });

// Route::get('productos/crear', function () {
//   return "Aqui se creará un nuevo producto";
// });

// // Route::get('producto/{variable1}/{variable2}', function ($variable1, $variable2) {
// //     return "nombre del primer producto: $variable1 y 
// //     nombre del segundo producto es: $variable2";
// // });

// Route::get('producto/{variable1}/{variable2?}', function ($variable1, $variable2=null) {
// if($variable2)  {
//   return "nombre del primer producto: $variable1 y 
//   nombre del segundo producto es: $variable2";
// }
// else{
//   return "nombre del primer producto es: $variable1";
// }
// });