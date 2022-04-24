<?php

namespace yiier\hashids;

use Hashids\Hashids as BaseHashids;
use yii\base\BaseObject;

/**
 * This is a wrapper for Hashids.
 *
 * @method string encode(...$params)
 * @method mixed decode(string $id)
 * @method string encodeHex(string $id)
 * @method string decodeHex(string $id)
 *
 * @version 2.0.0
 *
 * @author lichunqiang<light-li@hotmail.com>
 * @license MIT
 */
class Hashids extends BaseObject
{
    public string $salt;

    public int $minHashLength = 0;

    public string $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';

    private BaseHashids $hashids;


    public function init()
    {
        parent::init();
        $this->hashids = new BaseHashids($this->salt, $this->minHashLength, $this->alphabet);
    }


    public function __call($name, $params)
    {
        if (method_exists($this->hashids, $name)) {
            return call_user_func_array([$this->hashids, $name], $params);
        }

        return parent::__call($name, $params);
    }
}
