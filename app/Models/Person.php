<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Person extends Model
{
    use HasFactory;
    use Searchable;

    protected $primaryKey = 'ppid';

    protected $fillable = ['pptype', 'ppinfo', 'ppdescription', 'ppfirst_name', 'ppname','ppimgname','ppimgpath','ppimgext','ppalt','ppcaption'];

    public function akimage(): HasMany
    {
      return $this->hasMany(Akimage::class);
    }

    public function toSearchableArray(): array
    {
        return [
            'ppinfo' => $this->ppinfo,
            'ppdescription' => $this->ppdescription,
            'ppfirst_name' => $this->ppfirst_name,
            'ppname' => $this->ppname,
            'ppalt' => $this->ppalt,            
        ];
    }
    
}
