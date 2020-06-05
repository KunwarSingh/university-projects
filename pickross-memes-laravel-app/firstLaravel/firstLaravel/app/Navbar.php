<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model {

	protected $table = 'navbar';
	protected $fillable = [ 'section'];
	
	 public function more()
    {
        return $this->hasMany('App\Navbar_More_Sections', 'morerefid', 'id' );
    }
	
	

}
