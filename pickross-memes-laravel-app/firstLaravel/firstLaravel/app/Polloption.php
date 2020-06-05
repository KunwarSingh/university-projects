<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Polloption extends Model {

	protected $table = 'poll_options';
	protected $fillable = ['pollrefid', 'option', 'optiontype', 'votes'];
	
		public function polldetail()
    {
        return $this->belongsTo('App\Polldetail', 'pollrefid', 'id' );
    }

}
