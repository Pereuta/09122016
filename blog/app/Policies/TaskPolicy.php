<?php

namespace App\Policies;
use App\User;
use App\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy {

    use HandlesAuthorization;

    public function update(User $user, Post $post) {
        return $user->id === $post->user_id;
    }

    public function __construct() {
        //
    }

}
