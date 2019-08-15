<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\modelcrud;
use Validator;
class AuthController extends Controller
{
  private $apiToken;
  public function __construct()
  {
    // Unique Token
    $this->apiToken = uniqid(base64_encode(str_random(60)));
  }
  /**
   * Client Login
   */
  public function postLogin(Request $request)
  {
    // Validations
    $rules = [
      'email'=>'required|email',
      'password'=>'required|min:8'
    ];
    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
      // Validation failed
      return response()->json([
        'message' => $validator->messages(),
      ]);
    } else {
      // Fetch User
      $user = modelcrud::where('email',$request->email)->first();
      if($user) {
        // Verify the password
        if( password_verify($request->password, $user->password) ) {
          // Update Token
          //$postArray = ['api_token' => $this->apiToken];
         // $login = modelcrud::where('email',$request->email)->update($postArray);
          
          if($user->api_token == Null) {
            return response()->json([
              'name'         => $user->name,
              'email'        => $user->email,
              'access_token' => $this->apiToken,
            ]);
          }
            else {
                echo "sudah login";
            }
        } else {
          return response()->json([
            'message' => 'Invalid Password',
          ]);
        }
      } else {
        return response()->json([
          'message' => 'User not found',
        ]);
      }
    }
  }
  /**
   * Register
   */
  public function postRegister(Request $request)
  {
    // Validations
    $rules = [
      'name'     => 'required|min:3',
      'email'    => 'required|unique:users,email',
      'password' => 'required|min:8'
    ];
    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
      // Validation failed
      return response()->json([
        'message' => $validator->messages(),
      ]);
    } else {
      $postArray = [
        'name'      => $request->name,
        'email'     => $request->email,
        'password'  => bcrypt($request->password),
        'api_token' => $this->apiToken
      ];
      // $user = User::GetInsertId($postArray);
      $user = modelcrud::insert($postArray);
  
      if($user) {
        return response()->json([
          'name'         => $request->name,
          'email'        => $request->email,
          'access_token' => $this->apiToken,
        ]);
      } else {
        return response()->json([
          'message' => 'Registration failed, please try again.',
        ]);
      }
    }
  }
  /**
   * Logout
   */
  public function postLogout(Request $request)
  {
    $token = $request->header('Authorization');
    $user = modelcrud::where('api_token',$token)->first();
    if($user) {
      $postArray = ['api_token' => null];
      $logout = modelcrud::where('id',$user->id)->update($postArray);
      if($logout) {
        return response()->json([
          'message' => 'User Logged Out',
        ]);
      }
    } else {
      return response()->json([
        'message' => 'User not found',
      ]);
    }
  }
}