<?php 



class Test extends Eloquent {

	public function page() 
    {
        return $this->belongsToMany('Page');
    }

}