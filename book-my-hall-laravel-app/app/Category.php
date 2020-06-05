<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	
	protected $table = 'categories';
	
	
	protected $fillable = ['categoryName', 'urlname', 'userid', 'metakeyword', 'metatitle','metadesc','hits'];
	
	
	
	
		public function user()
    {
        return $this->belongsTo('App\User', 'userid', 'id' );
    }
	
    	public function hall()
    {
        return $this->belongsToMany('App\Hall' )->withTimestamps();
    }
    
    
                   /*   public function getHallListAttribute(){
                     
                          return $this->hall()->lists('id');
                          
                      } */
}
