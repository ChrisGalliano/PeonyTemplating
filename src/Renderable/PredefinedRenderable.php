<?php
  declare(strict_types=1);

  namespace Peony\Renderable;

  use Peony\Engine\EngineInterface;

  class PredefinedRenderable implements RenderableInterface
  {
    private string $path;

    private array $data;


    /**
     * @param mixed[] $data
     */
    public function __construct(string $path, array $data)
    {
      $this->path = $path;
      $this->data = $data;
    }


    public function render(EngineInterface $engine) : string
    {
      return $engine->render($this->path, $this->data);
    }
  }