<?php

namespace App\Helpers;

class SocialHelper
{
    /**
     * Lista de redes sociais abreviadas para nome completo
     */
    public static $sites = [
        'F' => 'Facebook',
        'I' => 'Instagram',
        'L' => 'LinkedIn',
        'T' => 'Twitter',
        'G' => 'GitHub',
        'Y' => 'YouTube',
        'W' => 'WhatsApp',
        'E' => 'E-mail',
        'B' => 'Behance',
        'D' => 'Dribbble',
        'M' => 'Medium',
        'O' => 'Outros',
    ];

    public static function get($valor)
    {
        return isset($valor) && isset(self::$sites[$valor]) ? self::$sites[$valor] : $valor;
    }
}
