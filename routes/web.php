<?php

offbeat('routes')->register(
    [OffbeatWP\Controllers\PagesController::class, 'actionSingle'],
    function () {
        return is_singular('page');
    },
    function () {
        return ['post' => offbeat('post')->convertWpPostToModel($GLOBALS['post'])];
    }
);

offbeat('routes')->register([OffbeatWP\Controllers\PostsController::class, 'actionSingle'],
    function () {
        return is_singular('post');
    },
    function () {
        return ['post' => offbeat('post')->convertWpPostToModel($GLOBALS['post'])];
    }
);

offbeat('routes')->register([OffbeatWP\Controllers\PostsController::class, 'actionArchive'], 
    function () {
        return is_archive();
    },
    function () {
        return ['posts' => new \Raow\Content\Post\PostsCollection($GLOBALS['wp_query'])];
    }
);

offbeat('routes')->register([\Raow\Controllers\PostsController::class, 'actionPostsPage'], 
    function () {
        return is_home();
    },
    function () {
        return ['posts' => new \Raow\Content\Post\PostsCollection($GLOBALS['wp_query'])];
    }
);

offbeat('routes')->register([\Raow\Controllers\ErrorsController::class, 'action404'], function () {
    return is_404();
});

offbeat('routes')->register([\Raow\Controllers\SearchController::class, 'actionSearch'],
    function () {
        return is_search();
    },
    function () {
        return ['posts' => new \Raow\Content\Post\PostsCollection($GLOBALS['wp_query'])];
    }
);