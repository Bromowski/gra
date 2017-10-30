<?php

require 'config.php';
require 'database\connection.php';
require 'database\queryBuilder.php';

$db = Connection::makeConnection($database);

$query = new QueryBuilder($db);

$task = $query->fetchAll('player');

print_r($task);
