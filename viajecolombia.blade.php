<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Apasear.mx - Imperdibles de Colombia</title>
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
  <h1 class="text-3xl font-bold text-purple-700 mb-6">Imperdibles de Colombia</h1>

<div class="grid md:grid-cols-3 gap-4 mb-8">

  <!-- Columna izquierda: PRECIO + CARRUSEL (2/3) -->
  <div class="md:col-span-2 bg-white p-6 rounded shadow relative">
    
    <!-- Precio destacado -->
    <div class="mb-4 text-center">
      <h2 class="text-3xl font-extrabold text-purple-700">Desde <span class="text-green-600">USD 888</span></h2>
      <p class="text-sm text-gray-500">+ impuestos aéreos USD 388</p>
    </div>

    <!-- Carrusel -->
    <div x-data="{ activeSlide: 0, slides: [
        { img: '{{ asset("images/medellin.jpg") }}', alt: 'Medellín - Pueblito Paisa' },
        { img: '{{ asset("images/cartagena.jpg") }}', alt: 'Cartagena - Centro histórico' },
        { img: '{{ asset("images/bogota.jpg") }}', alt: 'Bogotá - Monserrate' },
        { img: '{{ asset("images/zipaquira.jpg") }}', alt: 'Zipaquirá - Mina de Sal' },
        { img: '{{ asset("images/guatape.jpg") }}', alt: 'Guatapé - Piedra del Peñol' }
      ] }" class="relative overflow-hidden rounded-lg shadow">

      <!-- Imagen -->
      <img :src="slides[activeSlide].img" :alt="slides[activeSlide].alt"
           class="w-full h-[350px] object-cover transition-all duration-500 rounded-lg">

      <!-- Controles -->
      <button @click="activeSlide = (activeSlide === 0) ? slides.length - 1 : activeSlide - 1"
              class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white bg-opacity-80 hover:bg-opacity-100 p-2 rounded-full shadow text-2xl">
        ‹
      </button>
      <button @click="activeSlide = (activeSlide === slides.length - 1) ? 0 : activeSlide + 1"
              class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white bg-opacity-80 hover:bg-opacity-100 p-2 rounded-full shadow text-2xl">
        ›
      </button>

      <!-- Indicadores -->
      <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
        <template x-for="(slide, i) in slides" :key="i">
          <div @click="activeSlide = i"
               :class="{ 'bg-purple-700': activeSlide === i, 'bg-white': activeSlide !== i }"
               class="w-3 h-3 rounded-full cursor-pointer border border-gray-300"></div>
        </template>
      </div>
    </div>
  </div>

  <!-- Columna derecha: CLAVE y datos -->
  <div class="bg-white p-6 rounded shadow flex flex-col justify-between text-sm text-gray-800 space-y-2">

    <!-- Clave destacada -->
    <div class="border border-purple-700 rounded-lg p-4 text-center">
      <p class="text-xs uppercase text-purple-700 font-semibold">Clave</p>
      <p class="text-2xl font-bold">TVG-4382</p>
    </div>

    <div class="space-y-1 mt-4">
        <p><strong>Vuelo incluido con:</strong> Avianca. Equipaje de 23 kg incluido.</p>
        <p><strong>Tipo:</strong> Grupal. Viaje en grupo, acompañado.</p>
        <p><strong>Visitas:</strong> Medellín, Cartagena, Bogotá.</p>
        <p><strong>Saliendo desde:</strong> Ciudad de México (CDMX).</p>
        <p><span class="font-semibold">Fecha(s) de salida:</span></p>
        <ul class="list-disc list-inside ml-4">
            <li>25 octubre 2025</li>
            <li>16 noviembre 2025</li>
            <li>26 diciembre 2025</li>
            <li>16 febrero 2026</li>
        </ul>
    </div>
  </div>

</div>

