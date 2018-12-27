<?php
namespace OffbeatWP\Controllers;

use OffbeatWP\Controllers\AbstractController;
use OffbeatWP\Models\PostModel;

class PostsController extends AbstractController {
    public function actionSingle(PostModel $post)
    {
        echo $this->render('posts/single', ['post' => $post]);
    }

    public function actionArchive($posts)
    {
        echo $this->render('posts/archive', ['posts' => $posts]);
    }

    public function actionPostsPage($posts)
    {
        echo $this->render('posts/archive', ['posts' => $posts]);
    }
}