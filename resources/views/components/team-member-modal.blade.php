{{-- Profile viewer opened when a team member photo is clicked. --}}
<div
    data-team-modal
    class="fixed inset-0 z-[100] hidden items-center justify-center bg-navy-950/95 p-4 backdrop-blur-sm sm:p-8"
    role="dialog"
    aria-modal="true"
    aria-label="Team member profile"
>
    <div class="relative max-h-full w-full max-w-4xl overflow-y-auto rounded-3xl bg-white shadow-2xl">
        <button
            type="button"
            data-team-close
            class="absolute right-4 top-4 z-10 flex size-10 items-center justify-center rounded-full bg-navy-950/70 text-white transition hover:bg-gold-500 hover:text-navy-950"
            aria-label="Close profile"
        >
            <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="grid md:grid-cols-5">
            <div class="flex items-center justify-center bg-navy-950 p-6 md:col-span-2 md:p-8">
                <img
                    data-team-photo
                    src=""
                    alt=""
                    class="max-h-[38vh] w-auto max-w-full rounded-2xl object-contain md:max-h-[70vh]"
                >
            </div>

            <div class="p-7 sm:p-9 md:col-span-3">
                <p data-team-position class="text-xs font-semibold uppercase tracking-[0.3em] text-gold-600"></p>
                <h2 data-team-name class="mt-3 font-display text-2xl font-bold tracking-tight text-navy-900 sm:text-3xl"></h2>
                <p data-team-bio class="mt-5 text-sm leading-7 text-navy-600"></p>

                <div data-team-contacts class="mt-7 space-y-3"></div>

                <a
                    href="{{ route('contact') }}"
                    class="mt-8 inline-flex items-center gap-2 rounded-full bg-navy-900 px-6 py-3 text-sm font-semibold text-white transition hover:bg-navy-800"
                >
                    Reach out via our contact page
                    <svg class="size-4 text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
