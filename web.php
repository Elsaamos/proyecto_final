<?php



use App\Http\Controllers\contactoController;

use App\Http\Controllers\eventoController;

use App\Http\Controllers\notaController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
 //**CONTACTO */
route::get('/contactos', [contactoController::class, 'index'])
->name('Contacto.index');

route::get('/contactos{id}', [contactoController::class, 'show'])
->name('contacto.mostrar')->where ('id','[0-9]+');

route::get('/contactos/crear', [contactoController::class, 'create'])
->name('contacto.crear');

route::post('/contactos/crear', [contactoController::class, 'store'])
->name('contacto.guardar');

route::get('/contactos/editar{id}', [contactoController::class, 'edit'])
->name('contacto.editar')->where ('id','[0-9]+');

route::get('/contactos/update{id}', [contactoController::class, 'update'])
->name('contacto.actualizar')->where ('id','[0-9]+');

route::delete('/contactos/borar{id}', [contactoController::class, 'destroy'])
->name('contacto.borar')->where ('id','[0-9]+');

/**EVENTOS */

route::get('/eventos', [eventoController::class, 'index'])
->name('evento.index');

route::get('/eventos{id}', [eventoController::class, 'show'])
->name('evento.mostrar')->where ('id','[0-9]+');

route::get('/eventos/crear', [eventoController::class, 'create'])
->name('evento.crear');

route::post('/eventos/crear', [eventoController::class, 'store'])
->name('evento.guardar');

route::get('/eventos/editar{id}', [eventoController::class, 'edit'])
->name('evento.editar')->where ('id','[0-9]+');

route::get('/eventos/update{id}', [eventoController::class, 'update'])
->name('evento.actualizar')->where ('id','[0-9]+');

route::delete('/eventos/borar{id}', [eventoController::class, 'destroy'])
->name('evento.borar')->where ('id','[0-9]+');

/**NOTAS */

route::get('/notas', [notaController::class, 'index'])
->name('nota.index');

route::get('/notas{id}', [notaController::class, 'show'])
->name('nota.mostrar')->where ('id','[0-9]+');

route::get('/notas/crear', [notaController::class, 'create'])
->name('nota.crear');

route::post('/notas/crear', [notaController::class, 'store'])
->name('nota.guardar');

route::put('/notas/editar{id}', [notaController::class, 'edit'])
->name('nota.editar')->where ('id','[0-9]+');

route::get('/notas/update{id}', [notaController::class, 'update'])
->name('nota.actualizar')->where ('id','[0-9]+');

route::delete('/notas/borar{id}', [notaController::class, 'destroy'])
->name('nota.borar')->where ('id','[0-9]+');