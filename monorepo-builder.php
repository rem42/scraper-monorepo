<?php

use Symplify\MonorepoBuilder\Config\MBConfig;

return static function (MBConfig $mbConfig): void {
    // On définit où se trouvent les packages
    $mbConfig->packageDirectories([__DIR__ . '/packages']);

    // On force des versions communes pour éviter les conflits
    $mbConfig->dataToAppend([
        'require-dev' => [
            'phpstan/phpstan' => '^2.1',
            'phpunit/phpunit' => '^13.1',
            'rem42/php-cs-fixer-config' => '^4.1',
        ],
        'require' => [
            'php' => '^8.4',
        ]
    ]);
};
