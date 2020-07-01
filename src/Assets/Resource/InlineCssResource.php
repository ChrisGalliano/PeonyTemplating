<?php
  declare(strict_types=1);

  namespace Peony\Assets\Resource;

  use Peony\Assets\Resource\Path\ResourcePathInterface;

  final class InlineCssResource implements ResourceInterface
  {
    private ResourcePathInterface $path;


    public function __construct(ResourcePathInterface $path)
    {
      $this->path = $path;
    }


    public function render() : string
    {
      return '<style>' . file_get_contents($this->path->get()) . '</style>';
    }
  }