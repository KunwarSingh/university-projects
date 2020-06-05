<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model {
	
	protected $table = 'members';
	
	
	protected $fillable = ['first_name', 'last_name', 'email', 'street', 'suburb','city','state','country','pincode','password','status','hash_key'];
	
	
	
	
	    public function halls()
    {
        return $this->hasMany('App\Hall', 'member_id', 'id' );
    }
	
     public function photos()
    {
        return $this->hasMany('App\Photo', 'member_id', 'id' );
    }
	
}
