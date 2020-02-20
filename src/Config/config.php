<?php

namespace HighlightLib\Config;

return array(
  '/^\d+$/' => 'HighlightLib\Classes\Token\NumberToken',
    '/^\$[a-zA-Z_]+\w*$/' => 'HighlightLib\Classes\Token\VariableToken',
    '/{/' => 'HighlightLib\Classes\Token\BracketToken',
    '/}/' => 'HighlightLib\Classes\Token\BracketToken',
    '/true|false|null|TRUE|FALSE|NULL|__CLASS__|__DIR__|__FILE__|__LINE__|__METHOD__|__FUNCTION__|__NAMESPACE__|__TRAIT__/' => 'HighlightLib\Classes\Token\BracketToken'
);
