<?php

namespace App\Http\Controllers\StudentController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('admin.index');
    }

    public function add() {

    }

    public function insert() {

    }

    public function view() {

    }

    public function edit() {

    }

    public function softdelete() {

    }

    public function restore() {

    }

    public function delete() {

    }

}
