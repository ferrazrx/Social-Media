<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
use App\UserRole;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;


class UserController extends Controller
{

    public function __construct(){
        //Middleware to check if user is Administrator, if not return to home
        $this->middleware('isAdmin')->except('home');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $this->authorize('home', User::class);
        return view('administration.home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$role = Role::where('code', $request->role)->first()->code;

        if($request->role){
            $users = Role::where('code', $request->role)->first()->users()->paginate(10) ;
        }else{
            $users = User::paginate(10);
        }
       
        return view('administration.users.index', compact('users', 'role')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $validated = $request->validated();
        $validated = $validated + [
            'created_by' => Auth::id(),
            'last_modified_by' => Auth::id(),
        ];
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
        $validated = $request->validated();
        $validated = $validated + [
            'last_modified_by' => Auth::id()
        ];
        
        if($request->update === 'password'){
            $password = Hash::make($request->password);
            $user->update(compact('password'));
        }else{
            if($user->role_code != $validated['role_code']){
                $this->authorize('canChangePriviledge', User::class); 
            }
            $user->update($validated);
        }
        return redirect()->route('users.show', ['id'=>$user->id])->withSuccess($user->role->name . " updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $role = $user->role;
        $user->update(['deleted_by'=> Auth::id()]);
        $user->delete();
        return redirect()->route('users.index', ['role' => $role->code])->withSuccess("$role->name deleted successfully!");
    }
    public function search(Request $request){
        $term = $request->term;
        $users = User::where('name','LIKE','%'.$term.'%')->orWhere('email','LIKE','%'.$term.'%')->paginate(10);
        $users->withPath('/admin/users/search');
        return view('administration.users.index', compact('users','term'));   
    }
}
