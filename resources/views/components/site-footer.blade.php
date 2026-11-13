@php
    $divisions = [
        'real-estate' => 'Real Estate & Property Development',
        'engineering-services' => 'Engineering Services',
        'logistics-transportation' => 'Logistics & Transportation',
        'processing' => 'Processing & Value Addition',
        'electrical-electronics' => 'Electrical & Electronic Services',
        'luxury-wears' => 'Luxury Wears & Lifestyle',
    ];
@endphp

<footer class="bg-navy-950 text-navy-200">
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-12">
            <div class="lg:col-span-4">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <img src="{{ asset('images/logo.jpg') }}" alt="JP Hexagon Services Ltd logo" class="size-14 rounded-xl ring-1 ring-white/10">
                    <span class="leading-tight">
                        <span class="block font-display text-lg font-bold text-white">JP HEXAGON</span>
                        <span class="block text-[10px] font-semibold uppercase tracking-[0.3em] text-gold-400">Services Ltd</span>
                    </span>
                </a>
                <p class="mt-5 max-w-sm text-sm leading-6 text-navy-300">
                    A Nigerian multi-service company delivering real estate, engineering, logistics
                    and transport, processing, electrical and electronic solutions, luxury wears,
                    agriculture, energy and hospitality — one trusted partner for every need.
                </p>
                <p class="mt-6 flex items-center gap-2 text-sm font-semibold text-gold-400">
                    <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                    </svg>
                    Proudly Nigerian
                </p>
            </div>

            <div class="lg:col-span-2">
                <h2 class="font-display text-sm font-semibold uppercase tracking-widest text-white">Quick Links</h2>
                <ul class="mt-5 space-y-3 text-sm">
                    <li><a href="{{ route('home') }}" class="transition hover:text-gold-400">Home</a></li>
                    <li><a href="{{ route('about') }}" class="transition hover:text-gold-400">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="transition hover:text-gold-400">Our Services</a></li>
                    <li><a href="{{ route('gallery') }}" class="transition hover:text-gold-400">Media Gallery</a></li>
                    <li><a href="{{ route('contact') }}" class="transition hover:text-gold-400">Contact Us</a></li>
                </ul>
            </div>

            <div class="lg:col-span-3">
                <h2 class="font-display text-sm font-semibold uppercase tracking-widest text-white">Our Divisions</h2>
                <ul class="mt-5 space-y-3 text-sm">
                    @foreach ($divisions as $slug => $division)
                        <li>
                            <a href="{{ route('services') }}#{{ $slug }}" class="transition hover:text-gold-400">
                                {{ $division }}
                            </a>
                        </li>
                    @endforeach
                    <li>
                        <a href="{{ route('services') }}" class="font-semibold text-gold-400 transition hover:text-gold-300">
                            View all 12 divisions &rarr;
                        </a>
                    </li>
                </ul>
            </div>

            <div class="lg:col-span-3">
                <h2 class="font-display text-sm font-semibold uppercase tracking-widest text-white">Contact</h2>
                <ul class="mt-5 space-y-4 text-sm">
                    <li class="flex items-start gap-3">
                        <svg class="mt-0.5 size-4 shrink-0 text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                        <a href="tel:08051394462" class="transition hover:text-gold-400">0805 139 4462</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="mt-0.5 size-4 shrink-0 text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        <a href="mailto:adamadepeter@jp-hexagonservicesltd.com.ng" class="break-all transition hover:text-gold-400">adamadepeter@jp-hexagonservicesltd.com.ng</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="mt-0.5 size-4 shrink-0 text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                        </svg>
                        <span>
                            <span class="block text-navy-400">Office</span>
                            18 Bola Ajibola Crescent, Katampe Diplomatic Extension, FCT Abuja.
                        </span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="mt-0.5 size-4 shrink-0 text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span>
                            <span class="block text-navy-400">CEO's Residence</span>
                            25 Bola Ajibola Crescent, Katampe Diplomatic Extension, FCT Abuja.
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-14 flex flex-col items-center justify-between gap-4 border-t border-white/10 pt-8 text-xs text-navy-400 sm:flex-row">
            <p>&copy; {{ date('Y') }} JP Hexagon Services Ltd. All rights reserved.</p>
            <p>Real Estate &middot; Engineering &middot; Logistics &middot; Electrical &middot; Luxury Wears</p>
        </div>
    </div>
</footer>
