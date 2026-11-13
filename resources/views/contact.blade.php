<x-layouts.app title="Contact Us — JP Hexagon Services Ltd">
    <x-page-hero
        eyebrow="Contact Us"
        title="Let's build something exceptional together"
        subtitle="Reach out to our office for project enquiries, partnerships, supply, investment or career opportunities."
    />

    <section class="bg-white py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-14 lg:grid-cols-12">
                {{-- Contact details --}}
                <div class="lg:col-span-5">
                    <p class="flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.35em] text-gold-600">
                        <span class="hexagon size-2.5 bg-gold-500"></span>
                        CEO's Office
                    </p>
                    <h2 class="mt-5 font-display text-3xl font-bold tracking-tight text-navy-900">
                        Speak directly with us
                    </h2>

                    <div class="mt-10 space-y-6">
                        <div class="flex items-start gap-5 rounded-2xl border border-navy-100 bg-cream-50 p-6">
                            <span class="hexagon flex size-12 shrink-0 items-center justify-center bg-navy-950 font-display text-sm font-bold text-gold-400">
                                APA
                            </span>
                            <div>
                                <p class="font-display text-lg font-semibold text-navy-900">{{ $director['name'] }}</p>
                                <p class="text-xs font-semibold uppercase tracking-[0.25em] text-gold-600">{{ $director['title'] }}</p>
                            </div>
                        </div>

                        <a href="tel:{{ $director['phone'] }}" class="flex items-center gap-5 rounded-2xl border border-navy-100 bg-white p-6 shadow-sm transition hover:border-gold-500">
                            <span class="hexagon flex size-12 shrink-0 items-center justify-center bg-gold-500 text-navy-950">
                                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                            </span>
                            <span>
                                <span class="block text-xs font-semibold uppercase tracking-[0.25em] text-navy-400">Telephone</span>
                                <span class="mt-1 block font-display text-lg font-semibold text-navy-900">{{ $director['phone'] }}</span>
                            </span>
                        </a>

                        <a href="mailto:{{ $director['email'] }}" class="flex items-center gap-5 rounded-2xl border border-navy-100 bg-white p-6 shadow-sm transition hover:border-gold-500">
                            <span class="hexagon flex size-12 shrink-0 items-center justify-center bg-gold-500 text-navy-950">
                                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg>
                            </span>
                            <span>
                                <span class="block text-xs font-semibold uppercase tracking-[0.25em] text-navy-400">Email</span>
                                <span class="mt-1 block break-all font-display text-lg font-semibold text-navy-900">{{ $director['email'] }}</span>
                            </span>
                        </a>

                        <div class="flex items-start gap-5 rounded-2xl border border-navy-100 bg-white p-6 shadow-sm">
                            <span class="hexagon flex size-12 shrink-0 items-center justify-center bg-gold-500 text-navy-950">
                                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>
                            </span>
                            <span>
                                <span class="block text-xs font-semibold uppercase tracking-[0.25em] text-navy-400">Office Address</span>
                                <span class="mt-1 block text-sm font-medium leading-6 text-navy-900">{{ $director['office_address'] }}</span>
                                <a
                                    href="https://www.google.com/maps/search/?api=1&query=18+Bola+Ajibola+Crescent+Katampe+Diplomatic+Extension+Abuja"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="mt-2 inline-flex items-center gap-1.5 text-xs font-semibold text-gold-600 transition hover:text-gold-700"
                                >
                                    Get directions
                                    <svg class="size-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                    </svg>
                                </a>
                            </span>
                        </div>

                        <div class="flex items-start gap-5 rounded-2xl border border-navy-100 bg-white p-6 shadow-sm">
                            <span class="hexagon flex size-12 shrink-0 items-center justify-center bg-navy-950 text-gold-400">
                                <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </span>
                            <span>
                                <span class="block text-xs font-semibold uppercase tracking-[0.25em] text-navy-400">CEO's Residence</span>
                                <span class="mt-1 block text-sm font-medium leading-6 text-navy-900">{{ $director['residential_address'] }}</span>
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Form --}}
                <div class="lg:col-span-7">
                    <div class="rounded-3xl border border-navy-100 bg-cream-50 p-8 sm:p-10">
                        <h2 class="font-display text-2xl font-bold text-navy-900">Send us a message</h2>
                        <p class="mt-2 text-sm leading-6 text-navy-600">
                            Fill in the form and our team will get back to you shortly.
                        </p>

                        @if (session('success'))
                            <div class="mt-8 flex items-start gap-3 rounded-2xl border border-green-200 bg-green-50 p-5 text-sm text-green-800" role="status">
                                <svg class="mt-0.5 size-5 shrink-0 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('contact.submit') }}" class="mt-8 grid gap-6 sm:grid-cols-2">
                            @csrf

                            <div>
                                <label for="name" class="block text-xs font-semibold uppercase tracking-[0.2em] text-navy-600">Full Name *</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    value="{{ old('name') }}"
                                    required
                                    class="mt-2 w-full rounded-xl border border-navy-200 bg-white px-4 py-3 text-sm text-navy-900 placeholder-navy-300 outline-none transition focus:border-gold-500 focus:ring-2 focus:ring-gold-500/30"
                                    placeholder="Your full name"
                                >
                                @error('name')
                                    <p class="mt-2 text-xs font-medium text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-xs font-semibold uppercase tracking-[0.2em] text-navy-600">Email Address *</label>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    value="{{ old('email') }}"
                                    required
                                    class="mt-2 w-full rounded-xl border border-navy-200 bg-white px-4 py-3 text-sm text-navy-900 placeholder-navy-300 outline-none transition focus:border-gold-500 focus:ring-2 focus:ring-gold-500/30"
                                    placeholder="you@example.com"
                                >
                                @error('email')
                                    <p class="mt-2 text-xs font-medium text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="phone" class="block text-xs font-semibold uppercase tracking-[0.2em] text-navy-600">Phone Number</label>
                                <input
                                    type="tel"
                                    name="phone"
                                    id="phone"
                                    value="{{ old('phone') }}"
                                    class="mt-2 w-full rounded-xl border border-navy-200 bg-white px-4 py-3 text-sm text-navy-900 placeholder-navy-300 outline-none transition focus:border-gold-500 focus:ring-2 focus:ring-gold-500/30"
                                    placeholder="0803 000 0000"
                                >
                                @error('phone')
                                    <p class="mt-2 text-xs font-medium text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="message" class="block text-xs font-semibold uppercase tracking-[0.2em] text-navy-600">Message *</label>
                                <textarea
                                    name="message"
                                    id="message"
                                    rows="6"
                                    required
                                    class="mt-2 w-full resize-y rounded-xl border border-navy-200 bg-white px-4 py-3 text-sm text-navy-900 placeholder-navy-300 outline-none transition focus:border-gold-500 focus:ring-2 focus:ring-gold-500/30"
                                    placeholder="Tell us how we can help — project enquiry, partnership, supply, investment or careers."
                                >{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-2 text-xs font-medium text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <button
                                    type="submit"
                                    class="inline-flex w-full items-center justify-center gap-2 rounded-full bg-navy-900 px-8 py-4 text-sm font-semibold text-white transition hover:bg-navy-800 sm:w-auto"
                                >
                                    Send Message
                                    <svg class="size-4 text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
