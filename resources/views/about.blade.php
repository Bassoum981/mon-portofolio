@extends('layouts.app')

@section('content')

<section class="max-w-5xl mx-auto py-20 px-6">
    <!-- En-tête biographique -->
    <div class="mb-20">
        <h1 class="text-5xl font-bold tracking-tighter text-black mb-8">Au-delà du code</h1>
        <div class="grid md:grid-cols-2 gap-12 text-gray-600 leading-relaxed">
            <div class="space-y-6">
                <p class="text-xl text-gray-800">
                    Développeur Full-Stack et futur ingénieur GIT à l'INTEC-SUP, je ne conçois pas le développement comme une simple suite de lignes de code.
                </p>
                <p>
                    Mon parcours est marqué par une recherche constante de **stabilité**. Lorsqu'un projet rencontre une impasse, j'ai cette habitude quasi systématique de "tout reprendre à zéro" pour garantir une architecture propre et pérenne. C'est cette rigueur que j'applique à chaque migration Laravel ou configuration Docker.
                </p>
            </div>
            <div class="space-y-6">
                <p>
                    Mon intérêt pour la **cybersécurité** et l'**Internet of Medical Things (IoMT)** m'a conduit à explorer des vulnérabilités complexes, comme les attaques Man-in-the-Middle sur le protocole MQTT. Cette fascination pour la sécurité de l'information influence chaque application que je bâtis aujourd'hui.
                </p>
            </div>
        </div>
    </div>

    <!-- Galerie Photos -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-20">
        <div class="aspect-square bg-gray-100 rounded-3xl overflow-hidden shadow-sm">
            <img src="{{ asset('setup.jpg') }}" alt="Mon environnement" class="w-full h-full object-cover">
        </div>
        <div class="md:col-span-2 aspect-[2/1] bg-gray-100 rounded-3xl overflow-hidden shadow-sm">
            <img src="{{ asset('farm.jpg') }}" alt="Gestion de ferme" class="w-full h-full object-cover">
        </div>
    </div>

    <!-- Philosophie & Passion -->
    <div class="grid md:grid-cols-2 gap-12 items-start">
        <div class="space-y-6">
            <h3 class="text-2xl font-bold text-black">La terre et le code</h3>
            <p class="text-gray-600">
                Loin des écrans, je gère des projets avicoles (quails, Sasso, Goliath, pintades). Ce n'est pas qu'une activité parallèle : c'est un laboratoire grandeur nature pour mes compétences en organisation, en gestion de stocks et en automatisation.
            </p>
            <p class="text-gray-600">
                Mon tempérament ? Je suis un bâtisseur pragmatique. J'aime comprendre le système de l'intérieur, qu'il s'agisse de formuler des aliments pour volailles ou d'optimiser une requête SQL complexe.
            </p>
        </div>

        <!-- Stack technique -->
        <div class="bg-gray-50 p-8 rounded-3xl border border-gray-100">
            <h3 class="text-xl font-bold mb-6">Mon arsenal technique</h3>
            <div class="space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-gray-400">Développement</span>
                    <div class="flex flex-wrap gap-2 mt-3">
                        @foreach(['Laravel', 'PHP', 'Flutter', 'Java Swing'] as $tech)
                            <span class="px-3 py-1 bg-white border border-gray-200 rounded-md text-sm font-medium">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-gray-400">Ops & Sécurité</span>
                    <div class="flex flex-wrap gap-2 mt-3">
                        @foreach(['Docker', 'MQTT', 'Cybersecurity'] as $tech)
                            <span class="px-3 py-1 bg-white border border-gray-200 rounded-md text-sm font-medium">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection