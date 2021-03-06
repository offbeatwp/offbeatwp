<?php
namespace App\Services;

use OffbeatWP\Services\AbstractService;

class SiteService extends AbstractService
{
    public function register()
    {
        offbeat('post-type')->registerPostModel('post', \App\Models\PostModel::class);
        offbeat('post-type')->registerPostModel('page', \App\Models\PageModel::class);

        add_theme_support('custom-header');
        add_theme_support('post-thumbnails');
    }

}
