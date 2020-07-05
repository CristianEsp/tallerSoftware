<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class controlador_nuevo extends Controller
{
    public $url="http:127.0.0.1:8000";
    public function inicio_de_controlador(){
        $url = "http:127.0.0.1:8000";
        $arra=DB::select("select * from alumnos",[]);
        return view("header",["url"=>$url]).view("body",["select"=>$arra]);
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
