<?php

namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;

/**
 * @property Expr $expr Expression
 */
class BooleanNot extends Expr {

    /**
     * Constructs a boolean not node.
     *
     * @param Expr $expr       Expression
     * @param array               $attributes Additional attributes
     */
    public function __construct(Expr $expr, array $attributes = array()) {
        parent::__construct(
                array(
            'expr' => $expr
                ), $attributes
        );
    }

}
