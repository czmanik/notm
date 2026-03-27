@extends('layouts.app')
@section('title', 'WS4U – Senior Laravel & AI Development')
@section('description', __('home.hero.sub'))
@section('content')

<!-- Hero -->
<section class="bg-[#0f172a] text-white py-28 px-4 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-72 h-72 bg-sky-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-indigo-500 rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-6xl mx-auto text-center relative z-10">
        <div class="inline-flex items-center gap-2 bg-white/5 border border-white/10 rounded-full px-4 py-1.5 text-xs font-mono uppercase tracking-widest mb-8 text-sky-400">
            <span class="w-2 h-2 bg-sky-400 rounded-full animate-pulse"></span>
            Senior Laravel Expertise
        </div>
        <h1 class="text-5xl md:text-7xl font-black leading-tight mb-6">
            {{ __('home.hero.headline') }}
        </h1>
        <p class="text-xl text-slate-400 max-w-3xl mx-auto mb-10 leading-relaxed">
            {{ __('home.hero.sub') }}
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('products') }}" class="bg-gradient-to-r from-sky-500 to-indigo-500 hover:from-sky-600 hover:to-indigo-600 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-200 shadow-2xl hover:shadow-sky-500/25">
                {{ app()->getLocale() == 'cs' ? 'Prozkoumat produkty' : 'Explore Products' }}
            </a>
            <a href="{{ route('contact') }}" class="bg-white/5 hover:bg-white/10 border border-white/10 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-200">
                {{ app()->getLocale() == 'cs' ? 'Kontaktovat nás' : 'Contact Us' }}
            </a>
        </div>
    </div>
</section>

<!-- Core Philosophy -->
<section class="py-24 bg-[#111827] border-y border-slate-800">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">"{{ __('home.philosophy.title') }}"</h2>
        <p class="text-xl text-slate-400 leading-relaxed">
            {{ __('home.philosophy.text') }}
        </p>
    </div>
</section>

