<x-layouts.app title="About Us — JP Hexagon Services Ltd">
    <x-page-hero
        eyebrow="About Us"
        title="Rooted in Nigeria. Serving Africa."
        subtitle="JP Hexagon Services Ltd is a Nigerian multi-service company delivering real estate, engineering, logistics and transport, processing, electrical and electronic, and lifestyle solutions — and more."
    />

    {{-- Story --}}
    <section class="bg-white py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-14 lg:grid-cols-2">
                <div>
                    <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.35em] text-gold-600">
                        <span class="hexagon size-2.5 bg-gold-500"></span>
                        Our Story
                    </p>
                    <h2 class="mt-5 font-display text-3xl font-bold tracking-tight text-navy-900 sm:text-4xl">
                        From the ground up, we deliver everything in between
                    </h2>
                    <p class="mt-6 text-base leading-7 text-navy-600">
                        JP Hexagon Services Ltd was founded on a simple conviction: that Nigerian
                        clients deserve dependable, world-class services under one roof. Today we
                        operate across real estate, engineering services, logistics and transport,
                        processing, electrical and electronic solutions, luxury wears, agriculture
                        and energy — connecting our divisions into one integrated service offering.
                    </p>
                    <p class="mt-4 text-base leading-7 text-navy-600">
                        Our teams plan, build, power, process and move — each division strengthening
                        the next. From a property development to a power installation, a haulage
                        contract to a finished product, we bring the same standards of quality,
                        safety and integrity to every engagement.
                    </p>

                    <div class="mt-12 grid gap-6 sm:grid-cols-2">
                        <div class="rounded-2xl border-l-4 border-gold-500 bg-cream-50 p-6">
                            <p class="font-display text-xl font-semibold text-navy-900">Our Mission</p>
                            <p class="mt-2 text-sm leading-6 text-navy-600">
                                To deliver world-class, integrated services across real estate,
                                engineering, logistics, processing, electrical and electronic
                                solutions and lifestyle markets — creating lasting value for
                                clients and communities.
                            </p>
                        </div>
                        <div class="rounded-2xl border-l-4 border-navy-800 bg-cream-50 p-6">
                            <p class="font-display text-xl font-semibold text-navy-900">Our Vision</p>
                            <p class="mt-2 text-sm leading-6 text-navy-600">
                                To become one of Africa's most trusted multi-service companies —
                                setting the standard for quality, reliability and service.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-6">
                    <img
                        src="{{ asset('images/real-estate/img.jpg') }}"
                        alt="Property development in Abuja"
                        loading="lazy"
                        class="aspect-[16/10] w-full rounded-3xl object-cover shadow-xl shadow-navy-900/10"
                    >
                    <div class="grid grid-cols-2 gap-6">
                        <img
                            src="{{ asset('images/engineering-ict/img.jpg') }}"
                            alt="Engineering project"
                            loading="lazy"
                            class="aspect-square w-full rounded-3xl object-cover shadow-xl shadow-navy-900/10"
                        >
                        <img
                            src="{{ asset('images/logistics/img.jpg') }}"
                            alt="Logistics fleet"
                            loading="lazy"
                            class="aspect-square w-full rounded-3xl object-cover shadow-xl shadow-navy-900/10"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Aims --}}
    <section class="relative overflow-hidden bg-navy-950 py-20 sm:py-28">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_1px_1px,rgba(255,255,255,0.05)_1px,transparent_0)] bg-[length:26px_26px]" aria-hidden="true"></div>
        <div class="hexagon absolute -left-24 top-1/3 hidden size-80 border border-gold-500/10 lg:block" aria-hidden="true"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.35em] text-gold-400">
                    <span class="hexagon size-2.5 bg-gold-400"></span>
                    Our Aims
                </p>
                <h2 class="mt-5 font-display text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Five commitments that guide every decision
                </h2>
            </div>

            <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($aims as $aim)
                    <div class="rounded-2xl border border-white/5 bg-white/5 p-7 transition hover:border-gold-500/30 hover:bg-white/10">
                        <span class="hexagon flex size-11 items-center justify-center bg-gold-500 font-display text-base font-bold text-navy-950">
                            {{ $loop->iteration }}
                        </span>
                        <p class="mt-5 text-sm leading-6 text-navy-100">{{ $aim }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Objectives --}}
    <section class="bg-cream-50 py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.35em] text-gold-600">
                    <span class="hexagon size-2.5 bg-gold-500"></span>
                    Our Objectives
                </p>
                <h2 class="mt-5 font-display text-3xl font-bold tracking-tight text-navy-900 sm:text-4xl">
                    Measurable goals, meaningful impact
                </h2>
            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-2">
                @foreach ($objectives as $objective)
                    <div class="flex items-start gap-5 rounded-2xl border border-navy-100 bg-white p-7 shadow-sm">
                        <span class="hexagon flex size-11 shrink-0 items-center justify-center bg-navy-950 font-display text-base font-bold text-gold-400">
                            {{ $loop->iteration }}
                        </span>
                        <p class="text-sm font-medium leading-6 text-navy-700">{{ $objective }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Director --}}
    <section class="bg-white py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-3xl bg-navy-950">
                <div class="grid lg:grid-cols-12">
                    <div class="relative flex flex-col justify-center gap-6 p-10 sm:p-14 lg:col-span-7">
                        <div class="hexagon absolute -bottom-16 -left-16 size-64 bg-navy-800/50" aria-hidden="true"></div>
                        <div class="relative">
                            <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.35em] text-gold-400">
                                <span class="hexagon size-2.5 bg-gold-400"></span>
                                Leadership
                            </p>
                            <h2 class="mt-5 font-display text-3xl font-bold text-white sm:text-4xl">
                                {{ $director['name'] }}
                            </h2>
                            <p class="mt-2 text-sm font-semibold uppercase tracking-[0.3em] text-gold-400">
                                {{ $director['title'] }}
                            </p>
                            <p class="mt-6 max-w-xl text-base leading-7 text-navy-200">
                                A builder by conviction, {{ $director['name'] }} leads JP Hexagon
                                Services Ltd with a dedication to value addition and service to
                                humanity — bringing together real estate, engineering, logistics,
                                energy and enterprise to create opportunity for Nigeria and its people.
                            </p>

                            <div class="mt-8 flex flex-wrap gap-4">
                                <a
                                    href="tel:{{ $director['phone'] }}"
                                    class="inline-flex items-center gap-2 rounded-full bg-gold-500 px-6 py-3 text-sm font-semibold text-navy-950 transition hover:bg-gold-400"
                                >
                                    <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                    </svg>
                                    {{ $director['phone'] }}
                                </a>
                                <a
                                    href="mailto:{{ $director['email'] }}"
                                    class="inline-flex max-w-full items-center gap-2 break-all rounded-full border border-white/20 px-6 py-3 text-left text-sm font-semibold text-white transition hover:border-gold-400 hover:text-gold-400"
                                >
                                    {{ $director['email'] }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col justify-center gap-6 border-t border-white/10 p-10 sm:p-14 lg:col-span-5 lg:border-l lg:border-t-0">
                        <span class="hexagon flex size-28 items-center justify-center bg-gradient-to-br from-gold-400 to-gold-600 font-display text-3xl font-bold text-navy-950">
                            APA
                        </span>
                        <dl class="space-y-5 text-sm">
                            <div>
                                <dt class="text-xs font-semibold uppercase tracking-[0.3em] text-gold-400">Office Address</dt>
                                <dd class="mt-2 leading-6 text-navy-100">{{ $director['office_address'] }}</dd>
                            </div>
                            <div>
                                <dt class="text-xs font-semibold uppercase tracking-[0.3em] text-gold-400">Residential Address</dt>
                                <dd class="mt-2 leading-6 text-navy-100">{{ $director['residential_address'] }}</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Team --}}
    @if (count($teamMembers))
        <section class="bg-cream-50 py-20 sm:py-28">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl">
                    <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.35em] text-gold-600">
                        <span class="hexagon size-2.5 bg-gold-500"></span>
                        Our People
                    </p>
                    <h2 class="mt-5 font-display text-3xl font-bold tracking-tight text-navy-900 sm:text-4xl">
                        The people behind the service
                    </h2>
                    <p class="mt-6 text-base leading-7 text-navy-600">
                        Engineers, project managers, logistics specialists, technicians, processors
                        and dreamers — the people of JP Hexagon Services Ltd deliver excellence every
                        day. Click a photo to view that member's profile.
                    </p>
                </div>

                <div class="mt-12 grid grid-cols-2 gap-5 lg:grid-cols-4">
                    @foreach ($teamMembers as $member)
                        @php
                            $memberPayload = json_encode([
                                'photo' => asset($member['photo']),
                                'name' => $member['name'],
                                'position' => $member['position'],
                                'biography' => $member['biography'],
                                'emails' => $member['emails'],
                                'phones' => $member['phones'],
                            ]);
                        @endphp
                        <div>
                            <button
                                type="button"
                                data-team-open
                                data-member="{{ $memberPayload }}"
                                class="group relative aspect-[4/5] w-full overflow-hidden rounded-2xl bg-white ring-1 ring-navy-100"
                                aria-label="View profile of {{ $member['name'] ?? 'team member' }}"
                            >
                                <img
                                    src="{{ asset($member['photo']) }}"
                                    alt="{{ $member['name'] ?? 'JP Hexagon team member' }}"
                                    loading="lazy"
                                    class="size-full object-cover transition duration-300 group-hover:scale-[1.03]"
                                >
                                <span class="absolute inset-x-0 bottom-0 flex items-center justify-center gap-1.5 bg-gradient-to-t from-navy-950/85 to-transparent pb-3 pt-10 text-xs font-semibold text-white opacity-0 transition group-hover:opacity-100">
                                    <svg class="size-4 text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    View profile
                                </span>
                            </button>
                            @if ($member['name'])
                                <div class="mt-3">
                                    <p class="text-sm font-semibold leading-5 text-navy-900">{{ $member['name'] }}</p>
                                    @if ($member['position'])
                                        <p class="mt-1 text-xs leading-5 text-navy-500">{{ $member['position'] }}</p>
                                    @endif
                                    @if ($member['emails'][0] ?? null)
                                        <a href="mailto:{{ $member['emails'][0] }}" class="mt-1 block break-all text-xs font-medium leading-5 text-gold-600 transition hover:text-gold-700">
                                            {{ $member['emails'][0] }}
                                        </a>
                                    @endif
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <x-cta-band
        heading="Let's build something great together"
        text="Partner with JP Hexagon Services Ltd — as a client, investor, supplier or colleague — for real estate, engineering, logistics, processing, electrical and electronic, or lifestyle solutions."
    />

    <x-team-member-modal />
</x-layouts.app>
