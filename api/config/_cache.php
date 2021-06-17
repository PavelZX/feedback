<?php

$cache = [
    'class' => yii\caching\FileCache::class,
    'cachePath' => '@api/runtime/cache'
];

if (YII_ENV_DEV) {
    $cache = [
        'class' => yii\caching\DummyCache::class
    ];
}

return $cache;
