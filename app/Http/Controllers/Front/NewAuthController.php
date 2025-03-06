<?php

namespace App\Http\Controllers\NewAuthController;

use App\Helpers\Helper;
//use App\Models\CommonModel;
use App\Models\User;
use App\Models\UserDetailsModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

use App\Models\Category;
use App\Models\Subcategory;

class NewAuthController extends Controller
{
    public function signIn(Request $req)
    {
        if ($req->ajax()) {
            $reqType = $req->type;
                $req_mobile_email = $req->phone;
                $validator = Validator::make($req->only('phone'), ['phone' => 'required|numeric|digits:10']);
            
            if ($validator->fails()) {
                return ['status' => 400, 'data' => $validator->getMessageBag()->toArray()];
            } else {
                switch ($reqType) {
                    case 'send':
                        return self::sendOTP($req_mobile_email);
                        break;

                    case 'verify':
                        $url = isset($req->url) && $req->url != '' ? $req->url : '';
                        //$astro_id = isset($req->astroId) && $req->astroId != '' ? $req->astroId : '';
                        return self::verifyOTP($req_mobile_email, $req->otp, $url);
                        break;

                    default:
                        return ['status' => 500, 'msg' => 'Sorry!, Something went wrong.'];
                        break;
                }
            }
        }
        
        $categories = Category::orderBy('name','asc')->get();
        $subcategories = Subcategory::orderBy('id','asc')->get();
        return view('front.post_requirement',compact('categories', 'subcategories'));
       // return view('auth.login-new');
    }

    public function sendOTP($EmailOrMobile)
    {
        Log::info('NewAuthController::sendOTP() Starts');
       // $userCountry = session()->get('currency');
        try {
            //$emailPhone = ($userCountry == "IN") ? "mobile" : "email";
            $userData = User::where([$emailPhone => $EmailOrMobile, 'user_type' => 'USER'])->first();
            $otpNo = rand(1000, 9999);
            $txt = 'Hello, ' . $otpNo . ' is your One Time Password for login at dhwaniastro.com';
            $showOtp = (Helper::getHost() != 'dhwaniastro.com') ? base64_encode($otpNo) : '';

            if ($userData) {

                $userData->otp = $otpNo;
                $userData->user_type = "Old User";
                if ($userData->save()) {
                    // if ($userCountry == "IN") {
                    //     CommonModel::gupshupSMS($EmailOrMobile, $txt);
                    // } else {
                    //     CommonModel::getOtpEmail($EmailOrMobile, $otpNo);
                    // }
                    return ['status' => 201, 'data' => ['otp' => $showOtp,'userType' => 'Old User', 'mobile' => $EmailOrMobile]];
                } else {
                    return ['status' => 500, 'data' => 'Sorry!, Something went wrong.'];
                }
            } else {
                //echo "hello"; die;
                self::registerUser($EmailOrMobile, $otpNo);
                return ['status' => 201, 'data' => ['otp' => $showOtp,'userType' => 'New User', 'mobile' => $EmailOrMobile]];
                die;
                // if ($userCountry == "IN") {
                //     CommonModel::gupshupSMS($EmailOrMobile, $txt);
                // } else {
                //     CommonModel::getOtpEmail($EmailOrMobile, $otpNo);
                // }
                return ['status' => 201, 'data' => ['otp' => $showOtp, 'mobile' => $EmailOrMobile]];
            }
        } catch (\Throwable $th) {
            Log::info('NewAuthController::sendOTP() has Some errors');
            Log::critical($th);
            return ['status' => 500, 'msg' => 'Sorry!, Something went wrong.'];
        }

        Log::info('NewAuthController::sendOTP() Ends');
    }

