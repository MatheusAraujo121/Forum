<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\validator;
use App\Models\User;
use App\Models\Comment;

class UserController extends Controller
{
    //camelCase
    //no_camel_case <<
    public function listAllUsers(Request $request)
    {
        $users = User::all();
        return view('users.listAllUsers', ['users' => $users]);
    }

    public function listUserByID(Request $request, $uid)
    {
        $user = User::where('id', $uid)->first();
        return view('users.infoUser', ['user' => $user]);
    }

    public function listUserByIDS(Request $request, $uid)
    {
        $user = User::where('id', $uid)->first();
        return view('users.profile', ['user' => $user]);
    }

    public function updateUser(Request $request, $uid)
    {
        $user = User::where('id', $uid)->first();

        if ($request->has('use_default') && $request->input('use_default') == 1) {
            if ($user->photo == 'uploads/defaultPhoto.jpg') {
                $user->update(['photo' => 'uploads/defaultPhoto.jpg']);
            } else {
                Storage::delete($user->photo);
                $user->update(['photo' => 'uploads/defaultPhoto.jpg']);
            }

        } elseif ($request->hasFile('photo')) {

            $file = $request->file('photo');

            if (!in_array($file->extension(), ['jpeg', 'png', 'jpg', 'gif'])) {
                return redirect()->back()->withErrors(['photo' => 'O arquivo enviado não é uma imagem válida.']);
            }
            if ($user->photo == 'uploads/defaultPhoto.jpg') {
                $user->update(['photo' => null]);
            } elseif ($user->photo && Storage::exists($user->photo)) {
                Storage::delete($user->photo);
            }

            $user->update(['photo' => null]);

            $file_name = rand(0, 999999) . '-' . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('uploads', $file_name);
            $data = $request->all();
            $data['photo'] = $path;

            $user->photo = $path;
        }

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password != '') {
            $user->password = Hash::make($request->password);
        }
        $request->validate([
            'name' => 'string|max:255',
            'email' => 'string|email|max:255',
            'password' => 'string|min:8|confirmed|nullable',
            'photo' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $user->save();
        return redirect()->route('routeListUserByIDS', [$user->id])
            ->with('message', 'Atualizado com sucesso!');
    }

    public function deleteUser(Request $request, $uid)
    {
        $user = User::find($uid);

        foreach ($user->posts as $post) {
            if ($post->isComment()) {
                $comment = $post->postable;
                $comment->delete();
            }

            if ($post->isTopic()) {
                $topic = $post->postable; 
                $topic->comments()->delete();
                $topic->tags()->detach(); 
                $topic->delete(); 
            }

            $post->delete();
        }

        if ($user->photo && $user->photo != 'uploads/defaultPhoto.jpg' && Storage::exists($user->photo)) {
            Storage::delete($user->photo);
        }

        $user->delete();

        return redirect()->route('FirstPage')->with('message', 'Deletado com sucesso!');
    }

    public function registerUser(Request $request)
    {
        if ($request->method() === 'GET') {

            return view('users.register');
        } else {

            if ($request->hasFile('photo')) {

                $file = $request->file('photo');

                if (!in_array($file->extension(), ['jpeg', 'png', 'jpg', 'gif'])) {
                    return redirect()->back()->withErrors(['photo' => 'O arquivo enviado não é uma imagem válida.']);
                }

                $file_name = rand(0, 999999) . '-' . $request->file('photo')->getClientOriginalName();
                $path = $request->file('photo')->storeAs('uploads', $file_name);

                $data = $request->all();
                $data['photo'] = $path;
            } else {

                $path = 'uploads/defaultPhoto.jpg';
                $data['photo'] = $path;
            }
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'photo' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'photo' => $path,
            ]);

            Auth::login($user);

            return redirect()->route('FirstPage');
        }
    }
}
