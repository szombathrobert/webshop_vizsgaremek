<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ragcsak;


class RagcsakController extends Controller
{
    public function get()
    {
        $sweets=DB::select('select * from edesseg.sweets where kategoria = 3');
        $decodedSweets = json_encode($sweets);
        // echo($decodedSweets);
        return $decodedSweets;
    }
}
