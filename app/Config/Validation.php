<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        \CodeIgniter\Validation\Rules::class,
        \CodeIgniter\Validation\FormatRules::class,
        \CodeIgniter\Validation\FileRules::class,
        \CodeIgniter\Validation\CreditCardRules::class,
        
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------

    public $register = [
        'username' => 'alpha_numeric|is_unique[user.username]',
        'password' => 'min_length[8]|alpha_numeric_punct',
        'confirm' => 'matches[password]'
        ];
    public $register_error = [
        'username' => [
            'alpha_numeric' => 'Username hanya bisa mengandung huruf dan angka',
            'is_uniqe' => 'Username sudah dipakai'
        ],
        'password' => [
            'min_length' => 'Password harus terdiri dari 8 kata',
            'alpha_numeric_punct' => 'Password hanya bisa mengandung angka, huruf, dan karakter yang valid'
        ],
        'confirm' => [
            'matches' => 'Konfirmasi password tidak cocok'
        ]
        ];
}
