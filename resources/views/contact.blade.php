@extends('layouts.app')

@section('content')
<section class="max-w-2xl mx-auto py-20 px-6 animate-in fade-in duration-700">
    <div class="mb-12">
        <h1 class="text-4xl font-bold tracking-tight text-black mb-4">Discutons de votre projet</h1>
        <p class="text-gray-600">Remplissez ce formulaire et je vous répondrai dans les plus brefs délais.</p>
    </div>

    @if(session('success'))
        <div class="mb-8 p-4 bg-green-50 border border-green-200 text-green-700 rounded-2xl text-sm flex items-center gap-3 animate-bounce">
            <i class="fa-solid fa-check-circle"></i>
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white border border-gray-100 rounded-3xl p-8 shadow-sm hover:shadow-md transition-shadow duration-500">
        <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
            @csrf
            
            <div class="space-y-2">
                <label class="text-sm font-semibold text-black">Nom complet</label>
                <input type="text" name="name" required class="w-full p-4 rounded-xl border border-gray-200 focus:border-black focus:ring-2 focus:ring-black/10 outline-none transition-all duration-300">
            </div>

            <div class="space-y-2">
                <label class="text-sm font-semibold text-black">Adresse email</label>
                <input type="email" name="email" required class="w-full p-4 rounded-xl border border-gray-200 focus:border-black focus:ring-2 focus:ring-black/10 outline-none transition-all duration-300">
            </div>

            <div class="space-y-2">
                <label class="text-sm font-semibold text-black">Votre message</label>
                <textarea name="message" rows="5" required class="w-full p-4 rounded-xl border border-gray-200 focus:border-black focus:ring-2 focus:ring-black/10 outline-none transition-all duration-300"></textarea>
            </div>

            <button type="submit" class="w-full bg-black text-white py-4 rounded-xl font-bold hover:bg-gray-800 transition-all active:scale-[0.98] shadow-lg shadow-black/10">
                Envoyer le message
            </button>
        </form>
    </div>
    
    </section>
@endsection