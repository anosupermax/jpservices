@props([
    'heading' => 'Ready to build value with us?',
    'text' => 'Whether you are looking to partner, invest or source products and services, our team is ready to talk.',
])

<section class="relative overflow-hidden bg-gradient-to-br from-gold-400 via-gold-500 to-gold-600">
    <div class="absolute -right-20 -top-24 size-72 rounded-full bg-white/20 blur-3xl" aria-hidden="true"></div>
    <div class="absolute -bottom-24 left-10 size-72 rounded-full bg-navy-900/10 blur-3xl" aria-hidden="true"></div>

    <div class="relative mx-auto flex max-w-7xl flex-col items-start justify-between gap-8 px-4 py-16 sm:px-6 lg:flex-row lg:items-center lg:px-8">
        <div class="max-w-2xl">
            <h2 class="font-display text-3xl font-bold tracking-tight text-navy-950 sm:text-4xl">
                {{ $heading }}
            </h2>
            <p class="mt-4 text-base leading-7 text-navy-900/80">
                {{ $text }}
            </p>
        </div>
        <div class="flex flex-wrap items-center gap-4">
            <a
                href="tel:08051394462"
                class="inline-flex items-center gap-2 rounded-full bg-navy-950 px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-navy-900"
            >
                <svg class="size-4 text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>
                Call 0805 139 4462
            </a>
            <a
                href="{{ route('contact') }}"
                class="inline-flex items-center gap-2 rounded-full border-2 border-navy-950/80 px-6 py-3.5 text-sm font-semibold text-navy-950 transition hover:bg-navy-950 hover:text-white"
            >
                Send a message
                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
</section>
