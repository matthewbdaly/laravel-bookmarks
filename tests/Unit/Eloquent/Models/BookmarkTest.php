<?php

namespace Tests\Unit\Eloquent\Models;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Fixtures\User;
use Matthewbdaly\LaravelBookmarks\Eloquent\Models\Bookmark;

class BookmarkTest extends TestCase
{
    /**
     * Test creating bookmarks
     *
     * @return void
     */
    public function testCreateBookmark()
    {
        $user = factory(User::class)->create();
        $obj = new Bookmark;
        $obj->user_id = $user->id;
        $obj->bookmarkable_id = $user->id;
        $obj->bookmarkable_type = get_class($user);
        $obj->save();
        $bookmark = Bookmark::first();
        $this->assertEquals($user->id, $bookmark->user_id);
        $this->assertEquals($user->id, $bookmark->bookmarkable->id);
        $this->assertEquals($user->name, $bookmark->bookmarkable->name);
        $this->assertEquals($user->email, $bookmark->bookmarkable->email);
        $this->assertEquals($user->bookmarks->first()->id, $bookmark->id);
    }
}
