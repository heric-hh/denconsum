<?php // Configuracion del servidor y encriptacion

const SERVER = 'localhost';
const DB = 'denconsum';
const USER = 'root';
const PASS = '';

const SGID = "mysql:host=" . SERVER .";dbname=" . DB;

//Procesar por hash las contraseñas
const METHOD = 'AES-256-CBC';
const SECRET_KEY = '$denconsum@2022';
const SECRET_IV = '037970';