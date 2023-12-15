<?php

// array('nom de la page','Nom du controller','nom de la methode',tableau d'arguments))

$routes = [
    ['home', 'default', 'index'],
    ['contact', 'contact', 'index'],
    ['about', 'about', 'index'],
    // Article
    ['articles', 'article', 'index'],
    ['create', 'article', 'create'],
    ['article', 'article', 'show', ['id']],
    ['delete', 'article', 'delete', ['id']],
    ['edit', 'article', 'edit', ['id']],
];
