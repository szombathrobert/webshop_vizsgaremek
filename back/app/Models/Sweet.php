<?php

namespace App\Models;

use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sweet extends Model
{
    use HasFactory;

    /**
     * Get the manufacturer that owns the Sweet
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gyarto()
    {
        return $this->belongsTo(Manufacturer::class, 'gyartoid');
    }

    public function kategoria()
    {
        return $this->belongsTo(Category::class, 'kategoriaid');
    }
}
