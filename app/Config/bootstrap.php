<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;

// Carga el entorno desde .env
$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->safeLoad();
