<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Apasear.mx - Inicio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        naranja: '#F97316',
                        verde: '#22C55E'
                    }
                }
            }
        }
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
            <a href="/destinos" class="text-gray-700 hover:text-purple-600">Destinos</a>
            <a href="/nosotros" class="text-gray-700 hover:text-purple-600">Nosotros</a>
            <a href="/contacto" class="text-gray-700 hover:text-purple-600">Contacto</a>
        </div>
    </div>
</nav>

<div class="max-w-6xl mx-auto py-8 px-4">

    {{-- Categorías --}}
    <div class="flex justify-center space-x-12 mb-10">
        <div class="flex flex-col items-center cursor-pointer">
            <img src="{{ asset('images/icons8-puente.png') }}" class="w-12 h-12 mb-2" alt="Come">
            <span class="text-purple-700 font-semibold">CIUDADES</span>
        </div>
        <div class="flex flex-col items-center cursor-pointer">
            <img src="{{ asset('images/icons8-playa.png') }}" class="w-12 h-12 mb-2" alt="Juega">
            <span class="text-red-500 font-semibold">PLAYAS</span>
        </div>
        <div class="flex flex-col items-center cursor-pointer">
            <img src="{{ asset('images/icons8-tarjeta.png') }}" class="w-12 h-12 mb-2" alt="Relájate">
            <span class="text-gray-700 font-semibold">INTERNACIONALES</span>
        </div>
    </div>

    {{-- Viajes --}}
    <div class="grid md:grid-cols-2 gap-8">
        {{-- Viaje 1 --}}
        <div class="border rounded-lg overflow-hidden shadow-md">
            <img src="{{ asset('images/nyc.jpg') }}" class="w-full h-60 object-cover" alt="Nueva York">
            <div class="p-4">
                <div class="flex items-center gap-2 text-yellow-500 mb-2">
                    <img src="{{ asset('icons/pina.png') }}" class="w-5 h-5" alt="">
                    <h2 class="text-lg font-semibold text-purple-700">Dale una mordida a la Gran Manzana</h2>
                </div>
                <p class="italic text-gray-500">Nueva York, EEUU</p>
                <a href="{{ route('viaje.detalle', ['id' => 1]) }}" class="mt-4 inline-block bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800">
                    Más información
                </a>
            </div>
        </div>

        {{-- Viaje 2 --}}
        <div class="border rounded-lg overflow-hidden shadow-md">
            <img src="{{ asset('images/cancun.jpg') }}" class="w-full h-60 object-cover" alt="Cancún">
            <div class="p-4">
                <div class="flex items-center gap-2 text-red-500 mb-2">
                    <img src="{{ asset('icons/globo.png') }}" class="w-5 h-5" alt="">
                    <h2 class="text-lg font-semibold text-purple-700">Conoce las profundidades del mar y su vida</h2>
                </div>
                <p class="italic text-gray-500">Cancún, México</p>
                <a href="{{ route('viaje.detalle', ['id' => 2]) }}" class="mt-4 inline-block bg-purple-700 text-white px-4 py-2 rounded hover:bg-purple-800">
                    Más información
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-6 mt-10">
    <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
        <p>&copy; 2025 Apasear.mx. Todos los derechos reservados.</p>

        <div class="flex space-x-6 mt-4 md:mt-0 items-center">
            <a href="#" class="flex items-center space-x-1 hover:text-naranja">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 5.009 3.676 9.147 8.438 9.876v-6.987h-2.54v-2.889h2.54V9.845c0-2.506 1.493-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.261c-1.242 0-1.63.772-1.63 1.562v1.875h2.773l-.443 2.889h-2.33V22C18.324 21.147 22 17.009 22 12z"/>
                </svg>
                <span>Facebook</span>
            </a>
            <a href="#" class="flex items-center space-x-1 hover:text-naranja">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M7.75 2C4.245 2 2 4.245 2 7.75v8.5C2 19.755 4.245 22 7.75 22h8.5C19.755 22 22 19.755 22 16.25v-8.5C22 4.245 19.755 2 16.25 2h-8.5zM12 7.75a4.25 4.25 0 1 1 0 8.5 4.25 4.25 0 0 1 0-8.5zM7.25 5.5a.75.75 0 1 1 0 1.5.75.75 0 0 1 0-1.5zM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"/>
                </svg>
                <span>Instagram</span>
            </a>
            <a href="#" class="flex items-center space-x-1 hover:text-naranja">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.26 4.26 0 0 0 1.88-2.35 8.45 8.45 0 0 1-2.7 1.03 4.23 4.23 0 0 0-7.2 3.85A12.01 12.01 0 0 1 3.15 4.87a4.23 4.23 0 0 0 1.31 5.65 4.2 4.2 0 0 1-1.92-.53v.05a4.24 4.24 0 0 0 3.39 4.15 4.25 4.25 0 0 1-1.91.07 4.24 4.24 0 0 0 3.95 2.94A8.5 8.5 0 0 1 2 19.54 12 12 0 0 0 8.29 21c7.55 0 11.68-6.26 11.68-11.68 0-.18 0-.36-.01-.54A8.36 8.36 0 0 0 22.46 6z"/>
                </svg>
                <span>Twitter</span>
            </a>
        </div>
    </div>
</footer>
</body>
</html>
