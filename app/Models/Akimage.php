<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Akimage extends Model
{
    use HasFactory;
    use Searchable;

    protected $primaryKey = 'imgid';
    protected $fillable = ['imgname','imgpath','imgextension','alt','caption','credit','buildings_buildid','people_ppid','directories_dirid','chapters_id'];

    public function imgwidth()
    {
      list($w,$h) = getimagesize("imgpath/imgname.imgextension");
        if($h > $w){
          $width = $w / $h * 100;
          $width = "$width%";
        };     
      return $width;
    }
    
    public function building(): BelongsTo
    {
      return $this->belongsTo(Building::class);
    }

    public function directory(): BelongsTo
    {
      return $this->belongsTo(Directory::class);
    }

    public function chapter(): BelongsTo
    {
      return $this->belongsTo(Chapter::class);
    }
}
