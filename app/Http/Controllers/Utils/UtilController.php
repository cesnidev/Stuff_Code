<?php
namespace App\Http\Controllers\Utils;
use App\Http\Controllers\Controller;
use Illuminate\Filesystem\Filesystem;

use Input;
use Validator;
use Redirect;
use Request;
use Session;
use Response;
class UtilController extends Controller
{

	public function upload(){

  $file = Input::file('file');
$destinationPath = 'uploads';
// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
//$filename = str_random(12);
$filename = $file->getClientOriginalName();
//$filename = $file->getClientOriginalName();
//$extension =$file->getClientOriginalExtension(); 
$upload_success = Input::file('file')->move($destinationPath, $filename);

if( $upload_success ) {
   return Response::json('success', 200);
} else {
   return Response::json('error', 400);
}
}

public function test()
{
  if(Request::ajax()) {
      $data = Input::all();
      //print_r($data);die;
    }
    \File::delete('uploads/'.$data['filename']);
  return "borrado ".$data['filename'];
}

public function delete(){

  if(Request::ajax()) {
      $data = Input::all();
      print_r($data);die;
    }
    \File::delete('uploads/'.$data['filename']);
  return "borrado Token: ".$data['filename'];
}
public function exist(){

  if(Request::ajax()) {
      $data = Input::all();
      //print_r($data);die;
    }
    \File::delete('uploads/'.$data['filename']);
  return "borrado Token: ".$data['filename'];
}


}
