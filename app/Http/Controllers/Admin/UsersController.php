<?php

namespace App\Http\Controllers\Admin;

use App\Exports\SubscribersExport;
use App\Http\Controllers\Controller;
use App\Models\Subscribers;
use App\Models\User;
use App\Models\UserLog;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Activitylog\Models\Activity;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    public function showAuthenticationLogs($userId)
    {

        $user = User::findOrFail($userId);

        // Retrieve the user's activity logs (both login and logout)
        $activityLogs = Activity::where('subject_type', User::class)
            ->where('subject_id', $user->id)
            ->whereIn('description', ['login', 'logout'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('auth.logs', compact('user', 'activityLogs'));

    }

    /**
     * index
     *  returns users list where superuser can edit add or delete any user (delete everyone exept himself)
     *
     * @return void
     */
    public function index(Request $request): View
    {

        $users = User::filter(request()->all())
            ->with('roles:id,name')
            ->orderBy('id', 'DESC')->paginate(5);

        return view('admin.users.list', compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * index
     *  returns users list where superuser can edit add or delete any user (delete everyone exept himself)
     *
     * @return void
     */
    public function logs($id): view
    {
        $user = User::find($id);
        $logs = UserLog::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

        return view('admin.users.logs', compact(['user', 'logs']));
    }

    /**
     * add
     *  returns user add wiew to add users
     *
     * @return void
     */
    public function create(): view
    {
        $roles = Role::pluck('name', 'name')->all();

        return view('admin.users.add', compact('roles'));

    }

    /**
     * store
     * store function stores request form create function
     *
     * @param  mixed  $request
     * @return void
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index', [app()->getLocale()])
            ->with('success', 'User created successfully');
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('admin.users.show', compact('user'));
    }

    /**
     * editProfile
     * non superadmin user can edit his profile
     *
     * @return void
     */
    public function edit($id): view
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('admin.users.edit_profile', compact('user', 'roles', 'userRole'));
    }

    /**
     * updateProfile
     *  non superadmin user profile update
     *
     * @param  mixed  $request
     * @param  mixed  $id
     * @return void
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
        ]);

        $input = $request->all();
        if (! empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, ['password']);
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');

    }

    /**
     * edit
     * returns user edit view
     *
     * @param  mixed  $id
     * @return void
     */
    public function resetpassword(Request $request, $id)
    {
        $user = User::find($id);
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('message', 'პაროლი განახლდა');
    }

    /**
     * destroy
     * destroies user with id
     *
     * @param  mixed  $id
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        User::find($id)->delete();

        return redirect()->route('users.index', [app()->getLocale()])
            ->with('success', 'User deleted successfully');
    }

    public function subscribers()
    {
        // Subscribers::query()->update(['seen' => true]);
        $subscribers = Subscribers::orderBy('created_at')->get();

        return view('admin.subscribers.index', compact('subscribers'));
    }

    public function deletesubsctiber($id)
    {
        $delete = Subscribers::find($id)->Delete();

        return back()->with('success');
    }

    public function exportSubscribers()
    {
        $subscribers = Subscribers::all();

        return Excel::download(new SubscribersExport($subscribers), 'subscribers.xlsx');
    }
}
