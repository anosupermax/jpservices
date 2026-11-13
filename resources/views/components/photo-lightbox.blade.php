{{-- Full-screen photo viewer used by the service galleries. --}}
<div
    data-lightbox
    class="fixed inset-0 z-[100] hidden items-center justify-center bg-navy-950/95 p-4 backdrop-blur-sm sm:p-8"
    role="dialog"
    aria-modal="true"
    aria-label="Photo viewer"
>
    <div class="absolute inset-x-0 top-0 flex items-center justify-between gap-4 p-4 sm:p-6">
        <div class="min-w-0">
            <p data-lightbox-title class="truncate font-display text-sm font-semibold text-white sm:text-base"></p>
            <p data-lightbox-counter class="mt-1 text-xs font-medium tracking-widest text-gold-400"></p>
        </div>
        <button
            type="button"
            data-lightbox-close
            class="flex size-11 shrink-0 items-center justify-center rounded-full border border-white/15 text-white transition hover:border-gold-400 hover:text-gold-400"
            aria-label="Close photo viewer"
        >
            <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <button
        type="button"
        data-lightbox-prev
        class="absolute left-2 top-1/2 z-10 flex size-11 -translate-y-1/2 items-center justify-center rounded-full border border-white/15 bg-navy-950/60 text-white transition hover:border-gold-400 hover:text-gold-400 sm:left-6 sm:size-12"
        aria-label="Previous photo"
    >
        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
    </button>

    <figure class="flex max-h-full max-w-5xl flex-col items-center gap-4">
        <img
            data-lightbox-image
            src=""
            alt=""
            class="max-h-[78vh] w-auto max-w-full rounded-2xl object-contain shadow-2xl"
        >
    </figure>

    <button
        type="button"
        data-lightbox-next
        class="absolute right-2 top-1/2 z-10 flex size-11 -translate-y-1/2 items-center justify-center rounded-full border border-white/15 bg-navy-950/60 text-white transition hover:border-gold-400 hover:text-gold-400 sm:right-6 sm:size-12"
        aria-label="Next photo"
    >
        <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
        </svg>
    </button>
</div>
