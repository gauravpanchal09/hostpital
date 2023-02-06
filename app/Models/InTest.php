<?php

/**
 * InTest
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InTest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id',
        'p_married_year',
        'p_ttc',
        'p_ttc_year',
        'p_toi',
        'pc_method',
        'pc_duration_year',
        'mh_menarchat',
        'mh_year',
        'mh_previous_cycle',
        'mh_present_cycle',
        'mh_lmp',
        'oh_delivery',
        'oh_miscarriage',
        'oh_pgti',
        'oh_pa',
        'pmh_thyroid',
        'pmh_tuberculosis',
        'pmh_hypertension',
        'pmh_diabetes',
        'pmh_other',
        'sfh_wife',
        'sfh_husband',
        'eve_stature',
        'eve_pulse',
        'eve_height',
        'eve_weight',
        'eve_bp',
        'eve_bmi',
        'eve_anaemia',
        'eve_hyriod',
        'eve_hirsutism',
        'eve_face',
        'eve_breast',
        'eve_other',
        'eve_cvs',
        'eve_rs',
        'eve_sec_sex_character',
        'eve_breast2',
        'eve_public_hair',
        'eve_axillary_hairs',
        'ea_stature',
        'ep_ps',
        'ep_vulva',
        'ep_pv',
        'ep_veg',
        'tr_year',
        'husband_dob',
        'husband_occupation',
        'husband_married_previously',
        'husband_age',
        'husband_children',
        'husband_coitus_frequency',
        'husband_exection',
        'husband_ejaculation',
        'husband_orgasm',
        'husband_drugs',
        'husband_smoking',
        'husband_alcohol',
        'husband_semon_analysic',
        'inv_hysteroscopy',
        'inv_laparoscopy',
        'inv_pcr_for_tb',
        'inv_hysterosalpingography',
        'he_anh_date',
        'he_anh_day_of_cycle',
        'he_anh_result',
        'he_anh_normal_range',
        'he_prolaction_date',
        'he_prolaction_day_of_cycle',
        'he_prolaction_result',
        'he_prolaction_normal_range',
        'he_lh_date',
        'he_lh_day_of_cycle',
        'he_lh_result',
        'he_lh_normal_range',
        'he_fsh_date',
        'he_fsh_day_of_cycle',
        'he_fsh_result',
        'he_fsh_normal_range',
        'he_testosterone_date',
        'he_testosterone_day_of_cycle',
        'he_testosterone_result',
        'he_testosterone_normal_range',
        'he_oestrogen_date',
        'he_oestrogen_day_of_cycle',
        'he_oestrogen_result',
        'he_oestrogen_normal_range',
        'he_progesterone_date',
        'he_progesterone_day_of_cycle',
        'he_progesterone_result',
        'he_progesterone_normal_range',
        'he_dheas_date',
        'he_dheas_day_of_cycle',
        'he_dheas_result',
        'he_dheas_normal_range',
        'he_cortisol_date',
        'he_cortisol_day_of_cycle',
        'he_cortisol_result',
        'he_cortisol_normal_range',
        'he_t3_date',
        'he_t3_day_of_cycle',
        'he_t3_result',
        'he_t3_normal_range',
        'he_t4_date',
        'he_t4_day_of_cycle',
        'he_t4_result',
        'he_t4_normal_range',
        'he_tsh_date',
        'he_tsh_day_of_cycle',
        'he_tsh_result',
        'he_tsh_normal_range',
        'oi_plan',
        'oi_iui',
        'oi_iuf'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function setInvImages(array $images): self
    {
        $this->inv_images = array_values(array_unique($images));

        return $this;
    }

    public function getFileByIndex(int $index): string
    {
        return $this->inv_images[$index];
    }

    /*******************************************
    * Query Scopes
    *******************************************/
    public function scopeForPatient($query, $patient)
    {
        return $query->where('patient_id', ($patient instanceof Patient) ? $patient->id : $patient);
    }

    protected $casts = [
        'inv_images' => 'array'
    ];
}
