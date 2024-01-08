<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plan extends Model
{
    use HasFactory;
    use Searchable;

    // public function index()
    // {
    //   $plans = $this
    //   ->paginate($this->getPlans())
    //   ->setPath('plans');
    // }

    protected $primaryKey = 'plid';

    protected $fillable = ['plinfo','plname','address_adrid','building_buildid','thumbs'];

    
    public function building(): BelongsTo
    {
         return $this->belongsTo(Building::class);
    }

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    public function toSearchableArray(): array
    {
        return [
            'plname' => $this->plname,
            'plinfo' => $this->plinfo,      
        ];
    }
}
