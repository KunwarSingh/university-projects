<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Useraction extends Model {

	protected $table = 'user_action';
	
	protected $fillable = ['userid', 'crefid', 'actiontype', 'actioncontent', 'creftype', 'rflag','is_seen'];
	
	
	public function actionuser()
    {
        return $this->belongsTo('App\User', 'userid', 'id' );
    }
     public function actioncontent()
    {
        return $this->belongsTo('App\Content', 'crefid', 'id' );
    }

}
