<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Memedetail extends Model {

	protected $table = 'meme_details';
	protected $fillable = ['crefid', 'filelocation'];
	
	public function mcontent()
    {
        return $this->belongsTo('App\Content', 'crefid', 'id' );
    }
	
	

}
