<?php

/**
 * modelo de rota
 * 'home' =>[               //pastado aplicativo é obrigatorio
 *      'controller'=>'index',   //nome do controller é obrigatorio
 *      'menu'=>[           //Menu é opcional, sendo definido automaticamente
 *          'title'=>'Home',    //Titulo do menu (opcional)
 *          'icon'=>''      //Imagem (opcional)
 *      ]
 *  ],
 */
return [
    'rotas' => [
        'home',
        'empresa',
        'produto',
        'servico',
        'contato'
    ],
    'db' => [
        'host' => 'localhost',
        'banco' => 'mysql',
        'dbname' => 'fixture',
        'user' => 'root',
        'pass' => 'k8xw37zl'
    ],
    'email' => [
        'auth' => 'true',
        'host'=>'smtp.floripaserver.com',
        'user'=>'paulo@floripaserver.com',
        'pass'=>'zlr5y21',
        'porta'=>'587',
        'nomeDestinatario'=>'Paulo Roberto da Silva',
        'emailDestinatario'=>'paulo@floripaserver.com'
    ]
];
