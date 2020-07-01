<?php
  declare(strict_types=1);

  namespace Peony\Assets\Manager;

  use Peony\Assets\Resource\ResourceInterface;

  interface AssetsManagerInterface
  {
    public function add(ResourceInterface $resource, string $section) : AssetsManagerInterface;


    public function render(string $section = null) : void;
  }