<?php

namespace tests\common\fixtures;

use yii\test\ActiveFixture;

class ArticleAttachmentFixture extends ActiveFixture
{
    public $modelClass = 'common\models\ArticleAttachment';
    public $depends = [
        ArticleFixture::class
    ];
}
