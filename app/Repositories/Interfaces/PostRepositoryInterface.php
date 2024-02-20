<?php

namespace App\Repositories\Interfaces;

use App\Models\Post;

interface PostRepositoryInterface
{
    public function getAllPosts($filters);

    public function getPostById($id);

    public function createPost(array $attributes);

    public function updatePost(Post $id, array $attributes);

    public function addConnectedPosts(array $data, $id);

    public function deletePost($id);
}
