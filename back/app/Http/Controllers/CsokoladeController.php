<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Csokolade;

class CsokoladeController extends Controller
{
    public function get()
    {
        $sweets=DB::select('select * from edesseg.sweets where kategoria = 2');
        $decodedSweets = json_encode($sweets);
        // echo($decodedSweets);
        return $decodedSweets;
    }
}
