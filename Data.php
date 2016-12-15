<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\testyii2;

use Yii;
use yii\base\InvalidConfigException;

class Session extends \yii\web\Session
{
	public function getHelloData()
    {
        return "Hello data 20161215";
    }
}
