<?php
  declare(strict_types=1);

  namespace Peony\Renderable;

  use Peony\Engine\EngineInterface;

  interface RenderableInterface
  {
    public function render(EngineInterface $engine) : string;
  }