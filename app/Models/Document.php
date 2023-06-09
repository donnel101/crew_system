<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable=[
        'crew_id',
        'code',
        'name',
        'document_number',
        'dateIssued',
        'dateExpiry',
        'remarks',
    ];

    public function crew(){
        return $this->belongsto(Crew::class);
    }
}
