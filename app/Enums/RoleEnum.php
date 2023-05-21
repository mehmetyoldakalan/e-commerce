<?php

namespace App\Enums;

enum RoleEnum
{
    public const SUPER_USER = 1;
    public const VENDOR = 2;
    public const PRODUCT_MANAGER = 3;
    public const CUSTOMER = 4;

    /**
     * @return string[]
     * roles array for seeder
     */
    public static function getRoles(): array
    {
        return array(
            self::SUPER_USER => 'SUPER_USER',
            self::VENDOR => 'VENDOR',
            self::PRODUCT_MANAGER => 'PRODUCT_MANAGER',
            self::CUSTOMER => 'CUSTOMER',
        );
    }
}
