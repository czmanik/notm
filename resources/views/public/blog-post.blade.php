@extends('layouts.app')
@section('title', $post->title . ' – WS4U Blog')
@section('description', $post->excerpt)
@section('content')
<div class="bg-[#0f172a] text-white py-20 px-4">
    <div class="max-w-3xl mx-auto">
        <a href="{{ route('blog') }}" class="text-slate-400 hover:text-white text-sm mb-6 inline-flex items-center gap-1 font-mono">← {{ app()->getLocale() == 'cs' ? 'Zpět na blog' : 'Back to blog' }}</a>
        <div class="flex items-center gap-3 mb-4">
            <span class="bg-sky-500/10 text-sky-400 border border-sky-500/20 text-xs px-3 py-1 rounded-full font-mono">{{ $post->category }}</span>
            @if($post->featured)<span class="bg-sky-500 text-white text-[10px] px-3 py-1 rounded-full font-bold uppercase tracking-wider">Featured</span>@endif
        </div>
        <h1 class="text-4xl md:text-5xl font-black leading-tight mb-6">{{ $post->title }}</h1>
        <div class="flex items-center gap-4 text-slate-500 text-sm font-mono uppercase tracking-tight">
            <span>BY {{ $post->author }}</span>
            <span>•</span>
            <span>{{ $post->created_at->format('d.m.Y') }}</span>
        </div>
    </div>
</div>
<section class="py-16 bg-[#111827]">
    <div class="max-w-3xl mx-auto px-4">
        @if($post->excerpt)
        <p class="text-xl text-slate-300 border-l-4 border-sky-500 pl-6 mb-12 leading-relaxed italic">{{ $post->excerpt }}</p>
        @endif
        <div class="prose prose-invert prose-sky prose-lg max-w-none text-slate-400 leading-relaxed">
            {!! $post->content !!}
        </div>
    </div>
</section>

@if($related->count() > 0)
<section class="py-16 bg-[#0f172a] border-t border-slate-800">
    <div class="max-w-5xl mx-auto px-4">
        <h2 class="text-2xl font-bold text-white mb-8">{{ app()->getLocale() == 'cs' ? 'Podobné články' : 'Similar Articles' }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($related as $relPost)
            <a href="{{ route('blog.post', $relPost->slug) }}" class="group bg-[#1e293b]/50 rounded-xl p-6 border border-slate-800 shadow-sm card-hover">
                <span class="text-[10px] text-sky-400 font-mono uppercase tracking-widest">{{ $relPost->category }}</span>
                <h3 class="font-bold text-white group-hover:text-sky-400 transition-colors mt-2 leading-tight">{{ $relPost->title }}</h3>
                <p class="text-slate-500 text-[10px] font-mono mt-3 uppercase">{{ $relPost->created_at->format('d.m.Y') }}</p>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
