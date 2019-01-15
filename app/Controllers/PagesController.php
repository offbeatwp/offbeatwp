<?php
namespace App\Controllers;

use OffbeatWP\Controllers\AbstractController;
use App\Models\PageModel;

class PagesController extends AbstractController {
    public function actionSingle(PageModel $post)
    {
        return $this->render('pages/page', ['post' => $post]);
    }
}