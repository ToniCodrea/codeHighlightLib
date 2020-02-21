<?php

declare(strict_types=1);

namespace HighlightLib\Assembler;

use HighlightLib\Contracts\AssemblerInterface;

class Assembler implements AssemblerInterface {
    public function assemble(array $tokens): string {
        $final = "";
        $previousOffset = 0;
        foreach ($tokens as $token) {
            $final .= $token->GetSpaces($previousOffset);
            $final .= $token->GetText();
            $previousOffset = $token->GetOffset();
        }
        return $final;
    }
}