<!-- Products Overview -->
<section class="py-24 bg-[#0f172a]">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white mb-4">{{ app()->getLocale() == 'cs' ? 'Naše produkty' : 'Our Products' }}</h2>
            <p class="text-xl text-slate-400 max-w-2xl mx-auto">{{ app()->getLocale() == 'cs' ? 'Čtyři hotová řešení pro specifické odvětví – nebo vám vytvoříme přesně to, co potřebujete.' : 'Four ready-made solutions for specific industries – or we can build exactly what you need.' }}</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Fotacek -->
            <a href="{{ route('products.fotacek') }}" class="group bg-[#1e293b]/50 rounded-2xl p-8 border border-slate-800 shadow-sm card-hover relative overflow-hidden">
                <div class="absolute top-4 right-4 badge-pill border-sky-500/30 text-sky-400 bg-sky-500/5">
                    {{ __('home.products.badge') }}
                </div>
                <div class="w-14 h-14 bg-gradient-to-br from-pink-400 to-rose-500 rounded-2xl flex items-center justify-center text-2xl mb-6">📷</div>
                <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-sky-400 transition-colors">Fotáček.cz</h3>
                <p class="text-slate-400 leading-relaxed mb-4">
                    {{ app()->getLocale() == 'cs' ? 'Kompletní systém pro fotografy. Portfolio web, rezervační systém a e-shop v jednom.' : 'Complete system for photographers. Portfolio website, booking system and e-shop in one.' }}
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-[10px] font-mono bg-pink-500/10 text-pink-400 px-2.5 py-1 rounded-full border border-pink-500/20">Portfolio</span>
                    <span class="text-[10px] font-mono bg-pink-500/10 text-pink-400 px-2.5 py-1 rounded-full border border-pink-500/20">Booking</span>
                    <span class="text-[10px] font-mono bg-pink-500/10 text-pink-400 px-2.5 py-1 rounded-full border border-pink-500/20">E-shop</span>
                </div>
            </a>
            <!-- GastroTech -->
            <a href="{{ route('products.gastrotech') }}" class="group bg-[#1e293b]/50 rounded-2xl p-8 border border-slate-800 shadow-sm card-hover relative overflow-hidden">
                <div class="absolute top-4 right-4 badge-pill border-sky-500/30 text-sky-400 bg-sky-500/5">
                    {{ __('home.products.badge') }}
                </div>
                <div class="w-14 h-14 bg-gradient-to-br from-orange-400 to-amber-500 rounded-2xl flex items-center justify-center text-2xl mb-6">🍽️</div>
                <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-sky-400 transition-colors">GastroTech</h3>
                <p class="text-slate-400 leading-relaxed mb-4">
                    {{ app()->getLocale() == 'cs' ? 'Kompletní POS systém pro gastronomii. Web, menu, rezervace, personální modul a sklad.' : 'Complete POS system for gastronomy. Web, menu, reservations, staff module and warehouse.' }}
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-[10px] font-mono bg-orange-500/10 text-orange-400 px-2.5 py-1 rounded-full border border-orange-500/20">POS System</span>
                    <span class="text-[10px] font-mono bg-orange-500/10 text-orange-400 px-2.5 py-1 rounded-full border border-orange-500/20">HACCP</span>
                    <span class="text-[10px] font-mono bg-orange-500/10 text-orange-400 px-2.5 py-1 rounded-full border border-orange-500/20">Loyalty</span>
                </div>
            </a>
            <!-- MaponCulture -->
            <a href="{{ route('products.maponculture') }}" class="group bg-[#1e293b]/50 rounded-2xl p-8 border border-slate-800 shadow-sm card-hover relative overflow-hidden">
                <div class="absolute top-4 right-4 badge-pill border-sky-500/30 text-sky-400 bg-sky-500/5">
                    {{ __('home.products.badge') }}
                </div>
                <div class="w-14 h-14 bg-gradient-to-br from-purple-400 to-indigo-500 rounded-2xl flex items-center justify-center text-2xl mb-6">🎪</div>
                <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-sky-400 transition-colors">MaponCulture</h3>
                <p class="text-slate-400 leading-relaxed mb-4">
                    {{ app()->getLocale() == 'cs' ? 'Systém pro organizátory festivalů a kulturních akcí. Program, registrace a komunikace.' : 'System for organizers of festivals and cultural events. Program, registration and communication.' }}
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-[10px] font-mono bg-purple-500/10 text-purple-400 px-2.5 py-1 rounded-full border border-purple-500/20">Festivals</span>
                    <span class="text-[10px] font-mono bg-purple-500/10 text-purple-400 px-2.5 py-1 rounded-full border border-purple-500/20">Registration</span>
                    <span class="text-[10px] font-mono bg-purple-500/10 text-purple-400 px-2.5 py-1 rounded-full border border-purple-500/20">Real-time</span>
                </div>
            </a>
            <!-- Custom -->
            <a href="{{ route('products.custom') }}" class="group bg-[#1e293b]/50 rounded-2xl p-8 border border-slate-800 shadow-sm card-hover relative overflow-hidden">
                <div class="absolute top-4 right-4 badge-pill border-sky-500/30 text-sky-400 bg-sky-500/5">
                    {{ __('home.products.badge') }}
                </div>
                <div class="w-14 h-14 bg-gradient-to-br from-sky-400 to-cyan-500 rounded-2xl flex items-center justify-center text-2xl mb-6">⚙️</div>
                <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-sky-400 transition-colors">{{ app()->getLocale() == 'cs' ? 'Vývoj na míru' : 'Custom Development' }}</h3>
                <p class="text-slate-400 leading-relaxed mb-4">
                    {{ app()->getLocale() == 'cs' ? 'Máte specifické požadavky? Navrhneme a postavíme přesně to, co vaše firma potřebuje.' : 'Have specific requirements? We will design and build exactly what your company needs.' }}
                </p>
                <div class="flex flex-wrap gap-2">
                    <span class="text-[10px] font-mono bg-sky-500/10 text-sky-400 px-2.5 py-1 rounded-full border border-sky-500/20">Laravel</span>
                    <span class="text-[10px] font-mono bg-sky-500/10 text-sky-400 px-2.5 py-1 rounded-full border border-sky-500/20">Enterprise</span>
                    <span class="text-[10px] font-mono bg-sky-500/10 text-sky-400 px-2.5 py-1 rounded-full border border-sky-500/20">Scalable</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Why WS4U -->
