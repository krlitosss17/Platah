<!-- filepath: c:\xampp\htdocs\Platah\backend\resources\views\public\vacancies.blade.php -->
@extends('layouts.app')

@section('title', 'Oferta Laboral - Parque Industrial Platah')

@section('content')
    <!-- SECCIÓN: Oferta Laboral -->
    <section id="oferta-laboral" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Oferta Laboral</h2>
            <p class="text-lg text-gray-700 mb-8">
                Encuentra las mejores oportunidades laborales en el Parque Industrial Platah.
            </p>

            <!-- Listado de Vacantes -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Ejemplo de Vacante -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-2xl font-bold mb-2">Ingeniero Industrial</h3>
                    <p class="text-gray-700">Ubicación: Planta 1</p>
                    <p class="text-gray-700">Requisitos: Experiencia mínima de 3 años.</p>
                    <a href="#" class="mt-4 inline-block bg-yellow-400 text-white px-6 py-2 rounded hover:bg-yellow-500">
                        Aplicar
                    </a>
                </div>

                <!-- Más vacantes dinámicas -->
                <!-- Aquí se pueden agregar más vacantes dinámicamente desde la base de datos -->
            </div>
        </div>
    </section>

    <!-- SECCIÓN: Contacto -->
    <section id="contacto" class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">¿Interesado en unirte a nuestro equipo?</h2>
            <p class="text-lg text-gray-700 mb-6">
                Envíanos tu currículum o contáctanos para más información sobre nuestras vacantes.
            </p>
            <a href="mailto:rrhh@platah.com" class="inline-block bg-yellow-400 text-white px-6 py-2 rounded hover:bg-yellow-500">
                Enviar Currículum
            </a>
        </div>
    </section>
@endsection