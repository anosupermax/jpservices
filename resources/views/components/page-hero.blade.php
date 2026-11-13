@props([
    'eyebrow' => null,
    'title',
    'subtitle' => null,
])

<section class="relative overflow-hidden bg-navy-950">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_1px_1px,rgba(255,255,255,0.06)_1px,transparent_0)] bg-[length:26px_26px]" aria-hidden="true"></div>
    <div class="absolute -top-24 right-0 size-96 rounded-full bg-gold-500/10 blur-3xl" aria-hidden="true"></div>
    <div class="absolute -bottom-32 -left-16 size-80 rounded-full bg-navy-500/20 blur-3xl" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-7xl px-4 py-20 sm:px-6 sm:py-24 lg:px-8">
        <div class="max-w-3xl">
            @if ($eyebrow)
                <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.35em] text-gold-400">
                    <span class="hexagon size-2.5 bg-gold-400"></span>
                    {{ $eyebrow }}
                </p>
            @endif
            <h1 class="mt-5 font-display text-4xl font-bold tracking-tight text-white sm:text-5xl">
                {{ $title }}
            </h1>
            @if ($subtitle)
                <p class="mt-6 text-lg leading-8 text-navy-200">
                    {{ $subtitle }}
                </p>
            @endif
        </div>
    </div>
</section>
