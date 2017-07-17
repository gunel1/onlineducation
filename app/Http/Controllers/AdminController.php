<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','adminOrTeacher']);
    }
    public function index(Request $request){
        return view('admin.master');
    }
}