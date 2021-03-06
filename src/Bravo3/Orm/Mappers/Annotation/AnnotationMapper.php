<?php
namespace Bravo3\Orm\Mappers\Annotation;

use Bravo3\Orm\Mappers\AbstractMapper;
use Bravo3\Orm\Mappers\Metadata\Entity;
use Bravo3\Orm\Services\Io\Reader;
use Doctrine\Common\Annotations\AnnotationRegistry;

/**
 * Maps metadata stored in the form of annotations on class properties
 */
class AnnotationMapper extends AbstractMapper
{
    /**
     * @var Entity[]
     */
    protected $metadata_cache = [];

    /**
     * @param array $paths
     */
    public function __construct($paths = [])
    {
        if (!$paths) {
            $paths = [
                ['Bravo3\Orm\Annotations', __DIR__.'/../../../../'],
                ['Symfony', __DIR__.'/../../../../../../../symfony/symfony/src/'],
            ];
        }

        foreach ($paths as $path) {
            AnnotationRegistry::registerAutoloadNamespace($path[0], $path[1]);
        }
    }

    /**
     * Adds a path to the annotation namespace autoloader
     *
     * @param string $namespace Base namespace (eg "Foo\Bar")
     * @param string $path      Path to PSR-0 root folder (eg __DIR__."/../src/")
     * @return $this
     */
    public function addAnnotationPath($namespace, $path)
    {
        AnnotationRegistry::registerAutoloadNamespace($namespace, $path);
        return $this;
    }

    /**
     * Get the metadata for an entity, including column information
     *
     * @param string|object $entity Entity or class name of the entity
     * @return Entity
     */
    public function getEntityMetadata($entity)
    {
        $class_name = Reader::getEntityClassName($entity);

        if (!isset($this->metadata_cache[$class_name])) {
            $parser = new AnnotationMetadataParser($class_name);

            $this->metadata_cache[$class_name] = $parser->getEntityMetadata();
        }

        return $this->metadata_cache[$class_name];
    }
}
