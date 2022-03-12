<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'minimal' => env('MINIMAL','red'),
    'menu'=> [
        [
            'href'=>'/about',
            'title'=>'about our company',
            'label'=>'About'
        ],
        [
            'href'=>'/faqs',
            'title'=>'A question on our product',
            'label'=>'F.A.Q.S'
        ],
        [
            'href'=>'/support',
            'title'=>'Support',
            'label'=>'Support'
        ],                  
    ],
];