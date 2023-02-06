<?php

/**
 * InTest
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InTest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'patient_id' => 'required|exists:patients,id',
            'p_married_year' => 'nullable|max:255',
            'p_ttc' => 'nullable|max:255',
            'p_ttc_year' => 'nullable|max:255',
            'p_toi' => 'nullable|max:255',
            'pc_method' => 'nullable|max:255',
            'pc_duration_year' => 'nullable|max:255',
            'mh_menarchat' => 'nullable|max:255',
            'mh_year' => 'nullable|max:255',
            'mh_previous_cycle' => 'nullable|date',
            'mh_present_cycle' => 'nullable|date',
            'mh_lmp' => 'nullable|max:255',
            'oh_delivery' => 'nullable|max:255',
            'oh_miscarriage' => 'nullable|max:255',
            'oh_pgti' => 'nullable|max:255',
            'oh_pa' => 'nullable|max:255',
            'pmh_thyroid' => 'nullable|max:255',
            'pmh_tuberculosis' => 'nullable|max:255',
            'pmh_hypertension' => 'nullable|max:255',
            'pmh_diabetes' => 'nullable|max:255',
            'pmh_other' => 'nullable|max:255',
            'sfh_wife' => 'nullable|max:255',
            'sfh_husband' => 'nullable|max:255',
            'eve_stature' => 'nullable|max:255',
            'eve_pulse' => 'nullable|max:255',
            'eve_height' => 'nullable|max:255',
            'eve_weight' => 'nullable|max:255',
            'eve_bp' => 'nullable|max:255',
            'eve_bmi' => 'nullable|max:255',
            'eve_anaemia' => 'nullable|max:255',
            'eve_hyriod' => 'nullable|max:255',
            'eve_hirsutism' => 'nullable|max:255',
            'eve_face' => 'nullable|max:255',
            'eve_breast' => 'nullable|max:255',
            'eve_other' => 'nullable|max:255',
            'eve_cvs' => 'nullable|max:255',
            'eve_rs' => 'nullable|max:255',
            'eve_sec_sex_character' => 'nullable|max:255',
            'eve_breast2' => 'nullable|max:255',
            'eve_public_hair' => 'nullable|max:255',
            'eve_axillary_hairs' => 'nullable|max:255',
            'ea_stature' => 'nullable|max:255',
            'ep_ps' => 'nullable|max:255',
            'ep_vulva' => 'nullable|max:255',
            'ep_pv' => 'nullable|max:255',
            'ep_veg' => 'nullable|max:255',
            'tr_year' => 'nullable|max:255',
            'husband_dob' => 'nullable|date',
            'husband_occupation' => 'nullable|max:255',
            'husband_married_previously' => 'nullable|date',
            'husband_age' => 'nullable|max:255',
            'husband_children' => 'nullable|max:255',
            'husband_coitus_frequency' => 'nullable|max:255',
            'husband_exection' => 'nullable|max:255',
            'husband_ejaculation' => 'nullable|max:255',
            'husband_orgasm' => 'nullable|date',
            'husband_drugs' => 'nullable|max:255',
            'husband_smoking' => 'nullable|max:255',
            'husband_alcohol' => 'nullable|max:255',
            'husband_semon_analysic' => 'nullable|max:255',
            'inv_hysteroscopy' => 'nullable|max:255',
            'inv_laparoscopy' => 'nullable|max:255',
            'inv_image.*' => 'nullable|mimes:jpeg,jpg,png,gif|max:20000',
            'inv_pcr_for_tb' => 'nullable|max:255',
            'inv_hysterosalpingography' => 'nullable|max:255',
            'he_anh_date' => 'nullable|date',
            'he_anh_day_of_cycle' => 'nullable|max:255',
            'he_anh_result' => 'nullable|max:255',
            'he_anh_normal_range' => 'nullable|max:255',
            'he_prolaction_date' => 'nullable|max:255',
            'he_prolaction_day_of_cycle' => 'nullable|max:255',
            'he_prolaction_result' => 'nullable|max:255',
            'he_prolaction_normal_range' => 'nullable|max:255',
            'he_lh_date' => 'nullable|date',
            'he_lh_day_of_cycle' => 'nullable|max:255',
            'he_lh_result' => 'nullable|max:255',
            'he_lh_normal_range' => 'nullable|max:255',
            'he_fsh_date' => 'nullable|date',
            'he_fsh_day_of_cycle' => 'nullable|max:255',
            'he_fsh_result' => 'nullable|max:255',
            'he_fsh_normal_range' => 'nullable|max:255',
            'he_testosterone_date' => 'nullable|date',
            'he_testosterone_day_of_cycle' => 'nullable|max:255',
            'he_testosterone_result' => 'nullable|max:255',
            'he_testosterone_normal_range' => 'nullable|max:255',
            'he_oestrogen_date' => 'nullable|date',
            'he_oestrogen_day_of_cycle' => 'nullable|max:255',
            'he_oestrogen_result' => 'nullable|max:255',
            'he_oestrogen_normal_range' => 'nullable|max:255',
            'he_progesterone_date' => 'nullable|date',
            'he_progesterone_day_of_cycle' => 'nullable|max:255',
            'he_progesterone_result' => 'nullable|max:255',
            'he_progesterone_normal_range' => 'nullable|max:255',
            'he_dheas_date' => 'nullable|date',
            'he_dheas_day_of_cycle' => 'nullable|max:255',
            'he_dheas_result' => 'nullable|max:255',
            'he_dheas_normal_range' => 'nullable|max:255',
            'he_cortisol_date' => 'nullable|date',
            'he_cortisol_day_of_cycle' => 'nullable|max:255',
            'he_cortisol_result' => 'nullable|max:255',
            'he_cortisol_normal_range' => 'nullable|max:255',
            'he_t3_date' => 'nullable|date',
            'he_t3_day_of_cycle' => 'nullable|max:255',
            'he_t3_result' => 'nullable|max:255',
            'he_t3_normal_range' => 'nullable|max:255',
            'he_t4_date' => 'nullable|date',
            'he_t4_day_of_cycle' => 'nullable|max:255',
            'he_t4_result' => 'nullable|max:255',
            'he_t4_normal_range' => 'nullable|max:255',
            'he_tsh_date' => 'nullable|date',
            'he_tsh_day_of_cycle' => 'nullable|max:255',
            'he_tsh_result' => 'nullable|max:255',
            'he_tsh_normal_range' => 'nullable|max:255',
            'oi_plan' => 'nullable|max:255',
            'oi_iui' => 'nullable|max:255',
            'oi_iuf' => 'nullable|max:255',
        ];
    }
}
