<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function master($id)
    {
        $profile = Profile::find($id)->all();
        return view('website.master', compact('profile'));
    }


    public function index()
    {
        return view('website.welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = new Profile();
        $profile->user_id = auth()->user()->id;
        $profile->date_of_birth = $request->input('date_of_birth');
        $profile->course = $request->input('course');
        $profile->student_id = $request->input('student_id');
        $profile->department = $request->input('department');
        $profile->phone = $request->input('phone');
        $profile->country = $request->input('country');
        $profile->city = $request->input('city');
        $profile->address = $request->input('address');
        $profile->zip = $request->input('zip');
//        $profile->profile_photo_path = $request->input( 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048');
//

//        $profile->profile_photo_path = $request->file('profile_photo_path');
//        $file_name = time().$request->file('profile_photo_path')->getClientOriginalName();
//        $path = $request->file('profile_photo_path')->storeAs('images', $file_name, 'public');
//        $profile['profile_photo_path'] = '/storage/'.$path;

//
//        $profile = $request->all();
//        $file_name = time().$request->file('profile_photo_path')->getClientOriginalName();
//        $path = $request->file('profile_photo_path')->storeAs('images', $file_name, 'public');
//        $profile['profile_photo_path'] = '/storage/'.$path;


//        Profile::create($profile);


//        if ($request->hasFile('profile_photo_path'))
//        {
//            //$destination = 'uploads/profile' . $profile->profile_photo_path;
//
//            $file = $request->file('profile_photo_path');
//            $extension = $file->getClientOriginalExtension();
//            $filename = time() . '.' . $extension;
//            $file->move('public/uploads', $filename);
//            $profile->profile_photo_path = $filename;
//
//        }

//        $profile['profile_photo_path'] = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048';
//
//        $imageName = time().'.'.$request->image->extension();
//
//        $profile['profile_photo_path']->move('public/uploads', $imageName);

        if ($request->hasFile('profile_photo_path'))
            {
                $image_file = $request->file('profile_photo_path');
                $img_extension = $image_file->getClientOriginalExtension(); //retrieving image extension
                $img_filename = time(). '.' . $img_extension;
                $image_file->move('uploads', $img_filename);
                $profile->profile_photo_path = $img_filename;
            }

        $profile->save();

        return redirect('profile/'.auth()->user()->id)->with('success','profile created successfully');




//         $pro = Profile::create(\request()->validate([
////            'firstname'=>'required',
////            'lastname'=>'required',
//             'user_id' => auth()->user()->id,
//             'date_of_birth'=>'required',
//            'course'=>'required',
//            'student_id'=>'required',
//            'department'=>'required',
////            'email'=>'required',
//            'phone'=>'required',
//            'country'=>'required',
//            'city'=>'required',
//            'address'=>'required',
//            'zip'=>'required',
////            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
////
////            if ($request->hasFile('image'))
////            {
////                $image_file = $request->file('prod_image');
////                $img_extension = $image_file->getClientOriginalExtension(); //retrieving image extension
////                $img_filename = time(). '.' . $img_extension;
////                $image_file->move('uploads/products/', $img_filename);
////                $profile->image = $img_filename;
////            }
//
//        ]));
//
//         $pro['image'] = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048';
//
//        $imageName = time().'.'.$request->image->extension();
//
//        $request->image->move('uploads', $imageName);
//
//        //dd('User');
//        return redirect('layout.show')->with('success','profile edited successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::find($id);
        $user = User::find($id);

        //dd($profile);
        return view('website.profile.show', compact('profile','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro = Auth::user()->find($id);
        return view('website.profile.edit', compact('pro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $profil = Profile::find($id);


        $users->firstname = $request->input('firstname');
        $users->lastname = $request->input('lastname');
        $profil->user_id = auth()->user()->id;
        $profil->date_of_birth = $request->input('date_of_birth');
        $profil->course = $request->input('course');
        $profil->student_id = $request->input('student_id');
        $profil->department = $request->input('department');
        $profil->phone = $request->input('phone');
        $profil->country = $request->input('country');
        $profil->city = $request->input('city');
        $profil->address = $request->input('address');
        $profil->zip = $request->input('zip');

//        $users->firstname = $request->input('firstname');
//        $users->lastname = $request->input('lastname');
//        $user->mobile = $request->input('mobile');
//        $user->line1 = $request->input('line1');
//        $user->line2 = $request->input('line2');
//        $user->city = $request->input('city');
//        $user->county = $request->input('county');
//        $user->postcode = $request->input('postcode');

        #dump($request);
        if ($request->hasFile('profile_photo_path')) {
            $destination = 'uploads/profile' . $users->profile_photo_path;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('profile_photo_path');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/', $filename);
            $profil->profile_photo_path = $filename;

        }

//        dump($profil);
        $profil->update();
        $users->update();


        return redirect('profile/'.auth()->user()->id)
            ->with('status', 'Profile updated Successfully!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::find($id);
        $profile->delete();

        return redirect('welcome')->with('status','Profile deleted successfully');
    }
}
