<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\testyii2;

use Yii;
use yii\base\InvalidConfigException;

class Hello extends \yii\web\Session
{
	public function getHelloTest()
    {
        return "get Hello Test 20161215 HelloTest 1.0.4.1";
    }
	public static function HelloTest()
    {
        return "get Hello Test 20161215 static 1.0.4.1";
    }
}
