<?php

use App\Models\User;
use App\Models\Topic;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('denies unauthenticated users from creating a topic', function () {
    $response = $this->get(route('admin.topics.create', 1));

    $response->assertRedirect(route('login'));
});

it('denies unauthenticated users from storing a new topic', function () {
    $response = $this->post(route('admin.topics.store', 1));

    $response->assertRedirect(route('login'));
});