    public function verifyOTP($mobileNo, $otp, $url)
    {
        Log::info('NewAuthController::verifyOTP() Starts');
       // $userCountry = session()->get('currency');
        try {
            $emailPhone = ($userCountry == "IN") ? "mobile" : "email";
            if (Auth::attempt([$emailPhone => $mobileNo, 'otp' => $otp, 'password' => '987654321'])) {
           $userData = User::where([$emailPhone => $mobileNo, 'user_type' => 'USER'])->first();
                $userStatus=$userData->user_type;
                if ($url != '') {
                        $userId = (auth()->user()) ? auth()->user()->id : '';
                        if ($userId != '') {
                                $redirect_url = route($url, ['astroId' => $astroId]);
                           
                        } else {
                            $redirect_url = route('home');
                        }
                  
                } else {
                    $redirect_url = route('home');
                }

                return ['status' => 201, 'data' => ['msg' => 'Logged in successfully', 'url' => $redirect_url]];
              // return ['status' => 201, 'data' => ['msg' => 'Logged in successfully','orderType'=>$userStatus, 'url' => $redirect_url]];
            } else {
                return ['status' => 400, 'data' => ['phone' => 'Wrong OTP Entered']];
            }
        } catch (\Throwable $th) {
            Log::info('NewAuthController::verifyOTP() has Some errors');
            Log::critical($th);
            return ['status' => 500, 'msg' => 'Sorry!, Something went wrong.'];
        }

        Log::info('NewAuthController::verifyOTP() Ends');
    }

    public function registerUser($mobileNo, $otp)
    {
        // $userData          = User::where('mobile', $mobileNo)->get();
       
        // if($userData->count()==0){
        $userCountry = "IN";
        Log::info('NewAuthController::registerUser() Starts');
        try {
            $obj = new User();
            $obj->name = 'Guest User';
            $obj->email = ($userCountry == "IN") ? 'new_' . time() . '@xyz.com' : $mobileNo;
            $obj->password = Hash::make('987654321');
            if ($userCountry == "IN") {
                $obj->mobile = $mobileNo;
            }
            $obj->country_code = 91;
            $obj->otp = $otp;
            $obj->user_type = 'USER';
            $obj->status = 1;
            $obj->image = 'default/default-user-image.png';

            if ($obj->save()) {

                 $userDetail = new UserDetailsModel();
                $userDetail->user_id = $obj->id;
                if ($userCountry == "IN") {
                    $userDetail->mobile2 = $mobileNo;
                }
                $userDetail->profile_image = 'default/astro-expert-banner.jpg';
                $userDetail->image_path = '/public/cms-images/user-images/';
                $userDetail->save();
            } else {
                Log::info(json_encode($obj));
                return ['status' => 500, 'msg' => 'Sorry!, Something went wrong.'];
            }
        } catch (\Throwable $th) {
            Log::info('NewAuthController::registerUser() has Some errors');
            Log::critical($th);
            return ['status' => 500, 'msg' => 'Sorry!, Something went wrong.'];
        }
        Log::info('NewAuthController::registerUser() Ends');
    // } else {
        
    //     return ['status' => 500, 'msg' => 'Sorry!, User already register.'];
    // }
    }

    public function guestUser()
    {
        $otpNo = rand(1000, 9999);
        //$mobileNo=$req->mobile;
        Log::info('NewAuthController::guestUser() Starts');
        try {
            $obj = new User();
            $obj->name = 'Guest';
            $obj->email = 'new_' . time() . '@xyz.com';
            $obj->password = Hash::make('987654321');
            //$obj->mobile = $mobileNo;
            $obj->country_code = 91;
            $obj->otp = $otpNo;
            $obj->user_type = 'USER';
            $obj->status = 1;
            $obj->image = 'default/default-user-image.png';
            if ($obj->save()) {

                $userDetail = new UserDetailsModel();
                $userDetail->user_id = $obj->id;
                // $userDetail->mobile2 = $mobileNo;
                $userDetail->profile_image = 'default/astro-expert-banner.jpg';
                $userDetail->image_path = '/public/cms-images/user-images/';
                $userDetail->save();
            } else {
                Log::info(json_encode($obj));
                return ['status' => 500, 'msg' => 'Sorry!, Something went wrong.'];
            }
            // $user = User::find($obj->id);
            Auth::login($obj);
        } catch (\Throwable $th) {
            Log::info('NewAuthController::guestUser() has Some errors');
            Log::critical($th);
            return ['status' => 500, 'msg' => 'Sorry!, Something went wrong.'];
        }

        Log::info('NewAuthController::guestUser() Ends');
    }
    public function guestUserUpdate(Request $request){
       
        $user=Auth::user();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        return response()->json(['message'=>'success'], 200);

    }
    public function Logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('home'));
    }
}
