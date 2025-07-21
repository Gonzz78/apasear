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

<div class="max-w-5xl mx-auto py-10 px-4">

    <h1 class="text-3xl text-purple-700 font-bold mb-2">PÁGINA DE VACACIONES</h1>
    <p class="text-gray-500 mb-6">Explora la experiencia de este viaje único.</p>

    <div class="grid md:grid-cols-2 gap-8">
        {{-- Imagen principal --}}
        <div>
            <img src="{{ asset('images/montaña.jpg') }}" alt="Viaje" class="w-full rounded shadow-lg">
        </div>

        {{-- Datos principales --}}
        <div class="space-y-4">
            <div class="flex space-x-4">
                <img src="{{ asset('icons/pina.png') }}" class="w-10 h-10" alt="Categoría">
                <img src="{{ asset('icons/globo.png') }}" class="w-10 h-10" alt="Categoría">
                <img src="{{ asset('icons/palmera.png') }}" class="w-10 h-10" alt="Categoría">
            </div>
            <img src="{{ asset('images/mapa.png') }}" alt="Mapa" class="w-full border rounded shadow-sm">

            <div class="text-4xl font-bold text-purple-700">$5780</div>
            <div class="bg-purple-100 text-purple-700 inline-block px-3 py-1 rounded">
                14 días
            </div>
            <div class="text-gray-600">
                <strong>Fechas:</strong> 27/10/23 – 9/11/35
            </div>
        </div>
    </div>

    {{-- Descripción --}}
    <div class="mt-8">
        <h2 class="text-xl font-semibold text-purple-700 mb-2">DESCRIPCIÓN:</h2>
        <p class="text-gray-700 leading-relaxed">
            Párrafo. Haz clic para editar y agregar tu propio texto. Es fácil. Puedes arrastrar y soltar este texto donde sea que quieras en tu página.
        </p>
    </div>

    {{-- Horario --}}
    <div class="mt-6">
        <h3 class="text-lg text-purple-700 font-medium">HORARIO:</h3>
        <p class="text-gray-600">7:00 am a 8:00 pm todos los días del tour.</p>
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
