<?php
  declare(strict_types=1);

  namespace Peony\Assets\Manager;

  use Peony\Assets\Manager\Exceptions\UndefinedSectionException;
  use Peony\Assets\Resource\ResourceInterface;

  final class AssetsManager implements AssetsManagerInterface
  {
    /** @var ResourceInterface[][] */
    private array $sections = [];


    public function add(ResourceInterface $resource, string $section) : AssetsManagerInterface
    {
      $this->sections[$section][] = $resource;

      return $this;
    }


    /**
     * @throws UndefinedSectionException
     */
    public function render(string $section = null) : void
    {
      $resources = [];
      if ($section !== null) {
        if (!array_key_exists($section, $this->sections)) {
          throw new UndefinedSectionException($section);
        }
        $resources = $this->sections[$section];
        unset($this->sections[$section]);
      } else {
        foreach ($this->sections as $sectionResources) {
          foreach ($sectionResources as $sectionResource) {
            $resources[] = $sectionResource;
          }
        }
        $this->sections = [];
      }

      $renderedResources = [];
      foreach ($resources as $resource) {
        $rendered = $resource->render();
        $resourceHash = md5($rendered);
        if (!in_array($resourceHash, $renderedResources, true)) {
          $renderedResources[] = $resourceHash;
          print $rendered;
        }
      }
    }
  }
