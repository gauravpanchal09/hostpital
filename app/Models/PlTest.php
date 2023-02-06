<?php

/**
 * PlTest
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlTest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id',
        'description'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    /*******************************************
    * Query Scopes
    *******************************************/
    public function scopeForPatient($query, $patient)
    {
        return $query->where('patient_id', ($patient instanceof Patient) ? $patient->id : $patient);
    }
}
