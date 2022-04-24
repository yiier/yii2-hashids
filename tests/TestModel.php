<?php


namespace yiier\tests;

use yii\base\Model;
use yiier\hashids\HashidsBehavior;

class TestModel extends Model
{
    public $id = 10000;

    public function getPrimaryKey()
    {
        return 'id';
    }

    public function behaviors()
    {
        return [
            'hashid' => [
                'class' => HashidsBehavior::class,
            ],
        ];
    }
}
