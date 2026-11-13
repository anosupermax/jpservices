<x-layouts.app title="Media Gallery — JP Hexagon Services Ltd">
    <x-page-hero
        eyebrow="Media Gallery"
        title="Moments, milestones and motion."
        subtitle="Photos and videos from across our divisions — projects, people and progress. New media is added regularly."
    />

    {{-- Photos --}}
    <section class="bg-white py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-end justify-between gap-4">
                <div>
                    <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.35em] text-gold-600">
                        <span class="hexagon size-2.5 bg-gold-500"></span>
                        Photos
                    </p>
                    <h2 class="mt-4 font-display text-3xl font-bold tracking-tight text-navy-900 sm:text-4xl">
                        Our gallery in pictures
                    </h2>
                </div>
                @if (count($photos))
                    <p class="text-sm font-medium text-navy-500">{{ count($photos) }} photos</p>
                @endif
            </div>

            @if (count($photos))
                <div
                    class="mt-10 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4"
                    data-gallery-root
                    data-images="{{ json_encode(collect($photos)->map(fn (string $photo) => asset($photo))->all()) }}"
                    data-title="JP Hexagon Gallery"
                >
                    @foreach ($photos as $photo)
                        <button
                            type="button"
                            data-gallery-open
                            data-index="{{ $loop->index }}"
                            class="group relative overflow-hidden rounded-2xl ring-1 ring-navy-100"
                            aria-label="View gallery photo {{ $loop->iteration }}"
                        >
                            <img
                                src="{{ asset($photo) }}"
                                alt="JP Hexagon gallery photo {{ $loop->iteration }}"
                                loading="lazy"
                                class="aspect-square w-full object-cover transition duration-300 group-hover:scale-[1.04]"
                            >
                            <span class="absolute inset-0 flex items-center justify-center bg-navy-950/0 transition group-hover:bg-navy-950/30">
                                <svg class="size-6 text-white opacity-0 transition group-hover:opacity-100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607ZM10.5 7.5v6m3-3h-6" />
                                </svg>
                            </span>
                        </button>
                    @endforeach
                </div>
            @else
                <div class="mt-10 flex flex-col items-center justify-center rounded-3xl border-2 border-dashed border-navy-100 bg-cream-50 px-6 py-16 text-center">
                    <span class="hexagon flex size-14 items-center justify-center bg-navy-950 text-gold-400">
                        <svg class="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </span>
                    <p class="mt-5 font-display text-lg font-semibold text-navy-900">Photos coming soon</p>
                    <p class="mt-2 max-w-md text-sm leading-6 text-navy-600">
                        Pictures from our projects and teams will appear here as we publish them.
                    </p>
                </div>
            @endif
        </div>
    </section>

    {{-- Videos --}}
    <section class="bg-cream-50 py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-end justify-between gap-4">
                <div>
                    <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.35em] text-gold-600">
                        <span class="hexagon size-2.5 bg-gold-500"></span>
                        Videos
                    </p>
                    <h2 class="mt-4 font-display text-3xl font-bold tracking-tight text-navy-900 sm:text-4xl">
                        Our work in motion
                    </h2>
                </div>
                @if (count($videos))
                    <p class="text-sm font-medium text-navy-500">{{ count($videos) }} videos</p>
                @endif
            </div>

            @if (count($videos))
                <div class="mt-10 grid gap-6 md:grid-cols-2">
                    @foreach ($videos as $video)
                        <article class="overflow-hidden rounded-2xl bg-navy-950 shadow-xl shadow-navy-900/10 ring-1 ring-navy-100">
                            <video controls preload="metadata" class="aspect-video w-full bg-navy-950">
                                <source src="{{ asset($video['src']) }}" type="{{ $video['type'] }}">
                                Your browser does not support video playback.
                            </video>
                        </article>
                    @endforeach
                </div>
            @else
                <div class="mt-10 flex flex-col items-center justify-center rounded-3xl border-2 border-dashed border-navy-200 bg-white px-6 py-16 text-center">
                    <span class="hexagon flex size-14 items-center justify-center bg-navy-950 text-gold-400">
                        <svg class="size-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </span>
                    <p class="mt-5 font-display text-lg font-semibold text-navy-900">Videos coming soon</p>
                    <p class="mt-2 max-w-md text-sm leading-6 text-navy-600">
                        Project videos and company highlights will appear here as we publish them.
                    </p>
                </div>
            @endif
        </div>
    </section>

    <x-cta-band
        heading="Have media or a story to share?"
        text="Reach out to our team for media enquiries, collaborations or project documentation."
    />

    <x-photo-lightbox />
</x-layouts.app>
