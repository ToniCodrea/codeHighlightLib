<?php

declare(strict_types=1);

namespace HighlightLib\Classes\Assembler;

use HighlightLib\Contracts\Assembler\AssemblerInterface;
use HighlightLib\Contracts\Token\TokenInterface;

class Assembler implements AssemblerInterface {
    public function assemble(array $tokens): string {
        if ($tokens[1]->getCSSType() == 'plain') return $tokens[0] . " ";
        if ($tokens[1]->getCSSType() == 'newline') return '<br>';
        else {
            $string = '<span class = "' . $tokens[1]->getCSSType(). '" >';
            $string .= $tokens[0];
            $string .= " ";
            $string .= '</span>';
            return $string;
        }
    }
}