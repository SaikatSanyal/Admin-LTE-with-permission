<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Yajra\DataTables\Facades\DataTables;
use App\Role;




class RoleController extends Controller
{
	/**
  * A summary informing the user what the associated element does.
  *
  * A *description*, that can span multiple lines, to go _in-depth_ into the details of this element
  * and to provide some background information or textual references.
  *
  * @param Request $request With a *description* of this argument, these may also
  *    span multiple lines.
  *
  * @return view
  */
    public function index(Request $request){
      $roles = Role::all();
      return view('roles.index', ['roles' => $roles]);
    }
        public function create()
            {
                $roles = Role::all();
                return view ('roles.create',['roles' => $roles]);
            }

    }
