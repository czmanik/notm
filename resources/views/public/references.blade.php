@extends('layouts.app')
@section('title', (app()->getLocale() == 'cs' ? 'Reference' : 'References') . ' – WS4U')
@section('content')
<div class="gradient-ws4u text-white py-20 px-4 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-5xl font-black mb-6">{{ app()->getLocale() == 'cs' ? 'Naše práce' : 'Our Work' }}</h1>
        <p class="text-xl text-slate-300">{{ app()->getLocale() == 'cs' ? 'Pomáháme klientům růst skrze kvalitní software a promyšlené digitální produkty.' : 'Helping clients grow through quality software and thoughtful digital products.' }}</p>
    </div>
</div>
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projects ?? [] as $project)
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden group">
                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-slate-50 flex items-center justify-center text-slate-300">
                        <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                @endif
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-bold text-sky-600 uppercase tracking-wider">{{ $project->technology }}</span>
                        <span class="px-2 py-0.5 bg-slate-100 text-slate-600 rounded text-[10px] font-bold">{{ $project->status_label }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2 group-hover:text-sky-600 transition-colors">{{ $project->name }}</h3>
                    <p class="text-slate-500 text-sm mb-4 line-clamp-3">{{ $project->description }}</p>
                    @if($project->url)
                        <a href="{{ $project->url }}" target="_blank" class="text-sky-600 hover:text-sky-700 font-semibold text-sm inline-flex items-center gap-1">Navštívit web →</a>
                    @endif
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center">
                <div class="max-w-2xl mx-auto bg-slate-50 border border-dashed border-slate-200 rounded-2xl p-12">
                    <p class="text-slate-500 text-lg mb-8 leading-relaxed">
                        {{ __('references.empty') }}
                    </p>
                    <a href="{{ route('products') }}" class="inline-block bg-sky-500 hover:bg-sky-600 text-white px-8 py-3 rounded-xl font-semibold transition-all">
                        {{ app()->getLocale() == 'cs' ? 'Zobrazit naše produkty' : 'View our Products' }}
                    </a>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
