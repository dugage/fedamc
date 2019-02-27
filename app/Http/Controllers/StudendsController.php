<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Studends;
use App\Teachers;
use App\User;

class StudendsController extends Controller
{

    public function index(){
        //Buscamos todos los federados
    	$data = Studends::paginate(15);
    	return view('studends.index')->with('data', $data);

    }

    public function create(){
        $teachers = Teachers::all();
        return view('studends.new')->with('teachers', $teachers);
    }

    public function store(Request $request){
        //validamos

    	$data = $request->validate([
    		'name' => 'required',
    		'lastname' => 'required',
    		'email' => 'required|email|unique:users,email',
            'birdDate' => 'date',
            'club' => '',
    		'license' => 'numeric',
            'startLicense' => 'date',
            'endLicense' => 'date',
    		'profilePicture' => 'image',
            'password' => 'required',
            'phone' => 'numeric|min:9',
            'fNacimiento' => 'date',
            'activity' => '',
            'address' => '',
            'cp' => '',
            'city' => '',
            'active' => '',
            'rate' => 'numeric',
            'idUser' => '',
            'idTeacher' => '',
    	]);

        $data['typeUser'] = 'federado';
        //encriptamos la contraseña
        $data['password'] = bcrypt('password');
        //creamos el usuario primero
    	$user = User::create($data);
        //guardamos el id de ese usuario
   		$data['idUser'] = $user->id;
        //Comprobamos si hay imagen
    	if ($request->hasFile('profilePicture')) {
   			$data['profilePicture'] = $request->file('profilePicture')->store('public/profiles');
   		}
        //Creamos el federado
   		$studend = Studends::create($data);
        //redireccionamos
   		return redirect()->route('federados');
    }

    public function show(Studends $studends){
        return view('studends.show')->with('studend',$studends);
    }

    public function edit(Studends $studends){
        $teachers = Teachers::all();
        return view('studends.edit')->with([
            'studend'=> $studends,
            'teachers' => $teachers
        ]);
    }

    public function update(Request $request, Studends $studends){
        //Validamos
    	$data = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email,'.$studends->user->id,
            'birdDate' => 'date',
            'club' => '',
            'license' => 'numeric',
            'startLicense' => 'date',
            'endLicense' => 'date',
            'profilePicture' => 'image',
            'password' => '',
            'phone' => 'numeric|min:9',
            'fNacimiento' => 'date',
            'activity' => '',
            'address' => '',
            'cp' => '',
            'city' => '',
            'active' => '',
            'rate' => 'numeric',
            'idUser' => '',
            'idTeacher' => '',
        ]);
        //Comprobamos si la contraseña esta vacia
        if ($data['password'] != null) {
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data['password']);
        }
        //Comprobamos si hay imagen
   		if ($request->hasFile('profilePicture')) {
   			$data['profilePicture'] = $request->file('profilePicture')->store('public/profiles');
   		}
        //Actualizamos usuario
        $studends->user->update($data);
        //Actualizamos el federado
        $studends->update($data);
        //Redireccionamos
        return redirect()->route('federados.ver',['studend' => $studends])->with('info','Perfil acualizado');

    }

    public function destroy(Studends $studends){
        //Guardamos el id de usuario para eliminarlo despues
        $idUser = $studends->user->id;
        //Eliminamos el federado
        $studends->delete();
        //Eliminamos el usuario
        User::find($idUser)->delete();
        //Redireccionamos
        return redirect()->route('federados')->with('info', 'Usuario Eliminado');
    }

}
