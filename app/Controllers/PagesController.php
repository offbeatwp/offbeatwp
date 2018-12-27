<?php
namespace OffbeatWP\Controllers;

use OffbeatWP\Controllers\AbstractController;
use OffbeatWP\Models\PageModel;

class PagesController extends AbstractController {
    public function actionSingle(PageModel $post)
    {
        echo $this->render('pages/page', ['post' => $post]);
    }
}