<?php 



class Page extends Eloquent {
    
    public function project() 
    {
        return $this->belongsTo('Project');
    }
    
    public function tests() 
    {
        return $this->hasMany('Test');
    }
    

}