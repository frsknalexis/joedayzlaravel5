<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\User;
use App\Tag;
use DB;

class AdminController extends Controller
{
    function showUsuarios(){
        $arUsuarios = User::paginate(5);
        $data = array(
            'arUsuarios' => $arUsuarios
        );
        //return $arUsuarios;
        return \View::make('blog.admin.usuarios',$data);
    }
    function showFormUsuarios($id = false){
        if(intval($id) > 0){
            $user = User::find($id);
        }else{
            $user = new User;
        }
        $data = array('user' => $user);
        return \View::make('blog.admin.usuario.form',$data);
    }
    function saveUsuario(){
        $inputs = \Request::all();
        $inputs['password'] = \Hash::make($inputs['password']);
        //return $inputs;
        User::create($inputs);
        return redirect('admin');
    }
    function editUsuario($id){
        $inputs = \Request::all();
        $inputs['password'] = \Hash::make($inputs['password']);        
        $user = User::find($id);
        $user->nombre = $inputs['nombre'];
        $user->email  = $inputs['email'];
        if(trim($inputs['password']) != ''){
            $user->password = $inputs['password'];
        }
        $user->save();
        return redirect('admin');
    }
    function deleteUsuario($id){
        $user = User::find($id);
        $user->estado = '0';
        $user->save();
        return redirect('admin');
        /*        
        //Borrado Fisico
        $user = User::find($id);
        $user->delete();
        return redirect('admin');*/
    }

}
