<?php

/**
 *
 * @author Pierre Feyssaguet <pfeyssaguet@gmail.com>
 * @since 08/02/17 11:08
 */

namespace DspSofts\TreeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class JsTreeType extends AbstractType
{
    public function getParent()
    {
        return ChoiceType::class;
    }
}
