<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserProfileController extends Controller
{
    public function index(){
        $model = User::query();

        if(request()->query->has('sortBy')
            && in_array(request()->query
                ->get('sortBy'), ['firstName', 'address', 'city', 'country', 'email', 'phone', 'username'])){

            if(request()->query->has('sortDir')
                && in_array(request()->query->get('sortDir'), ['asc', 'desc'])){

                if(request()->query->has('sortDir')){
                    $model->orderBy(request()->query->get('sortBy'), request()->query->get('sortDir'));
                }else{
                    $model->orderBy(request()->query->get('sortBy'));
                }

            }else{
                redirect('/patients')->with('users', $model->paginate(16));
            }
        }
        else{
            redirect('/patients')->with('users', $model->paginate(16));
        }

        return view('pages.users')->with('users', $model->paginate(16)->withQueryString());
    }
    public function show()
    {
        return view('pages.user-profile');
    }

    public function update(Request $request)
    {
        $attributes = $request->validate([
            'username' => ['required','max:255', 'min:2'],
            'firstname' => ['max:100'],
            'lastname' => ['max:100'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth()->user()->id),],
            'address' => ['max:100'],
            'city' => ['max:100'],
            'country' => ['max:100'],
            'postal' => ['max:100'],
            'about' => ['max:255']
        ]);

        auth()->user()->update([
            'username' => $request->get('username'),
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email') ,
            'address' => $request->get('address'),
            'city' => $request->get('city'),
            'country' => $request->get('country'),
            'postal' => $request->get('postal'),
            'about' => $request->get('about')
        ]);
        return back()->with('succes', 'Profile succesfully updated');
    }
}
