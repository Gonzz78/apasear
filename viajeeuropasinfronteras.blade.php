<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Apasear.mx - Europa Sin Fronteras II Navidad</title>
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
    <a href="#"><img src="{{ asset('images/Logo.jpg') }}" style="width:200px;"></a>
    <div class="space-x-6">
      <a href="/inicio" class="hover:text-purple-600">Inicio</a>
      <a href="/destinos" class="hover:text-purple-600">Destinos</a>
      <a href="/nosotros" class="hover:text-purple-600">Nosotros</a>
      <a href="/contacto" class="hover:text-purple-600">Contacto</a>
    </div>
  </div>
</nav>

<div class="max-w-6xl mx-auto py-8 px-4">
  <h1 class="text-3xl font-bold text-purple-700 mb-6">Europa Sin Fronteras II – Navidad</h1>

  <div class="grid md:grid-cols-3 gap-4 mb-8">
    <!-- Precio + Carrusel -->
    <div class="md:col-span-2 bg-white p-6 rounded shadow relative">
      <div class="mb-4 text-center">
        <h2 class="text-3xl font-extrabold text-purple-700">Desde <span class="text-green-600">USD 1,988</span></h2>
        <p class="text-sm text-gray-500">+ impuestos aéreos USD 988</p>
      </div>
      <div x-data="{ activeSlide: 0, slides: [
        { img: '{{ asset("images/londres.jpg") }}', alt: 'Londres' },
        { img: '{{ asset("images/paris.jpg") }}', alt: 'París' },
        { img: '{{ asset("images/valle_rin.jpg") }}', alt: 'Valle del Rhin' },
        { img: '{{ asset("images/madrid.jpg") }}', alt: 'Madrid' }
      ] }" class="relative overflow-hidden rounded-lg shadow">
        <img :src="slides[activeSlide].img" :alt="slides[activeSlide].alt"
             class="w-full h-[350px] object-cover transition-all duration-500 rounded-lg">
        <button @click="activeSlide = (activeSlide === 0) ? slides.length - 1 : activeSlide - 1"
                class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white bg-opacity-80 hover:bg-opacity-100 p-2 rounded-full shadow text-2xl">‹</button>
        <button @click="activeSlide = (activeSlide === slides.length - 1) ? 0 : activeSlide + 1"
                class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white bg-opacity-80 hover:bg-opacity-100 p-2 rounded-full shadow text-2xl">›</button>
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
          <template x-for="(slide, i) in slides" :key="i">
            <div @click="activeSlide = i"
                 :class="{ 'bg-purple-700': activeSlide === i, 'bg-white': activeSlide !== i }"
                 class="w-3 h-3 rounded-full cursor-pointer border border-gray-300"></div>
          </template>
        </div>
      </div>
    </div>

    <!-- Clave y Datos -->
    <div class="bg-white p-6 rounded shadow flex flex-col justify-between text-sm text-gray-800 space-y-2">
      <div class="border border-purple-700 rounded-lg p-4 text-center">
        <p class="text-xs uppercase text-purple-700 font-semibold">Clave</p>
        <p class="text-2xl font-bold">TVG-4087</p>
      </div>
      <div class="space-y-1 mt-4">
        <p><strong>Vuelo incluido con:</strong> Aerolínea operadora estándar.</p>
        <p><strong>Tipo:</strong> Grupal acompañado.</p>
        <p><strong>Visitas:</strong> Reino Unido, Francia, Luxemburgo, Alemania, Suiza, Austria, Italia, España.</p>
        <p><strong>Saliendo desde:</strong> Ciudad de México.</p>
        <p><span class="font-semibold">Fecha de salida:</span> diciembre 12, 2025</p>
      </div>
    </div>
  </div>

  <!-- Itinerario -->
  <div class="mb-8">
    <h2 class="text-2xl font-semibold mb-4">Itinerario Resumido</h2>
    <ul class="list-disc list-inside text-gray-700 space-y-1">
      <li>Día 1 – México → Londres (noche a bordo).</li>
      <li>Día 2 – Llegada a Londres, traslado al hotel.</li>
      <li>Día 3 – Tour panorámico por Londres.</li>
      <li>Días 4–5 – Londres → París vía tren/ferry.</li>
      <li>Días 6 – Visita panorámica de París.</li>
      <li>Día 7 – Día libre en París o excursión opcional.</li>
      <li>Día 8 – Ruta Champagne → Luxemburgo → Alemania (Valle del Rhin).</li>
      <li>Día 9 – Heidelberg y Friburgo (Selva Negra) → Suiza.</li>
      <li>Día 10–17 – Continuación por Suiza, Austria, Italia, finalizando en Madrid.</li>
      <li>Día 18 – Madrid: tour panorámico, opcional visita a Toledo.</li>
      <li>Día 19 – Madrid → México (vuelo de regreso).</li>
    </ul>
  </div>

  <!-- Incluye / No incluye -->
  <div class="grid md:grid-cols-2 gap-8 mb-8">
    <div>
      <h2 class="text-2xl font-semibold mb-2">Incluye</h2>
      <ul class="list-disc list-inside">
        <li>Vuelos redondos Ciudad de México‑Europa‑Madrid‑CDMX.</li>
        <li>Alojamiento según itinerario.</li>
        <li>Desayuno diario.</li>
        <li>Traslados aeropuerto‑hotel‑aeropuerto.</li>
        <li>Guía acompañante y visitas panorámicas según recorrido.</li>
        <li>Transportación terrestre en autocar turístico.</li>
      </ul>
    </div>
    <div>
      <h2 class="text-2xl font-semibold mb-2">No incluye</h2>
      <ul class="list-disc list-inside">
        <li>Impuestos aéreos USD 988.</li>
        <li>Gastos personales, propinas.</li>
        <li>Excursiones opcionales.</li>
        <li>Todo lo que no se menciona como incluido.</li>
      </ul>
    </div>
  </div>

  <!-- Observaciones -->
  <div class="mb-12">
    <h2 class="text-2xl font-semibold mb-4">Observaciones</h2>
    <ul class="list-disc list-inside space-y-2 text-gray-700">
      <li>Itinerario sujeto a cambios por clima, disponibilidad o logística.</li>
      <li>Precios por persona en base doble.</li>
      <li>Pasaporte vigente con al menos 6 meses al regreso.</li>
      <li>Visados según nacionalidad no incluidos.</li>
    </ul>
  </div>

  <!-- Términos y condiciones -->
  <div class="mb-12">
    <h2 class="text-2xl font-semibold mb-4">Términos y condiciones</h2>
    <ul class="list-disc list-inside space-y-2 text-gray-700">
      <li>Tarifas sujetas a disponibilidad y confirmación al momento de reservar.</li>
      <li>No reembolsos por servicios no utilizados.</li>
      <li>Se aplican penalizaciones por cambios o cancelaciones.</li>
      <li>Es responsabilidad del pasajero cumplir los requisitos migratorios.</li>
    </ul>
  </div>

  <p class="text-sm text-gray-500">Última actualización: 28‑07‑2025</p>
</div>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-6">
  <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
    <p>&copy; 2025 Apasear.mx. Todos los derechos reservados.</p>
    <div class="flex space-x-6 mt-4 md:mt-0">
      <!-- íconos sociales -->
    </div>
  </div>
</footer>

</body>
</html>
