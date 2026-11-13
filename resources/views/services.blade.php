<x-layouts.app title="Our Services — JP Hexagon Services Ltd">
    <x-page-hero
        eyebrow="Our Services"
        title="Twelve divisions. Infinite value."
        subtitle="From property development and engineering to processing, power and transport — explore the divisions of JP Hexagon Services Ltd."
    />

    {{-- Division chips --}}
    <section class="border-b border-navy-100 bg-cream-50">
        <div class="mx-auto flex max-w-7xl flex-wrap gap-3 px-4 py-6 sm:px-6 lg:px-8">
            @foreach ($services as $service)
                <a
                    href="#{{ $service['slug'] }}"
                    class="rounded-full border border-navy-200 bg-white px-4 py-2 text-xs font-semibold text-navy-700 transition hover:border-gold-500 hover:bg-gold-50 hover:text-navy-900"
                >
                    {{ $service['title'] }}
                </a>
            @endforeach
        </div>
    </section>

    {{-- Service sections --}}
    @foreach ($services as $service)
        <section id="{{ $service['slug'] }}" class="{{ $loop->even ? 'bg-cream-50' : 'bg-white' }} py-20 sm:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid items-start gap-12 lg:grid-cols-2">
                    <div @class(['lg:order-2' => $loop->even])>
                        <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.35em] text-gold-600">
                            <span class="hexagon size-2.5 bg-gold-500"></span>
                            Division {{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </p>
                        <h2 class="mt-5 font-display text-3xl font-bold tracking-tight text-navy-900 sm:text-4xl">
                            {{ $service['title'] }}
                        </h2>
                        <p class="mt-6 text-base leading-7 text-navy-600">
                            {{ $service['description'] }}
                        </p>

                        <ul class="mt-8 space-y-4">
                            @foreach ($service['highlights'] as $highlight)
                                <li class="flex items-start gap-3">
                                    <span class="hexagon mt-0.5 flex size-6 shrink-0 items-center justify-center bg-gold-500 text-navy-950">
                                        <svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                        </svg>
                                    </span>
                                    <span class="text-sm font-medium leading-6 text-navy-700">{{ $highlight }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <a
                            href="{{ route('contact') }}"
                            class="mt-10 inline-flex items-center gap-2 rounded-full bg-navy-900 px-7 py-3.5 text-sm font-semibold text-white transition hover:bg-navy-800"
                        >
                            Enquire about this service
                            <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>

                    <div
                        data-gallery-root
                        data-images="{{ json_encode(collect($service['photos'])->map(fn (string $photo) => asset($photo))->all()) }}"
                        data-title="{{ $service['title'] }}"
                        @class(['lg:order-1' => $loop->even])
                    >
                        <button
                            type="button"
                            data-gallery-open
                            data-index="0"
                            class="group relative block w-full overflow-hidden rounded-3xl"
                            aria-label="View {{ $service['title'] }} photos"
                        >
                            <img
                                src="{{ asset($service['cover']) }}"
                                alt="{{ $service['title'] }}"
                                loading="lazy"
                                class="aspect-[4/3] w-full object-cover shadow-xl shadow-navy-900/10 transition duration-500 group-hover:scale-[1.02]"
                            >
                            <span class="absolute bottom-4 right-4 flex items-center gap-2 rounded-full bg-navy-950/80 px-4 py-2 text-xs font-semibold text-white backdrop-blur transition group-hover:bg-gold-500 group-hover:text-navy-950">
                                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                                </svg>
                                View full photo
                            </span>
                        </button>

                        @if (count($service['gallery']))
                            <div class="mt-4 grid grid-cols-4 gap-4">
                                @foreach ($service['gallery'] as $image)
                                    <button
                                        type="button"
                                        data-gallery-open
                                        data-index="{{ $loop->iteration }}"
                                        class="group relative overflow-hidden rounded-xl"
                                        aria-label="View {{ $service['title'] }} photo {{ $loop->iteration + 1 }}"
                                    >
                                        <img
                                            src="{{ asset($image) }}"
                                            alt="{{ $service['title'] }} photo"
                                            loading="lazy"
                                            class="aspect-square w-full object-cover ring-1 ring-navy-100 transition duration-300 group-hover:scale-[1.06]"
                                        >
                                        <span class="absolute inset-0 flex items-center justify-center bg-navy-950/0 transition group-hover:bg-navy-950/30">
                                            <svg class="size-5 text-white opacity-0 transition group-hover:opacity-100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607ZM10.5 7.5v6m3-3h-6" />
                                            </svg>
                                        </span>
                                    </button>
                                @endforeach
                            </div>
                        @endif

                        <button
                            type="button"
                            data-gallery-open
                            data-index="0"
                            class="mt-5 inline-flex items-center gap-2 rounded-full border border-navy-200 bg-white px-6 py-3 text-sm font-semibold text-navy-800 transition hover:border-gold-500 hover:bg-gold-50"
                        >
                            <svg class="size-4 text-gold-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                            See all {{ count($service['photos']) }} photos
                        </button>

                        @if (count($service['videos']))
                            <div class="mt-8">
                                <p class="text-xs font-semibold uppercase tracking-[0.25em] text-navy-500">Project videos</p>
                                <div class="mt-3 grid gap-4 sm:grid-cols-2">
                                    @foreach ($service['videos'] as $video)
                                        <div class="overflow-hidden rounded-xl bg-navy-950 ring-1 ring-navy-100">
                                            <video controls preload="metadata" class="aspect-video w-full">
                                                <source src="{{ asset($video['src']) }}" type="{{ $video['type'] }}">
                                                Your browser does not support video playback.
                                            </video>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    <x-cta-band
        heading="Need a tailored solution?"
        text="Our divisions work together to deliver end-to-end value chains. Tell us what you need and we will assemble the right team."
    />

    <x-photo-lightbox />
</x-layouts.app>
