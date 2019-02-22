<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Teachers;
use App\Studends;
use App\User;


class UserController extends Controller
{
    
    public function index(){
    	$data = User::all();
    	return view('users.index')->with('users', $data);
    }

    public function new(Request $request){
    	$data = $request->validate([
    		'name' => 'required',
    		'lastname' => 'required',
    		'email' => 'required|email|unique:users,email',
    		'license' => '',
    		'profilePicture' => 'image',
            'password' => 'required',
            'typeUser' => '',
    	]);
        // encriptamos la contrasseña
        $data['password'] = bcrypt('password');

    	if ($request->hasFile('profilePicture')) {
   			$data['profilePicture'] = $request->file('profilePicture')->store('public/profiles');
   		}

   		$user = User::create($data);

        //creamos un maestro o federado según se elija
        if ($data['typeUser'] == 'maestro') {
            $insert = new Teachers;
            $insert->name = $data['name'];
            $insert->lastname = $data['lastname'];
            $insert->email = $data['email'];
            $insert->idUser = $user->id;
            $insert->save();

        }elseif($data['typeUser'] == 'federado'){
            $insert = new Studends;
            $insert->name = $data['name'];
            $insert->lastname = $data['lastname'];
            $insert->profilePicture = $data['profilePicture'];
            $insert->email = $data['email'];
            $insert->idUser = $user->id;
            $teacher->save();

        }
        //redireccionamos
   		return redirect()->route('usuarios');
    }

    public function show(User $user){
        return view('users.show')->with('user',$user);
    }

    public function edit(User $user){
        return view('users.edit')->with('user',$user);
    }

    public function update(Request $request, User $user){
    	$data = $request->validate([
    		'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'license' => '',
            'profilePicture' => 'image',
            'password' => '',
    	]);

        //Si la contraseña es null lo quitamos del array
        if ($data['password'] != null) {
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data['password']);
        }
        //Comprobamos si existe una imagen
   		if ($request->hasFile('profilePicture')) {
   			$data['profilePicture'] = $request->file('profilePicture')->store('public/profile');
   		}
        //actualizamos
        $user->update($data);
        //redirecionamos
        return redirect()->route('usuarios.ver',['user' => $user])->with('info','Perfil acualizado');
    }

    public function delete(User $user){
        //Buscarmos el tipo de usuario que es y lo eliminamos
        if ($user->teacher != null) {
            $user->teacher->delete();
        }elseif($user->studend != null){
            $user->studen->delete();
        }
        //Eliminamos el usuario
        $user->delete();
        //Regresamos a la lista
        return redirect()->route('usuarios')->with('info', 'Usuario Eliminado');
    }



}
