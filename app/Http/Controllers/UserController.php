<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTables;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(UserDataTables $dataTable) {
        return $dataTable->render('user.index');
    }

    public function edit($id) {
        // Do something here
    }

    public function destroy($id) {
        // Do something here
    }
}
