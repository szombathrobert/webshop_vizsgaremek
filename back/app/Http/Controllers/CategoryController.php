<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function get()
    {
        $sweets=DB::select('select * from edesseg.sweets where kategoria = 1');
        $decodedSweets = json_encode($sweets);
        // echo($decodedSweets);
        return $decodedSweets;
    }
}
