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
            'label'=>'FAQS'
        ],
        [
            'href'=>'/support',
            'title'=>'Support',
            'label'=>'Support'
        ],  
        [
            'href'=>'/terms',
            'title'=>'Terms',
            'label'=>'Terms'
        ],
        [
            'href'=>'/privacy',
            'title'=>'Privacy',
            'label'=>'Privacy'
        ],                                  
    ],
    'network' => [
        'facebook'=>[
            'href'=>'https://facebook.com',
            'target'=>'_blank',
            'title'=>'facebook'
        ],
        'twitter'=>[
            'href'=>'https://twitter.com',
            'target'=>'_blank',
            'title'=>'twitter'
        ],
        'instagram'=>[
            'href'=>'https://instagram.com',
            'target'=>'_blank',
            'title'=>'instagram'
        ],
        'linkedin'=>[
            'href'=>'https://linkedin.com',
            'target'=>'_blank',
            'title'=>'linkedin'
        ],
        'youtube'=>[
            'href'=>'https://youtube.com',
            'target'=>'_blank',
            'title'=>'youtube'
        ],
        'github'=>[
            'href'=>'https://github.com',
            'target'=>'_blank',
            'title'=>'github'
        ],                                
    ]

];