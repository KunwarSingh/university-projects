<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model {
	
	protected $table = 'master_content';
	
	
	protected $fillable = ['ctype', 'title', 'userid', 'pscore', 'nlikes', 'nshares', 'nvotes', 'ncomments', 'nviews','redflag','isfeatured', 'isvisible'];
	
	
	
	
	    public function user()
    {
        return $this->belongsTo('App\User', 'userid', 'id' );
    }
	
     public function action()
    {
        return $this->hasMany('App\Useraction', 'crefid', 'id' );
    }
	    public function faceoff()
    {
        return $this->hasMany('App\Faceoffdetail', 'crefid', 'id' );
    }
	
    
		    public function poll()
    {
        return $this->hasOne('App\Polldetail', 'crefid', 'id' );
    }
	
	  public function polloption()
    {
        return $this->hasManyThrough('App\Polloption', 'App\Polldetail', 'cref_id', 'pollrefid');
    }
	
		    public function meme()
    {
        return $this->hasOne('App\Memedetail', 'crefid', 'id' );
    }
	

		    public function article()
    {
        return $this->hasOne('App\Articledetail', 'crefid', 'id' );
    }
	
			    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    
                      public function getTagListAttribute(){
                     
                          return $this->tags()->lists('id');
                          
                      }
}
