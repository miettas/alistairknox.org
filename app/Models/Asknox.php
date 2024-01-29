<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Asknox extends Model
{
    use HasFactory;
    use Searchable;

    protected $primaryKey = 'askid';

    protected $fillable = ['askname', 'section_2', 'askheader', 'title_info'];

    public function toSearchableArray(): array
    {
        return [
            'askname' => $this->dirname,
            'section_2' => $this->section_2,
            'askheader' => $this->dirheader,
            'title_info' => $this->title_info,
        ];
    }
}
