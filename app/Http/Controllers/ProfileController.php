<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller {
  /**
  * Display the user's profile form.
  */
  public function index():view {
    $users = User::all();
    return view('admin.users.index', compact('users'));
  }

  public function edit($id): View {
    $user = User::findOrFail($id);
      return view('admin.users.edit', compact('user'));
  }

  public function update(Request $request, $id): RedirectResponse {
    $user = User::findOrFail($id); // Buscar el usuario por ID

    $request->validate([
        'name' => 'required|string|max:255',
        'role' => 'required|in:user,admin,creator,editor',
    ]);

    $user->name = $request->input('name');
    $user->role = $request->input('role');
    $user->save();

    return Redirect::route('users.index')->with('success', 'User updated successfully');
  }

  public function show($id) {
    return redirect()->route('users.index');
  }

  /**
  * Delete the user's account.
  */
  public function destroy($id) {
    $user = User::findOrFail($id);
    $user->delete();

    return Redirect::route('users.index');
  }
}
