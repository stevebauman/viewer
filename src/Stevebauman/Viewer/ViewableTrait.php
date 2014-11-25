<?php

namespace Stevebauman\Viewer;

use Stevebauman\Viewer\Exceptions\ViewerException;

trait ViewableTrait {
    
    protected $viewerInstance;
    
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