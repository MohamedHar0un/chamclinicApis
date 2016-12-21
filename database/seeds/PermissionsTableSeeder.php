<?php

use App\Permission;
use Illuminate\Database\Seeder;
class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $createPost = new Permission();
        $createPost->name = 'createpost';
        $createPost->display_name = 'Create Posts';
        $createPost->description = 'Create new blog posts';
        $createPost->save();

		$editPost = new Permission();
        $editPost->name = 'editpost';
        $editPost->display_name = 'Edit Posts';
        $editPost->description = 'Edit blog posts';
        $editPost->save();   

		$deletePost = new Permission();
        $deletePost->name = 'deletepost';
        $deletePost->display_name = 'Delete Posts';
        $deletePost->description = 'Delete blog posts';
        $deletePost->save();        
    }
}
