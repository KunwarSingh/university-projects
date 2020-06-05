<?php namespace App\Http\Controllers;
use App\User;
use App\Member;
use App\Hall;
use App\ModelFactory;
use Mail;
//use Illuminate\Http\Request;
use Request;
//use Intervention\Image\Facades\Image;
use Auth;
//use Session;
//use Validator;
//use Input;
use View;
use Redirect;
use Carbon\Carbon;

class MainController extends Controller {
           
             /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
   
   public function addBusiness(\Illuminate\Http\Request $request){
	    $modelFactory = new ModelFactory();
		$member = $modelFactory->getModel("Member");
	   
	   // $member = new Member;
		$member->first_name=$request->first_name;
		$member->email=$request->email;
		$member->contact=$request->contact;
		$member->hash_key=str_random(60);
		$member->password=str_random(8);
		return $member;
	//	$member->save();
		
		$hall = new Hall;
		$hall->name=$request->hall_name;
		$hall->city=$request->hall_city;
		$hall->street=$request->hall_address;
		$member->halls()->save($hall);
		
	//	 Auth::user()->content()->save($content);
          
	//	 $content->meme()->save($meme);
		 
		if(Mail::send('emails.welcome', ['member' => $member], function ($m) use ($member) {
            $m->to($member->email, $member->first_name)->subject('Welcome');
        }))
		
		return "Mail Sent";
		
		else
			return "fail";
   }
   
    public function verify($id,\Illuminate\Http\Request $request){
		$user_status="inactive";
		$key=explode('-',$id);
		$member=Member::find($key[0]);
		
		if($member->hash_key==$key[1])
		{   $member->status=1;
	         $member->save();
			 $user_status="active";}
		return view('emails.verify', compact('user_status'));
		
	}
	
	 public function resend(\Illuminate\Http\Request $request){
		
		$member=Member::where('email',$request->email)->get();
		$member[0]->hash_key=str_random(60);
		$member[0]->save();
		$user=$member[0];
			Mail::send('emails.welcome', ['member' => $user], function ($m) use ($member) {
            $m->to($member[0]->email, $member[0]->first_name)->subject('Welcome');
        });
		//return view('emails.verify', compact('user_status');
		
	}
	public function memberLogin(\Illuminate\Http\Request $request){
		
		$member=Member::where('email',$request->email)->where('password',$request->password)->get();
		//return $member[0]->id;
		if(!$member->isEmpty())
		{   //$halls=Hall::where('member_id',$member[0]->id)
	        $hall=  Hall::where('member_id',$member[0]->id)->get();
			$hall=$hall[0];
			//dd($hall);
			   return Redirect( 'members/settings' )
               ->with( 'hall', $hall );
	    }
		return "Login Failed";
		
	}
	
	     public function updateHall($id , \Illuminate\Http\Request $request){
        $hall=  Hall::findOrFail($id);
        $hall->update($request->all());
        return Redirect( 'members/settings' )
        ->with( 'hall', $hall );
        
    }
	
	public function uploadImage(\Illuminate\Http\Request $request){
		  if (Request::ajax()){
		//  echo $request['file'];
		 
	/*	  
$target_path = "C:/wamp/www/BookMyPartyVenue/public/images/halls/";

//echo $_FILES['file']['name'];
$target_path = $target_path . basename( $_FILES['file']['name']); 

if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
  //  echo "The file ".  basename( $_FILES['file']['name']). 
    " has been uploaded";
} else{
   // echo "There was an error uploading the file, please try again!";
}
echo url("/images/halls/".basename( $_FILES['file']['name']));
*/


        $fileName = $_FILES["file"]["name"]; 
        $kaboom = explode(".", $fileName); 
        $ext = end($kaboom);                           
        $target_path = 'images/halls/hall_' .$request->id.'_'.$request->type.'.'.$ext; 
             
if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
  //  echo "The file ".  basename( $_FILES['file']['name']). 
    " has been uploaded";
} else{
  //  echo "There was an error uploading the file, please try again!";
}

                         Hall::where('id',$request->id)->update([$request->type=>'hall_' .$request->id.'_'.$request->type.'.'.$ext]);
                     
                         $resized_file = 'images/halls/hall_' .$request->id.'_'.$request->type.'.'.$ext; 
						 
						 if($request->type=='avatar'){						 
						 $w=250; $h=250;}
                         else if($request->type=='cover'){
		                 $w=1200; $h=400;}
                         else if($request->type=='platinum_cover'){
						 $w=600; $h=200;}
                         else if($request->type=='gold_cover'){
						 $w=150; $h=200;}
                         else if($request->type=='silver_cover'){
						 $w=150; $h=100;}
                         else if($request->type=='banner'){
						 $w=300; $h=100;}
								  
                         list($w_orig, $h_orig) = getimagesize($target_path);
                         
                       /*  $scale_ratio = $w_orig / $h_orig;
    if (($w / $h) > $scale_ratio) {
           $w = $h * $scale_ratio;
    } else {
           $h = $w / $scale_ratio;
    } */
    $img = "";
   
    $ext = strtolower($ext);
    if ($ext == "gif"){ 
      $img = imagecreatefromgif($target_path);
    } else if($ext =="png"){ 
      $img = imagecreatefrompng($target_path);
    } else { 
      $img = imagecreatefromjpeg($target_path);
    } 
    $tci = imagecreatetruecolor($w, $h);
    // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
    imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
    imagejpeg($tci, $resized_file, 80);

          echo url('/images/halls/hall_'.$request->id.'_'.$request->type.'.'.$ext); 

		  }
	}
   
}