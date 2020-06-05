<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Faceoffdetail extends Model {

	protected $table = 'faceoff_details';
	
	protected $fillable = ['crefid', 'option', 'optiontype', 'votes'];
	
		public function fcontent()
    {
        return $this->belongsTo('App\Content', 'crefid', 'id' );
    }
	

}
