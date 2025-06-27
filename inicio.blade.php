<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-900">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/Logo.jpg') }}" style="width:200px;"> 
            </a>
            <div class="space-x-6">
                <a href="/inicio" class="text-gray-700 hover:text-purple-600">Inicio</a>
                <a href="/nosotros" class="text-gray-700 hover:text-purple-600">Nosotros</a>
                <a href="/contacto" class="text-gray-700 hover:text-purple-600">Contacto</a>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <main class="max-w-6xl mx-auto px-6 py-10">

        <!-- Search section -->
        <h1 class="text-3xl font-semibold mb-2">Encuentra tu Paquete</h1>
        <p class="text-gray-600 mb-4">Destino o Paquete</p>
        <input type="text" placeholder="Busca destinos, hoteles o paquetes"
            class="w-full p-3 border border-gray-300 rounded-lg mb-10">

        <!-- Popular Destinations -->
        <h2 class="text-2xl font-semibold mb-4">Destinos Populares</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-10">
            <img src="{{ asset('images/Paris.png') }}" alt="Popular 1" class="rounded-lg">
            <img src="{{ asset('images/NY.png') }}" alt="Popular 2" class="rounded-lg">
            <img src="{{ asset('images/Playa.png') }}" alt="Popular 3" class="rounded-lg">
        </div>

        <!-- Travel Packages -->
        <h2 class="text-2xl font-semibold mb-4">Paquetes de Viaje</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-orange-50 p-6 rounded-lg">
                <p class="text-sm text-gray-600 mb-2">Mejor Valor</p>
                <h3 class="text-lg font-bold">Paris Explorer</h3>
                <p class="text-sm text-gray-600 mt-2 mb-4">
                    5 nights, 4-star hotel, flights included. Eiffel Tower tour and Seine cruise.
                </p>
                <div class="flex space-x-2">
                    <a href="#" class="bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700">Ver Detalles</a>
                    <a href="#" class="bg-orange-200 text-green-700 px-4 py-2 rounded hover:bg-gray-200">Book Now</a>
                </div>
            </div>
            <div class="bg-orange-50 p-6 rounded-lg">
                <p class="text-sm text-gray-600 mb-2">Diversión Familiar</p>
                <h3 class="text-lg font-bold">Cancun Getaway</h3>
                <p class="text-sm text-gray-600 mt-2 mb-4">
                    7 nights, all-inclusive resort, airport transfer, kids stay free.
                </p>
                <div class="flex space-x-2">
                    <a href="#" class="bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700">Ver Detalles</a>
                    <a href="#" class="bg-orange-200 text-green-700 px-4 py-2 rounded hover:bg-gray-200">Book Now</a>
                </div>
            </div>
            <div class="bg-orange-50 p-6 rounded-lg">
                <p class="text-sm text-gray-600 mb-2">Aventura</p>
                <h3 class="text-lg font-bold">Tokyo Discovery</h3>
                <p class="text-sm text-gray-600 mt-2 mb-4">
                    6 nights, city center hotel, guided city tour, sushi workshop.
                </p>
                <div class="flex space-x-2">
                    <a href="#" class="bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700">Ver Detalles</a>
                    <a href="#" class="bg-orange-200 text-green-700 px-4 py-2 rounded hover:bg-gray-200">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Destination Gallery -->
        <h2 class="text-2xl font-semibold mb-4">Galería de Destino</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <img src="{{ asset('images/Inglaterra.png') }}" alt="Gallery 1" class="rounded-lg">
            <img src="{{ asset('images/Mexico.png') }}" alt="Gallery 2" class="rounded-lg">
            <img src="{{ asset('images/Toronto.png') }}" alt="Gallery 3" class="rounded-lg">
        </div>
    </main>

</body>
</html>
