<?php 


class Project extends Eloquent {
    
    protected $fillable = array('name', 'baseurl');

    public function pages()
    {
        return $this->hasMany('Page');
    }


}