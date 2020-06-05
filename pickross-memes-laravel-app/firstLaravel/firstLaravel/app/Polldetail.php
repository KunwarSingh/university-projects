<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Polldetail extends Model {

	protected $table = 'poll_details';
	protected $fillable = ['crefid', 'pollcontent', 'contenttype'];
	
	public function pcontent()
    {
        return $this->belongsTo('App\Content', 'crefid', 'id' );
    }
	
	public function polloption()
    {
        return $this->hasMany('App\Polloption', 'pollrefid', 'id' );
    }
	
	

}