<section class="py-24 bg-[#111827]">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl font-bold text-white mb-6">{{ app()->getLocale() == 'cs' ? 'Proč si vybrat WS4U?' : 'Why choose WS4U?' }}</h2>
                <p class="text-lg text-slate-400 mb-8">
                    {{ app()->getLocale() == 'cs' ? 'Jsme tým zkušených Laravel vývojářů s hlubokým porozuměním konkrétních odvětví. AI používáme jako motor pro efektivitu, ale naše 20letá zkušenost udává směr.' : 'We are a team of experienced Laravel developers with a deep understanding of specific industries. We use AI as an engine for efficiency, but our 20 years of experience sets the direction.' }}
                </p>
                <div class="space-y-5">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-sky-500/10 border border-sky-500/20 rounded-xl flex items-center justify-center flex-shrink-0 text-sky-400 font-bold">✓</div>
                        <div><h4 class="font-semibold text-white">Senior Laravel Architects</h4><p class="text-slate-500 text-sm">{{ app()->getLocale() == 'cs' ? '100% projektů postavených na Laravelu s důrazem na čistou architekturu.' : '100% projects built on Laravel with emphasis on clean architecture.' }}</p></div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-indigo-500/10 border border-indigo-500/20 rounded-xl flex items-center justify-center flex-shrink-0 text-indigo-400">🚀</div>
                        <div><h4 class="font-semibold text-white">AI-Augmented Workflows</h4><p class="text-slate-500 text-sm">{{ app()->getLocale() == 'cs' ? 'Vlastní R&D na Laravel Copilotu nám umožňuje doručovat kód v bezkonkurenční rychlosti.' : 'Our own R&D on Laravel Copilot allows us to deliver code at unparalleled speed.' }}</p></div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-purple-500/10 border border-purple-500/20 rounded-xl flex items-center justify-center flex-shrink-0 text-purple-400">🔧</div>
                        <div><h4 class="font-semibold text-white">Global Delivery Hub</h4><p class="text-slate-500 text-sm">{{ app()->getLocale() == 'cs' ? 'Díky partnerům v Indii pracujeme v režimu 24/7 pod přísným pražským dohledem.' : 'Thanks to partners in India, we work in 24/7 mode under strict Prague supervision.' }}</p></div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-6">
                <div class="bg-[#1e293b] border border-slate-800 rounded-2xl p-6 text-center">
                    <p class="text-4xl font-black text-sky-400">20</p>
                    <p class="text-slate-400 text-xs mt-1 uppercase tracking-widest font-mono">Years Experience</p>
                </div>
                <div class="bg-[#1e293b] border border-slate-800 rounded-2xl p-6 text-center mt-6">
                    <p class="text-4xl font-black text-indigo-400">3</p>
                    <p class="text-slate-400 text-xs mt-1 uppercase tracking-widest font-mono">Core Products</p>
                </div>
                <div class="bg-[#1e293b] border border-slate-800 rounded-2xl p-6 text-center">
                    <p class="text-4xl font-black text-green-400">100%</p>
                    <p class="text-slate-400 text-xs mt-1 uppercase tracking-widest font-mono">Laravel Stack</p>
                </div>
                <div class="bg-[#1e293b] border border-slate-800 rounded-2xl p-6 text-center mt-6">
                    <p class="text-4xl font-black text-pink-400">AI</p>
                    <p class="text-slate-400 text-xs mt-1 uppercase tracking-widest font-mono">Augmented</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog teaser -->
<section class="py-24 bg-[#0f172a]">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center justify-between mb-12">
            <h2 class="text-3xl font-bold text-white">{{ app()->getLocale() == 'cs' ? 'Z našeho blogu' : 'From our Blog' }}</h2>
            <a href="{{ route('blog') }}" class="text-sky-400 hover:text-sky-300 font-medium flex items-center gap-1">{{ app()->getLocale() == 'cs' ? 'Všechny články' : 'All articles' }} →</a>
        </div>

        @if(isset($featuredPosts) && $featuredPosts->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredPosts as $post)
            <a href="{{ route('blog.post', $post->slug) }}" class="group bg-[#1e293b]/50 rounded-2xl border border-slate-800 shadow-sm card-hover overflow-hidden">
                <div class="bg-gradient-to-br from-slate-800 to-slate-900 h-36 flex items-center justify-center">
                    <span class="text-slate-400 text-sm font-medium">{{ $post->category }}</span>
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-white group-hover:text-sky-400 transition-colors mb-2">{{ $post->title }}</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">{{ $post->excerpt }}</p>
                    <p class="text-slate-500 text-xs mt-4 font-mono">{{ $post->created_at->format('d.m.Y') }}</p>
                </div>
            </a>
            @endforeach
        </div>
        @else
        <div class="bg-[#1e293b]/50 border border-dashed border-slate-700 rounded-2xl p-12 text-center">
            <p class="text-slate-400 font-mono">{{ __('home.blog.empty') }}</p>
        </div>
        @endif
    </div>
</section>

<!-- CTA -->
<section class="bg-gradient-to-br from-slate-900 to-[#1e3a5f] py-24 px-4 border-t border-slate-800">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-black text-white mb-6">{{ app()->getLocale() == 'cs' ? 'Připraveni zahájit projekt?' : 'Ready to start a project?' }}</h2>
        <p class="text-xl text-slate-400 mb-10">{{ app()->getLocale() == 'cs' ? 'Ozvěte se nám a probereme, jak můžeme váš byznys akcelerovat.' : 'Contact us and let\'s discuss how we can accelerate your business.' }}</p>
        <a href="{{ route('contact') }}" class="inline-block bg-gradient-to-r from-sky-500 to-indigo-500 hover:from-sky-600 hover:to-indigo-600 text-white px-10 py-4 rounded-xl font-semibold text-lg transition-all duration-200 shadow-2xl">
            {{ app()->getLocale() == 'cs' ? 'Zahájit spolupráci' : 'Start Cooperation' }}
        </a>
    </div>
</section>
@endsection
