<?php

  declare(strict_types=1);

  namespace Peony\Assets\Resource\Path;

  class PredefinedResourcePath implements ResourcePathInterface
  {
    private string $path;


    public function __construct(string $path)
    {
      $this->path = $path;
    }


    public function get() : string
    {
      return $this->path;
    }
  }