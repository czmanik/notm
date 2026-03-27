@extends('layouts.app')
@section('title', 'GastroTech – POS systém pro gastronomii | WS4U')
@section('content')
<div class="bg-gradient-to-br from-orange-950 via-[#1e293b] to-[#0f172a] text-white py-24 px-4 border-b border-slate-800">
    <div class="max-w-5xl mx-auto">
        <a href="{{ route('products') }}" class="text-orange-400 hover:text-white text-sm mb-6 inline-flex items-center gap-1 font-mono">← {{ app()->getLocale() == 'cs' ? 'Zpět na produkty' : 'Back to products' }}</a>
        <div class="flex items-center gap-5 mb-8">
            <div class="w-20 h-20 bg-gradient-to-br from-orange-400 to-amber-500 rounded-3xl flex items-center justify-center text-4xl shadow-2xl">🍽️</div>
            <div>
                <h1 class="text-5xl font-black">GastroTech</h1>
                <p class="text-orange-400 text-lg mt-1">{{ app()->getLocale() == 'cs' ? 'Kompletní POS systém pro gastronomii' : 'Complete POS system for gastronomy' }}</p>
            </div>
        </div>
        <p class="text-xl text-slate-300 max-w-3xl leading-relaxed">
            {{ app()->getLocale() == 'cs' ? 'Jediný systém, který potřebuje váš gastronomický podnik. Od webu a online menu přes rezervace a HACCP až po mzdy a věrnostní program.' : 'The only system your gastronomic business needs. From web and online menus through reservations and HACCP to payroll and loyalty programs.' }}
        </p>
    </div>
