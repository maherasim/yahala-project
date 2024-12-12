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

public function verifyDevice(Request $request)
{
    $request->validate([
        'email' => 'required',
    ]);
    $user = User::where('email', $request->email)->first();
    if (!$user) {
        return response()->json(['message' => 'User not Found!'], 404);
    }
    if ($user->id) {
        $code = rand(1000, 9999);
        UserCode::updateOrCreate(
            ['user_id' => $user->id],
            ['code' => $code]
        );

        try {
            $details = [
                'title' => 'Mail from Yekbun.org',
                'code' => $code,
                'username' => $user->username ?? 'User',
            ];
            Mail::to($request['email'])->send(new SendCodeMail($details));
            return response()->json(['success' => true, "message" => "Verfication Code sent to your email", 'user' => $user->id, 'code' => $code], 200);
        } catch (\Exception $e) {
            info("Error: " . $e->getMessage());
            return response()->json(['success' => false, 'message' => $e->getMessage()], 505);
        }
    }
}

public function checkUserExists(Request $request)
{
    // Validate the incoming request
    $validator = Validator::make($request->all(), [
        'username' => 'required|string',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    // Check if user exists by username
    $user = User::where('username', $request->username)->first();

    if ($user) {
        return response()->json([
            'message' => 'User already exists',
            'user_exists' => true,
        ]);
    } else {
        return response()->json([
            'message' => 'User does not exist',
            'user_exists' => false,
        ]);
    }
}

public function checkEmailExists(Request $request)
{
    // Validate the incoming request
    $validator = Validator::make($request->all(), [
        'email' => 'required|string',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    // Check if user exists by email
    $email = User::where('email', $request->email)->first();

    if ($email) {
        return response()->json([
            'message' => 'email already exists',
            'email_exists' => true,
        ]);
    } else {
        return response()->json([
            'message' => 'email does not exist',
            'email_exists' => false,
        ]);
    }
}
public function checkPhoneExists(Request $request)
{
    // Validate the incoming request
    $validator = Validator::make($request->all(), [
        'phone' => 'required|integer',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    // Check if phone exists by phone
    $phone = User::where('phone', $request->phone)->first();

    if ($phone) {
        return response()->json([
            'message' => 'phone already exists',
            'phone_exists' => true,
        ]);
    } else {
        return response()->json([
            'message' => 'phone does not exist',
            'phone_exists' => false,
        ]);
    }
}






public function registerDevice(Request $request)
{
    // Validate request fields
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'device_serial' => 'required',
        'device_model' => 'required',
        'device_type' => 'required',
        'otp' => 'required|integer',
    ]);

    // If validation fails, return errors in JSON response
    if ($validator->fails()) {
        return response()->json([
            'status' => false,
            'errors' => $validator->errors(),
        ], 422);
    }

    $user = User::where('email', $request->email)->first();

    // Check if user exists
    if (!$user) {
        return response()->json(['status' => false, 'message' => 'User not found!'], 404);
    }

    $code = UserCode::where('user_id', $user->id)->first();

    // Check if code exists
    if (!$code) {
        return response()->json(['status' => false, 'message' => 'Code not found!'], 404);
    }

    // Validate OTP
    if ((int)$code->code !== (int)$request->otp) {
        return response()->json(['status' => false, 'message' => 'Invalid OTP!'], 403);
    }

    // Update user device details
    $user->device_serial = $request->device_serial;
    $user->device_type = $request->device_type;
    $user->device_model = $request->device_model;

    // Attempt to save the user
    if ($user->save()) {
        return response()->json(['status' => true, 'message' => 'New device registered successfully.'], 200);
    } else {
        return response()->json(['status' => false, 'message' => 'Failed to register device.'], 500);
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
            'nationality' => 'integer|max:100',
            'language' => 'integer|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'phone' => 'required|min:11',
            'username' => 'required|unique:users,username|max:100',
            'productname' => 'required|max:255',
            'device_type' => 'nullable|max:255',
            'mobilename' => 'nullable|max:255',
            'serialnumber' => 'nullable|max:255',
            'location.lat' => 'required|numeric|between:-90,90', // Latitude validation
            'location.long' => 'required|numeric|between:-180,180', // Longitude validation
        ], [
            'fname.required' => 'First name is required.',
            'lname.required' => 'Last name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Email must be a valid email address.',
            'email.unique' => 'Email has already been taken.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 6 characters.',
            'phone.required' => 'Phone number is required.',
            'phone.min' => 'Phone number must be at least 11 digits.',
            'username.required' => 'Username is required.',
            'username.unique' => 'Username has already been taken.',
            'productname.required' => 'Product name is required.',
            'location.lat.required' => 'Latitude is required.',
            'location.lat.numeric' => 'Latitude must be a number.',
            'location.lat.between' => 'Latitude must be between -90 and 90.',
            'location.long.required' => 'Longitude is required.',
            'location.long.numeric' => 'Longitude must be a number.',
            'location.long.between' => 'Longitude must be between -180 and 180.',
        ]);

        // Extract location data
        $location = [
            'lat' => $request->input('location.lat'),
            'long' => $request->input('location.long'),
        ];

        // Create new user
        $user = User::create([
            'name' => $request['fname'],
            'nationality' => $request['nationality'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'status' => 1,
            'is_admin_user' => 0,
            'level' => 0,
            'is_verified' => 0,
            'is_superadmin' => 0,
            'last_name' => $request['lname'],
            'language' => $request['language'],
            'gender' => $request['gender'],
            'location' => $location,  // Store the location with lat and long
            'marital_status' => $request['marital_status'],
            'dob' => $request['dob'],
            'province' => $request['province'],
            'device_type' => $request['device_type'],
            'city' => $request['city'],
            'phone' => $request['phone'],
            'user_type' => 'users',
            'productname' => $request['productname'],
            'mobilename' => $request['mobilename'],
            'serialnumber' => $request['serialnumber'],
        ]);

        // Save user image if provided
        if ($request->has('image')) {
            $image_path = Helpers::fileUpload($request->image, 'images/user');
            $user->image = $image_path;
            $user->save();
        }

        // Generate and store OTP if user is created
        if ($user->id) {
            $code = rand(1000, 9999); // Generate a 4-digit OTP

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
    } catch (\Illuminate\Validation\ValidationException $e) {
        // Catch validation errors and return detailed messages
        return response()->json([
            'success' => false,
            'errors' => $e->errors(), // Returns all validation error messages
        ], 422);
    } catch (\Exception $e) {
        // Catch any other exceptions and return a complete message
        return response()->json([
            'success' => false,
            'message' => 'Something went wrong: ' . $e->getMessage(),
        ], 500);
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
    try {
        // Validate request data
        $request->validate([
            'user_id' => 'required',
            'token' => 'required',
            'password' => 'required|min:8', // Ensure the password meets minimum length requirements
        ]);

        // Find reset records for the user
        $resetUsers = ResetUserPassword::where('user_id', $request->user_id)
            ->orderBy('created_at', 'desc') // Get the most recent record
            ->get();

        // No reset records found
        if ($resetUsers->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'User not found in reset records.'], 404);
        }

        // Find the matching record with the provided token
        $resetUser = $resetUsers->firstWhere('password_token', $request->token);

        if ($resetUser === null) {
            return response()->json(['success' => false, 'message' => 'Invalid token.'], 403);
        }

        // Find the actual user to update the password
        $user = User::find($request->user_id);
        if ($user === null) {
            return response()->json(['success' => false, 'message' => 'User not found.'], 404);
        }

        // Update the user's password
        $user->password = bcrypt($request->password);
        $user->save();

        // Delete all reset records for the user to avoid duplicates
        ResetUserPassword::where('user_id', $request->user_id)->delete();

        return response()->json(['success' => true, 'message' => 'Your password has been changed.']);

    } catch (\Illuminate\Validation\ValidationException $e) {
        // Handle validation exceptions
        return response()->json([
            'success' => false,
            'message' => 'Validation error.',
            'errors' => $e->errors(),
        ], 422);

    } catch (\Exception $e) {
        // Handle any other exceptions
        return response()->json([
            'success' => false,
            'message' => 'An error occurred.',
            'error' => $e->getMessage(),
        ], 500);
    }
}

  public function reset(Request $request)
  {
      try {
          // Validate request data
          $data = $request->validate([
              'code' => 'required|integer', // Ensure code is an integer
              'user_id' => 'required',
              'token' => 'required',
          ]);
  
          // Find the user entry with both user_id and token
          $user = ResetUserPassword::where('user_id', $request->user_id)
              ->where('token', $request->token)
              ->first();
  
          // Debugging output
          // dd($data, $user);
  
          // User not found or token mismatch
          if ($user === null) {
              return response()->json(['success' => false, 'message' => 'Invalid token or user not found.'], 403);
          }
  
          // Check if the OTP code is correct
          if ((int)$user->code !== (int)$request->code) {
              return response()->json(['success' => false, 'message' => 'OTP code is incorrect.'], 422);
          }
  
          // Generate a new password token and save it
          $password_token = Str::random(50);
          $user->password_token = $password_token;
          $user->save();
  
          // Successful response
          return response()->json(['success' => true, 'data' => ['token' => $password_token, 'user_id' => $user->user_id]]);
          
      } catch (\Illuminate\Validation\ValidationException $e) {
          // Handle validation exceptions
          return response()->json([
              'success' => false,
              'message' => 'Validation error.',
              'errors' => $e->errors(), // Return validation errors
          ], 422);
          
      } catch (\Exception $e) {
          // Handle any other exceptions
          return response()->json([
              'success' => false,
              'message' => 'An error occurred.',
              'error' => $e->getMessage(), // Provide detailed error message
          ], 500);
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
