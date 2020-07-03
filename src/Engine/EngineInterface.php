<?php
  declare(strict_types=1);

  namespace Peony\Engine;

  use Peony\Assets\Manager\AssetsManagerInterface;
  use Peony\Engine\Path\Modifier\PathModifierInterface;

  interface EngineInterface
  {
    /**
     * @param mixed[] $data
     */
    public function render(string $path, array $data) : string;


    public function assetsManager() : AssetsManagerInterface;

    public function setPathModifier(PathModifierInterface $modifier) : void;
  }