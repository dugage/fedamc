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
    	$data = User::where('id','!=', 1)->paginate(10);
    	return view('users.index')->with('data', $data);
    }

    public function create(){
        return view('users.new');
    }

    public function store(Request $request){
    	$data = $request->validate([
    		'name' => 'required',
    		'lastname' => 'required',
    		'email' => 'required|email|unique:users,email',
    		'license' => '',
    		'profilePicture' => '',
            'password' => 'required',
            'typeUser' => '',
            'active' => 'required',
    	]);
        // encriptamos la contrasseña
        $data['password'] = bcrypt('password');

    	if ($request->hasFile('profilePicture')) {
   			$data['profilePicture'] = $request->file('profilePicture')->store('public/profiles');
   		}

   		$user = User::create($data);

        //dd($data);

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
            //$insert->profilePicture = $data['profilePicture'];
            $insert->email = $data['email'];
            $insert->idUser = $user->id;
            $insert->idTeacher = 1;
            $insert->save();

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
            'active' => 'required',
    	]);

        //Si la contraseña es null lo quitamos del array
        if ($data['password'] != null) {
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data['password']);
        }
        //Comprobamos si existe una imagen
   		if ($request->hasFile('profilePicture')) {
   			$data['profilePicture'] = $request->file('profilePicture')->store('public/profiles');
   		}

        if ($user->teacher) {
            $user->teacher->update($data);
        }elseif($user->studend){
            $user->studend->update($data);
        }

        //actualizamos
        $user->update($data);
        //redirecionamos
        return redirect()->route('usuarios.ver',['user' => $user])->with('info','Perfil acualizado');
    }

    public function destroy(User $user){
        //Buscamos el federado o maestro que tiene vinculo con el id de este usuario
        //y lo eliminamos. 
        if ($user->teacher) {
            $user->teacher->delete();
        }elseif ($user->studend) {
            $user->studend->delete();
        }
        
        //Eliminamos el usuario
        $user->delete();
        //Regresamos a la lista
        return redirect()->route('usuarios')->with('info', 'Usuario Eliminado');
    }



}
