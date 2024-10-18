<?php

$uri = $_SERVER['REQUEST_URI'];

$routing = [
    '/' => function () {
        print 'Hello world!';
    },
    '/pools' => function () {
        print 'Pools';
    }
];

$func = $routing[$uri] ?? function () {
    print 'Not found';
};

call_user_func($func);
