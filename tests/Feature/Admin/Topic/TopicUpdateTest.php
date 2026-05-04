<?php

use App\Models\User;
use App\Models\Topic;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);


it('denies unauthenticated users from editing a topic', function () {
    $response = $this->get(route('admin.topics.edit', 1));

    $response->assertRedirect(route('login'));
});

it('denies unauthenticated users from updating a topic via PUT', function () {
    $response = $this->put(route('admin.topics.update', 1));

    $response->assertRedirect(route('login'));
});

it('denies unauthenticated users from updating a topic via PATCH', function () {
    $response = $this->patch(route('admin.topics.update', 1));

    $response->assertRedirect(route('login'));
});
