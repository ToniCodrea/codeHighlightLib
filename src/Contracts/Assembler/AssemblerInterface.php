<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;

interface AssemblerInterface {
    public function assemble(array $tokens): string;
}
