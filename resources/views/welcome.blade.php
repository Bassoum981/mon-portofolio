@extends('layouts.app')

@section('content')
    <!-- Section Hero -->
    <section class="max-w-6xl mx-auto px-6 py-20 md:py-32 flex flex-col md:flex-row items-center justify-between animate-fade-in">
        <div class="md:w-1/2 space-y-8">
            <div class="inline-flex items-center space-x-2 bg-white border border-gray-100 rounded-full px-3 py-1 shadow-sm">
                <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                <span class="text-[10px] uppercase tracking-widest font-semibold text-gray-500">Disponible pour de nouveaux projets</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold tracking-tighter leading-[0.95] text-[#1d1d1f]">
                {{ config('portfolio.hero.titre') }}<br>
                <span class="text-gray-400">{{ config('portfolio.hero.sous_titre') }}</span>
            </h1>
            
            <p class="text-lg md:text-xl text-gray-500 max-w-lg">
                {{ config('portfolio.hero.description') }}
            </p>

            <div class="flex space-x-4">
                <a href="#projets" class="bg-black text-white px-8 py-3 rounded-full font-medium hover:bg-gray-800 transition-all hover:scale-105">Voir mes projets</a>
                <a href="#contact" class="border border-gray-200 px-8 py-3 rounded-full font-medium hover:bg-gray-50 transition-all hover:scale-105">Me contacter</a>
            </div>
        </div>

        <div class="mt-16 md:mt-0 md:w-5/12 flex justify-center hover:rotate-3 transition-transform duration-500">
            <div class="relative w-72 h-72 md:w-96 md:h-96">
                <div class="absolute inset-0 bg-gray-100 rounded-full blur-3xl opacity-50 animate-pulse"></div>
                <img src="{{ asset('image.png') }}" alt="Ibrahim" class="relative z-10 w-full h-full object-cover rounded-full shadow-2xl">
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="max-w-6xl mx-auto px-6 py-12">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 border-y border-gray-100 py-10">
            <div class="space-y-1 transition-all hover:-translate-y-2">
                <h3 class="text-3xl font-bold tracking-tight text-[#1d1d1f]">{{ config('portfolio.experience_years') }}</h3>
                <p class="text-xs text-gray-500 uppercase tracking-wider">Années d'expérience</p>
            </div>
            <div class="space-y-1 transition-all hover:-translate-y-2">
                <h3 class="text-3xl font-bold tracking-tight text-[#1d1d1f]">{{ config('portfolio.projects_delivered') }}</h3>
                <p class="text-xs text-gray-500 uppercase tracking-wider">Projets livrés</p>
            </div>
            <div class="space-y-1 transition-all hover:-translate-y-2">
                <h3 class="text-3xl font-bold tracking-tight text-[#1d1d1f]">{{ config('portfolio.happy_clients') }}</h3>
                <p class="text-xs text-gray-500 uppercase tracking-wider">Clients satisfaits</p>
            </div>
            <div class="space-y-1 transition-all hover:-translate-y-2">
                <h3 class="text-3xl font-bold tracking-tight text-[#1d1d1f]">{{ config('portfolio.commitment') }}</h3>
                <p class="text-xs text-gray-500 uppercase tracking-wider">Engagé</p>
            </div>
        </div>
    </section>

    <!-- Nouvelle section Technologies & Services (Style image.png) -->
    <section class="max-w-6xl mx-auto py-16 px-6">
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Bloc gauche : Technologies -->
            <div>
                <h2 class="text-xl font-bold mb-6">Technologies & Outils</h2>
                <div class="grid grid-cols-3 sm:grid-cols-5 gap-4">
                    @foreach(config('portfolio.technologies', []) as $tech)
                        <div class="flex flex-col items-center justify-center p-4 bg-white border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition-all">
                            <span class="text-xs font-semibold text-gray-700 text-center">{{ $tech }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Bloc droite : Services -->
            <!-- Bloc droite : Ce que je fais (Sombre) -->
<div class="bg-gray-900 text-white p-8 rounded-2xl flex flex-col justify-center">
    <h2 class="text-xl font-bold mb-6">Ce que je fais</h2>
    <ul class="space-y-4">
        @foreach(config('portfolio.services', []) as $service)
            <li class="flex items-center gap-3">
                <!-- Remplacé text-blue-400 par text-white -->
                <div class="bg-gray-800 p-1 rounded-full">
                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path>
                    </svg>
                </div>
                <span class="text-sm font-medium">{{ $service }}</span>
            </li>
        @endforeach
    </ul>
</div>
    </section>

    <!-- Section Contact -->
    <section class="max-w-6xl mx-auto px-6 py-16">
    <div class="bg-gray-900 text-white rounded-3xl p-8 md:p-12 flex flex-col md:flex-row justify-between items-center gap-10">
        
        <!-- Texte et CTA -->
        <div class="md:w-1/2 space-y-6">
            <div class="inline-block px-3 py-1 bg-gray-800 rounded-full text-xs font-medium text-gray-300">
                DISCUTONS DE VOTRE PROJET
            </div>
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight">Vous avez un projet en tête ?</h2>
            <p class="text-gray-400 leading-relaxed">
                Je suis disponible pour collaborer sur des projets ambitieux et créer des solutions qui font la différence.
            </p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-white text-black px-6 py-3 rounded-full font-semibold hover:bg-gray-200 transition-all">
                Prendre rendez-vous
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m0 0l-7-7m7 7l-7 7"></path></svg>
            </a>
        </div>

        <!-- Informations de contact -->
        <div class="md:w-1/3 space-y-6 text-sm text-gray-300">
            <div class="flex items-center gap-4">
                <span class="text-gray-500">Email</span>
                <span>ibrahimbassoum981@gmail.com</span>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-gray-500">Téléphone</span>
                <span>+223 94 18 41 25</span>
            </div>
            <div class="flex items-center gap-4">
                <span class="text-gray-500">Localisation</span>
                <span>Bamako, Mali</span>
            </div>
        </div>
    </div>
</section>
@endsection