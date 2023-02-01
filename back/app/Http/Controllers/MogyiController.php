<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Mogyi;

class MogyiController extends Controller
{
    public function get()
    {
        $sweets=DB::select('select * from edesseg.sweets where gyarto = 16');
        $decodedSweets = json_encode($sweets);
        // echo($decodedSweets);
        return $decodedSweets;
    }
}
