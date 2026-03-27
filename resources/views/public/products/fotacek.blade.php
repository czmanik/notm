@extends('layouts.app')
@section('title', 'Fotáček.cz – Systém pro fotografy | WS4U')
@section('content')
<div class="bg-gradient-to-br from-pink-950 via-[#1e293b] to-[#0f172a] text-white py-24 px-4 border-b border-slate-800">
    <div class="max-w-5xl mx-auto">
        <a href="{{ route('products') }}" class="text-pink-400 hover:text-white text-sm mb-6 inline-flex items-center gap-1 font-mono">← {{ app()->getLocale() == 'cs' ? 'Zpět na produkty' : 'Back to products' }}</a>
        <div class="flex items-center gap-5 mb-8">
            <div class="w-20 h-20 bg-gradient-to-br from-pink-400 to-rose-500 rounded-3xl flex items-center justify-center text-4xl shadow-2xl">📷</div>
            <div>
                <h1 class="text-5xl font-black">Fotáček.cz</h1>
                <p class="text-pink-400 text-lg mt-1">{{ app()->getLocale() == 'cs' ? 'Systém pro moderní fotografy' : 'System for modern photographers' }}</p>
            </div>
        </div>
        <p class="text-xl text-slate-300 max-w-3xl leading-relaxed">
            {{ app()->getLocale() == 'cs' ? 'Komplexní webová platforma, která fotografům umožňuje prezentovat portfolio, přijímat rezervace a prodávat fotografie online – vše v jednom přehledném systému.' : 'A comprehensive web platform that allows photographers to showcase their portfolio, take bookings and sell photos online – all in one clear system.' }}
        </p>
    </div>
