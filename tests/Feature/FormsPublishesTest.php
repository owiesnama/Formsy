<?php

namespace Tests\Feature;

use App\Models\Form;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class FormsPublishesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_only_auth_users_can_create_forms()
    {
        $user = User::factory()->create();

        $this->post(route('forms.store', [
            'form' => $this->formJson()
        ]))->assertRedirect();
        $this->actingAs($user);

        $this->post(route('forms.store', [
            'form' => $this->formJson()
        ]))->assertRedirectToRoute('forms.index');
    }
    public function test_unauthorized_users_cannot_view_un_published_forms(): void
    {
        $user = User::factory()->create();
        $form = Form::factory()->create([
            'user_id' => $user->id
        ]);
        $this->actingAs($user);
        $this->get(route('forms.show', $form->id))->assertOk();
        $unAuthorizedUser = User::factory()->create();
        $this->actingAs($unAuthorizedUser)
            ->get(route('forms.show', $form->id))
            ->assertStatus(Response::HTTP_FORBIDDEN);
    }

    public function test_auth_users_can_see_recent_published_on_dashboard()
    {
        $this->get(route('dashboard'))->assertRedirect();
        Form::factory()->published()->create();
        $this->actingAs(User::factory()->create());
        $this->get(route('dashboard'))
            ->assertOk()
            ->assertSee('forms');
    }

    public function test_guest_can_view_published_forms()
    {
        $form = Form::factory()->create();
        $form->publish(true);
        $this->get(route('forms.show', $form->id))->assertOk();
    }


    public function formJson()
    {
        return (json_decode(file_get_contents(base_path("forms-examples.json"))));
    }
}
