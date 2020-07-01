<?php
  declare(strict_types=1);

  namespace Peony\Assets\Resource;

  interface ResourceInterface
  {
    public function render() : string;
  }