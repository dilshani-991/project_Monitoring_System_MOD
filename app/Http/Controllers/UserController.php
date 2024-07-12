<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Fetch users with roles 'army', 'navy', and 'airforce'
        $users = User::whereIn('role', ['army', 'navy', 'airforce','user'])->get();

        return view('pages.admin.manage_user', compact('users'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->route('manage-user')->with('success', 'User removed successfully.');
        } else {
            return redirect()->route('manage-user')->with('error', 'User not found.');
        }
    }
}
