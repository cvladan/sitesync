<?php return array(
    'root' => array(
        'name' => 'cvladan/sitesync',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => 'f0b9ed40ca072608fbe6f22a84eda2a9412bd368',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v2.2.0',
            'version' => '2.2.0.0',
            'reference' => 'c29dc4b93137acb82734f672c37e029dfbd95b35',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'cvladan/sitesync' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'f0b9ed40ca072608fbe6f22a84eda2a9412bd368',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'yahnis-elsts/plugin-update-checker' => array(
            'pretty_version' => 'v5.0',
            'version' => '5.0.0.0',
            'reference' => '81be284da76f12c8751b477b2a0fa44364d26f84',
            'type' => 'library',
            'install_path' => __DIR__ . '/../yahnis-elsts/plugin-update-checker',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
