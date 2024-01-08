<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;
    use Searchable;

    protected $primaryKey = 'adrid';

    protected $fillable = ['suite', 'stnmbr', 'street', 'suburb', 'state', 'postcode', 'lot_number', 'municipality', 'sla'];

    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class);
    }

    public function person(): BelongsTo
    {
          return $this->belongsTo(Person::class);
    }

    public function plan(): HasMany
    {
      return $this->hasMany(Plan::class);
    }

    public function toSearchableArray(): array
    {
        return [
            'suite' => $this->suite,
            'stnmbr' => $this->stnmbr,
            'lot_number' => $this->lot_number,
            'street' => $this->street,
            'suburb' => $this->suburb,
            'postcode' => $this->postcode,
        ];
    }
}