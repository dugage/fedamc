<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Studends;
use App\Teacher;
use App\User;

class StudendsController extends Controller
{

    public function index(){
        //Buscamos todos los federados
    	$data = Studends::all();
    	return view('studends.index')->with('studends', $data);

    }

    public function new(Request $request){
        //validamos
    	$data = $request->validate([
    		'name' => 'required',
    		'lastname' => 'required',
    		'email' => 'required|email|unique:users,email',
    		'license' => 'numeric',
    		'profilePicture' => 'image',
            'password' => 'required',
            'phone' => 'numeric|min:9',
            'fNacimiento' => 'date',
            'activity' => '',
            'address' => '',
            'cp' => 'numeric|min:5',
            'city' => '',
            'active' => 'required',
            'rate' => 'numeric',
            'idUser' => '',
            'idMaster' => '',
    	]);
        //creamos el usuario primero
    	$user = User::create($data);
        //guardamos el id de ese usuario
   		$data['idUser'] = $user->id;
        //encriptamos la contraseña
        $data['password'] = bcrypt('password');
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
        return view('studend.show')->with('studend',$studends);
    }

    public function edit(Studends $studends){
        return view('studends.edit')->with('studend',$studends);
    }

    public function update(Request $request, Studends $studends){
        //Validamos
    	$data = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email,'.$studends->user->id,
            'license' => '',
            'profilePicture' => 'image',
            'password' => '',
            'phone' => '',
            'fNacimiento' => 'date',
            'address' => '',
            'cp' => 'numeric|min:5',
            'city' => '',
            'activity' => '',
            'active' => 'required',
            'rate' => 'numeric',
            'idUser' => '',
        ]);
        //Comprobamos si la contraseña esta vacia
        if ($data['password'] != null) {
            $data['password'] = bcrypt($data['password']);
        }else{
            unset($data['password']);
        }
        //Comprobamos si hay imagen
   		if ($request->hasFile('profilePicture')) {
   			$data['profilePicture'] = $request->file('profilePicture')->store('public/profile');
   		}
        //Actualizamos usuario
        $studends->user->update($data);
        //Actualizamos el federado
        $studends->update($data);
        //Redireccionamos
        return redirect()->route('federados.ver',['studend' => $studends])->with('info','Perfil acualizado');

    }

    public function delete(Studends $studends){
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
