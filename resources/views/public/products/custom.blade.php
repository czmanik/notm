@extends('layouts.app')
@section('title', (app()->getLocale() == 'cs' ? 'Vývoj na míru' : 'Custom Development') . ' – WS4U')
@section('content')
<div class="bg-gradient-to-br from-sky-950 via-[#1e293b] to-[#0f172a] text-white py-24 px-4 border-b border-slate-800">
    <div class="max-w-5xl mx-auto">
        <a href="{{ route('products') }}" class="text-sky-400 hover:text-white text-sm mb-6 inline-flex items-center gap-1 font-mono">← {{ app()->getLocale() == 'cs' ? 'Zpět na produkty' : 'Back to products' }}</a>
        <div class="flex items-center gap-5 mb-8">
            <div class="w-20 h-20 bg-gradient-to-br from-sky-400 to-cyan-500 rounded-3xl flex items-center justify-center text-4xl shadow-2xl">⚙️</div>
            <div>
                <h1 class="text-5xl font-black">{{ app()->getLocale() == 'cs' ? 'Vývoj na míru' : 'Custom Development' }}</h1>
                <p class="text-sky-400 text-lg mt-1">{{ app()->getLocale() == 'cs' ? 'Software přesně pro vaše potřeby' : 'Software tailored to your needs' }}</p>
            </div>
        </div>
        <p class="text-xl text-slate-300 max-w-3xl leading-relaxed">
            {{ app()->getLocale() == 'cs' ? 'Když hotový produkt nestačí, vytvoříme vám řešení od základu. Používáme Laravel a moderní frontend technologie pro rychlé a spolehlivé aplikace.' : 'When a ready-made product is not enough, we will create a solution for you from scratch. We use Laravel and modern frontend technologies for fast and reliable applications.' }}
        </p>
    </div>
</div>
<section class="py-20 bg-[#111827]">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-white text-center mb-12">{{ app()->getLocale() == 'cs' ? 'Náš vývojový proces' : 'Our Development Process' }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-20">
            @foreach([
                ['1', app()->getLocale() == 'cs' ? 'Analýza' : 'Analysis', app()->getLocale() == 'cs' ? 'Detailně zmapujeme vaše potřeby, procesy a cíle projektu.' : 'We will map your needs, processes and project goals in detail.'],
                ['2', app()->getLocale() == 'cs' ? 'Návrh' : 'Design', app()->getLocale() == 'cs' ? 'Vytvoříme wireframy a architekturu řešení. Vše schválíte před vývojem.' : 'We will create wireframes and solution architecture. You approve everything before development.'],
                ['3', app()->getLocale() == 'cs' ? 'Vývoj' : 'Development', app()->getLocale() == 'cs' ? 'Iterativní vývoj s pravidelnými demo prezentacemi. Vždy víte, kde jsme.' : 'Iterative development with regular demo presentations. You always know where we are.'],
                ['4', app()->getLocale() == 'cs' ? 'Předání' : 'Handover', app()->getLocale() == 'cs' ? 'Důkladné testování, školení týmu a podpora po spuštění.' : 'Thorough testing, team training and post-launch support.'],
            ] as [$num, $title, $desc])
            <div class="text-center">
                <div class="w-12 h-12 bg-sky-600 text-white rounded-full flex items-center justify-center text-xl font-black mx-auto mb-4">{{ $num }}</div>
                <h3 class="font-bold text-white mb-2">{{ $title }}</h3>
                <p class="text-slate-400 text-sm leading-relaxed">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div>
                <h2 class="text-3xl font-bold text-white mb-6">{{ app()->getLocale() == 'cs' ? 'Co umíme postavit' : 'What We Can Build' }}</h2>
                <div class="space-y-3">
                    @php
                        $items = app()->getLocale() == 'cs' ?
                            ['CRM systémy pro správu zákazníků', 'ERP systémy pro řízení firmy', 'Zákaznické portály a intranety', 'E-commerce platformy na míru', 'REST API a integrace třetích stran', 'Mobilní aplikace (PWA, React Native)', 'Automatizace a workflow systémy', 'Analytické dashboardy a reporty'] :
                            ['CRM systems for customer management', 'ERP systems for company management', 'Customer portals and intranets', 'Custom E-commerce platforms', 'REST APIs and third-party integrations', 'Mobile applications (PWA, React Native)', 'Automation and workflow systems', 'Analytical dashboards and reports'];
                    @endphp
                    @foreach($items as $item)
                    <div class="flex items-center gap-3 bg-[#1e293b]/50 border border-slate-800 rounded-xl px-4 py-3">
                        <span class="text-sky-500 font-bold">→</span>
                        <span class="text-slate-300 text-sm">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-white mb-6">{{ app()->getLocale() == 'cs' ? 'Technologie' : 'Technologies' }}</h2>
                <div class="grid grid-cols-2 gap-4 mb-8">
                    @foreach(['Laravel 11', 'Livewire', 'Vue.js', 'React', 'Tailwind CSS', 'MySQL / PostgreSQL', 'Redis', 'Docker'] as $tech)
                    <div class="bg-[#1e293b] border border-slate-800 text-slate-400 rounded-xl px-4 py-3 text-xs font-mono text-center">{{ $tech }}</div>
                    @endforeach
                </div>
                <div class="bg-gradient-to-br from-sky-600 to-indigo-600 text-white rounded-2xl p-8 shadow-xl">
                    <h3 class="font-bold text-xl mb-2">{{ app()->getLocale() == 'cs' ? 'Bezplatná konzultace' : 'Free Consultation' }}</h3>
                    <p class="text-sky-100 text-sm mb-6">{{ app()->getLocale() == 'cs' ? 'Řekneme vám upřímně, zda a jak váš projekt zvládneme. Bez závazků, zdarma.' : 'We will tell you honestly if and how we can handle your project. No commitment, for free.' }}</p>
                    <a href="{{ route('contact') }}" class="block text-center bg-white text-sky-700 hover:bg-sky-50 py-4 rounded-xl font-bold transition-all">
                        {{ app()->getLocale() == 'cs' ? 'Domluvit schůzku' : 'Schedule a Meeting' }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
