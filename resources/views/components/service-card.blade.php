@props(['service'])

<article class="group flex flex-col overflow-hidden rounded-2xl border border-navy-100 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-navy-900/10">
    <div class="relative h-48 overflow-hidden">
        <img
            src="{{ asset($service['cover']) }}"
            alt="{{ $service['title'] }}"
            loading="lazy"
            class="size-full object-cover transition duration-500 group-hover:scale-105"
        >
        <div class="absolute inset-0 bg-gradient-to-t from-navy-950/70 via-navy-950/10 to-transparent"></div>
        <span class="hexagon absolute left-4 top-4 flex size-9 items-center justify-center bg-gold-500 text-navy-950">
            <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
            </svg>
        </span>
    </div>

    <div class="flex flex-1 flex-col p-6">
        <h3 class="font-display text-lg font-semibold text-navy-900">
            {{ $service['title'] }}
        </h3>
        <p class="mt-3 flex-1 text-sm leading-6 text-navy-500">
            {{ $service['summary'] }}
        </p>
        <a
            href="{{ route('services') }}#{{ $service['slug'] }}"
            class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-gold-600 transition group-hover:gap-3 hover:text-gold-700"
        >
            Explore division
            <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </a>
    </div>
</article>
