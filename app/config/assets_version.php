<?php

$container->loadFromExtension(
    'framework',
    array(
        'templating' => array(
            'packages' => array(
                'style' => array(
                    'version' => substr(
                        file_exists(__DIR__.'/../../web/css/style.css')
                            ? sha1_file(__DIR__.'/../../web/css/style.css')
                            : md5(time())
                        ,
                        0,
                        6
                    )
                ),
                'catalog_admin' => array(
                    'version' => substr(
                        file_exists(__DIR__.'/../../web/css/catalog_admin.css')
                            ? sha1_file(__DIR__.'/../../web/css/catalog_admin.css')
                            : md5(time())
                        ,
                        0,
                        6
                    )
                ),
                'js_app' => array(
                    'version' => substr(
                        file_exists(__DIR__.'/../../web/js/app.js')
                            ? sha1_file(__DIR__.'/../../web/js/app.js')
                            : md5(time())
                        ,
                        0,
                        6
                    )
                ),
            )
        ),
    )
);
