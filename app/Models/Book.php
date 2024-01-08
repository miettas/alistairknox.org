<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Book extends Model
{
    use HasFactory;
    use Searchable;

    protected $primaryKey = 'bkid';

    protected $fillable = ['bkname', 'bkdescription', 'bkinfo', 'author', 'book_sort','thumb','bktype'];

  
    public function chapter(): HasMany
    {
        return $this->hasMany(Chapter::class);
    }
    
    public function toSearchableArray(): array
    {
        return [
            'bkname' => $this->bkname,
            'bkdescription' => $this->bkdescription,
            'bkinfo' => $this->bkinfo,
            'bkauthor' => $this->bkauthor,
            'bktype' => $this->bktype,
        ];
    }
}
