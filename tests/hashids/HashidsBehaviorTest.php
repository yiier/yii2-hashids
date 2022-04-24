<?php

namespace yiier\tests\hashids;

use PHPUnit\Framework\TestCase;
use yiier\hashids\Hashids;
use yiier\tests\TestModel;

class HashidsBehaviorTest extends TestCase
{
    protected function setUp(): void
    {
        new \yii\web\Application([
            'id' => 'testApp',
            'basePath' => __DIR__,
            'components' => [
                'hashids' => [
                    'class' => Hashids::class,
                    'minHashLength' => 10,
                ],
            ],
        ]);
    }

    public function testGetHashid()
    {
        $model = new TestModel();

        $this->assertTrue(isset($model['hashid']));
        $this->assertTrue(isset($model->hashid));

        $this->assertEquals('jnegp26awZ', $model->getHashid());
    }
}
