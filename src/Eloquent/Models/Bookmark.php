<?php

namespace Matthewbdaly\LaravelBookmarks\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    //
    public function bookmarkable()
    {
        return $this->morphTo();
    }
}
