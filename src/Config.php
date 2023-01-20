<?php
namespace src;

class Config {
    //caminho entre pastas;
    const BASE_DIR = '/projeto mvc/public';


    //configurações banco de dados
    const DB_DRIVER = 'mysql';
    const DB_HOST = 'localhost';
    const DB_DATABASE = 'test';
    CONST DB_USER = 'root';
    const DB_PASS = '';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}