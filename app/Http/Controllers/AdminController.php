<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    public function getuser()
    {
       $rec = user::get();
        return view('Admin.user',compact('rec'));
    }

 public function exportExcel()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

     public function exportPDF()
    {
        $users = User::select('id','name','email','role')->get();
        $pdf = Pdf::loadView('Admin.users-pdf', compact('users'));
        return $pdf->download('users.pdf');
    }

}
