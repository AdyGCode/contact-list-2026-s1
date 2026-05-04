<?php

use App\Models\User;
use App\Models\Topic;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);


it('denies unauthenticated users from browsing topics', function () {
    $response = $this->get(route('admin.topics.index'));

    $response->assertRedirect(route('login'));
});

it('denies unauthenticated users from reading a topic', function () {
    $response = $this->get(route('admin.topics.show', 1));

    $response->assertRedirect(route('login'));
});
