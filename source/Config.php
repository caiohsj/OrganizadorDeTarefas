<?php

define("ROOT", "http://localhost/OrganizadorDeTarefas");

define("SITE", "Tasks Organizer");

define("DATABASE_CONFIG", [
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'db_organizador',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

/**
 * @param string|null $uri
 * @return string
 */
function url(string $uri = null): string
{
    if ($uri) {
        return ROOT . "/{$uri}";
    }

    return ROOT;
}