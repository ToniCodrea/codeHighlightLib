<?php

declare(strict_types=1);

namespace HighlightLib\Assembler;

use HighlightLib\Contracts\AssemblerInterface;

class Assembler implements AssemblerInterface {
    public function assemble(array $tokens): string {
        $final = "";
        foreach ($tokens as $token) {
            $final .= $token->GetText();
        }
        return $final;
    }
}


