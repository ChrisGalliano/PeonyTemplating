<?php


  namespace Peony\Engine\Path\Modifier;


  class AppendPrefixPathModifier implements PathModifierInterface
  {
    private string $prefix;


    public function __construct(string $prefix)
    {
      $this->prefix = $prefix;
    }


    public function modify(string $input) : string
    {
      return $this->prefix . $input;
    }
  }