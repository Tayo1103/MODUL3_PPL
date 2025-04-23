<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
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
                ->clickLink('Edit')
                ->assertPathIs('/edit-note-page/1')
                ->type('title', 'Test Note Edit')
                ->type('description', 'Coba Fitur Edit Notes.')
                ->press('UPDATE');
        });
    }
}
