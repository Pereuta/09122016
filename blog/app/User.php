<?php

namespace App;

// Импортирования пространства имён...

class User extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract {

    use Authenticatable,
        Authorizable,
        CanResetPassword;

    // Другие Eloquent свойства...

    /**
     * Получить все задачи пользователя.
     */
    public function tasks() {
        return $this->hasMany(Task::class);
    }

}
