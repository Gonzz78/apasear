Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/destinos', function () {
    return view('destinos');
});

Route::get('/destinos/{id}', function ($id) {
    return view('viaje-detalle', ['id' => $id]);
})->name('viaje.detalle');
