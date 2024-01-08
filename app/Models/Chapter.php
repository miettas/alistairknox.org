<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Chapter extends Model
{
    use HasFactory;
    use Searchable;

    protected $with = [
        'book'
    ];

    protected $primaryKey = 'chapid';

    protected $fillable = ['chapname', 'chapinfo', 'book_bkid', 'sort_order', 'keyword'];


    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
    
    public function akimage(): HasMany
    {
      return $this->hasMany(Akimage::class);
    }

    public function toSearchableArray(): array
    {
        return [
            'chapname' => $this->chapname,
            'chapinfo' => $this->chapinfo,
            'keyword' => $this->keyword,
            'book' => [
                'bkname' => $this->book->bkname,
                'bkdescription' => $this->book->bkdescription,
                'bkinfo' => $this->book->bkinfo,
                'bkauthor' => $this->book->bkauthor,
                'bktype' => $this->book->bktype,
            ]
        ];
    }

}
