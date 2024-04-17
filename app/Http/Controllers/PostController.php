<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Aqui van los posts";
    }

    public function create(){
        return "Se va a mostrar un formulario";
    }

    public function show($post){
        return "Aqui va la info del post {$post}";
    }
}
