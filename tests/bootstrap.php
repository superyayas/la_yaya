<?php

declare(strict_types=1);

// Autoload de Composer
require_once __DIR__ . '/../vendor/autoload.php';

// Cargar manualmente Paths y App (necesario para PHPUnit si no los detecta solo)
require_once __DIR__ . '/../app/Config/Paths.php';
require_once __DIR__ . '/../app/Config/App.php';

use Config\Paths;
use Config\App;
use CodeIgniter\CodeIgniter;

// Cargar variables del entorno desde .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad();

// Definir entorno de pruebas
$_SERVER['CI_ENVIRONMENT'] = 'testing';
define('ENVIRONMENT', 'testing');
defined('CI_DEBUG') || define('CI_DEBUG', true);

// Cargar rutas base del sistema (Paths)
$paths = new Paths();

// Definir rutas necesarias
defined('APPPATH')    || define('APPPATH', realpath($paths->appDirectory) . DIRECTORY_SEPARATOR);
defined('ROOTPATH')   || define('ROOTPATH', realpath(APPPATH . '../') . DIRECTORY_SEPARATOR);
defined('SYSTEMPATH') || define('SYSTEMPATH', realpath($paths->systemDirectory) . DIRECTORY_SEPARATOR);
defined('WRITEPATH')  || define('WRITEPATH', realpath(ROOTPATH . 'writable') . DIRECTORY_SEPARATOR);
defined('TESTPATH')   || define('TESTPATH', realpath(ROOTPATH . 'tests') . DIRECTORY_SEPARATOR);
defined('SUPPORTPATH') || define('SUPPORTPATH', realpath(TESTPATH . '_support/') . DIRECTORY_SEPARATOR);
defined('VENDORPATH') || define('VENDORPATH', realpath(ROOTPATH . 'vendor') . DIRECTORY_SEPARATOR);



