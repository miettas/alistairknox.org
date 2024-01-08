<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Mydirectory extends Model
{
    use HasFactory;
    use Searchable;

    protected $primaryKey = 'dirid';

    protected $fillable = ['dirname', 'section_2', 'dirheader', 'title_info'];

    public function toSearchableArray(): array
    {
        return [
            'dirname' => $this->dirname,
            'section_2' => $this->section_2,
            'dirheader' => $this->dirheader,
            'title_info' => $this->title_info,
        ];
    }
}
