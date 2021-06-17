<?php

namespace tests\common\fixtures;

use yii\test\ActiveFixture;

class ArticleFixture extends ActiveFixture
{
    public $modelClass = 'common\models\Article';
    public $depends = [
        ArticleCategoryFixture::class,
        UserFixture::class,
    ];
}
