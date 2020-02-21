<?php

declare(strict_types=1);

namespace HighlightLib\Assembler;

use HighlightLib\Contracts\AssemblerInterface;

class Assembler implements AssemblerInterface {
    public function assemble(array $tokens): string {
        if ($tokens[1]->getCSSType() == 'plain') return $tokens[0] . " ";
        elseif ($tokens[1]->getCSSType() == 'newline') return '<br>';
        else {
            $string = '<span class = "' . $tokens[1]->getCSSType(). '" >';
            $string .= $tokens[0];
            $string .= " ";
            $string .= '</span>';
            return $string;
            }
    }
}