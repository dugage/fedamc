<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Teachers;
use App\User;

class TeachersController extends Controller
{
    
    public function index(){
        //Tomamos todos los maestros
    	$data = Teachers::where('id','!=', 1)->paginate(15);
    	return view('teachers.index')->with('data', $data);

    }

    public function create(){
        return view('teachers.new');
    }

    public function store(Request $request){
        //validamos
    	$data = $request->validate([
    		'name' => 'required',
    		'lastname' => 'required',
    		'email' => 'required|email|unique:users,email',
    		'license' => '',
    		'profilePicture' => 'image',
            'password' => 'required',
            'phone' => '',
            'fNacimiento' => 'date',
            'activity' => '',
            'address' => '',
            'cp' => '',
            'city' => '',
            'active' => '',
            'rate' => '',
            'idUser' => '',
    	]);
        $data['typeUser'] = 'maestro';
        //Encriptamos la contraseña
        $data['password'] = bcrypt('password');
        //creamos primero el usuario para luego vincular su id con el maestro
    	$user = User::create($data);
        //Guardamos su id
   		$data['idUser'] = $user->id;
        //Comprobaos si hay imagen
    	if ($request->hasFile('profilePicture')) {
   			$data['profilePicture'] = $request->file('profilePicture')->store('public/profiles');
   		}
        //Creamos el maestro
   		$teacher = Teachers::create($data);
        //redireccionamos
   		return redirect()->route('maestros');
    }

    public function show(Teachers $teachers){
        return view('teachers.show')->with('teacher',$teachers);
    }

    public function edit(Teachers $teachers){
        return view('teachers.edit')->with('teacher',$teachers);
    }

    public function update(Request $request, Teachers $teachers){
        // Validamos
    	$data = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email,'.$teachers->user->id,
            'license' => '',
            'profilePicture' => 'image',
            'password' => '',
            'phone' => '',
            'fNacimiento' => '',
            'address' => '',
            'cp' => '',
            'city' => '',
            'activity' => '',
            'active' => '',
            'rate' => '',
            'idUser' => '',
        ]);

        //dd($data);
        //Si esta vacia la eliminamos de la variable $data
        if ($data['password'] != null) {
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data['password']);
        }
        // Compribamos si hay imagen
   		if ($request->hasFile('profilePicture')) {
   			$data['profilePicture'] = $request->file('profilePicture')->store('public/profiles');
   		}
        // actualizamos el maestro
        $teachers->user->update($data);
        // actualizamos el usuario
        $teachers->update($data);
        //Redireccionamos
        return redirect()->route('maestros.ver',['teacher' => $teachers])->with('info','Perfil acualizado');

    }

    public function destroy(Teachers $teachers){
        //Guarmos el id de usuario para eliminarlo despues
        $idUser = $teachers->user->id;
        //Eliminamos el maestro
        $teachers->delete();
        //buscamos el usuario y lo eliminamos
        User::find($idUser)->delete();
        //redireccionamos
        return redirect()->route('maestros')->with('info', 'Usuario Eliminado');
    }

}