</div>
<section class="py-20 bg-[#111827]">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-white text-center mb-12">{{ app()->getLocale() == 'cs' ? 'Moduly GastroTech' : 'GastroTech Modules' }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-20">
            @foreach([
                ['🌐', app()->getLocale() == 'cs' ? 'Web a menu' : 'Web and Menu', app()->getLocale() == 'cs' ? 'Profesionální web s online menu, denní nabídkou a galeriemi. Vždy aktuální, vždy na mobilu.' : 'Professional website with online menu, daily specials and galleries. Always up to date, always on mobile.'],
                ['📋', app()->getLocale() == 'cs' ? 'Rezervace' : 'Reservations', app()->getLocale() == 'cs' ? 'Online rezervace stolů a akcí. Automatická potvrzení, připomínky a správa kapacity.' : 'Online table and event reservations. Automatic confirmations, reminders and capacity management.'],
                ['👥', app()->getLocale() == 'cs' ? 'Personální modul' : 'Staff Module', app()->getLocale() == 'cs' ? 'Docházka, výplaty, plánování směn. Kompletní HR agenda na dosah ruky.' : 'Attendance, payroll, shift planning. Complete HR agenda at your fingertips.'],
                ['🦠', 'HACCP', app()->getLocale() == 'cs' ? 'Digitální HACCP dokumentace splňující všechny legislativní požadavky. Bez papírování.' : 'Digital HACCP documentation meeting all legislative requirements. Without paperwork.'],
                ['📦', app()->getLocale() == 'cs' ? 'Sklad' : 'Warehouse', app()->getLocale() == 'cs' ? 'Skladová evidence s automatickým odpisem po objednávce. Objednávky u dodavatelů.' : 'Stock records with automatic deduction after order. Orders from suppliers.'],
                ['💳', app()->getLocale() == 'cs' ? 'Věrnostní program' : 'Loyalty Program', app()->getLocale() == 'cs' ? 'Digitální věrnostní kartičky, body a slevy. Vracejte zákazníky zpět.' : 'Digital loyalty cards, points and discounts. Keep customers coming back.'],
            ] as [$icon, $title, $desc])
            <div class="bg-[#1e293b]/50 rounded-2xl p-6 border border-slate-800 card-hover">
                <div class="text-3xl mb-4">{{ $icon }}</div>
                <h3 class="font-bold text-white mb-2">{{ $title }}</h3>
                <p class="text-slate-400 text-sm leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>

        <!-- Pricing -->
        <div class="mb-20">
            <h2 class="text-3xl font-bold text-white text-center mb-12">{{ app()->getLocale() == 'cs' ? 'Cenové plány' : 'Pricing Plans' }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic -->
                <div class="bg-[#1e293b]/50 rounded-2xl border border-slate-800 p-8 flex flex-col shadow-sm">
                    <h3 class="text-xl font-bold text-white mb-2">Basic</h3>
                    <p class="text-slate-400 text-sm mb-6">{{ app()->getLocale() == 'cs' ? 'Pro malé kavárny a bistra' : 'For small cafes and bistros' }}</p>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-white">1 490 Kč</span>
                        <span class="text-slate-400 text-sm">/ {{ app()->getLocale() == 'cs' ? 'měsíc' : 'month' }}</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-slate-300">
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Digitální menu' : 'Digital menu' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Rezervace stolů' : 'Table reservations' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Základní sklad' : 'Basic warehouse' }}</li>
                        <li class="flex items-center gap-2 text-slate-500">❌ {{ app()->getLocale() == 'cs' ? 'Personální modul' : 'Staff module' }}</li>
                        <li class="flex items-center gap-2 text-slate-500">❌ HACCP</li>
                    </ul>
                    <a href="{{ route('contact', ['interest' => 'GastroTech Basic']) }}" class="block text-center py-3 rounded-xl border-2 border-orange-500 text-orange-500 font-bold hover:bg-orange-500/10 transition-colors">{{ app()->getLocale() == 'cs' ? 'Zkusit Basic' : 'Try Basic' }}</a>
                </div>
                <!-- Standard -->
                <div class="bg-slate-900 rounded-2xl border-2 border-orange-500 p-8 flex flex-col shadow-xl scale-105 z-10 relative">
                    <div class="absolute top-0 right-8 -translate-y-1/2 bg-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider font-mono">{{ app()->getLocale() == 'cs' ? 'Nejoblíbenější' : 'Most Popular' }}</div>
                    <h3 class="text-xl font-bold text-white mb-2">Standard</h3>
                    <p class="text-slate-400 text-sm mb-6">{{ app()->getLocale() == 'cs' ? 'Pro zavedené restaurace' : 'For established restaurants' }}</p>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-white">2 990 Kč</span>
                        <span class="text-slate-400 text-sm">/ {{ app()->getLocale() == 'cs' ? 'měsíc' : 'month' }}</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-slate-300">
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Vše z Basic' : 'Everything in Basic' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Personální modul' : 'Staff module' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Digitální HACCP' : 'Digital HACCP' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Věrnostní systém' : 'Loyalty system' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Statistiky prodejů' : 'Sales statistics' }}</li>
                    </ul>
                    <a href="{{ route('contact', ['interest' => 'GastroTech Standard']) }}" class="block text-center py-3 rounded-xl bg-orange-500 text-white font-bold hover:bg-orange-600 transition-colors shadow-lg shadow-orange-500/30">{{ app()->getLocale() == 'cs' ? 'Vybrat Standard' : 'Choose Standard' }}</a>
                </div>
                <!-- Premium -->
                <div class="bg-[#1e293b]/50 rounded-2xl border border-slate-800 p-8 flex flex-col shadow-sm">
                    <h3 class="text-xl font-bold text-white mb-2">Premium</h3>
                    <p class="text-slate-400 text-sm mb-6">{{ app()->getLocale() == 'cs' ? 'Pro velké provozy a sítě' : 'For large operations and networks' }}</p>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-white">5 990 Kč</span>
                        <span class="text-slate-400 text-sm">/ {{ app()->getLocale() == 'cs' ? 'měsíc' : 'month' }}</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow text-sm text-slate-300">
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Vše ze Standard' : 'Everything in Standard' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Multi-provozovny' : 'Multi-locations' }}</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'API napojení na účto' : 'Accounting API integration' }}</li>
                        <li class="flex items-center gap-2">✅ 24/7 Hotline</li>
                        <li class="flex items-center gap-2">✅ {{ app()->getLocale() == 'cs' ? 'Custom úpravy' : 'Custom modifications' }}</li>
                    </ul>
                    <a href="{{ route('contact', ['interest' => 'GastroTech Premium']) }}" class="block text-center py-3 rounded-xl border-2 border-slate-700 text-white font-bold hover:bg-slate-700 transition-colors">{{ app()->getLocale() == 'cs' ? 'Kontaktovat' : 'Contact' }}</a>
                </div>
            </div>
        </div>

        <div class="bg-[#1e293b] border border-slate-800 rounded-3xl p-12 mb-20 shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-white mb-4">{{ app()->getLocale() == 'cs' ? 'Výsledky mluví za vše' : 'Results Speak for Themselves' }}</h2>
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div class="bg-[#0f172a] border border-slate-800 rounded-xl p-4 text-center"><p class="text-3xl font-black text-orange-400">-15h</p><p class="text-slate-400 text-[10px] uppercase tracking-widest mt-1 font-mono">{{ app()->getLocale() == 'cs' ? 'Ušetřených hodin týdně' : 'Hours saved weekly' }}</p></div>
                        <div class="bg-[#0f172a] border border-slate-800 rounded-xl p-4 text-center"><p class="text-3xl font-black text-green-400">+12%</p><p class="text-slate-400 text-[10px] uppercase tracking-widest mt-1 font-mono">{{ app()->getLocale() == 'cs' ? 'Nárůst tržeb' : 'Revenue increase' }}</p></div>
                        <div class="bg-[#0f172a] border border-slate-800 rounded-xl p-4 text-center"><p class="text-3xl font-black text-sky-400">0</p><p class="text-slate-400 text-[10px] uppercase tracking-widest mt-1 font-mono">{{ app()->getLocale() == 'cs' ? 'HACCP pokut' : 'HACCP fines' }}</p></div>
                        <div class="bg-[#0f172a] border border-slate-800 rounded-xl p-4 text-center"><p class="text-3xl font-black text-pink-400">4.9★</p><p class="text-slate-400 text-[10px] uppercase tracking-widest mt-1 font-mono">{{ app()->getLocale() == 'cs' ? 'Spokojenost klientů' : 'Client satisfaction' }}</p></div>
                    </div>
                </div>
                <div class="text-center">
                    <p class="text-xl text-slate-300 mb-8">{{ app()->getLocale() == 'cs' ? 'Chcete vidět GastroTech v akci? Domluvte si nezávaznou prezentaci ve vaší provozovně.' : 'Want to see GastroTech in action? Arrange a non-binding presentation at your establishment.' }}</p>
                    <a href="{{ route('contact', ['interest' => 'GastroTech Demo']) }}" class="inline-block bg-gradient-to-r from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white px-10 py-4 rounded-xl font-semibold text-lg transition-all shadow-xl shadow-orange-500/20">{{ app()->getLocale() == 'cs' ? 'Sjednat demo prezentaci' : 'Arrange demo presentation' }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
