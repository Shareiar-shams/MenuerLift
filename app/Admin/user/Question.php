<?php

namespace App\Admin\user;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;


class Question extends Model
{
    use Commentable;
}
