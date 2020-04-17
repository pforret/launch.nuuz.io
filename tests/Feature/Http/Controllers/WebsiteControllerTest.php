<?php

namespace Tests\Feature\Http\Controllers;

use App\Website;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\HttpTestAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\WebsiteController
 */
class WebsiteControllerTest extends TestCase
{
    use HttpTestAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $websites = factory(Website::class, 3)->create();

        $response = $this->get(route('website.index'));

        $response->assertOk();
        $response->assertViewIs('website.index');
        $response->assertViewHas('websites');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\WebsiteController::class,
            'store',
            \App\Http\Requests\WebsiteStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $title = $this->faker->sentence(4);
        $url = $this->faker->url;
        $timezone = $this->faker->word;
        $ = $this->faker->word;

        $response = $this->post(route('website.store'), [
            'title' => $title,
            'url' => $url,
            'timezone' => $timezone,
            '' => $,
        ]);

        $websites = Website::query()
            ->where('title', $title)
            ->where('url', $url)
            ->where('timezone', $timezone)
            ->where('', $)
            ->get();
        $this->assertCount(1, $websites);
        $website = $websites->first();

        $response->assertRedirect(route('website.index'));
        $response->assertSessionHas('website.title', $website->title);
    }
}
