<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Building extends Model
{
    use HasFactory;
    use Searchable;

    protected $with = [
        'address',
        'plan'
    ];

    protected $primaryKey = 'buildid';

    protected $fillable = ['buildname', 'builddescription', 'date_built', 'project_pjid','address_adrid','client', 'buildnote', 'buildimage', 'buildplan', 'jobnumber', 'numdrawings', 'otherprofessional', 'drawingdescription', 'drawinglocation', 'keywords', 'year_built', 'manuscriptlocation', 'manuscriptinfo', 'manuscriptcomment', 'drawinglocation2', 'buildplan2', 'bldsuite', 'bldstnmbr', 'bldlot_number', 'bldstreet', 'bldsuburb', 'bldstate', 'bldpostcode'];

    
    public function address(): HasOne
    {
          return $this->hasOne(Address::class);
    }

    public function plan(): HasMany
    {
        return $this->hasMany(Plan::class);
    }
     
    public function akimage(): HasMany
    {
      return $this->hasMany(Akimage::class);
    }
    
    public function toSearchableArray(): array
    {
        return [
            'buildname' => $this->buildname,
            'builddescription' => $this->builddescription,
            'build_date' => $this->build_date,
            'client' => $this->client,
            'jobnumber' => $this->jobnumber,
            'keywords' => $this->keywords,
            'manuscriptinfo' => $this->manuscriptinfo,
            'manuscriptcomment' => $this->manuscriptcomment,
            'bldsuite' => $this->bldsuite,
            'bldstnmbr' => $this->bldstnmbr,
            'bldlot_number' => $this->bldlot_number,
            'bldstreet' => $this->bldstreet,
            'bldsuburb' => $this->bldsuburb,
            'bldstate' => $this->bldstate,
            'bldpostcode' => $this->bldpostcode,
        ];
    }

    
}
