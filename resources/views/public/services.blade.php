@extends('layouts.app')
@section('title', __('services.title') . ' – WS4U')
@section('content')
<div class="gradient-ws4u text-white py-20 px-4 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-5xl font-black mb-6">{{ __('services.title') }}</h1>
        <p class="text-xl text-slate-300">{{ app()->getLocale() == 'cs' ? 'Od architektury přes vývoj až po AI transformaci a dlouhodobý R&D.' : 'From architecture to development to AI transformation and long-term R&D.' }}</p>
    </div>
</div>
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Card 1: Architektura & Konzultace -->
        <div class="bg-slate-50 rounded-2xl p-10 border border-slate-100 card-hover relative overflow-hidden">
            <div class="text-5xl mb-6">🏗️</div>
            <h3 class="font-bold text-slate-800 text-2xl mb-4">{{ __('services.card1.title') }}</h3>
            <p class="text-slate-600 text-lg leading-relaxed">{{ __('services.card1.text') }}</p>
            <div class="mt-6 flex flex-wrap gap-2">
                <span class="badge-pill border-sky-200 text-sky-600 bg-sky-50">System Design</span>
                <span class="badge-pill border-sky-200 text-sky-600 bg-sky-50">Scalability</span>
            </div>
        </div>

        <!-- Card 2: Legacy Code Refresh -->
        <div class="bg-slate-50 rounded-2xl p-10 border border-slate-100 card-hover relative overflow-hidden">
            <div class="text-5xl mb-6">♻️</div>
            <h3 class="font-bold text-slate-800 text-2xl mb-4">{{ __('services.card2.title') }}</h3>
            <p class="text-slate-600 text-lg leading-relaxed">{{ __('services.card2.text') }}</p>
            <div class="mt-6 flex flex-wrap gap-2">
                <span class="badge-pill border-indigo-200 text-indigo-600 bg-indigo-50">AI-Powered Refactor</span>
                <span class="badge-pill border-indigo-200 text-indigo-600 bg-indigo-50">PHP 8.x / Laravel 11</span>
            </div>
        </div>

        <!-- Card 3: Vývoj na míru v Laravelu -->
        <div class="bg-slate-50 rounded-2xl p-10 border border-slate-100 card-hover relative overflow-hidden">
            <div class="text-5xl mb-6">💻</div>
            <h3 class="font-bold text-slate-800 text-2xl mb-4">{{ __('services.card3.title') }}</h3>
            <p class="text-slate-600 text-lg leading-relaxed">{{ __('services.card3.text') }}</p>
            <div class="mt-6 flex flex-wrap gap-2">
                <span class="badge-pill border-emerald-200 text-emerald-600 bg-emerald-50">Enterprise-Grade</span>
                <span class="badge-pill border-emerald-200 text-emerald-600 bg-emerald-50">API-First</span>
            </div>
        </div>

        <!-- Card 4: AI Integration & R&D -->
        <div class="bg-slate-50 rounded-2xl p-10 border border-slate-100 card-hover relative overflow-hidden">
            <div class="text-5xl mb-6">🧠</div>
            <h3 class="font-bold text-slate-800 text-2xl mb-4">{{ __('services.card4.title') }}</h3>
            <p class="text-slate-600 text-lg leading-relaxed">{{ __('services.card4.text') }}</p>
            <div class="mt-6 flex flex-wrap gap-2">
                <span class="badge-pill border-purple-200 text-purple-600 bg-purple-50">Laravel Copilot</span>
                <span class="badge-pill border-purple-200 text-purple-600 bg-purple-50">LLM Ops</span>
            </div>
        </div>
    </div>
</section>

<section class="gradient-ws4u py-20 px-4">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-white mb-6">{{ app()->getLocale() == 'cs' ? 'Nezávazná konzultace zdarma' : 'Free Non-binding Consultation' }}</h2>
        <p class="text-slate-300 mb-8">{{ app()->getLocale() == 'cs' ? 'Popište nám váš projekt a mi vám do 24 hodin odpovíme s prvním návrhem přístupu.' : 'Describe your project and we will respond within 24 hours with a first proposal.' }}</p>
        <a href="{{ route('contact') }}" class="inline-block bg-gradient-to-r from-sky-500 to-indigo-500 hover:from-sky-600 hover:to-indigo-600 text-white px-10 py-4 rounded-xl font-semibold text-lg transition-all shadow-xl">
            {{ app()->getLocale() == 'cs' ? 'Kontaktovat nás' : 'Contact Us' }}
        </a>
    </div>
</section>
@endsection
