<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Apasear.mx - Navidad en Turquía P</title>
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
  <h1 class="text-3xl font-bold text-purple-700 mb-6">Navidad en Turquía P</h1>

  <div class="grid md:grid-cols-3 gap-4 mb-8">
    <!-- Precio + Carrusel -->
    <div class="md:col-span-2 bg-white p-6 rounded shadow relative">
      <div class="mb-4 text-center">
        <h2 class="text-3xl font-extrabold text-purple-700">Desde <span class="text-green-600">USD 888</span></h2>
        <p class="text-sm text-gray-500">+ impuestos aéreos USD 758</p>
      </div>
      <div x-data="{ activeSlide: 0, slides: [
        { img: '{{ asset("images/estambul.jpg") }}', alt: 'Estambul' },
        { img: '{{ asset("images/capadocia.jpg") }}', alt: 'Capadocia' },
        { img: '{{ asset("images/pamukkale.jpg") }}', alt: 'Pamukkale' },
        { img: '{{ asset("images/troya.jpg") }}', alt: 'Troya' }
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
        <p class="text-2xl font-bold">TVG-3631</p>
      </div>
      <div class="space-y-1 mt-4">
        <p><strong>Vuelo incluido con:</strong> Turkish Airlines.</p>
        <p><strong>Tipo:</strong> Grupal acompañado.</p>
        <p><strong>Visitas:</strong> Estambul, Ankara, Capadocia, Pamukkale, Hierápolis, Éfeso, Izmir, Troya, Canakkale.</p>
        <p><strong>Saliendo desde:</strong> Ciudad de México.</p>
        <p><span class="font-semibold">Fechas de salida:</span></p>
        <ul class="list-disc list-inside ml-4">
          <li>20 de diciembre 2025</li>
          <li>27 de diciembre 2025</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Itinerario -->
  <div class="mb-8">
    <h2 class="text-2xl font-semibold mb-4">Itinerario Completo</h2>
    <p class="text-gray-600">El itinerario detallado estará disponible próximamente.</p>
  </div>

  <!-- Incluye / No incluye -->
  <div class="grid md:grid-cols-2 gap-8 mb-8">
    <div>
      <h2 class="text-2xl font-semibold mb-2">Incluye</h2>
      <ul class="list-disc list-inside">
        <li>Boleto de avión México – Estambul – México con Turkish Airlines</li>
        <li>04 noches en Estambul (hotel 5 estrellas)</li>
        <li>03 noches en Capadocia (hotel 5 estrellas)</li>
        <li>01 noche en Pamukkale (hotel 5 estrellas)</li>
        <li>01 noche en Izmir (hotel 5 estrellas)</li>
        <li>Traslados aeropuerto – hotel – aeropuerto</li>
        <li>08 desayunos, 05 cenas (sin bebidas)</li>
        <li>Visitas según el itinerario</li>
        <li>Guía que habla hispana</li>
        <li>Autobús turístico</li>
        <li>Visa electrónica de Turquía (nacionalidad mexicana)</li>
      </ul>
    </div>
    <div>
      <h2 class="text-2xl font-semibold mb-2">No incluye</h2>
      <ul class="list-disc list-inside text-sm">
        <li>Impuestos aéreos: USD 758</li>
        <li>Cena de Navidad y fin de año (consultar suplemento)</li>
        <li>Gastos personales y propinas</li>
        <li>Impuestos hoteleros: USD 10 por persona (directo en destino)</li>
        <li>Tasas de servicio: USD 45 por persona</li>
        <li>Excursiones opcionales</li>
        <li>Seguro de viaje USD 125 (cobertura COVID‑19)</li>
        <li>Suplemento hotel cueva en Capadocia: USD 290 TPL / USD 390 SGL</li>
        <li>Vuelo interno Izmir – Estambul: USD 250 (opcional)</li>
        <li>Traslados adicionales no mencionados</li>
        <li>Suplemento por salida: USD 488 (20 y 27 de diciembre)</li>
      </ul>
    </div>
  </div>

  <!-- Tours opcionales -->
  <div class="mb-12">
    <h2 class="text-2xl font-semibold mb-4">Tours opcionales</h2>
    <p class="text-gray-600">Próximamente disponibles.</p>
  </div>

  <!-- Observaciones -->
  <div class="mb-12">
    <h2 class="text-2xl font-semibold mb-4">Observaciones</h2>
    <p class="text-gray-600">Próximamente disponibles.</p>
  </div>

  <!-- Términos y condiciones -->
  <div class="mb-12">
    <h2 class="text-2xl font-semibold mb-4">Términos y condiciones</h2>
    <p class="text-gray-600">Próximamente disponibles.</p>
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
