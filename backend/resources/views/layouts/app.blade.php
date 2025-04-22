<!-- filepath: c:\xampp\htdocs\Platah\backend\resources\views\layouts\app.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Parque Industrial Platah')</title>
    <!-- Incluir archivos CSS y JS compilados con Laravel Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- ENCABEZADO -->
    <header class="bg-gray-800 bg-opacity-75 text-white fixed w-full z-10">
    <div class="container mx-auto flex justify-between items-center py-4">
        <!-- Logotipo -->
        <div class="logo">
            <a href="/" class="text-2xl font-bold">
                <img src="/images/logo.png" alt="Platah" class="h-10">
            </a>
        </div>
        <!-- Menú de Navegación -->
        <nav class="menu">
            <ul class="flex space-x-6">
                <li><a href="#inicio" class="hover:text-yellow-400">Inicio</a></li>
                <li><a href="#nosotros" class="hover:text-yellow-400">Nosotros</a></li>
                <li><a href="#ubicacion" class="hover:text-yellow-400">Ubicación</a></li>
                <li><a href="#servicios" class="hover:text-yellow-400">Servicios</a></li>
                <li><a href="#directorio" class="hover:text-yellow-400">Directorio</a></li>
                <li><a href="#contacto" class="hover:text-yellow-400">Contacto</a></li>
            </ul>
        </nav>
    </div>
</header>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- PIE DE PÁGINA -->
    <footer class="bg-gray-900 text-white py-4">
        <div class="container mx-auto text-center">
            <p>© 2025 Parque Industrial Platah. Todos los derechos reservados.</p>
            <div class="links mt-2">
                <a href="#" class="hover:text-yellow-400">Contrato de confidencialidad</a> |
                <a href="#" class="hover:text-yellow-400">Políticas de privacidad</a>
            </div>
        </div>
    </footer>
</body>
</html>