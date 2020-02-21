<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\TokenInterface;

abstract class AbstractToken implements TokenInterface {

    protected $stringToken;
    protected $stringOffset;

    public function __construct ($text, $offset)
    {
        $this->stringToken = $text;
        $this->stringOffset = $offset;
    }

    public function GetSpaces(int $previousOffset): string
    {
        $spaces = "";
        for ($i = 0; $i < $this->stringOffset-$previousOffset; $i++) $spaces .= " ";
        return $spaces;
    }

    public function GetText(): string
    {
        return '<span class ="'. $this->getCSSType() . '"> ' . $this->stringToken . '</span>';
    }

    public function GetOffset(): int
    {
        return $this->stringOffset + strlen($this->stringToken);
    }

    abstract public function getCSSType(): string;
}