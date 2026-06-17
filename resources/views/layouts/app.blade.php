<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-white text-gray-900">

<nav class="max-w-6xl mx-auto px-6 py-6 flex justify-between items-center relative">
    <a href="/" class="text-xl font-bold tracking-tighter">Ibrahim<span class="text-gray-400">.dev</span></a>

    <input type="checkbox" id="menu-toggle" class="hidden peer">

    <label for="menu-toggle" class="md:hidden p-2 cursor-pointer peer-checked:hidden">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
    </label>

    <label for="menu-toggle" class="md:hidden p-2 cursor-pointer hidden peer-checked:block">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
    </label>

  <div id="nav-links" class="hidden peer-checked:flex flex-col w-full md:w-auto md:flex md:flex-row absolute md:static top-full left-0 bg-white p-6 shadow-xl md:shadow-none border-t md:border-none gap-6 md:gap-12 text-sm font-medium text-gray-600 z-50">
        @foreach(['Accueil' => '/', 'Projets' => '/projets', 'Parcours' => '/parcours', 'À propos' => '/a-propos', 'Contact' => '/contact'] as $label => $url)
            <a href="{{ $url }}" class="relative group transition-colors duration-300 {{ request()->is(ltrim($url, '/')) ? 'text-black' : 'hover:text-black' }}">
                {{ $label }}
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-black transition-all duration-300 group-hover:w-full"></span>
            </a>
        @endforeach
    </div>
</nav>



        @yield('content')
    </main>

<footer class="max-w-6xl mx-auto px-6 py-12 border-t border-gray-100 mt-20">
    <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <!-- Copyright -->
        <p class="text-sm text-gray-500">
            &copy; {{ date('Y') }} Ibrahim.
        </p>

        <!-- Liens Sociaux (Logos) -->
        <div class="flex items-center gap-8">
            <a href="https://linkedin.com/in/ton-profil" target="_blank" class="text-gray-400 hover:text-black transition-all">
                <i class="fa-brands fa-linkedin text-xl"></i>
            </a>
            <a href="https://github.com/Ibrahim-bassoum" target="_blank" class="text-gray-400 hover:text-black transition-all">
                <i class="fa-brands fa-github text-xl"></i>
            </a>
            <a href="https://youtube.com/@ton-canal" target="_blank" class="text-gray-400 hover:text-black transition-all">
                <i class="fa-brands fa-youtube text-xl"></i>
            </a>
        </div>
    </div>
</footer>

</body>
</html>