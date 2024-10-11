<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Helpers;
use session;
use App\Models\User;
use App\Models\UserCode;
use App\Mail\SendCodeMail;
use App\Mail\YekhbunMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ResetUserPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
 use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Validator;
use App\Traits\UploadMedia;

class AuthController extends Controller
{
  use UploadMedia;

// Import Str for token generation
  
public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        // Generate a random token
        $token = bin2hex(random_bytes(40)); // 80 characters long token

        // Save the token in the user model
        $user->token = $token;
        $user->save();

        // Return the token
        return response()->json([
            'message' => 'Login successfully',
            'token' => $token,
        ]);
    } else {
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}

public function deleteUserByEmail(Request $request)
{
    // Validate the incoming request
    $validatedData = $request->validate([
        'email' => 'required|email|exists:users,email',
    ]);

    // Find the user by email
    $user = User::where('email', $validatedData['email'])->first();

    if (!$user) {
        return response()->json(['success' => false, 'message' => 'User not found.'], 404);
    }

    // Delete the user
    $user->delete();

    return response()->json(['success' => true, 'message' => 'User deleted successfully.'], 200);
}


public function signup(Request $request)
{
    try {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'fname' => 'required|max:100',
            'lname' => 'required|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'phone' => 'required|min:11',
            'username' => 'required|unique:users,username|max:100',
            'productname' => 'required|max:255', // New field validation
            'device_type' => 'required|max:255', // New field validation
            'mobilename' => 'required|max:255',  // New field validation
            'serialnumber' => 'required|max:255', // New field validation
            'IMEI1' => 'required|digits:15',    // New field validation for 15-digit IMEI
            'IMEI2' => 'nullable|digits:15',    // Optional second IMEI with 15 digits
        ]);

        // Create new user
        $user = User::create([
            'name' => $request['fname'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'status' => 1,
            'is_admin_user' => 0,
            'level' => 0,
            'is_verified' => 0, // Not verified yet
            'is_superadmin' => 0,
            'last_name' => $request['lname'],
            'language' => $request['language'],
            'gender' => $request['gender'],
            'origin' => $request['origin'],
            'location' => $request['location'],
            'marital_status' => $request['marital_status'],
            'dob' => $request['dob'],
            'province' => $request['province'],
            'device_type' => $request['device_type'],
            'city' => $request['city'],
            'phone' => $request['phone'],
            'user_type' => 'users',
            'productname' => $request['productname'],   // Saving new field
            'mobilename' => $request['mobilename'],     // Saving new field
            'serialnumber' => $request['serialnumber'], // Saving new field
            'IMEI1' => $request['IMEI1'],               // Saving new field
            'IMEI2' => $request['IMEI2'],               // Saving optional IMEI2
        ]);

        // Save user image if provided
        if ($request->has('image')) {
            $image_path = Helpers::fileUpload($request->image, 'images/user');
            $user->image = $image_path;
            $user->save();
        }

        // Generate and store OTP if user is created
        if ($user->id) {
            $code = rand(1000, 9999);  // Generate a 4-digit OTP

            // Store the OTP in the database
            UserCode::updateOrCreate(
                ['user_id' => $user->id],
                ['code' => $code]
            );

            // Send OTP via email
            try {
                $details = [
                    'title' => 'Mail from Yekbun.org',
                    'code' => $code,
                    'username' => $request->username,
                ];

                Mail::to($request['email'])->send(new SendCodeMail($details));

                return response()->json([
                    'success' => true, 
                    "message" => "Verification Code sent to your email", 
                    'user' => $user->id
                ], 200);
            } catch (\Exception $e) {
                info("Error: " . $e->getMessage());
                return response()->json(['success' => false, 'message' => $e->getMessage()], 505);
            }
        }
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'errors' => $e->getMessage(),
        ], 422);
    }
}

