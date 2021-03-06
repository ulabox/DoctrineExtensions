<?php

namespace Gedmo\Translatable\Hydrator\ORM;

use Gedmo\Translatable\Query\TreeWalker\TranslationWalker;
use Doctrine\ORM\Internal\Hydration\ArrayHydrator as BaseArrayHydrator;

/**
 * If query uses TranslationQueryWalker and is hydrating
 * objects - when it requires this custom object hydrator
 * in order to skip onLoad event from triggering retranslation
 * of the fields
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 * @package Gedmo.Translatable.Hydrator.ORM
 * @subpackage ObjectHydrator
 * @link http://www.gediminasm.org
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
class ArrayHydrator extends BaseArrayHydrator
{
}