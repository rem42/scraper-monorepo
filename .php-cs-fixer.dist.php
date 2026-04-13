<?php

$config = new Rem42\CS\Config\Config(true);
$config
    ->setRiskyAllowed(true)
    ->addMoreRules([
        'declare_strict_types' => true,
    ])
    ->getFinder()
    ->in(
        [
            __DIR__.'/packages/*/src',
            __DIR__.'/packages/*/tests',
        ]
    );

return $config;
