<?php
namespace Psalm\Type\Atomic;

class TNonEmptyMixed extends TMixed
{
    /**
     * @return string
     */
    public function getId()
    {
        return 'nonempty-mixed';
    }
}
