<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Enterprise Application Development')
                ->clickLink('Log in')
                ->assertPathIs('/login')
                ->type('email', 'rio@gmail.com')
                ->type('password', 'rio12345')
                ->press('LOG IN')
                ->assertPathIs('/dashboard')
                ->assertSee("You're logged in!")
                ->clickLink('Notes')
                ->assertPathIs('/notes')
                ->clickLink('Create Note')
                ->assertPathIs('/create-note')
                ->type('title', 'Test Note')
                ->type('description', 'Coba Fitur Buat Notes.')
                ->press('CREATE');
        });
    }
}
