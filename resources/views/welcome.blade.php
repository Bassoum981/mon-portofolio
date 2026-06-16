@extends('layouts.app')

@section('content')
    <section class="max-w-6xl mx-auto px-6 py-20 md:py-32 flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-1/2 space-y-8">
            <div class="inline-flex items-center space-x-2 bg-white border border-gray-100 rounded-full px-3 py-1 shadow-sm">
                <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                <span class="text-[10px] uppercase tracking-widest font-semibold text-gray-500">Disponible pour de nouveaux projets</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold tracking-tighter leading-[0.95] text-[#1d1d1f]">
                Développeur Full Stack<br>
                <span class="text-gray-400">Laravel Specialist</span>
            </h1>
            
            <p class="text-lg md:text-xl text-gray-500 max-w-lg">
                Je conçois et développe des applications web modernes, performantes et évolutives avec une expertise particulière pour l'écosystème PHP.
            </p>

            <div class="flex space-x-4">
                <a href="#projets" class="bg-black text-white px-8 py-3 rounded-full font-medium hover:bg-gray-800 transition">Voir mes projets</a>
                <a href="#contact" class="border border-gray-200 px-8 py-3 rounded-full font-medium hover:bg-gray-50 transition">Me contacter</a>
            </div>
        </div>

        <div class="mt-16 md:mt-0 md:w-5/12 flex justify-center">
            <div class="relative w-72 h-72 md:w-96 md:h-96">
                <div class="absolute inset-0 bg-gray-100 rounded-full blur-3xl opacity-50"></div>
                <img src="{{ asset(config('portfolio.profile_picture', 'image.jpg')) }}" alt="Ibrahim" class="relative z-10 w-full h-full object-cover rounded-full shadow-2xl">
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-12">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 border-y border-gray-100 py-10">
            <div class="space-y-1">
                <h3 class="text-3xl font-bold tracking-tight text-[#1d1d1f]">{{ config('portfolio.experience_years') }}</h3>
                <p class="text-xs text-gray-500 uppercase tracking-wider">Années d'expérience</p>
            </div>
            <div class="space-y-1">
                <h3 class="text-3xl font-bold tracking-tight text-[#1d1d1f]">{{ config('portfolio.projects_delivered') }}</h3>
                <p class="text-xs text-gray-500 uppercase tracking-wider">Projets livrés</p>
            </div>
            <div class="space-y-1">
                <h3 class="text-3xl font-bold tracking-tight text-[#1d1d1f]">{{ config('portfolio.happy_clients') }}</h3>
                <p class="text-xs text-gray-500 uppercase tracking-wider">Clients satisfaits</p>
            </div>
            <div class="space-y-1">
                <h3 class="text-3xl font-bold tracking-tight text-[#1d1d1f]">{{ config('portfolio.commitment') }}</h3>
                <p class="text-xs text-gray-500 uppercase tracking-wider">Engagé</p>
            </div>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold tracking-tight mb-10 text-[#1d1d1f]">Ma Stack Technique</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            @foreach(config('portfolio.technologies') as $category => $items)
                <div>
                    <h3 class="text-sm font-bold uppercase tracking-widest text-gray-400 mb-4">{{ $category }}</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($items as $tech)
                            <span class="px-3 py-1 bg-gray-50 border border-gray-100 rounded-md text-sm font-medium text-gray-700">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section id="contact" class="max-w-4xl mx-auto px-6 py-20">
    <div class="bg-gray-50 p-8 md:p-12 rounded-3xl border border-gray-100">
        <h2 class="text-3xl font-bold mb-8">Me contacter</h2>
        <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf <div class="space-y-2">
                <label class="text-sm font-medium">Nom</label>
                <input type="text" class="w-full p-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-black outline-none">
            </div>
            
            <div class="space-y-2">
                <label class="text-sm font-medium">Email</label>
                <input type="email" class="w-full p-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-black outline-none">
            </div>
            
            <div class="space-y-2 md:col-span-2">
                <label class="text-sm font-medium">Message</label>
                <textarea rows="4" class="w-full p-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-black outline-none"></textarea>
            </div>
            
            <button class="md:col-span-2 bg-black text-white py-3 rounded-xl font-medium hover:bg-gray-800 transition">
                Envoyer le message
            </button>
        </form>
    </div>
</section>

<footer class="max-w-6xl mx-auto px-6 py-12 border-t border-gray-100 mt-10">
    <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <p class="text-gray-400 text-sm">
            &copy; {{ date('Y') }} Ibrahim. Tous droits réservés.
        </p>
        <div class="flex gap-6 text-sm text-gray-500">
            <a href="#" class="hover:text-black transition">GitHub</a>
            <a href="#" class="hover:text-black transition">LinkedIn</a>
            <a href="#" class="hover:text-black transition">Twitter</a>
        </div>
    </div>
</footer>
@endsection
