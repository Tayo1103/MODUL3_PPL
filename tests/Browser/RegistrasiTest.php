<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Enterprise Application Development')
                ->clickLink('Register')
                ->assertPathIs('/register')
                ->type('name', 'Rio')
                ->type('email', 'rio@gmail.com')
                ->type('password', 'rio12345')
                ->type('password_confirmation', 'rio12345')
                ->press('REGISTER');
        });
    }
}
