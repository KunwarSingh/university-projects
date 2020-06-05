<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	protected $table = 'tags';
	
	protected $fillable = ['tagname', 'urlname', 'metakeyword', 'metatitle', 'metadesc', 'taghits', 'userid','navbarMainOrder'];
	
	
		public function user()
    {
        return $this->belongsTo('App\User', 'userid', 'id' );
    }

	
			public function content()
    {
        return $this->belongsToMany('App\Content' )->withTimestamps();
    }
    
    
                      public function getContentListAttribute(){
                     
                          return $this->content()->lists('id');
                          
                      }
    
}
