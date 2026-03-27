@extends('layouts.app')
@section('title', __('error.404.title') . ' – WS4U')
@section('content')
<div class="gradient-ws4u min-h-screen flex items-center justify-center px-4">
    <div class="text-center">
        <p class="text-8xl font-black text-white/20">404</p>
        <h1 class="text-4xl font-bold text-white mt-4 mb-4">{{ __('error.404.title') }}</h1>
        <p class="text-slate-300 mb-8">{{ __('error.404.text') }}</p>
        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="inline-block bg-gradient-to-r from-sky-500 to-indigo-500 text-white px-8 py-3 rounded-xl font-semibold hover:from-sky-600 hover:to-indigo-600 transition-all">← {{ __('error.back_home') }}</a>
    </div>
</div>
@endsection
