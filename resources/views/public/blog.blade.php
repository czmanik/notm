@extends('layouts.app')
@section('title', 'Blog – WS4U')
@section('content')
<div class="gradient-ws4u text-white py-20 px-4 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-5xl font-black mb-6">Blog WS4U</h1>
        <p class="text-xl text-slate-300">{{ app()->getLocale() == 'cs' ? 'Články o Laravelu, AI a našich technických inovacích.' : 'Articles about Laravel, AI and our technical innovations.' }}</p>
    </div>
</div>
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4">
        @if($posts->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($posts as $post)
            <a href="{{ route('blog.post', $post->slug) }}" class="group bg-white rounded-2xl border border-slate-100 shadow-sm card-hover overflow-hidden">
                <div class="bg-gradient-to-br from-slate-800 to-slate-900 h-40 flex items-center justify-center relative">
                    <span class="text-slate-400 text-sm font-medium bg-slate-700 px-3 py-1 rounded-full">{{ $post->category }}</span>
                    @if($post->featured)<span class="absolute top-3 right-3 text-xs bg-yellow-500 text-slate-900 px-2 py-0.5 rounded-full font-semibold">⭐ Featured</span>@endif
                </div>
                <div class="p-6">
                    <h2 class="font-bold text-slate-800 text-lg group-hover:text-sky-600 transition-colors mb-2 leading-tight">{{ $post->title }}</h2>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4 line-clamp-3">{{ $post->excerpt }}</p>
                    <div class="flex items-center justify-between text-xs text-slate-400">
                        <span>{{ $post->author }}</span>
                        <span>{{ $post->created_at->format('d.m.Y') }}</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="mt-12 flex justify-center">{{ $posts->links() }}</div>
        @else
        <div class="max-w-2xl mx-auto bg-white border border-dashed border-slate-300 rounded-2xl p-20 text-center">
            <p class="text-slate-400 text-lg italic">{{ __('home.blog.empty') }}</p>
        </div>
        @endif
    </div>
</section>
@endsection
