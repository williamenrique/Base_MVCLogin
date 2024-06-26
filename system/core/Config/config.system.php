<?php
const BASE_URL = "http://mvc.lat/";
const HEAD = "src/include/head.php";
const FOOTER = "src/include/footer.php";
const LIBS = "system/core/Libraries/";
const VIEWS = "system/app/Views/";
const titulo = "Pagina en construccion";
date_default_timezone_set('America/Caracas');

//rutas de assets
const CSS = BASE_URL."src/css/";
const JS = BASE_URL."src/js/";
const IMG = BASE_URL."src/img/";
//constantes del template admin
const CSS_VENDORS = BASE_URL."src/vendors/css/";
const JS_VENDORS = BASE_URL."src/vendors/js/";
const IMG_VENDORS = BASE_URL."src/vendors/img/";
const VENDORS = BASE_URL."src/vendors/";
const PLUGINS = BASE_URL."src/plugins/";

const CONTROLLER = BASE_URL."system/core/Libraries/Controllers.php";
const LOAD = BASE_URL."system/core/Libraries/Load.php";

//constantes de base de datos
const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASS = "";
const DB_NAME = "db_personal";
const DB_CHARSET = "charset=utf8";
const NUM_ITEMS_BY_PAGE = "5";



//constantes de encriptacion
define('METHOD','AES-256-CBC');
define('SECRET_KEY','$P3r50n@l');
define('SECRET_IV','101712');

/* CREAR NUEVAS CONST PARA EL EMAIL */
const EMAIL = "william21enrique@gmail.com";
const CONTACTO = "ing.william.enrique@gmail.com";

const Host ='smtp.gmail.com';
const Username = 'william21enrique@gmail.com';
const Password = 'naca2105';
const Port = '587';
const SMTPSecure = 'tls';