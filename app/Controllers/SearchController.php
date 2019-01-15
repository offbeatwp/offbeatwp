<?php
namespace App\Controllers;

use OffbeatWP\Controllers\AbstractController;

class SearchController extends AbstractController {
    public function actionSearch($posts)
    {
        return $this->render('search/search', ['posts' => $posts]);
    }
}