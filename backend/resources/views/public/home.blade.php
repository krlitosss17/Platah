<!-- filepath: c:\xampp\htdocs\Platah\backend\resources\views\public\home.blade.php -->
@extends('layouts.app')

@section('title', 'Inicio - Parque Industrial Platah')

@section('content')
    <!-- SECCIÓN: Portada -->
    <section id="inicio" class="h-screen bg-cover bg-center flex items-center justify-center" style="background-image: url('/images/banner.jpg');">
        <div class="text-center text-white">
            <h1 class="text-6xl font-bold">Bienvenido al Parque Industrial Platah</h1>
            <p class="mt-4 text-xl">Un espacio diseñado para el crecimiento industrial y empresarial.</p>
            <a href="#nosotros" class="mt-6 inline-block bg-yellow-400 text-white px-6 py-3 rounded hover:bg-yellow-500">Conoce más</a>
        </div>
    </section>

    <div class="bg-blue-500 text-white p-4">
    Esto es un texto de prueba con Tailwind CSS.
</div>


    <!-- SECCIÓN: Nosotros -->
    <section id="nosotros" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Nosotros</h2>
            <p class="text-lg text-gray-700 mb-8">
                El Parque Industrial Platah es un desarrollo estratégico dedicado a impulsar el crecimiento industrial y empresarial en la región.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-2">Descripción</h3>
                    <p class="text-gray-700">Un espacio diseñado para empresas de clase mundial.</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-2">Misión</h3>
                    <p class="text-gray-700">Impulsar el desarrollo económico y empresarial.</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-2">Visión</h3>
                    <p class="text-gray-700">Ser el parque industrial líder en la región.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: Ubicación -->
    <section id="ubicacion" class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Ubicación</h2>
            <p class="text-lg text-gray-700 mb-8">
                Ubicado en el corazón de la región, con acceso a las principales carreteras y medios de transporte.
            </p>
            <div class="flex justify-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!..." width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: Servicios -->
    <section id="servicios" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Servicios</h2>
            <p class="text-lg text-gray-700 mb-8">
                Ofrecemos instalaciones de clase mundial, seguridad 24/7, y soluciones personalizadas para empresas.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-2">Infraestructura</h3>
                    <p class="text-gray-700">Instalaciones modernas y adaptables.</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-2">Seguridad</h3>
                    <p class="text-gray-700">Monitoreo 24/7 para garantizar la tranquilidad.</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-2">Soporte</h3>
                    <p class="text-gray-700">Asistencia personalizada para cada empresa.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: Directorio de Empresas -->
    <section id="directorio" class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Directorio de Empresas</h2>
            <p class="text-lg text-gray-700 mb-8">
                Conoce las empresas que forman parte del Parque Industrial Platah.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Ejemplo de empresa -->
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <img src="/images/empresa1.png" alt="Empresa 1" class="mx-auto mb-4">
                    <h3 class="text-2xl font-bold">Empresa 1</h3>
                    <a href="https://empresa1.com" target="_blank" class="text-yellow-400 hover:underline">Visitar sitio web</a>
                </div>
                <!-- Más empresas dinámicas -->
            </div>
        </div>
    </section>

    <!-- SECCIÓN: Contacto -->
    <section id="contacto" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Contacto</h2>
            <p class="text-lg text-gray-700 mb-6">
                ¿Tienes preguntas? Ponte en contacto con nosotros y con gusto atenderemos tus dudas.
            </p>
            <a href="mailto:info@platah.com" class="mt-4 inline-block bg-yellow-400 text-white px-6 py-2 rounded hover:bg-yellow-500">Envíanos un correo</a>
            <div class="mt-4">
                <a href="https://wa.me/1234567890" class="text-green-500 hover:underline">WhatsApp</a> |
                <a href="https://facebook.com/platah" class="text-blue-500 hover:underline">Facebook</a> |
                <a href="https://twitter.com/platah" class="text-blue-400 hover:underline">Twitter</a>
            </div>
        </div>
    </section>
@endsection