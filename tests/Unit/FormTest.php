<?php

namespace Tests\Unit;

use App\Models\Form;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FormTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     */
    public function test_can_be_published(): void
    {
        $form = Form::factory()->create();
        $this->assertNull($form->published_at);
        $form->publish(true);
        $this->assertNotNull($form->fresh()->published_at);
    }

    public function test_can_be_un_published(): void
    {
        $form = Form::factory()->published()->create();
        $this->assertNotNull($form->published_at);
        $form->publish(false);
        $this->assertNull($form->published_at);
    }
}
