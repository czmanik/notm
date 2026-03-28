@extends('layouts.app')
@section('title', 'MaponCulture – Systém pro kulturní akce | WS4U')
@section('content')
<div class="gradient-ws4u text-white py-24 px-4">
    <div class="max-w-5xl mx-auto">
        <a href="{{ route('products') }}" class="text-purple-300 hover:text-white text-sm mb-6 inline-flex items-center gap-1">← {{ app()->getLocale() == 'cs' ? 'Zpět na produkty' : 'Back to products' }}</a>
        <div class="flex items-center gap-5 mb-8">
            <div class="w-20 h-20 bg-gradient-to-br from-purple-400 to-indigo-500 rounded-3xl flex items-center justify-center text-4xl shadow-2xl">🎪</div>
            <div>
                <h1 class="text-5xl font-black">MaponCulture</h1>
                <p class="text-purple-300 text-lg mt-1">{{ app()->getLocale() == 'cs' ? 'Pro organizátory festivalů a kulturních akcí' : 'For organizers of festivals and cultural events' }}</p>
            </div>
        </div>
        <p class="text-xl text-slate-300 max-w-3xl leading-relaxed">
            {{ app()->getLocale() == 'cs' ? 'Jednoduchá, ale výkonná aplikace, která zjednodušuje organizaci kulturních akcí – od registrace návštěvníků přes program až po real-time počítání a komunikaci.' : 'A simple but powerful application that simplifies the organization of cultural events – from visitor registration through program to real-time counting and communication.' }}
        </p>
    </div>
