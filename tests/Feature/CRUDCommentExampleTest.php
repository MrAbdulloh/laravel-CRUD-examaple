<?php

namespace Tests\Feature;

use App\Models\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class CRUDCommentExampleTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->withoutExceptionHandling();
    }

    /** @test */
    public function CreateComment()
    {
        $data = [
            'title' => $this->faker->title(),
            'contents' => $this->faker->sentence(),
            'comment' => $this->faker->sentence(),
        ];
        $response = $this->post('comments/', $data);

        $response->assertStatus(Response::HTTP_CREATED);
    }

    /** @test */
    public function ReadComment()
    {
        $comments = Comment::factory()->create();

        $response = $this->get('comments/' . $comments->id);
        $response->assertStatus(Response::HTTP_OK);
        $response->assertJsonFragment([
            'title' => $comments->title,
            'contents' => $comments->contents,
            'comment' => $comments->comment,
        ]);
    }

    /** @test */
    public function UpdateComment()
    {
        $comment = Comment::factory()->create();
        $data = [
            'title' => $this->faker->title(),
            'contents' => $this->faker->sentence(),
            'comment' => $this->faker->sentence(),
        ];
        $response = $this->put('comments/' . $comment->id, $data);
        $response->assertStatus(Response::HTTP_OK);

        $this->assertDatabaseHas('comments', $data);
        $this->assertDatabaseCount('comments', 1);

    }

}
