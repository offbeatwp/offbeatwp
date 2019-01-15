<?php
use \OffbeatWP\Content\Post\PostsCollection;
use \App\Controllers\PagesController;
use \App\Controllers\PostsController;
use \App\Controllers\ErrorsController;
use \App\Controllers\SearchController;

offbeat('routes')->callback(
    function () {
        return is_singular('page');
    },
    [ PagesController::class, 'actionSingle' ],
    function () {
        return ['post' => offbeat('post')->convertWpPostToModel($GLOBALS['post'])];
    }
);

offbeat('routes')->callback(
    function () {
        return is_singular('post');
    },
    [ PostsController::class, 'actionSingle' ],
    function () {
        return ['post' => offbeat('post')->convertWpPostToModel($GLOBALS['post'])];
    }
);

offbeat('routes')->callback(
    function () {
        return is_archive();
    },
    [ PostsController::class, 'actionArchive' ], 
    function () {
        return ['posts' => new PostsCollection($GLOBALS['wp_query'])];
    }
);

offbeat('routes')->callback(
    function () {
        return is_home();
    },
    [ PostsController::class, 'actionPostsPage' ],
    function () {
        return ['posts' => new PostsCollection($GLOBALS['wp_query'])];
    }
);

offbeat('routes')->callback(
    function () {
        return is_404();
    },
    [ ErrorsController::class, 'action404' ]
);

offbeat('routes')->callback(
    function () {
        return is_search();
    },
    [ SearchController::class, 'actionSearch' ],
    function () {
        return ['posts' => new PostsCollection($GLOBALS['wp_query'])];
    }
);