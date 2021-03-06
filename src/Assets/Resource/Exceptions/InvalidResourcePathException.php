<?php
  declare(strict_types=1);

  namespace Peony\Assets\Resource\Exceptions;

  final class InvalidResourcePathException extends \Exception
  {
    public function __construct(string $path)
    {
      parent::__construct("Invalid resource path {$path}");
    }
  }