@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-16 px-6">
    
    <!-- 1. En-tête -->
    <div class="flex flex-col md:flex-row items-center justify-between mb-20 gap-12">
        <div class="max-w-xl">
            <div class="flex items-center gap-2 mb-6">
                <span class="w-2 h-2 bg-black rounded-full"></span>
                <span class="text-xs font-bold tracking-widest uppercase">Mon parcours</span>
            </div>
            <h1 class="text-5xl font-extrabold tracking-tighter text-black mb-6">Mon parcours<br>de formation et d'évolution</h1>
            <p class="text-lg text-gray-600 leading-relaxed">
                Étudiant en 2e année de Génie Informatique et Télécommunications, je construis pas à pas mes compétences à travers mes études, mes projets et mon apprentissage quotidien.
            </p>
        </div>
        <!-- Portrait -->
        <div class="w-64 h-64 bg-gray-100 rounded-full overflow-hidden shrink-0">
            <img src="{{ asset('image2.jpg') }}" alt="Portrait" class="w-full h-full object-cover">
        </div>
    </div>

  <!-- 2. Timeline Académique -->
<div class="mb-20">
    <h2 class="text-2xl font-bold mb-10">Formation académique</h2>
    <div class="space-y-8 relative">
        <!-- Ligne verticale -->
        <div class="absolute left-[7.5rem] top-4 bottom-4 w-px bg-gray-200"></div>
        
        <!-- Troisième Année -->
        <div class="relative flex gap-8 group transition-all duration-300">
            <div class="w-32 pt-4 text-sm font-bold text-black">2026 – Présent</div>
            <div class="relative flex-1 bg-white p-6 rounded-2xl border border-gray-100 shadow-sm transition-all duration-300 group-hover:shadow-lg group-hover:-translate-y-1 group-hover:border-gray-200 flex items-center gap-6">
                <div class="w-12 h-12 bg-gray-50 rounded-xl flex items-center justify-center shrink-0 transition-colors duration-300 group-hover:bg-black group-hover:text-white"><i class="fa-solid fa-code text-xl"></i></div>
                <div>
                    <h3 class="font-bold text-lg">Génie Logiciel et Programmation</h3>
                    <p class="text-sm text-gray-600">INTEC-SUP - 3e année</p>
                </div>
                <span class="ml-auto text-xs bg-black text-white px-3 py-1 rounded-full font-medium">À venir</span>
            </div>
        </div>

        <!-- Deuxième Année -->
        <div class="relative flex gap-8 group transition-all duration-300">
            <div class="w-32 pt-4 text-sm font-medium text-gray-500">2025 – 2026</div>
            <div class="relative flex-1 bg-white p-6 rounded-2xl border border-gray-100 shadow-sm transition-all duration-300 group-hover:shadow-lg group-hover:-translate-y-1 group-hover:border-gray-200 flex items-center gap-6">
                <div class="w-12 h-12 bg-gray-50 rounded-xl flex items-center justify-center shrink-0 transition-colors duration-300 group-hover:bg-black group-hover:text-white"><i class="fa-solid fa-graduation-cap text-xl"></i></div>
                <div>
                    <h3 class="font-bold text-lg">Génie Informatique et Télécommunications</h3>
                    <p class="text-sm text-gray-600">INTEC-SUP - 2e année</p>
                </div>
                <span class="ml-auto text-xs bg-gray-100 px-3 py-1 rounded-full font-medium">Terminé</span>
            </div>
        </div>

        <!-- Première Année -->
        <div class="relative flex gap-8 group transition-all duration-300">
            <div class="w-32 pt-4 text-sm font-medium text-gray-500">2023 – 2025</div>
            <div class="relative flex-1 bg-white p-6 rounded-2xl border border-gray-100 shadow-sm transition-all duration-300 group-hover:shadow-lg group-hover:-translate-y-1 group-hover:border-gray-200 flex items-center gap-6">
                <div class="w-12 h-12 bg-gray-50 rounded-xl flex items-center justify-center shrink-0 transition-colors duration-300 group-hover:bg-black group-hover:text-white"><i class="fa-solid fa-book text-xl"></i></div>
                <div>
                    <h3 class="font-bold text-lg">Informatique de Gestion</h3>
                    <p class="text-sm text-gray-600">INTEC-SUP - 1re année</p>
                </div>
                <span class="ml-auto text-xs bg-gray-100 px-3 py-1 rounded-full font-medium">Terminé</span>
            </div>
        </div>
    </div>
