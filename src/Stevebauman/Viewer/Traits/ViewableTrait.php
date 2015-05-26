<?php

namespace Stevebauman\Viewer\Traits;

use Stevebauman\Viewer\Exceptions\ViewerException;

trait ViewableTrait
{
    /**
     * @var \Stevebauman\Viewer\AbstractViewer
     */
    protected $viewerInstance;

    /**
     * Returns the viewer instance, or
     * creates one if it does not exist.
     *
     * @return \Stevebauman\Viewer\AbstractViewer
     *
     * @throws ViewerException
     */
    public function viewer()
    {
        if (!$this->viewer || !class_exists($this->viewer)) {

            throw new ViewerException('Please set the $viewer property to your viewer path.');

        }

        if(!$this->viewerInstance) {

            $this->viewerInstance = new $this->viewer($this);

        }

        return $this->viewerInstance;
    }
}
