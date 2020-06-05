<?php namespace App;
use ModelInterface;
use App\Hall;
use App\Category;
use App\Member;
use App\User;
class ModelFactory {
	
	public function getModel($modelType){
		if($modelType == null)
			return null;
		if(strcasecmp($modelType,"Hall"))
	         return new Hall;
		else if(strcasecmp($modelType,"User"))
			return new User;
		else if(strcasecmp($modelType,"Member"))
			return new Member;
		else if(strcasecmp($modelType,"Category"))
			return new Category;
		
		return null;
		
	}
	
	
}