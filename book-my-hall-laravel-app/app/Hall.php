<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model {
	
	protected $table = 'halls';
	
	
	protected $fillable = ['name', 'member_id', 'description', 'street', 'suburb','city','state','country','pincode','website','primary_email','alternate_email','primary_contact','alternate_contact','n_reviews', 'n_likes', 'rating', 'subscription','avatar','cover','banner','platinum_cover', 'gold_cover','silver_cover'];
	
	
	
	
	    public function member()
    {
        return $this->belongsTo('App\Member', 'member_id', 'id' );
    }
	
        public function photos()
    {
        return $this->hasMany('App\Photo', 'hall_id', 'id' );
    }
	
	
	    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
    
        public function getCategoryListAttribute()
	{              
        return $this->categories()->lists('id');
    }
}
