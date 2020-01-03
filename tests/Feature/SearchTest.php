<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchTest extends TestCase
{
    use RefreshDatabase;

    public function any_one_can_perform_a_search()
    {
        $search = 'foobar';
        create('App\Post1992Article', [], 2);
        create('App\Post1992Article', ['content' => "Search on Aricles {search} term."], 2);

        $results = $this->getJson("/acts/search?q={$search}")->json();

        $this->assertCount(2, $results['data']);

    }
}
