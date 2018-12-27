<?php
namespace App\Models;

use OffbeatWP\Content\Post\PostModel as OffbeatWpPostModel;

class PageModel extends OffbeatWpPostModel {
    const POST_TYPE = 'page';
}