<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Validation\Rule;
use Spatie\Permission\Traits\HasRoles;

class ClinicController extends Controller
{
    use HasRoles;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Clinic::query();

        if(request()->query->has('sortBy')
            && in_array(request()->query->get('sortBy'), ['name', 'address', 'city', 'country', 'email', 'phone'])){
            if(request()->query->has('sortDir') &&
                in_array(request()->query->get('sortDir'), ['asc', 'desc'])){
                if(request()->query->has('sortDir')){
                    $model->orderBy(request()->query->get('sortBy'), request()->query->get('sortDir'));
                }else{

                    $model->orderBy(request()->query->get('sortBy'));
                }
            }else{
                redirect('/clinics')->with('clinics', $model->paginate(16));
            }

        }
        else{
            redirect('/clinics')->with('clinics', $model->paginate(16));
        }

        return view('pages.clinics')->with('clinics', $model->paginate(16)->withQueryString());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'username' => ['required', 'max:16', 'min:2'],
            'email' => ['required', 'email', Rule::unique('clinics', 'email')],
            'address' => ['required', 'max:100'],
            'city' => ['required', 'max:100'],
            'country' => ['required', 'max:100'],
            'postal' => ['numeric'],
            'about' => ['max:255']
        ]);

        $clinic = Clinic::create($attributes);
        $clinic->assignRole('clinic');
        auth()->login($clinic);

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
