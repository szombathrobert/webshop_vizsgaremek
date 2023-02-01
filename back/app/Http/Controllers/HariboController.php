<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Haribo;
use Illuminate\Support\Facades\DB;

class HariboController extends Controller
{
    public function get()
    {
        $sweets=DB::select('select * from edesseg.sweets where gyarto = 1');
        $decodedSweets = json_encode($sweets);
        // echo($decodedSweets);
        return $decodedSweets;
    }
}
