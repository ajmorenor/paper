<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visor Noticias</title>
    <!-- Tailwind CSS (CDN for standalone) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,400&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        serif: ["Merriweather", "serif"],
                        sans: ["Inter", "sans-serif"],
                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" href="style.css">
    <style>
        .story-ring { background: linear-gradient(45deg, #f59e0b, #ec4899, #8b5cf6); padding: 3px; border-radius: 50%; }
        .hide-scroll::-webkit-scrollbar { display: none; }
        .hide-scroll { -ms-overflow-style: none; scrollbar-width: none; }
        .nav-menu li { display: inline-block; margin-left: 1.5rem; }
        .mobile-menu li { display: block; margin-bottom: 1rem; }
    </style>
</head>
<body class="bg-white font-sans text-slate-800 antialiased">

<header class="sticky top-0 z-50 bg-white border-b border-stone-200 shadow-sm transition-all duration-300">
    
    <!-- Top Utility Bar -->
    <div class="hidden md:flex justify-between items-center px-4 py-1 bg-stone-50 text-xs text-slate-500 border-b border-stone-100">
        <div class="flex space-x-4">
            <span><?php echo date( 'l, j F Y' ); ?></span>
            <span>Actualidad global en Visor Noticias</span>
        </div>
        <div class="flex space-x-4">
            <a href="#" class="font-bold text-slate-800 hover:text-blue-800">Suscripción</a>
        </div>
    </div>

    <!-- Navbar -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Mobile Toggle -->
            <div class="md:hidden flex items-center">
                <button onclick="document.getElementById('mobile-menu').classList.toggle('-translate-x-full')" class="text-slate-800 text-2xl p-2" aria-label="Abrir menú">☰</button>
            </div>

            <!-- LOGO VISOR -->
            <div class="flex-shrink-0 flex items-center justify-center w-full md:w-auto">
                <a href="index.php" class="font-serif text-2xl md:text-3xl font-black tracking-tight text-slate-900 uppercase">
                    VISOR <span class="text-blue-800">NOTICIAS</span>
                </a>
            </div>

            <!-- Menú Escritorio -->
            <nav class="hidden md:flex space-x-6 text-sm font-bold text-slate-700 uppercase tracking-wide">
                <ul class="flex space-x-6 nav-menu">
                    <li><a href="#" class="hover:text-blue-800">Inicio</a></li>
                    <li><a href="#" class="hover:text-blue-800">Política</a></li>
                    <li><a href="#" class="hover:text-blue-800">Deportes</a></li>
                    <li><a href="#" class="hover:text-blue-800">Tecnología</a></li>
                </ul>
            </nav>

            <!-- Actions -->
            <div class="hidden md:flex items-center space-x-4">
                <button class="text-slate-600 hover:text-blue-800">🔍</button>
                <a href="#" class="bg-blue-800 hover:bg-blue-900 text-white text-xs font-bold py-2 px-4 rounded shadow-sm hover:scale-105 transition-transform">
                    PREMIUM
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
<div id="mobile-menu" class="fixed inset-0 bg-slate-900 bg-opacity-95 z-50 transform -translate-x-full transition-transform duration-300 md:hidden flex flex-col justify-center items-center text-white text-xl font-serif">
    <button onclick="document.getElementById('mobile-menu').classList.toggle('-translate-x-full')" class="absolute top-6 right-6 text-3xl" aria-label="Cerrar menú">&times;</button>
    <ul class="text-center space-y-6 mobile-menu">
        <li><a href="#" class="hover:text-blue-300">Inicio</a></li>
        <li><a href="#" class="hover:text-blue-300">Política</a></li>
        <li><a href="#" class="hover:text-blue-300">Deportes</a></li>
        <li><a href="#" class="hover:text-blue-300">Tecnología</a></li>
    </ul>
</div>

<div class="bg-red-700 text-white text-xs md:text-sm font-bold px-4 py-2 text-center relative">
    <span class="animate-pulse mr-2">🔴 ÚLTIMA HORA:</span> 
    Actualidad global en Visor Noticias.
</div>