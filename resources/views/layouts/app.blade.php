<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'WS4U – Senior Laravel & AI Development')</title>
    <meta name="description" content="@yield('description', 'WS4U: Seniorní zkušenost. AI rychlost. Stavíme komplexní systémy v Laravelu v Praze i globálně.')">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: {
                            900: '#0f172a',
                            800: '#1e293b',
                            700: '#334155',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        mono: ['Roboto Mono', 'monospace'],
                    }
                }
            }
        }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-roboto-mono { font-family: 'Roboto Mono', monospace; }
        .gradient-ws4u { background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 50%, #0f172a 100%); }
        .gradient-text { background: linear-gradient(135deg, #38bdf8, #818cf8); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 40px rgba(0,0,0,0.15); }
        .badge-pill { @apply font-mono text-[10px] uppercase tracking-wider px-2 py-0.5 rounded-full border; }
    </style>
    @yield('head')
</head>
<body class="bg-[#0f172a] text-slate-200">

<!-- Navigation -->
<nav class="bg-[#0f172a]/80 backdrop-blur-md border-b border-slate-800 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-gradient-to-br from-sky-400 to-indigo-500 rounded-lg flex items-center justify-center">
                        <span class="text-white font-black text-sm">W</span>
                    </div>
                    <span class="text-white font-bold text-xl tracking-tight">WS4U</span>
                </a>
            </div>
            <div class="hidden md:flex items-center space-x-1">
                <a href="{{ route('home') }}" class="text-slate-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">{{ app()->getLocale() == 'cs' ? 'Domů' : 'Home' }}</a>
                <a href="{{ route('about') }}" class="text-slate-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">{{ app()->getLocale() == 'cs' ? 'O nás' : 'About' }}</a>
                <div class="relative group">
                    <a href="{{ route('products') }}" class="text-slate-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors flex items-center gap-1">{{ app()->getLocale() == 'cs' ? 'Produkty' : 'Products' }} <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg></a>
                    <div class="absolute top-full left-0 mt-1 w-56 bg-slate-800 rounded-lg shadow-xl border border-slate-700 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <a href="{{ route('products.fotacek') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-700 rounded-t-lg text-sm"><span class="text-lg">📷</span> Fotáček.cz</a>
                        <a href="{{ route('products.gastrotech') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-700 text-sm"><span class="text-lg">🍽️</span> GastroTech</a>
                        <a href="{{ route('products.maponculture') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-700 text-sm"><span class="text-lg">🎪</span> MaponCulture</a>
                        <a href="{{ route('products.custom') }}" class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:text-white hover:bg-slate-700 rounded-b-lg text-sm"><span class="text-lg">⚙️</span> {{ app()->getLocale() == 'cs' ? 'Vývoj na míru' : 'Custom Development' }}</a>
                    </div>
                </div>
                <a href="{{ route('services') }}" class="text-slate-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">{{ app()->getLocale() == 'cs' ? 'Služby' : 'Services' }}</a>
                <a href="{{ route('references') }}" class="text-slate-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">{{ app()->getLocale() == 'cs' ? 'Reference' : 'References' }}</a>
                <a href="{{ route('blog') }}" class="text-slate-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">Blog</a>

                <div class="flex items-center ml-4 px-2 space-x-2 text-xs font-bold text-slate-400">
                    <a href="{{ route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['locale' => 'cs'])) }}" class="{{ app()->getLocale() == 'cs' ? 'text-sky-400' : 'hover:text-white' }}">CZ</a>
                    <span>|</span>
                    <a href="{{ route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['locale' => 'en'])) }}" class="{{ app()->getLocale() == 'en' ? 'text-sky-400' : 'hover:text-white' }}">EN</a>
                </div>

                <a href="{{ route('contact') }}" class="ml-4 bg-gradient-to-r from-sky-500 to-indigo-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:from-sky-600 hover:to-indigo-600 transition-all duration-200 shadow-lg">{{ app()->getLocale() == 'cs' ? 'Kontakt' : 'Contact' }}</a>
            </div>
            <!-- Mobile menu button -->
            <button id="mobile-menu-btn" class="md:hidden text-slate-300 hover:text-white p-2">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <a href="{{ route('home') }}" class="block text-slate-300 hover:text-white px-3 py-2 text-sm">Domů</a>
            <a href="{{ route('about') }}" class="block text-slate-300 hover:text-white px-3 py-2 text-sm">O nás</a>
            <a href="{{ route('products') }}" class="block text-slate-300 hover:text-white px-3 py-2 text-sm">Produkty</a>
            <a href="{{ route('services') }}" class="block text-slate-300 hover:text-white px-3 py-2 text-sm">Služby</a>
            <a href="{{ route('references') }}" class="block text-slate-300 hover:text-white px-3 py-2 text-sm">Reference</a>
            <a href="{{ route('blog') }}" class="block text-slate-300 hover:text-white px-3 py-2 text-sm">Blog</a>
            <div class="flex space-x-4 px-3 py-2">
                <a href="{{ route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['locale' => 'cs'])) }}" class="{{ app()->getLocale() == 'cs' ? 'text-sky-400' : 'text-slate-300' }}">CZ</a>
                <a href="{{ route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['locale' => 'en'])) }}" class="{{ app()->getLocale() == 'en' ? 'text-sky-400' : 'text-slate-300' }}">EN</a>
            </div>
            <a href="{{ route('contact') }}" class="block text-slate-300 hover:text-white px-3 py-2 text-sm">Kontakt</a>
        </div>
    </div>
</nav>

<div class="min-h-screen">
    @yield('content')
</div>

<!-- Footer -->
<footer class="bg-slate-900 text-slate-400 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 grid grid-cols-1 md:grid-cols-4 gap-10">
        <div>
            <div class="flex items-center space-x-2 mb-4">
                <div class="w-8 h-8 bg-gradient-to-br from-sky-400 to-indigo-500 rounded-lg flex items-center justify-center">
                    <span class="text-white font-black text-sm">W</span>
                </div>
                <span class="text-white font-bold text-xl">WS4U</span>
            </div>
            <p class="text-sm leading-relaxed">
                {{ app()->getLocale() == 'cs' ? 'Seniorní zkušenost. AI rychlost. Stavíme komplexní systémy v Laravelu.' : 'Senior Expertise meets AI-Augmented Engineering. Building scalable Laravel solutions.' }}
            </p>
        </div>
        <div>
            <h4 class="text-white font-semibold mb-4">{{ app()->getLocale() == 'cs' ? 'Produkty' : 'Products' }}</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('products.fotacek') }}" class="hover:text-white transition-colors">📷 Fotáček.cz</a></li>
                <li><a href="{{ route('products.gastrotech') }}" class="hover:text-white transition-colors">🍽️ GastroTech</a></li>
                <li><a href="{{ route('products.maponculture') }}" class="hover:text-white transition-colors">🎪 MaponCulture</a></li>
                <li><a href="{{ route('products.custom') }}" class="hover:text-white transition-colors">⚙️ {{ app()->getLocale() == 'cs' ? 'Vývoj na míru' : 'Custom Development' }}</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-white font-semibold mb-4">{{ app()->getLocale() == 'cs' ? 'Firma' : 'Company' }}</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">{{ app()->getLocale() == 'cs' ? 'O nás' : 'About' }}</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">{{ app()->getLocale() == 'cs' ? 'Služby' : 'Services' }}</a></li>
                <li><a href="{{ route('references') }}" class="hover:text-white transition-colors">{{ app()->getLocale() == 'cs' ? 'Reference' : 'References' }}</a></li>
                <li><a href="{{ route('blog') }}" class="hover:text-white transition-colors">Blog</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">{{ app()->getLocale() == 'cs' ? 'Kontakt' : 'Contact' }}</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-white font-semibold mb-4">{{ app()->getLocale() == 'cs' ? 'Kontakt' : 'Contact' }}</h4>
            <ul class="space-y-2 text-sm">
                <li class="flex items-start gap-2"><span>📍</span> {{ __('global.address') }}</li>
                <li class="flex items-center gap-2"><span>📧</span> <a href="mailto:{{ __('global.email') }}" class="hover:text-white transition-colors">{{ __('global.email') }}</a></li>
            </ul>
        </div>
    </div>
    <div class="border-t border-slate-800 py-6 text-center text-sm text-slate-500">
        <p class="font-roboto-mono text-[11px]">© 2026 WS4U. All rights reserved.</p>
        <p class="mt-1 font-roboto-mono text-[10px]">Made with ❤️ by <a href="https://laracopilot.com/" target="_blank" class="hover:text-slate-300 transition-colors">LaraCopilot</a></p>
    </div>
</footer>

<script>
    document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
@yield('scripts')
</body>
</html>
