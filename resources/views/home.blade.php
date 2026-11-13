<x-layouts.app>
    {{-- Hero --}}
    <section class="relative overflow-hidden bg-navy-950">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_1px_1px,rgba(255,255,255,0.06)_1px,transparent_0)] bg-[length:26px_26px]" aria-hidden="true"></div>
        <div class="absolute -top-32 right-0 size-[28rem] rounded-full bg-gold-500/10 blur-3xl" aria-hidden="true"></div>
        <div class="hexagon absolute -right-16 top-24 hidden size-72 border-2 border-gold-500/20 lg:block" aria-hidden="true"></div>
        <div class="hexagon absolute right-40 -bottom-20 hidden size-56 bg-navy-800/40 lg:block" aria-hidden="true"></div>

        <div class="relative mx-auto max-w-7xl px-4 pb-24 pt-20 sm:px-6 lg:px-8 lg:pb-32 lg:pt-28">
            <div class="grid items-center gap-16 lg:grid-cols-2">
                <div>
                    <p class="inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs font-semibold uppercase tracking-[0.25em] text-gold-400">
                        <span class="hexagon size-2 bg-gold-400"></span>
                        Real Estate &middot; Engineering &middot; Logistics &middot; Electrical
                    </p>

                    <h1 class="mt-8 font-display text-4xl font-bold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
                        Building Nigeria.
                        <span class="text-gold-400">Serving Africa</span>
                        with excellence.
                    </h1>

                    <p class="mt-6 max-w-xl text-lg leading-8 text-navy-200">
                        JP Hexagon Services Ltd is a Nigerian multi-service company delivering real estate,
                        engineering, logistics and transport, processing, electrical and electronic solutions,
                        luxury wears, agriculture, energy and hospitality — one trusted partner for every need.
                    </p>

                    <div class="mt-10 flex flex-wrap items-center gap-4">
                        <a
                            href="{{ route('services') }}"
                            class="inline-flex items-center gap-2 rounded-full bg-gold-500 px-7 py-3.5 text-sm font-semibold text-navy-950 transition hover:bg-gold-400"
                        >
                            Explore Our Services
                            <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                        <a
                            href="{{ route('contact') }}"
                            class="inline-flex items-center gap-2 rounded-full border border-white/20 px-7 py-3.5 text-sm font-semibold text-white transition hover:border-gold-400 hover:text-gold-400"
                        >
                            Speak With Our Team
                        </a>
                    </div>

                    <dl class="mt-14 grid grid-cols-2 gap-6 sm:grid-cols-4">
                        <div>
                            <dt class="text-xs uppercase tracking-widest text-navy-300">Divisions</dt>
                            <dd class="mt-1 font-display text-3xl font-bold text-gold-400">12</dd>
                        </div>
                        <div>
                            <dt class="text-xs uppercase tracking-widest text-navy-300">Strategic Aims</dt>
                            <dd class="mt-1 font-display text-3xl font-bold text-gold-400">5</dd>
                        </div>
                        <div>
                            <dt class="text-xs uppercase tracking-widest text-navy-300">Objectives</dt>
                            <dd class="mt-1 font-display text-3xl font-bold text-gold-400">4</dd>
                        </div>
                        <div>
                            <dt class="text-xs uppercase tracking-widest text-navy-300">Client First</dt>
                            <dd class="mt-1 font-display text-3xl font-bold text-gold-400">100%</dd>
                        </div>
                    </dl>
                </div>

                <div class="relative mx-auto w-full max-w-md lg:max-w-none">
                    <div class="relative rounded-3xl border border-white/10 bg-white/5 p-4 backdrop-blur">
                        <img
                            src="{{ asset('images/logo.jpg') }}"
                            alt="JP Hexagon Services Ltd"
                            class="w-full rounded-2xl object-cover"
                        >
                    </div>

                    <div class="absolute -left-4 top-10 hidden rounded-2xl border border-white/10 bg-navy-900/90 px-5 py-4 shadow-2xl backdrop-blur sm:block">
                        <p class="flex items-center gap-2 text-xs font-semibold uppercase tracking-widest text-gold-400">
                            <span class="hexagon size-2 bg-gold-400"></span>
                            Our Promise
                        </p>
                        <p class="mt-2 max-w-[13rem] text-sm font-medium leading-5 text-white">
                            One partner, every division — integrated services built on trust
                        </p>
                    </div>

                    <div class="absolute -right-3 bottom-10 hidden rounded-2xl border border-white/10 bg-navy-900/90 px-5 py-4 shadow-2xl backdrop-blur sm:block">
                        <p class="text-xs font-semibold uppercase tracking-widest text-gold-400">Real Estate &middot; Engineering</p>
                        <p class="mt-2 max-w-[13rem] text-sm font-medium leading-5 text-white">
                            Multi-sector solutions under one roof
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Who we are --}}
    <section class="bg-cream-50 py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-14 lg:grid-cols-2">
                <div class="relative order-2 lg:order-1">
                    <img
                        src="{{ asset('images/real-estate/img.jpg') }}"
                        alt="Property development by JP Hexagon Services Ltd"
                        loading="lazy"
                        class="aspect-[4/3] w-full rounded-3xl object-cover shadow-2xl shadow-navy-900/20"
                    >
                    <div class="hexagon absolute -bottom-6 -right-4 hidden size-32 items-center justify-center bg-navy-950 text-center sm:flex">
                        <span class="px-4 text-[10px] font-semibold uppercase leading-4 tracking-widest text-gold-400">
                            Built<br>to Serve
                        </span>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.35em] text-gold-600">
                        <span class="hexagon size-2.5 bg-gold-500"></span>
                        Who We Are
                    </p>
                    <h2 class="mt-5 font-display text-3xl font-bold tracking-tight text-navy-900 sm:text-4xl">
                        One company. Many services. One standard.
                    </h2>
                    <p class="mt-6 text-base leading-7 text-navy-600">
                        From our base in Abuja, JP Hexagon Services Ltd delivers integrated solutions
                        across real estate, engineering, logistics and transport, processing, electrical
                        and electronic services, luxury wears and more. We plan, build, power, process
                        and move — creating value for clients at every stage.
                    </p>

                    <ul class="mt-8 space-y-4">
                        @foreach ([
                            'Multi-sector expertise across six core service lines',
                            'One accountable partner from planning to delivery',
                            'Quality, safety and integrity in every engagement',
                        ] as $point)
                            <li class="flex items-start gap-3">
                                <span class="hexagon mt-0.5 flex size-6 shrink-0 items-center justify-center bg-gold-500 text-navy-950">
                                    <svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </span>
                                <span class="text-sm font-medium leading-6 text-navy-700">{{ $point }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <a
                        href="{{ route('about') }}"
                        class="mt-10 inline-flex items-center gap-2 rounded-full bg-navy-900 px-7 py-3.5 text-sm font-semibold text-white transition hover:bg-navy-800"
                    >
                        More About Us
                        <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="bg-white py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.35em] text-gold-600">
                    <span class="hexagon size-2.5 bg-gold-500"></span>
                    What We Do
                </p>
                <h2 class="mt-5 font-display text-3xl font-bold tracking-tight text-navy-900 sm:text-4xl">
                    Twelve divisions. One standard.
                </h2>
                <p class="mt-6 text-base leading-7 text-navy-600">
                    Each division strengthens the next — from property and power to processing,
                    transport and lifestyle, giving clients complete end-to-end solutions.
                </p>
            </div>

            <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($services as $service)
                    <x-service-card :service="$service" />
                @endforeach

                <article class="flex flex-col justify-between overflow-hidden rounded-2xl bg-navy-950 p-8">
                    <div>
                        <span class="hexagon flex size-11 items-center justify-center bg-gold-500 text-navy-950">
                            <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </span>
                        <h3 class="mt-6 font-display text-xl font-semibold text-white">
                            Your division could be next
                        </h3>
                        <p class="mt-3 text-sm leading-6 text-navy-300">
                            We are constantly expanding into new sectors and service lines. Partner
                            with us, invest with us, or join our growing team.
                        </p>
                    </div>
                    <a
                        href="{{ route('contact') }}"
                        class="mt-8 inline-flex items-center gap-2 text-sm font-semibold text-gold-400 transition hover:gap-3 hover:text-gold-300"
                    >
                        Start a conversation
                        <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </article>
            </div>
        </div>
    </section>

    {{-- Aims & Objectives --}}
    <section class="relative overflow-hidden bg-navy-950 py-20 sm:py-28">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_1px_1px,rgba(255,255,255,0.05)_1px,transparent_0)] bg-[length:26px_26px]" aria-hidden="true"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.35em] text-gold-400">
                    <span class="hexagon size-2.5 bg-gold-400"></span>
                    Our Compass
                </p>
                <h2 class="mt-5 font-display text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Aims & Objectives
                </h2>
            </div>

            <div class="mt-14 grid gap-14 lg:grid-cols-2">
                <div>
                    <h3 class="text-xs font-semibold uppercase tracking-[0.3em] text-gold-400">Our Aims</h3>
                    <ol class="mt-6 space-y-5">
                        @foreach ($aims as $aim)
                            <li class="flex items-start gap-4 rounded-2xl border border-white/5 bg-white/5 p-5">
                                <span class="hexagon flex size-9 shrink-0 items-center justify-center bg-gold-500 font-display text-sm font-bold text-navy-950">
                                    {{ $loop->iteration }}
                                </span>
                                <p class="text-sm leading-6 text-navy-100">{{ $aim }}</p>
                            </li>
                        @endforeach
                    </ol>
                </div>

                <div>
                    <h3 class="text-xs font-semibold uppercase tracking-[0.3em] text-gold-400">Our Objectives</h3>
                    <ol class="mt-6 space-y-5">
                        @foreach ($objectives as $objective)
                            <li class="flex items-start gap-4 rounded-2xl border border-gold-500/20 bg-gold-500/5 p-5">
                                <span class="hexagon flex size-9 shrink-0 items-center justify-center border border-gold-400/60 font-display text-sm font-bold text-gold-400">
                                    {{ $loop->iteration }}
                                </span>
                                <p class="text-sm leading-6 text-navy-100">{{ $objective }}</p>
                            </li>
                        @endforeach
                    </ol>

                    <div class="mt-8 rounded-2xl bg-gradient-to-br from-gold-400 to-gold-600 p-6">
                        <p class="font-display text-lg font-semibold text-navy-950">
                            "We believe in value addition and service to humanity."
                        </p>
                        <p class="mt-2 text-sm font-medium text-navy-900/80">The JP Hexagon promise</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Director --}}
    <section class="bg-white py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-14 lg:grid-cols-12">
                <div class="lg:col-span-5">
                    <div class="relative overflow-hidden rounded-3xl bg-navy-950 p-10">
                        <div class="hexagon absolute -right-14 -top-14 size-56 bg-navy-800/60" aria-hidden="true"></div>
                        <div class="relative">
                            <span class="hexagon flex size-24 items-center justify-center bg-gradient-to-br from-gold-400 to-gold-600 font-display text-2xl font-bold text-navy-950">
                                APA
                            </span>
                            <h3 class="mt-8 font-display text-2xl font-bold text-white">{{ $director['name'] }}</h3>
                            <p class="mt-2 text-sm font-semibold uppercase tracking-[0.3em] text-gold-400">{{ $director['title'] }}</p>

                            <dl class="mt-8 space-y-4 text-sm">
                                <div class="flex items-center gap-3">
                                    <svg class="size-4 shrink-0 text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                    </svg>
                                    <a href="tel:{{ $director['phone'] }}" class="text-navy-100 transition hover:text-gold-400">{{ $director['phone'] }}</a>
                                </div>
                                <div class="flex items-center gap-3">
                                    <svg class="size-4 shrink-0 text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                    </svg>
                                    <a href="mailto:{{ $director['email'] }}" class="break-all text-navy-100 transition hover:text-gold-400">{{ $director['email'] }}</a>
                                </div>
                                <div class="flex items-start gap-3">
                                    <svg class="mt-0.5 size-4 shrink-0 text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                    </svg>
                                    <span class="text-navy-100">{{ $director['office_address'] }}</span>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.35em] text-gold-600">
                        <span class="hexagon size-2.5 bg-gold-500"></span>
                        Leadership
                    </p>
                    <h2 class="mt-5 font-display text-3xl font-bold tracking-tight text-navy-900 sm:text-4xl">
                        Led by a passion for value addition
                    </h2>
                    <p class="mt-6 text-base leading-7 text-navy-600">
                        Under the leadership of {{ $director['name'] }}, JP Hexagon Services Ltd is
                        building an ecosystem where real estate, engineering, logistics, energy and
                        enterprise work together — creating prosperity for our clients, our people
                        and our nation.
                    </p>
                    <p class="mt-4 text-base leading-7 text-navy-600">
                        Our ambition is bold: to become one of Nigeria's most trusted multi-service
                        companies, delivering world-class solutions across every division and
                        expanding our footprint across Africa.
                    </p>

                    <div class="mt-10 grid gap-6 sm:grid-cols-2">
                        <div class="rounded-2xl border border-navy-100 bg-cream-50 p-6">
                            <p class="font-display text-2xl font-bold text-navy-900">Vision</p>
                            <p class="mt-2 text-sm leading-6 text-navy-600">
                                To be Africa's most trusted multi-sector service company — delivering
                                excellence in every division.
                            </p>
                        </div>
                        <div class="rounded-2xl border border-navy-100 bg-cream-50 p-6">
                            <p class="font-display text-2xl font-bold text-navy-900">Promise</p>
                            <p class="mt-2 text-sm leading-6 text-navy-600">
                                Quality services delivered safely, on time and with integrity.
                            </p>
                        </div>
                    </div>

                    <a
                        href="{{ route('about') }}"
                        class="mt-10 inline-flex items-center gap-2 text-sm font-semibold text-gold-600 transition hover:gap-3 hover:text-gold-700"
                    >
                        Meet the full team
                        <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>

            @if (count($teamMembers))
                <div class="mt-16 grid grid-cols-2 gap-4 sm:grid-cols-4">
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
            @endif
        </div>
    </section>

    <x-cta-band />

    <x-team-member-modal />
</x-layouts.app>
