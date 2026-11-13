<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_loads(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertSee('JP HEXAGON')
            ->assertSee('Aims & Objectives', false);
    }

    public function test_about_page_loads(): void
    {
        $this->get(route('about'))
            ->assertOk()
            ->assertSee('Justin Ogah')
            ->assertSee('Chief Financial Officer')
            ->assertSee('Adamade Peter Adamade')
            ->assertSee('Chief Executive Officer')
            ->assertSee('Lukman Bello')
            ->assertSee('Adamade Emmanuel Esorkworbang')
            ->assertSee('images/team/ceo.jpg');
    }

    public function test_services_page_loads_all_divisions(): void
    {
        $this->get(route('services'))
            ->assertOk()
            ->assertSee('Agriculture & Farming')
            ->assertSee('Air Conditioning System Installations & Servicing')
            ->assertSee('Oil, Gas & Energy')
            ->assertSee('Luxury Wears & Lifestyle');
    }

    public function test_gallery_page_loads(): void
    {
        $this->get(route('gallery'))
            ->assertOk()
            ->assertSee('Media Gallery')
            ->assertSee('Photos')
            ->assertSee('Videos');
    }

    public function test_contact_page_loads(): void
    {
        $this->get(route('contact'))
            ->assertOk()
            ->assertSee('08051394462')
            ->assertSee('adamadepeter@jp-hexagonservicesltd.com.ng');
    }

    public function test_contact_form_stores_a_message(): void
    {
        $response = $this->post(route('contact.submit'), [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'phone' => '08030000000',
            'message' => 'We would like to partner on agro-processing.',
        ]);

        $response->assertRedirect(route('contact'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
        ]);
    }

    public function test_contact_form_requires_valid_data(): void
    {
        $response = $this->post(route('contact.submit'), [
            'name' => '',
            'email' => 'not-an-email',
            'message' => '',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
        $this->assertDatabaseCount(ContactMessage::class, 0);
    }
}