</div>
  <!-- Grille inférieure : j'ai ajouté 'gap-12' pour l'espace et 'items-start' pour l'alignement -->
<div class="grid md:grid-cols-2 gap-12 items-start mb-12">
    
    <!-- Bloc 1 : Formations & Certifications avec animations -->
<div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm w-full transition-all duration-500 hover:shadow-lg">
    <h2 class="font-bold mb-6">Formations & Certifications</h2>
    <div class="space-y-6">
        
        <!-- Liste des éléments avec animation au survol -->
        @foreach ([
            ['icon' => 'fa-shield-halved', 'text' => 'Formation en Cybersécurité', 'year' => '2025'],
            ['icon' => 'fa-brands fa-java', 'text' => 'Formation en Java', 'year' => '2025'],
            ['icon' => 'fa-solid fa-code', 'text' => 'Formation en HTML & CSS', 'year' => '2025'],
            ['icon' => 'fa-brands fa-docker', 'text' => 'Docker & Conteneurisation', 'year' => '2026'],
            ['icon' => 'fa-solid fa-paper-plane', 'text' => 'Maîtrise de Postman', 'year' => '2026'],
        ] as $item)
            <div class="flex justify-between items-center text-sm group cursor-default transition-all duration-300 hover:translate-x-2">
                <div class="flex items-center gap-4 text-gray-600 group-hover:text-black transition-colors">
                    <i class="fa-solid {{ $item['icon'] }}"></i>
                    <span>{{ $item['text'] }}</span>
                </div>
                <span class="text-gray-400 group-hover:text-gray-900 transition-colors">{{ $item['year'] }}</span>
            </div>
        @endforeach

    </div>
</div>

    <!-- Compétences développées -->
<div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm w-full">
    <h2 class="font-bold mb-6">Compétences développées</h2>
    <div class="space-y-6">
        <!-- Laravel/PHP -->
        <div>
            <span class="text-sm font-medium text-gray-700">Laravel / PHP</span>
            <div class="w-full h-2 bg-gray-100 rounded-full mt-2"><div class="w-[95%] h-2 bg-black rounded-full"></div></div>
        </div>
        <!-- Java / Spring Boot -->
        <div>
            <span class="text-sm font-medium text-gray-700">Java / Spring Boot</span>
            <div class="w-full h-2 bg-gray-100 rounded-full mt-2"><div class="w-[85%] h-2 bg-black rounded-full"></div></div>
        </div>
        <!-- Flutter -->
        <div>
            <span class="text-sm font-medium text-gray-700">Flutter</span>
            <div class="w-full h-2 bg-gray-100 rounded-full mt-2"><div class="w-[80%] h-2 bg-black rounded-full"></div></div>
        </div>
        <!-- Cybersécurité -->
        <div>
            <span class="text-sm font-medium text-gray-700">Cybersécurité</span>
            <div class="w-full h-2 bg-gray-100 rounded-full mt-2"><div class="w-[75%] h-2 bg-black rounded-full"></div></div>
        </div>
    </div>
</div>

</div>

    <!-- 4. Bannière finale -->
    <div class="bg-gray-900 text-white p-10 rounded-3xl flex items-center justify-between">
        <div class="flex items-center gap-6">
            <i class="fa-solid fa-graduation-cap text-3xl"></i>
            <div>
                <h3 class="font-bold text-xl">Toujours en apprentissage, toujours en progression.</h3>
                <p class="text-gray-400">Chaque jour est une nouvelle opportunité pour apprendre et construire quelque chose de mieux.</p>
            </div>
        </div>
        <a href="{{ route('projets') }}" class="bg-white text-black px-6 py-3 rounded-full font-bold text-sm hover:bg-gray-200 transition-colors">
            Découvrir mes projets ↗
        </a>
    </div>
</div>
@endsection