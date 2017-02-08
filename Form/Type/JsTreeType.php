<?php

/**
 *
 * @author Pierre Feyssaguet <pfeyssaguet@gmail.com>
 * @since 08/02/17 11:08
 */

namespace DspSofts\TreeBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;

class JsTreeType extends AbstractType
{
    public function getParent()
    {
        return EntityType::class;
    }
}
