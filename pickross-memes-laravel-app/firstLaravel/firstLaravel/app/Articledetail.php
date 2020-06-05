<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Articledetail extends Model {

	protected $table = 'article_details';
	protected $fillable = ['crefid', 'artext', 'attachments'];
	
	public function acontent()
    {
        return $this->belongsTo('App\Content', 'crefid', 'id' );
    }
	
	

}
