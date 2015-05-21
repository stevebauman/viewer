<?php

namespace Stevebauman\Viewer;

/**
 * Class AbstractViewer
 */
abstract class AbstractViewer
{
    /**
     * The viewers entity to retrieve information from.
     *
     * @var mixed
     */
    protected $entity;

    /**
     * Constructor.
     *
     * @param $entity
     */
    function __construct($entity)
    {
        $this->entity = $entity;
    }

    /**
     * Allow for property-style retrieval.
     *
     * @param int|string $property
     *
     * @return mixed
     */
    public function __get($property)
    {
        if (method_exists($this, $property))
        {
            return $this->{$property}();
        }

        return $this->entity->{$property};
    }
}
