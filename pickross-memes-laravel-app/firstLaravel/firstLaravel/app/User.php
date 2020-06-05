<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**SC01GE20
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'email', 'password','avatar','provider','provider_id','loyaltypoints','mplaypoints'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
	
		    public function content()
    {
        return $this->hasMany('App\Content', 'userid', 'id');
    }
	
		    public function action()
    {
        return $this->hasMany('App\Useraction', 'userid', 'id' );
    }
	
	
		    public function tags()
    {
        return $this->hasMany('App\Tag', 'userid', 'id' );
    }
	
	
	
	public function isAnAdmin()
	
	{
		if ($this->usertype == 0)
		{
			return true;
		}
	}
	
            public function notifications()
   {
      return $this->hasManyThrough('App\Useraction', 'App\Content',  'userid', 'crefid');
   }
        
/* 	public function setPasswordAttribute($password)
	{
	 $this->attributes['password'] = mcrypt($password);
	} */
}