public function verifyOTP(Request $request)
{
    // Validate the incoming request
    $validatedData = $request->validate([
        'user_id' => 'required|string|exists:user_codes,user_id', // Check in user_codes table
        'code' => 'required|digits:4', // Rename to 'code' as 'otp' in your previous request seems incorrect
    ]);

    // Retrieve the user's OTP from the UserCode table
    $userCode = UserCode::where('user_id', $request->user_id)->first();

    // Check if the OTP exists for the user
    if (!$userCode) {
        return response()->json(['success' => false, 'message' => 'No OTP found for this user.'], 404);
    }

    // Compare the stored OTP with the one provided
    if ($userCode->code == $request->code) {
        // OTP matched, mark the user as verified
        $user = User::find($request->user_id);
        $user->is_verified = 1; // Mark user as verified
        $user->save();

        return response()->json(['success' => true, 'message' => 'OTP verified successfully.'], 200);
    } else {
        return response()->json(['success' => false, 'message' => 'Invalid OTP.'], 400);
    }
}




    public function logout(Request $request)
    {
        // Revoke the current user's token
        $request->user()->currentAccessToken()->delete();

        // Return a response indicating success
        return response()->json(['message' => 'Logged out successfully'], 200);
    }

  public function forgot_password(Request $request)
  {

    $request->validate([
      'email' => 'required|email',
    ]);

    $user = User::where('email', '=', $request->email)->first();
    if (!$user) {
      return response()->json(['success' => false, 'message' => 'No user found with the email.']);
    }

    // Generate Random Code

    $code = rand(1000, 9999);
    $token  = Str::random(20);
    ResetUserPassword::updateorCreate(['code' => $code, 'user_id' => $user->id, 'token' => $token, 'email' => $user->email]);
    try {
      $details = [
        'title' => 'Mail from Yekbun.org',
        'code' => $code,
        'username' => $user->username
      ];
      Mail::to($user->email)->send(new SendCodeMail($details));
      return response()->json(['success' => true, 'message' => 'A verification email has been sent to ' . $user->email . '!', 'data' => ['user_id' => $user->id, 'email' => $user->email, 'token' => $token]], 200);
    } catch (\Exception $e) {

      return $e->getMessage();
    }

  }

  public function resetpassword(Request $request)
  {
    $user  = ResetUserPassword::where('user_id', $request->user_id)->first();
    if ($user->password_token != $request->token)
      return response()->json(['success' => false, 'message' => 'Something went wrong']);

    $user = User::find($request->user_id);
    if ($user == '')
      return response()->json(['success' => false, 'message' => 'User Not found.']);

    $user->password = bcrypt($request->password);
    $user->save();

    ResetUserPassword::where('user_id', $request->user_id)->delete();

    return response()->json(['success' => true, 'message' => 'Your password has been changed.']);
  }

  public function reset(Request $request)
  {
    $request->validate([
      'code' => 'required',
    ]);

    $user = ResetUserPassword::where('user_id', $request->user_id)->first();
    if ($user !== "") {
      if ($request->token != $user->token)
        return response()->json(['success' => false, 'message' => 'Something went wrong.']);

      if ($user->code == $request->code) {
        $password_token = Str::random(50);
        $user->password_token = $password_token;
        $user->save();
        return response()->json(['success' => true, 'data' => ['token' => $password_token, 'user_id' => $user->user_id]]);
      } else {
        return response()->json(['success' => false, 'message' => 'OTP code is incorrect.']);
      }
    } else {
      return response()->json(['success' => false, 'message' => 'User not found.']);
    }
  }

  public function reset_resend(Request $request)
  {
    $user = ResetUserPassword::where('user_id', $request->user_id)->first();
    $code = rand(1000, 9999);

    try {

      $details = [
        'title' => 'Mail from Yekbun.com',
        'code' => $code,
        'username' => $user->username
      ];

      Mail::to($user->email)->send(new SendCodeMail($details));

      $user->code = $code;
      $user->save();

      return response()->json(['success' => true, "message" => "Email successfully resent."]);
    } catch (\Exception $e) {
      info("Error: " . $e->getMessage());
    }
  }
}
