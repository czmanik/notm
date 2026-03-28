<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WS4U | Digital Reboot</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #020617; }
        .font-roboto-mono { font-family: 'Roboto Mono', monospace; }
        .gradient-bg {
            background: radial-gradient(circle at 50% 50%, #1e293b 0%, #020617 100%);
        }
        .grain {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            opacity: 0.03;
            pointer-events: none;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }
        .glow {
            box-shadow: 0 0 50px -10px rgba(56, 189, 248, 0.2);
        }
    </style>
</head>
<body class="text-slate-300 min-h-screen flex flex-col items-center justify-center p-4 overflow-hidden relative">
    <div class="grain"></div>
    <div class="gradient-bg absolute inset-0 z-[-1]"></div>

    <div class="max-w-3xl w-full text-center z-10">
        <!-- Logo -->
        <div class="flex items-center justify-center space-x-3 mb-12">
            <div class="w-12 h-12 bg-gradient-to-br from-sky-400 to-indigo-500 rounded-xl flex items-center justify-center glow">
                <span class="text-white font-black text-xl">W</span>
            </div>
            <div class="flex flex-col items-start leading-tight">
                <span class="text-white font-bold text-3xl tracking-tight">WS4U</span>
                <span class="text-[10px] text-slate-500 font-medium tracking-[0.2em] uppercase">Web System For You</span>
            </div>
        </div>

        <!-- Content -->
        <div class="space-y-6 mb-16">
            <h1 class="text-4xl md:text-6xl font-extrabold text-white tracking-tight">
                @if(app()->getLocale() == 'cs')
                    Digitální restart.<br><span class="text-sky-400">Seniorní zkušenost v AI éře.</span>
                @else
                    Digital Reboot.<br><span class="text-sky-400">Senior Expertise meets the AI Era.</span>
                @endif
            </h1>
            <p class="text-lg md:text-xl text-slate-400 max-w-xl mx-auto leading-relaxed">
                @if(app()->getLocale() == 'cs')
                    Právě probíhá migrace 20 let zkušeností do nového prostředí. Spouštíme 1. dubna.
                @else
                    Migrating 20 years of core engineering into the future. Launching April 1st.
                @endif
            </p>
        </div>

        <!-- Countdown -->
        <div class="grid grid-cols-4 gap-4 md:gap-8 max-w-2xl mx-auto mb-20 font-roboto-mono">
            <div class="flex flex-col items-center">
                <span id="days" class="text-4xl md:text-6xl font-medium text-white mb-2">00</span>
                <span class="text-[10px] uppercase tracking-widest text-slate-500">{{ app()->getLocale() == 'cs' ? 'Dní' : 'Days' }}</span>
            </div>
            <div class="flex flex-col items-center">
                <span id="hours" class="text-4xl md:text-6xl font-medium text-white mb-2">00</span>
                <span class="text-[10px] uppercase tracking-widest text-slate-500">{{ app()->getLocale() == 'cs' ? 'Hodin' : 'Hours' }}</span>
            </div>
            <div class="flex flex-col items-center">
                <span id="minutes" class="text-4xl md:text-6xl font-medium text-white mb-2">00</span>
                <span class="text-[10px] uppercase tracking-widest text-slate-500">{{ app()->getLocale() == 'cs' ? 'Minut' : 'Minutes' }}</span>
            </div>
            <div class="flex flex-col items-center">
                <span id="seconds" class="text-4xl md:text-6xl font-medium text-white mb-2">00</span>
                <span class="text-[10px] uppercase tracking-widest text-slate-500">{{ app()->getLocale() == 'cs' ? 'Sekund' : 'Seconds' }}</span>
            </div>
        </div>

        <!-- Footer / Secret Access -->
        <div class="pt-8 border-t border-slate-800/50">
            <p class="text-[11px] text-slate-600 uppercase tracking-[0.3em] mb-4">© 2026 WS4U Core Team</p>
            <div class="flex items-center justify-center space-x-4 text-xs text-slate-500">
                <a href="/cs" class="{{ app()->getLocale() == 'cs' ? 'text-sky-400' : 'hover:text-slate-300' }}">CZ</a>
                <span>|</span>
                <a href="/en" class="{{ app()->getLocale() == 'en' ? 'text-sky-400' : 'hover:text-slate-300' }}">EN</a>
            </div>

            <div class="mt-8 opacity-20 hover:opacity-100 transition-opacity duration-500">
                <p class="text-[10px] text-slate-700 mb-2">{{ app()->getLocale() == 'cs' ? 'Máte přístupový kód?' : 'Have an access code?' }}</p>
            </div>
        </div>
    </div>

    <script>
        const targetDate = new Date("April 1, 2026 00:00:00").getTime();

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = targetDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("days").innerText = String(days).padStart(2, '0');
            document.getElementById("hours").innerText = String(hours).padStart(2, '0');
            document.getElementById("minutes").innerText = String(minutes).padStart(2, '0');
            document.getElementById("seconds").innerText = String(seconds).padStart(2, '0');

            if (distance < 0) {
                clearInterval(interval);
                document.getElementById("days").innerText = "00";
                document.getElementById("hours").innerText = "00";
                document.getElementById("minutes").innerText = "00";
                document.getElementById("seconds").innerText = "00";
            }
        }

        const interval = setInterval(updateCountdown, 1000);
        updateCountdown();

    </script>
</body>
</html>
