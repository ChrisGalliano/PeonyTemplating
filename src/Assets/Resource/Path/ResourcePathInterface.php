<?php

  declare(strict_types=1);

  namespace Peony\Assets\Resource\Path;

  interface ResourcePathInterface
  {
    public function get() : string;
  }