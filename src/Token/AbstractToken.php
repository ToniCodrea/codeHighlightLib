<?php


namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

/**
 * Class which stores basic information about elements that can appear in input
 * Class AbstractToken
 * @package HighlightLib\Token
 */
abstract class AbstractToken implements TokenInterface {
    /**
     * @var
     */
    protected $stringToken;
    /**
     * @var
     */
    protected $stringOffset;

    /**
     * Sets the actual string value and its offset
     * AbstractToken constructor.
     * @param $text
     * @param $offset
     */
    public function __construct ($text, $offset)
    {
        $this->stringToken = $text;
        $this->stringOffset = $offset;
    }

    /**
     * Gets the number of spaces before a token and returns them for assembly
     * @param int $previousOffset
     * @return string
     */
    public function getSpaces(int $previousOffset): string
    {
        $spaces = "";
        for ($i = 0; $i < $this->stringOffset-$previousOffset; $i++) {
            $spaces .= " ";
        }

        return $spaces;
    }

    /**
     * Returns the finalized span element to be concatenated to the output string
     * @return string
     */
    public function getText(): string
    {
        return '<span class ="'. $this->getCSSType() . '">' . $this->stringToken . '</span>';
    }

    /**
     * Returns the offset + length that will be used to calculate the whitespaces for the next token
     * @return int
     */
    public function getOffset(): int
    {
        return $this->stringOffset + strlen($this->stringToken);
    }

    /**
     * Returns the CSS type of the token
     * @return string
     */
    abstract public function getCSSType(): string;
}