</div>
<section class="py-20 bg-[#111827]">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
            <div class="text-center p-8 rounded-2xl bg-[#1e293b]/50 border border-slate-800 card-hover">
                <div class="text-4xl mb-4">🌐</div>
                <h3 class="font-bold text-white text-lg mb-3">{{ app()->getLocale() == 'cs' ? 'Portfolio web' : 'Portfolio website' }}</h3>
                <p class="text-slate-400 text-sm leading-relaxed">{{ app()->getLocale() == 'cs' ? 'Krásný, responzivní web optimalizovaný pro mobilní i desktopová zařízení. Prezentujte svou práci profesionálně.' : 'Beautiful, responsive website optimized for mobile and desktop devices. Present your work professionally.' }}</p>
            </div>
            <div class="text-center p-8 rounded-2xl bg-[#1e293b]/50 border border-slate-800 card-hover">
                <div class="text-4xl mb-4">📅</div>
                <h3 class="font-bold text-white text-lg mb-3">{{ app()->getLocale() == 'cs' ? 'Rezervační systém' : 'Booking system' }}</h3>
                <p class="text-slate-400 text-sm leading-relaxed">{{ app()->getLocale() == 'cs' ? 'Klienti si sami rezervují termíny focení přes online kalendář. Žádné telefonování, žádné emaily tam a zpátky.' : 'Clients book their own photo shoots via an online calendar. No phoning, no emails back and forth.' }}</p>
            </div>
            <div class="text-center p-8 rounded-2xl bg-[#1e293b]/50 border border-slate-800 card-hover">
                <div class="text-4xl mb-4">🛒</div>
                <h3 class="font-bold text-white text-lg mb-3">{{ app()->getLocale() == 'cs' ? 'E-shop fotografií' : 'Photo E-shop' }}</h3>
                <p class="text-slate-400 text-sm leading-relaxed">{{ app()->getLocale() == 'cs' ? 'Prodávejte digitální fotografie i fyzické printy. Integrace s platební bránou, automatické doručení digitálních souborů.' : 'Sell digital photos and physical prints. Integration with payment gateway, automatic delivery of digital files.' }}</p>
            </div>
        </div>

        <!-- Pricing -->
        <div class="mb-20">
            <h2 class="text-3xl font-bold text-white text-center mb-12">{{ app()->getLocale() == 'cs' ? 'Vyberte si svůj plán' : 'Choose your plan' }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Lite -->
                <div class="bg-[#1e293b]/50 rounded-2xl border border-slate-800 p-8 flex flex-col shadow-sm">
                    <h3 class="text-xl font-bold text-white mb-2">Lite</h3>
                    <p class="text-slate-400 text-sm mb-6">{{ app()->getLocale() == 'cs' ? 'Pro začínající fotografy' : 'For beginner photographers' }}</p>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-white">490 Kč</span>
                        <span class="text-slate-400 text-sm">/ {{ app()->getLocale() == 'cs' ? 'měsíc' : 'month' }}</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-slate-300">
                        <li class="flex items-center gap-2">✅ Portfolio web</li>
                        <li class="flex items-center gap-2">✅ 5 galerií</li>
                        <li class="flex items-center gap-2">✅ Základní SEO</li>
                        <li class="flex items-center gap-2 text-slate-500">❌ {{ app()->getLocale() == 'cs' ? 'Rezervační systém' : 'Booking system' }}</li>
                        <li class="flex items-center gap-2 text-slate-500">❌ E-shop</li>
                    </ul>
                    <a href="{{ route('contact', ['interest' => 'Fotáček Lite']) }}" class="block text-center py-3 rounded-xl border-2 border-pink-500 text-pink-500 font-bold hover:bg-pink-500/10 transition-colors">{{ app()->getLocale() == 'cs' ? 'Začít zdarma' : 'Start free' }}</a>
                </div>
                <!-- Pro -->
                <div class="bg-slate-900 rounded-2xl border-2 border-pink-500 p-8 flex flex-col shadow-xl scale-105 z-10 relative">
                    <div class="absolute top-0 right-8 -translate-y-1/2 bg-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider font-mono">{{ app()->getLocale() == 'cs' ? 'Populární' : 'Popular' }}</div>
                    <h3 class="text-xl font-bold text-white mb-2">Pro</h3>
                    <p class="text-slate-400 text-sm mb-6">{{ app()->getLocale() == 'cs' ? 'Vše, co potřebuje profík' : 'Everything a pro needs' }}</p>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-white">990 Kč</span>
                        <span class="text-slate-400 text-sm">/ {{ app()->getLocale() == 'cs' ? 'měsíc' : 'month' }}</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-slate-300">
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Neomezené galerie' : 'Unlimited galleries' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Rezervační systém' : 'Booking system' }}</li>
                        <li class="flex items-center gap-2">✅ SMS {{ app()->getLocale() == 'cs' ? 'notifikace' : 'notifications' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Základní E-shop' : 'Basic E-shop' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Vlastní doména' : 'Custom domain' }}</li>
                    </ul>
                    <a href="{{ route('contact', ['interest' => 'Fotáček Pro']) }}" class="block text-center py-3 rounded-xl bg-pink-500 text-white font-bold hover:bg-pink-600 transition-colors shadow-lg shadow-pink-500/30">{{ app()->getLocale() == 'cs' ? 'Vybrat Pro' : 'Choose Pro' }}</a>
                </div>
                <!-- Agency -->
                <div class="bg-[#1e293b]/50 rounded-2xl border border-slate-800 p-8 flex flex-col shadow-sm">
                    <h3 class="text-xl font-bold text-white mb-2">Agency</h3>
                    <p class="text-slate-400 text-sm mb-6">{{ app()->getLocale() == 'cs' ? 'Pro týmy a studia' : 'For teams and studios' }}</p>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-white">2 490 Kč</span>
                        <span class="text-slate-400 text-sm">/ {{ app()->getLocale() == 'cs' ? 'měsíc' : 'month' }}</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-slate-300">
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Více uživatelů' : 'Multiple users' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Pokročilý E-shop' : 'Advanced E-shop' }}</li>
                        <li class="flex items-center gap-2">✅ Multi-licence</li>
                        <li class="flex items-center gap-2">✅ VIP {{ app()->getLocale() == 'cs' ? 'podpora' : 'support' }}</li>
                        <li class="flex items-center gap-2">✅ API {{ app()->getLocale() == 'cs' ? 'přístup' : 'access' }}</li>
                    </ul>
                    <a href="{{ route('contact', ['interest' => 'Fotáček Agency']) }}" class="block text-center py-3 rounded-xl border-2 border-slate-700 text-white font-bold hover:bg-slate-700 transition-colors">{{ app()->getLocale() == 'cs' ? 'Kontaktovat' : 'Contact' }}</a>
                </div>
            </div>
        </div>

        <div class="bg-[#1e293b]/50 rounded-3xl p-12 border border-slate-800">
            <h2 class="text-3xl font-bold text-white text-center mb-12">{{ app()->getLocale() == 'cs' ? 'Srovnání funkcí' : 'Feature Comparison' }}</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse font-mono text-sm">
                    <thead>
                        <tr class="border-b border-slate-800">
                            <th class="py-4 px-2 text-slate-500 font-medium">{{ app()->getLocale() == 'cs' ? 'Funkce' : 'Feature' }}</th>
                            <th class="py-4 px-2 text-center text-white font-bold">Lite</th>
                            <th class="py-4 px-2 text-center text-pink-500 font-bold">Pro</th>
                            <th class="py-4 px-2 text-center text-white font-bold">Agency</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800">
                        <tr>
                            <td class="py-4 px-2 text-slate-300">{{ app()->getLocale() == 'cs' ? 'Webová prezentace' : 'Web presentation' }}</td>
                            <td class="py-4 px-2 text-center text-green-500">✓</td>
                            <td class="py-4 px-2 text-center text-green-500">✓</td>
                            <td class="py-4 px-2 text-center text-green-500">✓</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-2 text-slate-300">{{ app()->getLocale() == 'cs' ? 'Počet fotografií' : 'Number of photos' }}</td>
                            <td class="py-4 px-2 text-center text-slate-400">100 ks</td>
                            <td class="py-4 px-2 text-center text-slate-400">{{ app()->getLocale() == 'cs' ? 'Neomezeně' : 'Unlimited' }}</td>
                            <td class="py-4 px-2 text-center text-slate-400">{{ app()->getLocale() == 'cs' ? 'Neomezeně' : 'Unlimited' }}</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-2 text-slate-300">{{ app()->getLocale() == 'cs' ? 'Rezervační kalendář' : 'Booking calendar' }}</td>
                            <td class="py-4 px-2 text-center text-red-500/50">×</td>
                            <td class="py-4 px-2 text-center text-green-500">✓</td>
                            <td class="py-4 px-2 text-center text-green-500">✓</td>
                        </tr>
                        <tr>
                            <td class="py-4 px-2 text-slate-300">{{ app()->getLocale() == 'cs' ? 'Prodej fotek (E-shop)' : 'Selling photos (E-shop)' }}</td>
                            <td class="py-4 px-2 text-center text-red-500/50">×</td>
                            <td class="py-4 px-2 text-center text-green-500">✓</td>
                            <td class="py-4 px-2 text-center text-green-500">✓</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
