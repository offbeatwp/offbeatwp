<?php
namespace OffbeatWP\Services;

use Raow\Services\AbstractService;

class SiteService extends AbstractService
{
    public function register()
    {
        offbeat('post-type')->registerPostModel('post', \OffbeatWP\Models\PostModel::class);
        offbeat('post-type')->registerPostModel('page', \OffbeatWP\Models\PageModel::class);

        add_theme_support('custom-header');
        add_theme_support('post-thumbnails');
    }

}
