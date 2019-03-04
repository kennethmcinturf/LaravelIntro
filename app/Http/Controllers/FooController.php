<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controllers;
use App\Repositories\FooRepository;


// how to inject a repo into a controller
class FooController extends Controller
{
    // private $repository;

    // public function __construct(FooRepository $repository){
    //     $this->repository = $repository;
    // }

    public function foo(FooRepository $repository){
        return $repository->get();
    }
}
