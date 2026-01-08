<?php

namespace Tests\Feature;

use Tests\TestCase; 

class HomePageTest extends TestCase
{
    public function test_home_page_contains_laravel_text()
{
    $response = $this->get('/');

    $response->assertSee('Ayoub');
}
}