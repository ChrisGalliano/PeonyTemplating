<?php


  namespace Peony\Engine\Path\Modifier;


  interface PathModifierInterface
  {
    public function modify(string $input) : string;
  }