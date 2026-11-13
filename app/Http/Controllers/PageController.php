<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('home', [
            'services' => $this->servicesWithImages(),
            'aims' => $this->aims(),
            'objectives' => $this->objectives(),
            'director' => $this->director(),
            'teamMembers' => $this->teamMembers(),
        ]);
    }

    public function about(): View
    {
        return view('about', [
            'aims' => $this->aims(),
            'objectives' => $this->objectives(),
            'director' => $this->director(),
            'teamMembers' => $this->teamMembers(),
        ]);
    }

    public function services(): View
    {
        return view('services', [
            'services' => $this->servicesWithImages(),
        ]);
    }

    public function media(): View
    {
        return view('gallery', [
            'photos' => $this->imagesIn('gallery'),
            'videos' => $this->videosIn(public_path('videos'), 'videos'),
        ]);
    }

    public function contact(): View
    {
        return view('contact', [
            'director' => $this->director(),
        ]);
    }

    public function submitContact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        ContactMessage::create($validated);

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you for reaching out. Your message has been received and our team will get back to you shortly.');
    }

    /**
     * @return array<string, string>
     */
    private function director(): array
    {
        return [
            'name' => 'Adamade Peter Adamade',
            'title' => 'Chief Executive Officer',
            'phone' => '08051394462',
            'email' => 'adamadepeter@jp-hexagonservicesltd.com.ng',
            'residential_address' => '25 Bola Ajibola Crescent, Katampe Diplomatic Extension, FCT Abuja.',
            'office_address' => '18 Bola Ajibola Crescent, Katampe Diplomatic Extension, FCT Abuja.',
        ];
    }

    /**
     * @return array<int, string>
     */
    private function aims(): array
    {
        return [
            'To provide integrated, world-class services across real estate, engineering, logistics and transport, processing, electrical and electronic solutions, luxury wears and allied sectors.',
            'To actively engage in manufacturing, oil and gas, energy, real estate, transportation, hospitality, entertainment, logistics and their value chains.',
            'To deliver every project and service to international standards of quality, safety and reliability.',
            'To create generational wealth and meaningful employment through enterprise and service to humanity.',
            'To become one of Africa\'s most trusted multi-sector service companies.',
        ];
    }

    /**
     * @return array<int, string>
     */
    private function objectives(): array
    {
        return [
            'To deliver every project on time, on budget and to specification.',
            'To build integrated service value chains across our divisions.',
            'To create generational wealth for our clients, people and partners.',
            'To expand our service footprint across Nigeria and Africa with excellence.',
        ];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function servicesWithImages(): array
    {
        return collect($this->serviceCatalog())
            ->map(function (array $service): array {
                $images = $this->imagesIn($service['folder']);
                $cover = "images/{$service['folder']}/{$service['cover_file']}";

                if (! in_array($cover, $images, true)) {
                    $cover = $images[0] ?? $cover;
                }

                $remaining = collect($images)
                    ->reject(fn (string $image): bool => $image === $cover)
                    ->values();

                $service['cover'] = $cover;
                $service['photos'] = collect([$cover])
                    ->merge($remaining)
                    ->values()
                    ->all();
                $service['gallery'] = $remaining->take(4)->all();
                $service['videos'] = $this->videosIn(
                    public_path("images/{$service['folder']}"),
                    "images/{$service['folder']}",
                );

                return $service;
            })
            ->all();
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function serviceCatalog(): array
    {
        return [
            [
                'slug' => 'real-estate',
                'title' => 'Real Estate & Property Development',
                'folder' => 'real-estate',
                'cover_file' => 'img2.jpg',
                'summary' => 'Residential, commercial and mixed-use property development that builds lasting value.',
                'description' => 'From land acquisition and design to construction and handover, we deliver residential estates, commercial buildings and mixed-use developments in prime locations. Our projects are engineered for durability, comfort and long-term appreciation for investors and homeowners alike.',
                'highlights' => [
                    'Residential estates and commercial developments',
                    'Land banking and property portfolio management',
                    'Design-to-delivery project management',
                ],
            ],
            [
                'slug' => 'engineering-services',
                'title' => 'Engineering Services',
                'folder' => 'engineering-ict',
                'cover_file' => 'img.jpg',
                'summary' => 'Integrated engineering, fabrication, technical and ICT solutions for modern operations.',
                'description' => 'Our engineering division delivers mechanical, fabrication and technical services alongside ICT infrastructure — networking, systems integration and technology platforms — for clients across real estate, industry, energy and the public sector.',
                'highlights' => [
                    'Mechanical, fabrication and technical engineering',
                    'ICT infrastructure, networking and systems integration',
                    'Turnkey project design and delivery',
                ],
            ],
            [
                'slug' => 'logistics-transportation',
                'title' => 'Logistics & Transportation',
                'folder' => 'logistics',
                'cover_file' => 'img2.jpg',
                'summary' => 'Haulage, distribution and transport operations that keep goods moving across Nigeria.',
                'description' => 'Our logistics and transportation division moves materials, equipment, produce and general goods safely and on time. With a growing fleet and nationwide route network, we connect suppliers, project sites, warehouses and markets.',
                'highlights' => [
                    'Haulage fleets and last-mile distribution',
                    'Project cargo and specialised handling',
                    'Nationwide route and delivery coordination',
                ],
            ],
            [
                'slug' => 'processing',
                'title' => 'Processing & Value Addition',
                'folder' => 'processing',
                'cover_file' => 'img2.jpg',
                'summary' => 'Processing, packaging and value addition that turn raw materials into market-ready products.',
                'description' => 'We process and add value to agricultural and industrial raw materials — cleaning, milling, packaging and cold-chain handling — so that products reach the market with longer shelf life, higher quality and greater value. Our facilities support local production and reduce post-harvest losses.',
                'highlights' => [
                    'Modern milling, packaging and preservation lines',
                    'Reduced post-harvest losses across the chain',
                    'Locally processed, export-ready finished products',
                ],
            ],
            [
                'slug' => 'electrical-electronics',
                'title' => 'Electrical & Electronic Services',
                'folder' => 'electrical-electronics',
                'cover_file' => 'img17.jpg',
                'summary' => 'Installations, power systems and electronics solutions for homes, businesses and industry.',
                'description' => 'We design, supply and install electrical and electronic systems — from power distribution, lighting and automation to solar and electronics solutions — for residential, commercial and industrial clients. Every installation is delivered to code, on schedule and built to last.',
                'highlights' => [
                    'Electrical design, wiring and power distribution',
                    'Lighting, automation and electronics integration',
                    'Solar, backup power and maintenance services',
                ],
            ],
            [
                'slug' => 'luxury-wears',
                'title' => 'Luxury Wears & Lifestyle',
                'folder' => 'luxury-wears',
                'cover_file' => 'img14.jpg',
                'summary' => 'Premium fashion, apparel and lifestyle products for discerning clients.',
                'description' => 'We bring style and quality to the wardrobes and lifestyles of our clients through premium apparel, accessories and lifestyle products — sourced from trusted makers and delivered with a personal touch.',
                'highlights' => [
                    'Premium apparel and accessories',
                    'Personal shopping and styling support',
                    'Bespoke sourcing for events and occasions',
                ],
            ],
            [
                'slug' => 'agriculture-farming',
                'title' => 'Agriculture & Farming',
                'folder' => 'farm',
                'cover_file' => 'img26.jpg',
                'summary' => 'Large-scale crop and livestock farming engineered for year-round food sufficiency.',
                'description' => 'From cocoa, cassava, maize and rice to livestock and horticulture, our farms combine modern agronomy, mechanisation and data-driven planning to deliver consistent yields at scale. We cultivate, aggregate and supply fresh produce across Nigeria while empowering outgrower networks in the communities where we operate.',
                'highlights' => [
                    'Crop and livestock production at commercial scale',
                    'Outgrower schemes and farmer empowerment programmes',
                    'Technology-driven farm planning and agronomy',
                ],
            ],
            [
                'slug' => 'oil-gas-energy',
                'title' => 'Oil, Gas & Energy',
                'folder' => 'oil-gas',
                'cover_file' => 'img12.jpg',
                'summary' => 'Downstream storage, distribution and energy infrastructure delivered safely and reliably.',
                'description' => 'Our oil, gas and energy division participates in the downstream and midstream value chain, with a focus on storage, distribution and dependable energy infrastructure. We hold safety, compliance and operational excellence as non-negotiables in every project we undertake.',
                'highlights' => [
                    'Tank farm and bulk storage infrastructure',
                    'Distribution and supply chain operations',
                    'Safety-first engineering and compliance culture',
                ],
            ],
            [
                'slug' => 'air-conditioning-installations-servicing',
                'title' => 'Air Conditioning System Installations & Servicing',
                'folder' => 'air-conditioning',
                'cover_file' => 'img.jpg',
                'summary' => 'Supply, installation, servicing and repair of air conditioning systems for homes, offices and industry.',
                'description' => 'We supply, install, service and repair air conditioning systems across residential, commercial and industrial spaces. From split units and cassette systems to ducted and central cooling, our technicians size, install and maintain every system for efficient, reliable comfort in Nigerian conditions.',
                'highlights' => [
                    'Split, cassette, ducted and central AC installation',
                    'Routine servicing, gas top-up and fault repairs',
                    'Preventive maintenance for homes, offices and industry',
                ],
            ],
            [
                'slug' => 'hospitality-entertainment',
                'title' => 'Hospitality & Entertainment',
                'folder' => 'hospitality',
                'cover_file' => 'img2.jpg',
                'summary' => 'Hotels, resorts and entertainment experiences that showcase Nigerian warmth and excellence.',
                'description' => 'We develop and operate hospitality and entertainment offerings — hotels, lounges, event centres and leisure experiences — that meet international standards while celebrating Nigerian culture and hospitality.',
                'highlights' => [
                    'Hotels, resorts and leisure development',
                    'Event centres, lounges and entertainment venues',
                    'Service culture built on Nigerian warmth',
                ],
            ],
            [
                'slug' => 'warehousing',
                'title' => 'Warehousing & Distribution',
                'folder' => 'warehouse',
                'cover_file' => 'img4.jpg',
                'summary' => 'Secure storage, inventory management and distribution infrastructure for food and industrial goods.',
                'description' => 'We operate warehouses, silos and distribution centres that keep food and industrial goods safe, traceable and ready for market. Our storage solutions reduce spoilage, stabilise supply and support national food security.',
                'highlights' => [
                    'Modern warehouses, silos and distribution centres',
                    'Inventory management and stock traceability',
                    'Buffer storage for food security and price stability',
                ],
            ],
            [
                'slug' => 'wine-beverages',
                'title' => 'Wine & Beverages',
                'folder' => 'wine',
                'cover_file' => 'img8.jpg',
                'summary' => 'Production, importation and distribution of premium wine and beverages for every occasion.',
                'description' => 'Our wine and beverages division curates and distributes quality wines, spirits and non-alcoholic drinks for retail, hospitality and events. We combine trusted global sourcing with local distribution strength.',
                'highlights' => [
                    'Premium wine and spirits sourcing',
                    'Retail, hospitality and event supply',
                    'Chilled storage and dependable delivery',
                ],
            ],
        ];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function teamMembers(): array
    {
        $profiles = [
            'images/team/ceo.jpg' => [
                'name' => 'Justin Ogah',
                'position' => 'Chief Financial Officer',
                'biography' => 'He is the Chief Financial Officer (CFO) of JP-Hexagon Integrated Services Limited. A trained Business Administrator from Ronik Polytechnic, Egibo, Lagos, Nigeria. He is a passionate entrepreneur who believes in value addition and service to humanity.',
                'emails' => ['justinogah@jp-hexagonservicesltd.com.ng'],
                'phones' => ['+2348037709269'],
            ],
            'images/team/img3.jpg' => [
                'name' => 'Adamade Peter Adamade',
                'position' => 'Chief Executive Officer',
                'biography' => 'He is the founder and CEO of JP-HEXAGON SERVICES LTD incorporated. A trained Computational Engineer from Isfop University and a Petroleum Engineer from Heriot-Watt University, Edinburgh, Scotland, United Kingdom. He is an excellent industrialist and humanist with a wide range of experience and expertise in the oil, gas and energy industries. He is a believer in progressive synergies.',
                'emails' => ['adamadepeter@jp-hexagonservicesltd.com.ng'],
                'phones' => ['+2348051394462', '+447551219796'],
            ],
            'images/team/img5.jpg' => [
                'name' => 'Lukman Bello',
                'position' => 'Manager, JP-Ubuntu Integrated Farms Ltd',
                'biography' => 'He is a trained Science Laboratory Scientist from IBB University of Agriculture, Niger State. He is the Manager of JP-Ubuntu Integrated Farms Ltd. A goal-driven team worker and a coordinated, honest personality, he believes in Ubuntu — the spirit of Africa — and that feeding Africa is possible.',
                'emails' => ['lukmanbello@jp-hexagonservicesltd.com.ng'],
                'phones' => ['09162956760'],
            ],
            'images/team/img6.jpg' => [
                'name' => 'Adamade Emmanuel Esorkworbang',
                'position' => 'Company and Farms Secretary',
                'biography' => 'He is the Secretary of JP-HEXAGON SERVICES LTD incorporated (Company and Farms). A budding lawyer and law student at the University of Calabar (UNICAL), with ambitions that extend beyond obtaining a degree, he takes an interest in the law of contract, constitutional law, the law of tort and the Nigerian legal system. He is an aspiring legal professional with a strong quest for private law.',
                'emails' => ['adamadeemmanuel@jp-hexagonservicesltd.com.ng'],
                'phones' => ['08109485735', '08086036562'],
            ],
        ];

        return collect($this->imagesIn('team'))
            ->reject(fn (string $photo): bool => str_ends_with($photo, 'team/img1.jpg') || str_ends_with($photo, 'team/img4.jpg'))
            ->map(function (string $photo) use ($profiles): array {
                return array_merge([
                    'photo' => $photo,
                    'name' => null,
                    'position' => null,
                    'biography' => null,
                    'emails' => [],
                    'phones' => [],
                ], $profiles[$photo] ?? []);
            })
            ->values()
            ->all();
    }

    /**
     * @return array<int, string>
     */
    private function imagesIn(string $folder, ?int $limit = null): array
    {
        $path = public_path("images/{$folder}");

        if (! File::isDirectory($path)) {
            return [];
        }

        $extensions = ['jpg', 'jpeg', 'png', 'webp', 'gif', 'avif', 'bmp', 'svg'];

        $files = collect(File::files($path))
            ->filter(fn ($file): bool => in_array(strtolower($file->getExtension()), $extensions, true))
            ->map(fn ($file): string => 'images/'.$folder.'/'.$file->getFilename())
            ->sort(fn (string $a, string $b): int => strnatcmp($a, $b))
            ->values();

        if ($limit !== null) {
            $files = $files->take($limit);
        }

        return $files->all();
    }

    /**
     * @return array<int, array{src: string, type: string}>
     */
    private function videosIn(string $path, string $relativePath): array
    {
        if (! File::isDirectory($path)) {
            return [];
        }

        $mimeTypes = [
            'mp4' => 'video/mp4',
            'm4v' => 'video/x-m4v',
            'webm' => 'video/webm',
            'ogg' => 'video/ogg',
            'mov' => 'video/quicktime',
        ];

        return collect(File::files($path))
            ->filter(fn ($file): bool => array_key_exists(strtolower($file->getExtension()), $mimeTypes))
            ->sort(fn ($a, $b): int => strnatcmp($a->getFilename(), $b->getFilename()))
            ->map(fn ($file): array => [
                'src' => $relativePath.'/'.$file->getFilename(),
                'type' => $mimeTypes[strtolower($file->getExtension())],
            ])
            ->values()
            ->all();
    }
}
