<?php

declare(strict_types=1);

namespace HighlightLib\Contracts\Assembler;

interface AssemblerInterface {
    public function assemble(array $tokens): string;
}
