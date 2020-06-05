<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Navbar_More_Sections extends Model {

	protected $table = 'navbar_more_sections';
	protected $fillable = ['morerefid', 'section'];
	
    public function navbar()
    {
        return $this->belongsTo('App\Navbar', 'morerefid', 'id' );
    }
	
	

}
