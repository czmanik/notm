@extends('layouts.app')
@section('title', (app()->getLocale() == 'cs' ? 'Kontakt' : 'Contact') . ' – WS4U')
@section('content')
<div class="gradient-ws4u text-white py-20 px-4 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-5xl font-black mb-6">{{ app()->getLocale() == 'cs' ? 'Kontaktujte nás' : 'Contact Us' }}</h1>
        <p class="text-xl text-slate-300">{{ app()->getLocale() == 'cs' ? 'Ozveme se do 24 hodin. Rádi probereme váš projekt nebo odpovíme na dotazy.' : 'We will get back to you within 24 hours. We will be happy to discuss your project or answer any questions.' }}</p>
    </div>
</div>
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Contact info -->
            <div class="space-y-8">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900 mb-6">{{ app()->getLocale() == 'cs' ? 'Kontaktní údaje' : 'Contact Details' }}</h2>
                    <div class="space-y-5">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-sky-100 rounded-xl flex items-center justify-center flex-shrink-0 text-xl">📍</div>
                            <div><p class="font-semibold text-slate-800">{{ app()->getLocale() == 'cs' ? 'Adresa' : 'Address' }}</p><p class="text-slate-500 text-sm leading-relaxed">{{ __('global.address') }}</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-sky-100 rounded-xl flex items-center justify-center flex-shrink-0 text-xl">📧</div>
                            <div><p class="font-semibold text-slate-800">E-mail</p><a href="mailto:{{ __('global.email') }}" class="text-sky-600 hover:underline text-sm">{{ __('global.email') }}</a></div>
                        </div>
                    </div>
                </div>
                <div class="bg-slate-50 rounded-2xl p-6">
                    <h3 class="font-bold text-slate-800 mb-3">{{ app()->getLocale() == 'cs' ? 'Pracovní doba' : 'Working Hours' }}</h3>
                    <div class="space-y-1 text-sm text-slate-600">
                        <div class="flex justify-between"><span>{{ app()->getLocale() == 'cs' ? 'Pondělí – Pátek' : 'Monday – Friday' }}</span><span class="font-medium text-slate-800">9:00 – 18:00</span></div>
                        <div class="flex justify-between"><span>{{ app()->getLocale() == 'cs' ? 'Sobota – Neděle' : 'Saturday – Sunday' }}</span><span class="text-slate-400">{{ app()->getLocale() == 'cs' ? 'Zavřeno' : 'Closed' }}</span></div>
                    </div>
                </div>
            </div>
            <!-- Contact form -->
            <div class="lg:col-span-2">
                @if(session('success'))
                    <div class="mb-6 bg-green-100 border border-green-300 text-green-700 px-5 py-4 rounded-xl flex items-center gap-3">
                        <span class="text-2xl">✅</span>
                        <p>{{ session('success') }}</p>
                    </div>
                @endif
                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6">{{ app()->getLocale() == 'cs' ? 'Napište nám' : 'Write to Us' }}</h2>
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ app()->getLocale() == 'cs' ? 'Jméno' : 'Name' }} <span class="text-red-500">*</span></label>
                                <input type="text" name="name" value="{{ old('name') }}" required class="w-full bg-white border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 @error('name') border-red-400 @enderror">
                                @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">E-mail <span class="text-red-500">*</span></label>
                                <input type="email" name="email" value="{{ old('email') }}" required class="w-full bg-white border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 @error('email') border-red-400 @enderror">
                                @error('email')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ app()->getLocale() == 'cs' ? 'Telefon' : 'Phone' }}</label>
                                <input type="text" name="phone" value="{{ old('phone') }}" class="w-full bg-white border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ app()->getLocale() == 'cs' ? 'Zájem o produkt' : 'Product Interest' }}</label>
                                <select name="interest" class="w-full bg-white border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500">
                                    <option value="">– {{ app()->getLocale() == 'cs' ? 'vyberte' : 'select' }} –</option>
                                    <option value="fotacek" {{ old('interest') === 'fotacek' || request('interest') === 'fotacek' || str_contains(request('interest', ''), 'Fotáček') ? 'selected' : '' }}>📷 Fotáček.cz</option>
                                    <option value="gastrotech" {{ old('interest') === 'gastrotech' || request('interest') === 'gastrotech' || str_contains(request('interest', ''), 'GastroTech') ? 'selected' : '' }}>🍽️ GastroTech</option>
                                    <option value="maponculture" {{ old('interest') === 'maponculture' || request('interest') === 'maponculture' || str_contains(request('interest', ''), 'MaponCulture') ? 'selected' : '' }}>🎪 MaponCulture</option>
                                    <option value="custom" {{ old('interest') === 'custom' || request('interest') === 'custom' ? 'selected' : '' }}>⚙️ {{ app()->getLocale() == 'cs' ? 'Vývoj na míru' : 'Custom Development' }}</option>
                                    <option value="jine" {{ old('interest') === 'jine' ? 'selected' : '' }}>{{ app()->getLocale() == 'cs' ? 'Jiné' : 'Other' }}</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ app()->getLocale() == 'cs' ? 'Předmět' : 'Subject' }} <span class="text-red-500">*</span></label>
                            <input type="text" name="subject" value="{{ old('subject') }}" required class="w-full bg-white border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 @error('subject') border-red-400 @enderror">
                            @error('subject')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">{{ app()->getLocale() == 'cs' ? 'Zpráva' : 'Message' }} <span class="text-red-500">*</span></label>
                            <textarea name="message" rows="5" required class="w-full bg-white border border-slate-200 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-sky-500 @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
                            @error('message')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-sky-500 to-indigo-500 hover:from-sky-600 hover:to-indigo-600 text-white py-4 rounded-xl font-bold text-sm transition-all shadow-lg">
                            {{ app()->getLocale() == 'cs' ? 'Odeslat zprávu' : 'Send Message' }} →
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
