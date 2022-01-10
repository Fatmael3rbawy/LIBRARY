<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class userController extends Controller
{
    //show profile
    public function show()
    {
        return view('profile');
    }
    //edit profile
    public function edit($id)
    {
        $user = user::find($id);
        return view('editprofile', compact('user'));
    }
    //update profile
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'string|min:5',
            'email' => 'email'
        ]);

        $user = user::findorfail($id);

        $name = $user->image;
        if ($request->hasFile('img')) {
            if ($name !== null) {
                unlink(public_path('users_images') . $name);
            }
            $image = $request->img;
            $ext = $image->getClientOriginalExtension();
            $name = "user" . uniqid() . ".$ext";
            $image->move(public_path('users_images'), $name);
        }

        $user->update([

            'name' => $request->name,
            'email' => $request->email,
            'image' => $name
        ]);
        $msg = 'User updated successfully!';
        return redirect(route('user.profile'), ['msg' => $msg]);
    }

    //delete profile
    public function destroy($id)
    {
        $user = user::findorfail($id);
        // check if the user has image 
        if ($user->image !== null) {
            //to delete the user image from user folder
            unlink(public_path('users_images' . $user->image));
        }

        $user->delete();
        return redirect(route('home'));
    }
}
