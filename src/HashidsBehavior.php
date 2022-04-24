<?php

namespace yiier\hashids;

use yii\base\Behavior;
use yii\di\Instance;

/**
 * @property-read string $hashid
 */
class HashidsBehavior extends Behavior
{
    public string|array|Hashids $hashids = 'hashids';

    /**
     * @inheritdoc
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        parent::init();

        $this->hashids = Instance::ensure($this->hashids, Hashids::class);
    }

    /**
     * @return string
     */
    public function getHashid(): string
    {
        $primaryKey = $this->owner->getPrimaryKey();

        return $this->hashids->encode($this->owner->{$primaryKey});
    }

}
