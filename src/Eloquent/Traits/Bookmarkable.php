<?php

namespace Matthewbdaly\LaravelBookmarks\Eloquent\Traits;

trait Bookmarkable
{
    /**
     * Bookmarks relation
     *
     * @return Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function bookmarks()
    {
        return $this->morphMany('Matthewbdaly\LaravelBookmarks\Eloquent\Models\Bookmark', 'bookmarkable');
    }
}
