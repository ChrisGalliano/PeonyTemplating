<?php
  declare(strict_types=1);

  namespace Peony\Engine;

  use Peony\Assets\Manager\AssetsManagerInterface;

  final class Engine implements EngineInterface
  {
    private AssetsManagerInterface $assetsManager;


    public function __construct(AssetsManagerInterface $assetsManager)
    {
      $this->assetsManager = $assetsManager;
    }


    /**
     * @param mixed[] $data
     */
    public function render(string $path, array $data) : string
    {
      ob_start();
      extract($data, EXTR_OVERWRITE);
      /** @noinspection PhpIncludeInspection */
      require $path;

      return ob_get_clean();
    }


    public function assetsManager() : AssetsManagerInterface
    {
      return $this->assetsManager;
    }
  }