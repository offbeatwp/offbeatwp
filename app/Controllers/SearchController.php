<?php
namespace OffbeatWP\Controllers;

use OffbeatWP\Controllers\AbstractController;

class SearchController extends AbstractController {
    public function actionSearch($posts)
    {
        echo $this->render('search/search', ['posts' => $posts]);
    }
}