</div>
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
            <div class="bg-purple-50 rounded-2xl p-8 border border-purple-100 card-hover">
                <div class="text-4xl mb-4">🗓️</div>
                <h3 class="font-bold text-slate-800 text-xl mb-3">{{ app()->getLocale() == 'cs' ? 'Program a otevírací doby' : 'Program and Opening Hours' }}</h3>
                <p class="text-slate-500">{{ app()->getLocale() == 'cs' ? 'Snadno spravujte program akce, otevírací doby areálů a scén. Návštěvníci vidí vše aktuálně v mobilu.' : 'Easily manage the event program, opening hours of areas and stages. Visitors see everything current on their mobile.' }}</p>
            </div>
            <div class="bg-indigo-50 rounded-2xl p-8 border border-indigo-100 card-hover">
                <div class="text-4xl mb-4">📱</div>
                <h3 class="font-bold text-slate-800 text-xl mb-3">{{ app()->getLocale() == 'cs' ? 'Registrace a vstupenky' : 'Registration and Tickets' }}</h3>
                <p class="text-slate-500">{{ app()->getLocale() == 'cs' ? 'Registrace účastníků s QR kódy pro vstup. Správa kapacit a prodej vstupenek online.' : 'Registration of participants with QR codes for entry. Capacity management and online ticket sales.' }}</p>
            </div>
            <div class="bg-violet-50 rounded-2xl p-8 border border-violet-100 card-hover">
                <div class="text-4xl mb-4">👥</div>
                <h3 class="font-bold text-slate-800 text-xl mb-3">{{ app()->getLocale() == 'cs' ? 'Počítání návštěvníků' : 'Visitor Counting' }}</h3>
                <p class="text-slate-500">{{ app()->getLocale() == 'cs' ? 'Real-time sledování obsazenosti zón a celého areálu. Okamžitý přehled pro pořadatele i bezpečnostní složky.' : 'Real-time tracking of occupancy of zones and the entire area. Instant overview for organizers and security forces.' }}</p>
            </div>
            <div class="bg-purple-50 rounded-2xl p-8 border border-purple-100 card-hover">
                <div class="text-4xl mb-4">📢</div>
                <h3 class="font-bold text-slate-800 text-xl mb-3">{{ app()->getLocale() == 'cs' ? 'Komunikace s návštěvníky' : 'Communication with Visitors' }}</h3>
                <p class="text-slate-500">{{ app()->getLocale() == 'cs' ? 'Push notifikace, změny programu v reálném čase, bezpečnostní upozornění. Vždy v kontaktu s publikem.' : 'Push notifications, real-time program changes, security alerts. Always in touch with the audience.' }}</p>
            </div>
        </div>

        <!-- Pricing -->
        <div class="mb-20">
            <h2 class="text-3xl font-bold text-slate-900 text-center mb-12">{{ app()->getLocale() == 'cs' ? 'Ceník pro organizátory' : 'Pricing for Organizers' }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Single Event -->
                <div class="bg-white rounded-2xl border border-slate-200 p-8 flex flex-col shadow-sm">
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Single Event</h3>
                    <p class="text-slate-500 text-sm mb-6">{{ app()->getLocale() == 'cs' ? 'Jednorázová akce do 1 000 lidí' : 'One-time event up to 1,000 people' }}</p>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-slate-900">4 900 Kč</span>
                        <span class="text-slate-500 text-sm">/ {{ app()->getLocale() == 'cs' ? 'akce' : 'event' }}</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-slate-600">
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Mobilní program' : 'Mobile program' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? '1 scéna / areál' : '1 stage / area' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Registrace účastníků' : 'Participant registration' }}</li>
                        <li class="flex items-center gap-2 text-slate-300">❌ {{ app()->getLocale() == 'cs' ? 'Real-time počítání' : 'Real-time counting' }}</li>
                        <li class="flex items-center gap-2 text-slate-300">❌ {{ app()->getLocale() == 'cs' ? 'Push notifikace' : 'Push notifications' }}</li>
                    </ul>
                    <a href="{{ route('contact', ['interest' => 'MaponCulture Single']) }}" class="block text-center py-3 rounded-xl border-2 border-purple-500 text-purple-600 font-bold hover:bg-purple-50 transition-colors">{{ app()->getLocale() == 'cs' ? 'Objednat akci' : 'Order event' }}</a>
                </div>
                <!-- Festival -->
                <div class="bg-slate-900 rounded-2xl border-2 border-purple-500 p-8 flex flex-col shadow-xl scale-105 z-10 relative text-white">
                    <div class="absolute top-0 right-8 -translate-y-1/2 bg-purple-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider font-mono">{{ app()->getLocale() == 'cs' ? 'Doporučujeme' : 'Recommended' }}</div>
                    <h3 class="text-xl font-bold mb-2">Festival</h3>
                    <p class="text-slate-400 text-sm mb-6">{{ app()->getLocale() == 'cs' ? 'Pro větší akce a festivaly' : 'For larger events and festivals' }}</p>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-white">12 900 Kč</span>
                        <span class="text-slate-400 text-sm">/ {{ app()->getLocale() == 'cs' ? 'akce' : 'event' }}</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-slate-300">
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Neomezené scény' : 'Unlimited stages' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Real-time počítání' : 'Real-time counting' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Push notifikace' : 'Push notifications' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Interaktivní mapa' : 'Interactive map' }}</li>
                        <li class="flex items-center gap-2">✅ Ticket integrace</li>
                    </ul>
                    <a href="{{ route('contact', ['interest' => 'MaponCulture Festival']) }}" class="block text-center py-3 rounded-xl bg-purple-500 text-white font-bold hover:bg-purple-600 transition-colors shadow-lg shadow-purple-500/30">{{ app()->getLocale() == 'cs' ? 'Vybrat Festival' : 'Choose Festival' }}</a>
                </div>
                <!-- Professional -->
                <div class="bg-white rounded-2xl border border-slate-200 p-8 flex flex-col shadow-sm">
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Professional</h3>
                    <p class="text-slate-500 text-sm mb-6">{{ app()->getLocale() == 'cs' ? 'Celoroční podpora agentur' : 'Year-round agency support' }}</p>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-slate-900">{{ app()->getLocale() == 'cs' ? 'Individuálně' : 'Individually' }}</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-slate-600">
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Neomezeně akcí' : 'Unlimited events' }}</li>
                        <li class="flex items-center gap-2">✅ Whitelabel {{ app()->getLocale() == 'cs' ? 'řešení' : 'solution' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Vlastní mobilní appka' : 'Custom mobile app' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Dedikovaný manažer' : 'Dedicated manager' }}</li>
                        <li class="flex items-center gap-2">✅ SLA {{ app()->getLocale() == 'cs' ? 'podpora' : 'support' }}</li>
                    </ul>
                    <a href="{{ route('contact', ['interest' => 'MaponCulture Pro']) }}" class="block text-center py-3 rounded-xl border-2 border-slate-800 text-slate-800 font-bold hover:bg-slate-50 transition-colors">{{ app()->getLocale() == 'cs' ? 'Poptat řešení' : 'Inquire solution' }}</a>
                </div>
            </div>
        </div>

        <div class="bg-slate-900 text-white rounded-3xl p-12 mb-20 shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-white mb-6">{{ app()->getLocale() == 'cs' ? 'Ideální pro' : 'Ideal for' }}</h2>
                    <ul class="space-y-3 text-slate-300">
                        @foreach([
                            app()->getLocale() == 'cs' ? 'Hudební a kulturní festivaly (500+ návštěvníků)' : 'Music and cultural festivals (500+ visitors)',
                            app()->getLocale() == 'cs' ? 'Městské slavnosti a jarmarky' : 'City festivals and fairs',
                            app()->getLocale() == 'cs' ? 'Sportovní a společenské akce' : 'Sports and social events',
                            app()->getLocale() == 'cs' ? 'Veletrhy a výstavy' : 'Trade fairs and exhibitions',
                            app()->getLocale() == 'cs' ? 'Vzdělávací konference a kongresy' : 'Educational conferences and congresses'
                        ] as $item)
                        <li class="flex items-center gap-3"><span class="w-6 h-6 bg-purple-500 rounded-full flex items-center justify-center text-xs">✓</span> {{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="text-center">
                    <p class="text-xl text-slate-300 mb-8">{{ app()->getLocale() == 'cs' ? 'Pořádáte akci a nevíte, který plán zvolit? Rádi vám poradíme.' : 'Hosting an event and don\'t know which plan to choose? We\'ll be happy to advise you.' }}</p>
                    <a href="{{ route('contact', ['interest' => 'MaponCulture Konzultace']) }}" class="inline-block bg-gradient-to-r from-purple-500 to-indigo-500 hover:from-purple-600 hover:to-indigo-600 text-white px-10 py-4 rounded-xl font-semibold text-lg transition-all shadow-xl shadow-purple-500/20">{{ app()->getLocale() == 'cs' ? 'Konzultace zdarma' : 'Free consultation' }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
