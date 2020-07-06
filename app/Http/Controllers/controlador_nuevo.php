<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class controlador_nuevo extends Controller
{
    public $url="http:127.0.0.1:8000";
    public $session;

    public function __construct(Request $request)
    {
        $this->url=="http://127.0.0.1:8000";
        $this->session=$request;
    }

    public function inicio_de_controlador(){
        if($this->session->session()->get('status') == '1'){
            $this->session->session()->reflash();//funcion
            $arra=DB::select("select * from alumnos",[]);
            return view('header').view('body',["url"=>$this->url,"select"=>$arra]);
        }
        else{
            return redirect('/api/login');
        }
    }
    public function inicio_sesion(Request $request ){
        $rut=$request->input("Rut");
        $consulta = DB::select("select count(*) as validacion from usuarios where rut_usuario= ? and contrasena= ?",[$request->input("Rut"),$request->input("Contraseña")]);
        
        if($consulta["0"]->validacion >= 1){
            $data = $request->session()->all();
            $request->session()->put('status', '1');
            $info=$request->session()->get('status');
            //print_r($info);
            return redirect('/api/alumnos');
        }
        else{
            return view('login');
        }
    }
    public function fin_sesion(Request $request ){
        $info=$request->session()->flush();
        return redirect('/api/login');
    }
    public function login(){
        return view('login');
    }
    public function delete(Request $req){
       DB::table("alumnos")->where('rut_alumno', '=', $req->input("rutalum"))->delete();
       $arra=DB::select("select * from alumnos",[]);
       return redirect('/api/alumnos');
       
    }

    public function insert(Request $req){
       DB::table("alumnos")->insert(
           [ 'rut_alumno' => $req->input("rutalum"),
           'nombre_alumno' => $req->input("nombrealum"),
           'telefono' => $req->input("telefonoalum"),
           'carrera' => $req->input("carreraalum"),
           ]
       );
       $arra=DB::select("select * from alumnos",[]);
       return redirect('/api/alumnos');
    }
    public function lugar_de_actualizar(Request $req){
        $alumno=[
           'rut_alumno' => $req->input("rutalum"),
           'nombre_alumno' => $req->input("nombrealum"),
           'telefono' => $req->input("telefonoalum"),
           'carrera' => $req->input("carreraalum")
        ];
        return view("header").view("lugar_de_actualizar",["alumno"=>$alumno]);
    }
    public function update(Request $req){
        //dd($req->input("rutalum"));
        DB::table('alumnos')->where('rut_alumno', '=', $req->input("rutalum"))
        ->update(
            [
                'rut_alumno' => $req->input("rutalum"),
                'nombre_alumno' => $req->input("nombrealum"),
                'telefono' => $req->input("telefonoalum"),
                'carrera' => $req->input("carreraalum")
            ]
            );
            $arra=DB::select("select * from alumnos",[]);
            return redirect('/api/alumnos');
    }
    public function search(Request $req){
        
        if ($req) {
            $query = trim($req->get('search'));

            $users=User::where('name', 'LIKE', '&'. $query . '&')
               ->orderBy('nombre', 'asc')
               ->get();
                

            return view('header').view('body', ['alumnos' => $users, 'search' => $query]);
        }
    }
}
