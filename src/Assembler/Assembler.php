<?php

declare(strict_types=1);

namespace HighlightLib\Assembler;

use HighlightLib\Contracts\AssemblerInterface;

/**
 * Class Assembler
 * @package HighlightLib\Assembler
 */
class Assembler implements AssemblerInterface {
    public function assemble(array $tokens): string {
        $final = ""; //initializing final output
        $previousOffset = 0; //first offset 0
        foreach ($tokens as $token) {
            $final .= $token->getSpaces($previousOffset); //apply empty spaces to ouput string
            $final .= $token->getText(); //apply HTMl text to output string
            $previousOffset = $token->getOffset(); //take the current offset of the string element to use it next time
        }

        return $final;
    }
}


