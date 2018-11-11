<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view', User::class);
        $role = $request->role? $request->role : ['ADM','THM','MOD'];
        $users = User::all()->wherein('role_code', $role);
        return view('administration.users.index', compact('users')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', User::class);
        return view('administration.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $this->authorize('create', User::class);
        $validated = $request->validated();
        $validated = $validated + ['passwors'=> Hash::make($request->password)];
        $user = User::create($validated);
        return redirect()->route('users.show', ['id'=> $user->id])->withSuccess($user->role->name . " created successfully!");;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('view', $user);
        return view('administration.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('view', $user);
        return view('administration.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, User $user)
    {
        $this->authorize('update', $user);
        $validated = $request->validated();
        
        if($request->update === 'password'){
            $user->update($validated + ['passwors'=> Hash::make($request->password)]);
            
        }
        $user->update($validated);
        return redirect('/users/'.$user->id)->withSuccess($user->role->name . " updated successfully!");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('update', $user);
        $role = $user->role;
        $user->delete();
        return redirect()->route('users.index', ['role' => $role->code])->withSuccess("$role->name deleted successfully!");
    }
}
