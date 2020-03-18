<?php

class Invader {
    public static function getPages() {
        $pages = [
            'home' => [
                'slug' => 'home',
                'title' => '(earth)invader',
                'description' => 'helloearthinvader'
            ],
            'about' => [
                'slug' => 'about',
                'title' => 'About'
            ],
            'press' => [
                'slug' => 'press',
                'title' => 'Press',
            ],
        ];

        return $pages;
    }

    public static function getPage() {
        $pages = self::getPages();

        $pageName = isset($_GET['p'])
            ? $_GET['p']
            : 'home';

        $page = isset($pages[$pageName])
            ? $pages[$pageName]
            : $pages['home'];

        return $page;
    }
}
