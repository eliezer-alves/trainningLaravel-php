<?php

namespace Tests\Feature;

use App\Models\Team;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TeamTest extends TestCase
{
    
    /**
     * @test
     * 
     * @return void
     */
    public function check_if_middleware_auth_api_in_unauthorized_request_for_index_works()
    {
        $response = $this->get('/api/team');

        $this->assertGuest();
    }

    /**
     * @test
     * 
     * @return void
     */
    public function check_if_middleware_auth_api_in_unauthorized_request_for_store_works()
    {
        $response = $this->post('/api/team');

        $this->assertGuest();
    }

    /**
     * @test
     * 
     * @return void
     */
    public function check_if_insertion_of_a_new_team_in_the_database_works()
    {
        $team = Team::Factory()->create()->toArray();

        $this->assertTrue(isset($team['id']));
    }
}