<!-- Itinerario -->
<div class="mb-8">
  <h2 class="text-2xl font-semibold mb-4">Itinerario Completo</h2>

  <div class="mb-6">
    <h3 class="text-xl font-semibold">Día 1 – México → Medellín</h3>
    <p>
      Vuelo desde Ciudad de México a Medellín. Llegada y traslado privado al hotel. Por la tarde,
      <strong>City Tour Medellín Enamora</strong>, visitando el Parque de los Pies Descalzos, Parque de los Deseos,
      Pueblito Paisa y panorámica desde el Cerro Nutibara.
    </p>
  </div>

  <div class="mb-6">
    <h3 class="text-xl font-semibold">Día 2 – Medellín</h3>
    <p>
      Continuación del <strong>City Tour Medellín Enamora</strong>, que incluye paseo en Metrocable, visita al Parque Arví
      y espacios ecológicos (según horario y disponibilidad).
    </p>
  </div>

  <div class="mb-6">
    <h3 class="text-xl font-semibold">Día 3 – Medellín → Cartagena</h3>
    <p>
      Vuelo o traslado a Cartagena. Llegada, instalación en hotel y tiempo libre para disfrutar del centro histórico amurallado.
    </p>
  </div>

  <div class="mb-6">
    <h3 class="text-xl font-semibold">Días 4-5 – Cartagena</h3>
    <p>
      <strong>City Tour en la heroica Cartagena</strong>, incluyendo recorrido por las murallas, casco antiguo y visita al Castillo de San Felipe.
      Resto del tiempo libre para actividades opcionales o descanso.
    </p>
  </div>

  <div class="mb-6">
    <h3 class="text-xl font-semibold">Día 6 – Cartagena → Bogotá</h3>
    <p>
      Traslado a Bogotá. Por la tarde, city tour histórico con recorrido por Candelaria y subida al Cerro de Monserrate
      (teleférico o funicular).
    </p>
  </div>

  <div class="mb-6">
    <h3 class="text-xl font-semibold">Día 7 – Bogotá</h3>
    <p>
      Día libre con opción de excursión a la Mina de Sal de Zipaquirá (no incluida). También puedes visitar museos como el del Oro o Botero.
    </p>
  </div>

  <div class="mb-6">
    <h3 class="text-xl font-semibold">Día 8 – Bogotá → México</h3>
    <p>
      Desayuno buffet, check‑out y traslado privado al aeropuerto para tomar el vuelo de regreso a Ciudad de México.
    </p>
  </div>
