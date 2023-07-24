<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Http\Controllers\AuthController;
use Session;
use Auth;
class UserProfileController extends Controller
{
    public function edit(){
        $data =Auth::user()->first();
        
        return view('user.updateProfile',compact('data'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);
        $data =Auth::user()->first();
        $data->username =  $request->username;
        $data->location =  $request->location;
        $data->company_name =  $request->company_name;
        $data->position =  $request->position;
        $data->work_number =  $request->work_number;
        $data->phone =  $request->phone;
        $data->email =  $request->email;
        $data->email_verified_at =  $request->email_verified_at;
        $data->work_address =  $request->work_address;
        $data->password =  $request->password;

        if($request->hasfile('img'))
        {
            $destination1 = 'assets/img/'.$data->img;
            if(File::exists($destination1))
            {
                File::delete($destination1);
            }
            $file1 = $request->file('img');
            $extention1 = $file1->getClientOriginalExtension();
            $filename1 = time().'.'.$extention1;
            $file1->move('assets/img/', $filename1);
            $data->img = $filename1;
        }
       
        $data->update();
        return redirect()->route('profile.edit')
                        ->with('success','Profile updated successfully');
    }
   
}
