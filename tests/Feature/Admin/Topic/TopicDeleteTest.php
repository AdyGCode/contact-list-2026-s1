<?php

use App\Models\User;
use App\Models\Topic;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);


it('denies unauthenticated users from delete topic confirmation via GET', function () {
    $response = $this->get(route('admin.topics.delete-confirm', 1));

    $response->assertRedirect(route('login'));
});
it('denies unauthenticated users from delete topic confirmation via POST', function () {
    $response = $this->post(route('admin.topics.delete-confirm', 1));

    $response->assertRedirect(route('login'));
});

it('denies unauthenticated users from destroying a topic', function () {
    $response = $this->delete(route('admin.topics.destroy', 1));

    $response->assertRedirect(route('login'));
});
