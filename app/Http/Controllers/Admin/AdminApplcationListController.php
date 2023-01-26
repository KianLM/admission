<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AdminApplcationListController extends Controller
{
    public function showApplicantList()
    {
        return view('admin.applicantList');
    }
}
