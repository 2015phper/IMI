<?php
namespace Imi\Model\Annotation;

use Imi\Bean\Annotation\Base;
use Imi\Bean\Annotation\Parser;

/**
 * 实体注解
 * @Annotation
 * @Target("CLASS")
 * @Parser("Imi\Model\Parser\ModelParser")
 */
class Entity extends Base
{
	/**
	 * 序列化时使用驼峰命名
	 * @var boolean
	 */
	public $camel = true;
}