</div>

  <!-- Incluye / No incluye -->
  <div class="grid md:grid-cols-2 gap-8 mb-8">
    <div>
      <h2 class="text-2xl font-semibold mb-2">Incluye</h2>
      <ul class="list-disc list-inside">
        <li>Vuelos México – Medellín – Cartagena – Bogotá – México (23 kg maleta)</li>
        <li>Traslados privados aeropuerto‑hotel‑aeropuerto</li>
        <li>2 noches en Medellín, 3 en Cartagena, 2 en Bogotá (desayuno)</li>
        <li>City tours en Medellín, Cartagena y Bogotá (incluye Monserrate)</li>
        <li>Transportación terrestre en vehículos sanitizados</li>
      </ul>
    </div>
    <div>
      <h2 class="text-2xl font-semibold mb-2">No incluye</h2>
      <ul class="list-disc list-inside">
        <li>Gastos personales, bebidas/comidas no mencionadas</li>
        <li>Impuestos aéreos USD 388 (sujetos a actualización)</li>
        <li>Impuesto de muelle USD 10</li>
        <li>Excursiones o servicios opcionales</li>
        <li>Propinas para guías y conductores</li>
      </ul>
    </div>
  </div>

    <!-- Tours opcionales -->
    <div class="mb-12">
    <h2 class="text-2xl font-semibold mb-4">Tours opcionales</h2>

    <ul class="list-disc list-inside space-y-4 text-gray-700">
        <li>
        <strong>Tour a Guatapé y la Piedra del Peñol (desde Medellín):</strong><br>
        Incluye transporte, guía local, paseo en lancha y almuerzo típico.<br>
        Adulto: <strong>$130.00 USD</strong> &nbsp;|&nbsp; Niño: <strong>$100.00 USD</strong>
        </li>

        <li>
        <strong>Excursión a Islas del Rosario (desde Cartagena):</strong><br>
        Día completo con traslado marítimo, comida típica, tiempo para snorkel y descanso en playa.<br>
        Adulto: <strong>$90.00 USD</strong> &nbsp;|&nbsp; Niño: <strong>$80.00 USD</strong>
        </li>

        <li>
        <strong>Tour gastronómico por Cartagena:</strong><br>
        Recorrido culinario por el centro histórico probando platos y dulces típicos caribeños.<br>
        Adulto: <strong>$160.00 USD</strong> &nbsp;|&nbsp; Niño: <strong>$130.00 USD</strong>
        </li>

        <li>
        <strong>Visita a la Mina de Sal de Zipaquirá (desde Bogotá):</strong><br>
        Impresionante recorrido subterráneo por una de las minas de sal más importantes de América Latina.<br>
        Adulto: <strong>$130.00 USD</strong> &nbsp;|&nbsp; Niño: <strong>$100.00 USD</strong>
        </li>

        <li>
        <strong>Tour de Graffitis en la Comuna 13 (Medellín):</strong><br>
        Caminata guiada por uno de los barrios más transformados de Medellín. Arte urbano, escaleras eléctricas, historia y música en vivo.<br>
        Adulto: <strong>$50.00 USD</strong> &nbsp;|&nbsp; Niño: <strong>$40.00 USD</strong>
        </li>
    </ul>
    </div>

    <!-- Observaciones -->
    <div class="mb-12">
    <h2 class="text-2xl font-semibold mb-4">Observaciones</h2>

    <ul class="list-disc list-inside space-y-2 text-gray-700">
        <li>Itinerario sujeto a cambios por condiciones climáticas, disponibilidad o logística del operador local.</li>
        <li>Los hoteles previstos pueden cambiar por otros de categoría similar sin previo aviso.</li>
        <li>Las salidas grupales están sujetas a un mínimo de pasajeros. En caso de no completarse, se informará con anticipación.</li>
        <li>Precios indicados en USD por persona en base doble. Sujeto a disponibilidad y confirmación al momento de reservar.</li>
        <li>Requiere pasaporte vigente con al menos 6 meses antes de su vencimiento a la fecha de viaje.</li>
    </ul>
    </div>

    <!-- Términos y condiciones -->
    <div class="mb-12">
    <h2 class="text-2xl font-semibold mb-4">Términos y condiciones</h2>

    <ul class="list-disc list-inside space-y-2 text-gray-700">
        <li>Aplica penalización por cancelación según políticas de la agencia y proveedores (aéreo y terrestre).</li>
        <li>Los pagos deben realizarse en su totalidad antes de la fecha límite indicada al momento de la reservación.</li>
        <li>No se realizan reembolsos por servicios no utilizados durante el viaje.</li>
        <li>Es responsabilidad del pasajero cumplir con los requisitos migratorios y sanitarios exigidos por el país de destino.</li>
        <li>Impuestos y tarifas están sujetos a cambio sin previo aviso por parte de la aerolínea o autoridades gubernamentales.</li>
    </ul>
    </div>


  <p class="text-sm text-gray-500">Última actualización: 04‑07‑2025</p>
</div>

<!-- Footer similar -->
<footer class="bg-gray-900 text-white py-6">
  <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
    <p>&copy; 2025 Apasear.mx. Todos los derechos reservados.</p>
    <div class="flex space-x-6 mt-4 md:mt-0">
      <!-- íconos sociales aquí -->
    </div>
  </div>

</footer>
</body>
</html>
