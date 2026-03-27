@extends('layouts.app')
@section('title', (app()->getLocale() == 'cs' ? 'Naše produkty' : 'Our Products') . ' – WS4U')
@section('content')
<div class="gradient-ws4u text-white py-20 px-4 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-5xl font-black mb-6">{{ app()->getLocale() == 'cs' ? 'Naše produkty' : 'Our Products' }}</h1>
        <p class="text-xl text-slate-300">{{ app()->getLocale() == 'cs' ? 'Hotová SaaS řešení pro specifická odvětví, nebo vývoj přesně podle vašich požadavků.' : 'Ready-made SaaS solutions for specific industries, or development exactly according to your requirements.' }}</p>
    </div>
</div>
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-10">
        <!-- Fotacek -->
        <a href="{{ route('products.fotacek') }}" class="group bg-white rounded-3xl p-10 border border-slate-100 shadow-sm card-hover relative overflow-hidden">
            <div class="absolute top-6 right-6 badge-pill border-sky-200 text-sky-600 bg-sky-50 font-roboto-mono">
                {{ __('home.products.badge') }}
            </div>
            <div class="w-16 h-16 bg-gradient-to-br from-pink-400 to-rose-500 rounded-2xl flex items-center justify-center text-3xl mb-8">📷</div>
            <h2 class="text-3xl font-bold text-slate-800 mb-4 group-hover:text-sky-600 transition-colors">Fotáček.cz</h2>
            <p class="text-slate-500 leading-relaxed mb-6">
                {{ app()->getLocale() == 'cs' ? 'Kompletní webová platforma pro fotografy. Zahrnuje responzivní portfolio web, integrovaný rezervační kalendář a plnohodnotný e-shop pro prodej originálních fotografií i printů.' : 'Complete web platform for photographers. Includes responsive portfolio website, integrated booking calendar and full-featured e-shop for selling original photos and prints.' }}
            </p>
            <ul class="space-y-2 text-sm text-slate-600">
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> {{ app()->getLocale() == 'cs' ? 'Responzivní portfolio web' : 'Responsive portfolio website' }}</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> {{ app()->getLocale() == 'cs' ? 'Rezervační systém s kalendářem' : 'Booking system with calendar' }}</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> {{ app()->getLocale() == 'cs' ? 'E-shop fotografií a printů' : 'E-shop for photos and prints' }}</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> {{ app()->getLocale() == 'cs' ? 'Online platby' : 'Online payments' }}</li>
            </ul>
        </a>

        <!-- GastroTech -->
        <a href="{{ route('products.gastrotech') }}" class="group bg-white rounded-3xl p-10 border border-slate-100 shadow-sm card-hover relative overflow-hidden">
            <div class="absolute top-6 right-6 badge-pill border-orange-200 text-orange-600 bg-orange-50 font-roboto-mono">
                {{ __('home.products.badge') }}
            </div>
            <div class="w-16 h-16 bg-gradient-to-br from-orange-400 to-amber-500 rounded-2xl flex items-center justify-center text-3xl mb-8">🍽️</div>
            <h2 class="text-3xl font-bold text-slate-800 mb-4 group-hover:text-sky-600 transition-colors">GastroTech</h2>
            <p class="text-slate-500 leading-relaxed mb-6">
                {{ app()->getLocale() == 'cs' ? 'Komplexní POS a řídící systém pro restaurace, kavárny a gastronomické podniky všech velikostí. Vše od webu po HACCP na jednom místě.' : 'Comprehensive POS and management system for restaurants, cafes and gastronomic enterprises of all sizes. Everything from web to HACCP in one place.' }}
            </p>
            <ul class="space-y-2 text-sm text-slate-600">
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> {{ app()->getLocale() == 'cs' ? 'Web, menu a denní nabídka' : 'Web, menu and daily specials' }}</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> {{ app()->getLocale() == 'cs' ? 'Rezervace a online objednávky' : 'Reservations and online orders' }}</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> {{ app()->getLocale() == 'cs' ? 'Personální modul (docházka, výplaty)' : 'Staff module (attendance, payroll)' }}</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> {{ app()->getLocale() == 'cs' ? 'HACCP, sklad, věrnostní program' : 'HACCP, warehouse, loyalty program' }}</li>
            </ul>
        </a>

        <!-- MaponCulture -->
        <a href="{{ route('products.maponculture') }}" class="group bg-white rounded-3xl p-10 border border-slate-100 shadow-sm card-hover relative overflow-hidden">
            <div class="absolute top-6 right-6 badge-pill border-purple-200 text-purple-600 bg-purple-50 font-roboto-mono">
                {{ __('home.products.badge') }}
            </div>
            <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-indigo-500 rounded-2xl flex items-center justify-center text-3xl mb-8">🎪</div>
            <h2 class="text-3xl font-bold text-slate-800 mb-4 group-hover:text-sky-600 transition-colors">MaponCulture</h2>
            <p class="text-slate-500 leading-relaxed mb-6">
                {{ app()->getLocale() == 'cs' ? 'Jednoduchá a výkonná aplikace pro organizátory festivalů a městských kulturních akcí. Od programu po real-time počítání návštěvníků.' : 'Simple and powerful application for organizers of festivals and city cultural events. From program to real-time visitor counting.' }}
            </p>
            <ul class="space-y-2 text-sm text-slate-600">
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> {{ app()->getLocale() == 'cs' ? 'Program a otevírací doby' : 'Program and opening hours' }}</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> {{ app()->getLocale() == 'cs' ? 'Registrace návštěvníků' : 'Visitor registration' }}</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> {{ app()->getLocale() == 'cs' ? 'Počítání návštěvníků v reálném čase' : 'Real-time visitor counting' }}</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> {{ app()->getLocale() == 'cs' ? 'Push notifikace a komunikace' : 'Push notifications and communication' }}</li>
            </ul>
        </a>

        <!-- Custom -->
        <a href="{{ route('products.custom') }}" class="group bg-white rounded-3xl p-10 border border-slate-100 shadow-sm card-hover relative overflow-hidden">
            <div class="absolute top-6 right-6 badge-pill border-sky-200 text-sky-600 bg-sky-50 font-roboto-mono">
                {{ __('home.products.badge') }}
            </div>
            <div class="w-16 h-16 bg-gradient-to-br from-sky-400 to-cyan-500 rounded-2xl flex items-center justify-center text-3xl mb-8">⚙️</div>
            <h2 class="text-3xl font-bold text-slate-800 mb-4 group-hover:text-sky-600 transition-colors">{{ app()->getLocale() == 'cs' ? 'Vývoj na míru' : 'Custom Development' }}</h2>
            <p class="text-slate-500 leading-relaxed mb-6">
                {{ app()->getLocale() == 'cs' ? 'Máte specifické požadavky, které hotový produkt nesplňuje? Postavíme vám aplikaci od základu přesně podle vašich potřeb a procesů.' : 'Have specific requirements that a ready-made product doesn\'t meet? We will build your application from scratch exactly according to your needs and processes.' }}
            </p>
            <ul class="space-y-2 text-sm text-slate-600">
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> CRM, ERP, interní systémy</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> Laravel + Vue.js / React</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> API a integrace</li>
                <li class="flex items-center gap-2"><span class="text-green-500">✓</span> {{ app()->getLocale() == 'cs' ? 'Dlouhodobá podpora' : 'Long-term support' }}</li>
            </ul>
        </a>
    </div>
</section>
@endsection
