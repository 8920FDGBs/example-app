<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testSuccessfullLogin()
    {
        $this->browse(function (Browser $browser) {
            $user = User::factory()->create;
            $browser->visit('/login')
                    ->type('email', '$user->email')
                    ->type('password', 'password')
                    ->press('LOG IN')
                    ->assertPathIs('/tweet')
                    ->assertSee('つぶやきアプリ');
        });
    }
}
