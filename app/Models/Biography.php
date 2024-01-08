<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Biography extends Model
{
    use HasFactory;
    use Searchable;

    protected $primaryKey = 'bioid';

    protected $fillable = ['bioname', 'section_2', 'bioheader', 'title_info'];

    public function toSearchableArray(): array
    {
        return [
            'bioname' => $this->bioname,
            'section_2' => $this->section_2,
            'bioheader' => $this->bioheader,
            'title_info' => $this->title_info,
        ];
    }
}
