@extends('layouts.app')
@section('title', __('about.title') . ' – WS4U')
@section('content')
<div class="bg-[#0f172a] text-white py-20 px-4">
    <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-5xl font-black mb-6">{{ __('about.title') }}</h1>
        <p class="text-xl text-slate-400">{{ __('about.sub') }}</p>
    </div>
</div>
<section class="py-20 bg-[#111827]">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl font-bold text-white mb-6">{{ app()->getLocale() == 'cs' ? 'Náš příběh' : 'Our Story' }}</h2>
                <p class="text-slate-400 leading-relaxed mb-4">
                    {{ app()->getLocale() == 'cs' ? 'WS4U vznikl z jednoduché myšlenky: většina firem potřebuje spolehlivého technologického partnera, který nejen napíše kód, ale skutečně rozumí jejich byznysu.' : 'WS4U was born from a simple idea: most companies need a reliable technology partner who doesn\'t just write code, but truly understands their business.' }}
                </p>
                <p class="text-slate-400 leading-relaxed mb-4">
                    {{ app()->getLocale() == 'cs' ? 'Specializujeme se výhradně na Laravel ekosystém. To nám umožňuje dosahovat výjimečné kvality a rychlosti vývoje, kterou jako generalistická agentura nikdy nedosáhneme.' : 'We specialize exclusively in the Laravel ecosystem. This allows us to achieve exceptional quality and speed of development that we would never reach as a generalist agency.' }}
                </p>
                <p class="text-slate-400 leading-relaxed">
                    {{ app()->getLocale() == 'cs' ? 'Vedle zakázkového vývoje jsme vytvořili tři vertikální produkty – Fotáček.cz, GastroTech a MaponCulture – které slouží specifickým odvětvím a neustále je vylepšujeme na základě zpětné vazby desítek klientů.' : 'In addition to custom development, we have created three vertical products – Fotáček.cz, GastroTech, and MaponCulture – which serve specific industries and we constantly improve them based on feedback from dozens of clients.' }}
                </p>
            </div>
            <div class="space-y-6">
                <div class="bg-[#1e293b]/50 rounded-2xl p-6 border border-slate-800">
                    <div class="flex items-center gap-4 mb-3">
                        <div class="w-12 h-12 bg-sky-500/10 rounded-xl flex items-center justify-center text-xl">🎯</div>
                        <h3 class="font-bold text-white">{{ app()->getLocale() == 'cs' ? 'Naše mise' : 'Our Mission' }}</h3>
                    </div>
                    <p class="text-slate-400 text-sm">{{ app()->getLocale() == 'cs' ? 'Pomáhat firmám růst prostřednictvím digitálních produktů, které jsou spolehlivé, škálovatelné a snadno použitelné.' : 'Helping companies grow through digital products that are reliable, scalable and easy to use.' }}</p>
                </div>
                <div class="bg-[#1e293b]/50 rounded-2xl p-6 border border-slate-800">
                    <div class="flex items-center gap-4 mb-3">
                        <div class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center text-xl">👁️</div>
                        <h3 class="font-bold text-white">{{ app()->getLocale() == 'cs' ? 'Naše vize' : 'Our Vision' }}</h3>
                    </div>
                    <p class="text-slate-400 text-sm">{{ app()->getLocale() == 'cs' ? 'Stát se referenční Laravel agenturou ve střední Evropě, na kterou se firmy obracejí, když chtějí skutečně kvalitní výsledky.' : 'Becoming the reference Laravel agency in Central Europe, where companies turn to when they want truly high-quality results.' }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-16 bg-[#0f172a] border-t border-slate-800">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-white text-center mb-12">{{ app()->getLocale() == 'cs' ? 'Náš tým' : 'Our Team' }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- David -->
            <div class="bg-[#1e293b]/50 rounded-2xl p-8 text-center border border-slate-800 shadow-sm card-hover">
                <div class="w-20 h-20 bg-gradient-to-br from-sky-400 to-indigo-500 rounded-full mx-auto mb-4 flex items-center justify-center text-white text-2xl font-black">D</div>
                <h3 class="font-bold text-white text-lg">David Biksadský</h3>
                <p class="text-sky-400 text-sm font-medium mb-3">{{ __('team.david.title') }}</p>
                <p class="text-slate-400 text-sm leading-relaxed">{{ __('team.david.text') }}</p>
            </div>
            <!-- Adam -->
            <div class="bg-[#1e293b]/50 rounded-2xl p-8 text-center border border-slate-800 shadow-sm card-hover">
                <div class="w-20 h-20 bg-gradient-to-br from-pink-400 to-rose-500 rounded-full mx-auto mb-4 flex items-center justify-center text-white text-2xl font-black">A</div>
                <h3 class="font-bold text-white text-lg">Adam Vincour</h3>
                <p class="text-sky-400 text-sm font-medium mb-3">{{ __('team.adam.title') }}</p>
                <p class="text-slate-400 text-sm leading-relaxed">{{ __('team.adam.text') }}</p>
            </div>
            <!-- Helena -->
            <div class="bg-[#1e293b]/50 rounded-2xl p-8 text-center border border-slate-800 shadow-sm card-hover">
                <div class="w-20 h-20 bg-gradient-to-br from-orange-400 to-amber-500 rounded-full mx-auto mb-4 flex items-center justify-center text-white text-2xl font-black">H</div>
                <h3 class="font-bold text-white text-lg">Helena Tůmová</h3>
                <p class="text-sky-400 text-sm font-medium mb-3">{{ __('team.helena.title') }}</p>
                <p class="text-slate-400 text-sm leading-relaxed">{{ __('team.helena.text') }}</p>
            </div>
        </div>

        <div class="mt-16 bg-[#1e293b]/30 border border-dashed border-slate-700 rounded-2xl p-8 text-center max-w-2xl mx-auto">
            <h4 class="text-white font-bold mb-2">Global Dev Hub (Partners)</h4>
            <p class="text-slate-400 text-sm leading-relaxed">
                {{ app()->getLocale() == 'cs' ? 'Spolupracujeme s elitními vývojáři v Indii, což nám umožňuje škálovat projekty v režimu 24/7 pod přísným pražským dohledem a garantovat nejvyšší standardy kódu.' : 'We cooperate with elite developers in India, allowing us to scale projects in 24/7 mode under strict Prague supervision and guarantee the highest code standards.' }}
            </p>
        </div>
    </div>
</section>
@endsection
