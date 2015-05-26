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
}
