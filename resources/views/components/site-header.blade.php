@php
    $navLinks = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'About Us', 'route' => 'about'],
        ['label' => 'Services', 'route' => 'services'],
        ['label' => 'Gallery', 'route' => 'gallery'],
        ['label' => 'Contact', 'route' => 'contact'],
    ];
@endphp

<header class="sticky top-0 z-50">
    <div class="bg-navy-950 text-navy-100">
        <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-2 text-xs sm:px-6 lg:px-8">
            <div class="flex items-center gap-5">
                <a href="tel:08051394462" class="flex items-center gap-1.5 transition hover:text-gold-400">
                    <svg class="size-3.5 text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                    0805 139 4462
                </a>
                <a href="mailto:adamadepeter@jp-hexagonservicesltd.com.ng" class="hidden max-w-[19rem] items-center gap-1.5 truncate transition hover:text-gold-400 sm:flex">
                    <svg class="size-3.5 text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                    adamadepeter@jp-hexagonservicesltd.com.ng
                </a>
            </div>
            <p class="hidden items-center gap-1.5 text-navy-200 md:flex">
                <svg class="size-3.5 text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
                18 Bola Ajibola Crescent, Katampe Diplomatic Extension, FCT Abuja
            </p>
        </div>
    </div>

    <div class="border-b border-navy-100 bg-white/95 backdrop-blur">
        <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-3 sm:px-6 lg:px-8">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/logo.jpg') }}" alt="JP Hexagon Services Ltd logo" class="size-12 rounded-xl ring-1 ring-navy-100">
                <span class="leading-tight">
                    <span class="block font-display text-base font-bold tracking-tight text-navy-900 sm:text-lg">JP HEXAGON</span>
                    <span class="block text-[10px] font-semibold uppercase tracking-[0.3em] text-gold-600">Services Ltd</span>
                </span>
            </a>

            <nav class="hidden items-center gap-8 lg:flex" aria-label="Primary">
                @foreach ($navLinks as $link)
                    <a
                        href="{{ route($link['route']) }}"
                        @class([
                            'relative text-sm font-semibold transition',
                            'text-navy-900' => request()->routeIs($link['route']),
                            'text-navy-500 hover:text-navy-900' => ! request()->routeIs($link['route']),
                        ])
                    >
                        {{ $link['label'] }}
                        @if (request()->routeIs($link['route']))
                            <span class="absolute -bottom-1.5 left-0 h-0.5 w-full rounded-full bg-gold-500"></span>
                        @endif
                    </a>
                @endforeach
            </nav>

            <div class="flex items-center gap-3">
                <a
                    href="{{ route('contact') }}"
                    class="hidden items-center gap-2 rounded-full bg-navy-900 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-navy-800 sm:inline-flex"
                >
                    <span class="size-2 rounded-full bg-gold-400"></span>
                    Partner With Us
                </a>

                <button
                    type="button"
                    data-mobile-nav-toggle
                    class="inline-flex size-10 items-center justify-center rounded-lg border border-navy-100 text-navy-900 lg:hidden"
                    aria-label="Toggle navigation menu"
                >
                    <svg data-mobile-nav-open-icon class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg data-mobile-nav-close-icon class="hidden size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <nav data-mobile-nav class="hidden border-t border-navy-100 bg-white lg:hidden" aria-label="Mobile">
            <div class="mx-auto flex max-w-7xl flex-col gap-1 px-4 py-4 sm:px-6">
                @foreach ($navLinks as $link)
                    <a
                        href="{{ route($link['route']) }}"
                        @class([
                            'rounded-lg px-4 py-3 text-sm font-semibold transition',
                            'bg-navy-50 text-navy-900' => request()->routeIs($link['route']),
                            'text-navy-600 hover:bg-navy-50 hover:text-navy-900' => ! request()->routeIs($link['route']),
                        ])
                    >
                        {{ $link['label'] }}
                    </a>
                @endforeach
                <a href="{{ route('contact') }}" class="mt-2 rounded-lg bg-navy-900 px-4 py-3 text-center text-sm font-semibold text-white transition hover:bg-navy-800">
                    Partner With Us
                </a>
            </div>
        </nav>
    </div>
</header>
