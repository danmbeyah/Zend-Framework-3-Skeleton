<?php

/**
 * This is the main application configuration file.
 */

$modules = [
    'modules' => require __DIR__ . '/modules.config.php',
    'module_listener_options' => [
        'config_glob_paths' => [
            'config/autoload/{{,*.}global,{,*.}local}.php',
        ],
        'config_cache_enabled' => APP_ENV_PROD,
        'config_cache_key' => 'app_config',
        'module_map_cache_enabled' => APP_ENV_PROD,
        'module_map_cache_key' => 'module_map',
        'cache_dir' => 'data/runtime',
        'check_dependencies' => APP_ENV_DEV || APP_ENV_TEST,
    ],
];
return $modules;
