<?php
  declare(strict_types=1);

  namespace Peony\Engine;

  use Peony\Assets\Manager\AssetsManagerInterface;

  interface EngineInterface
  {
    /**
     * @param mixed[] $data
     */
    public function render(string $path, array $data) : string;


    public function assetsManager() : AssetsManagerInterface;
  }