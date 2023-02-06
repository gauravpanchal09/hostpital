<form method="POST" action="{{ $test ? route('in.update', $test) : route('in.store') }}" enctype="multipart/form-data">
    @if ($test)
        @method('PUT')
    @endif
    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="form-group @error('patient_id') has-error @enderror">
                <label for="patient_id">{{ __('Patient') }}</label>
                <select name="patient_id" class="form-control select2">
                    @foreach ($patients as $patient)
                        <option value="{{ $patient->id }}" @if($test ? $test->patient->id == $patient->id : old('patient_id') == $patient->id) selected @endif>
                            #{{ $patient->registration_number }} {{ $patient->first_name }} {{ $patient->last_name }}
                        </option>
                    @endforeach
                </select>

                @error('patient_id')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group @error('p_married_year') has-error @enderror">
                <label for="p_married_year">{{ __('Married Year') }}</label>
                <input type="text" name="p_married_year" class="form-control" value="{{ $test ? $test->p_married_year : old('p_married_year') }}">
                @error('p_married_year')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group @error('p_ttc') has-error @enderror">
                <label for="p_ttc">{{ __('Trying to conceive') }}</label>
                <input type="text" name="p_ttc" class="form-control" value="{{ $test ? $test->p_ttc : old('p_ttc') }}">
                @error('p_ttc')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group @error('p_ttc_year') has-error @enderror">
                <label for="p_ttc_year">{{ __('Year') }}</label>
                <input type="text" name="p_ttc_year" class="form-control" value="{{ $test ? $test->p_ttc_year : old('p_ttc_year') }}">
                @error('p_ttc_year')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group @error('p_toi') has-error @enderror">
                <label for="p_toi">{{ __('Type of infertility') }}</label>
                <input type="text" name="p_toi" class="form-control" value="{{ $test ? $test->p_toi : old('p_toi') }}">
                @error('p_toi')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <fieldset>
        <legend>{{ __('Previous Contraception') }}</legend>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group @error('pc_method') has-error @enderror">
                    <label for="pc_method">{{ __('Method') }}</label>
                    <input type="text" name="pc_method" class="form-control" value="{{ $test ? $test->pc_method : old('pc_method') }}">
                    @error('pc_method')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('pc_duration_year') has-error @enderror">
                    <label for="pc_duration_year">{{ __('Duration year') }}</label>
                    <input type="text" name="pc_duration_year" class="form-control" value="{{ $test ? $test->pc_duration_year : old('pc_duration_year') }}">
                    @error('pc_duration_year')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>{{ __('Method History') }}</legend>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group @error('mh_menarchat') has-error @enderror">
                    <label for="mh_menarchat">{{ __('Menarch at') }}</label>
                    <input type="text" name="mh_menarchat" class="form-control" value="{{ $test ? $test->mh_menarchat : old('mh_menarchat') }}">
                    @error('mh_menarchat')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('mh_year') has-error @enderror">
                    <label for="mh_year">{{ __('Year') }}</label>
                    <input type="text" name="mh_year" class="form-control" value="{{ $test ? $test->mh_year : old('mh_year') }}">
                    @error('mh_year')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('mh_previous_cycle') has-error @enderror">
                    <label for="mh_previous_cycle">{{ __('Previous cycle') }}</label>
                    <input type="date" name="mh_previous_cycle" class="form-control" value="{{ $test ? $test->mh_previous_cycle : old('mh_previous_cycle') }}">
                    @error('mh_previous_cycle')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('mh_present_cycle') has-error @enderror">
                    <label for="mh_present_cycle">{{ __('Present cycle') }}</label>
                    <input type="date" name="mh_present_cycle" class="form-control" value="{{ $test ? $test->mh_present_cycle : old('mh_present_cycle') }}">
                    @error('mh_present_cycle')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('mh_lmp') has-error @enderror">
                    <label for="mh_lmp">{{ __('L.M.P') }}</label>
                    <input type="text" name="mh_lmp" class="form-control" value="{{ $test ? $test->mh_lmp : old('mh_lmp') }}">
                    @error('mh_lmp')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>{{ __('Obsteric History') }}</legend>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group @error('oh_delivery') has-error @enderror">
                    <label for="oh_delivery">{{ __('Delivery') }}</label>
                    <input type="text" name="oh_delivery" class="form-control" value="{{ $test ? $test->oh_delivery : old('oh_delivery') }}">
                    @error('oh_delivery')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('oh_miscarriage') has-error @enderror">
                    <label for="oh_miscarriage">{{ __('Miscarriage') }}</label>
                    <input type="text" name="oh_miscarriage" class="form-control" value="{{ $test ? $test->oh_miscarriage : old('oh_miscarriage') }}">
                    @error('oh_miscarriage')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('oh_pgti') has-error @enderror">
                    <label for="oh_pgti">{{ __('Previous genital tract infection') }}</label>
                    <input type="text" name="oh_pgti" class="form-control" value="{{ $test ? $test->oh_pgti : old('oh_pgti') }}">
                    @error('oh_pgti')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group @error('oh_pa') has-error @enderror">
                    <label for="oh_pa">{{ __('Previous abdominal / Gynaecological surgery') }}</label>
                    <textarea name="oh_pa" class="form-control">{{ $test ? $test->oh_pa : old('oh_pa') }}</textarea>
                    @error('oh_pa')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>{{ __('Previous Medical History') }}</legend>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group @error('pmh_thyroid') has-error @enderror">
                    <label for="pmh_thyroid">{{ __('Thyroid') }}</label>
                    <input type="text" name="pmh_thyroid" class="form-control" value="{{ $test ? $test->pmh_thyroid : old('pmh_thyroid') }}">
                    @error('pmh_thyroid')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('pmh_tuberculosis') has-error @enderror">
                    <label for="pmh_tuberculosis">{{ __('Tuberculosis') }}</label>
                    <input type="text" name="pmh_tuberculosis" class="form-control" value="{{ $test ? $test->pmh_tuberculosis : old('pmh_tuberculosis') }}">
                    @error('pmh_tuberculosis')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('pmh_hypertension') has-error @enderror">
                    <label for="pmh_hypertension">{{ __('Hypertension') }}</label>
                    <input type="text" name="pmh_hypertension" class="form-control" value="{{ $test ? $test->pmh_hypertension : old('pmh_hypertension') }}">
                    @error('pmh_hypertension')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group @error('pmh_diabetes') has-error @enderror">
                    <label for="pmh_diabetes">{{ __('Diabetes') }}</label>
                    <input type="text" name="pmh_diabetes" class="form-control" value="{{ $test ? $test->pmh_diabetes : old('pmh_diabetes') }}">
                    @error('pmh_diabetes')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group @error('pmh_other') has-error @enderror">
                    <label for="pmh_other">{{ __('Other') }}</label>
                    <input type="text" name="pmh_other" class="form-control" value="{{ $test ? $test->pmh_other : old('pmh_other') }}">
                    @error('pmh_other')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>{{ __('Significant Family History') }}</legend>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group @error('sfh_wife') has-error @enderror">
                    <label for="sfh_wife">{{ __('Wife') }}</label>
                    <input type="text" name="sfh_wife" class="form-control" value="{{ $test ? $test->sfh_wife : old('sfh_wife') }}">
                    @error('sfh_wife')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('sfh_husband') has-error @enderror">
                    <label for="sfh_husband">{{ __('Husband') }}</label>
                    <input type="text" name="sfh_husband" class="form-control" value="{{ $test ? $test->sfh_husband : old('sfh_husband') }}">
                    @error('sfh_husband')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>{{ __('Examination (+Ve )') }}</legend>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group @error('eve_stature') has-error @enderror">
                    <label for="eve_stature">{{ __('Stature') }}</label>
                    <input type="text" name="eve_stature" class="form-control" value="{{ $test ? $test->eve_stature : old('eve_stature') }}">
                    @error('eve_stature')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('eve_pulse') has-error @enderror">
                    <label for="eve_pulse">{{ __('Pulse') }}</label>
                    <input type="text" name="eve_pulse" class="form-control" value="{{ $test ? $test->eve_pulse : old('eve_pulse') }}">
                    @error('eve_pulse')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group @error('eve_height') has-error @enderror">
                    <label for="eve_height">{{ __('Height') }}</label>
                    <input type="number" name="eve_height" class="form-control" value="{{ $test ? $test->eve_height : old('eve_height') }}">
                    @error('eve_height')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group @error('eve_weight') has-error @enderror">
                    <label for="eve_weight">{{ __('Weight') }}</label>
                    <input type="text" name="eve_weight" class="form-control" value="{{ $test ? $test->eve_weight : old('eve_weight') }}">
                    @error('eve_weight')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group @error('eve_bp') has-error @enderror">
                    <label for="eve_bp">{{ __('B.P') }}</label>
                    <input type="text" name="eve_bp" class="form-control" value="{{ $test ? $test->eve_bp : old('eve_bp') }}">
                    @error('eve_bp')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group @error('eve_bmi') has-error @enderror">
                    <label for="eve_bmi">{{ __('BMI') }}</label>
                    <input type="text" name="eve_bmi" class="form-control" value="{{ $test ? $test->eve_bmi : old('eve_bmi') }}">
                    @error('eve_bmi')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('eve_anaemia') has-error @enderror">
                    <label for="eve_anaemia">{{ __('Anaemia') }}</label>
                    <input type="text" name="eve_anaemia" class="form-control" value="{{ $test ? $test->eve_anaemia : old('eve_anaemia') }}">
                    @error('eve_anaemia')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('eve_hyriod') has-error @enderror">
                    <label for="eve_hyriod">{{ __('Hyriod') }}</label>
                    <input type="text" name="eve_hyriod" class="form-control" value="{{ $test ? $test->eve_hyriod : old('eve_hyriod') }}">
                    @error('eve_hyriod')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group @error('eve_hirsutism') has-error @enderror">
                    <label for="eve_hirsutism">{{ __('Hirsutism') }}</label>
                    <input type="text" name="eve_hirsutism" class="form-control" value="{{ $test ? $test->eve_hirsutism : old('eve_hirsutism') }}">
                    @error('eve_hirsutism')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('eve_face') has-error @enderror">
                    <label for="eve_face">{{ __('Face') }}</label>
                    <input type="text" name="eve_face" class="form-control" value="{{ $test ? $test->eve_face : old('eve_face') }}">
                    @error('eve_face')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('eve_breast') has-error @enderror">
                    <label for="eve_breast">{{ __('Breast') }}</label>
                    <input type="text" name="eve_breast" class="form-control" value="{{ $test ? $test->eve_breast : old('eve_breast') }}">
                    @error('eve_breast')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('eve_other') has-error @enderror">
                    <label for="eve_other">{{ __('Other') }}</label>
                    <input type="text" name="eve_other" class="form-control" value="{{ $test ? $test->eve_other : old('eve_other') }}">
                    @error('eve_other')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('eve_cvs') has-error @enderror">
                    <label for="eve_cvs">{{ __('C.V.S') }}</label>
                    <input type="text" name="eve_cvs" class="form-control" value="{{ $test ? $test->eve_cvs : old('eve_cvs') }}">
                    @error('eve_cvs')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('eve_rs') has-error @enderror">
                    <label for="eve_rs">{{ __('R.S') }}</label>
                    <input type="text" name="eve_rs" class="form-control" value="{{ $test ? $test->eve_rs : old('eve_rs') }}">
                    @error('eve_rs')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group @error('eve_sec_sex_character') has-error @enderror">
                    <label for="eve_sec_sex_character">{{ __('Sec. Sex Character') }}</label>
                    <input type="text" name="eve_sec_sex_character" class="form-control" value="{{ $test ? $test->eve_sec_sex_character : old('eve_sec_sex_character') }}">
                    @error('eve_sec_sex_character')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('eve_breast2') has-error @enderror">
                    <label for="eve_breast2">{{ __('Breast') }}</label>
                    <input type="text" name="eve_breast2" class="form-control" value="{{ $test ? $test->eve_breast2 : old('eve_breast2') }}">
                    @error('eve_breast2')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('eve_public_hair') has-error @enderror">
                    <label for="eve_public_hair">{{ __('Public hair') }}</label>
                    <input type="text" name="eve_public_hair" class="form-control" value="{{ $test ? $test->eve_public_hair : old('eve_public_hair') }}">
                    @error('eve_public_hair')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('eve_axillary_hairs') has-error @enderror">
                    <label for="eve_axillary_hairs">{{ __('Axillary hairs') }}</label>
                    <input type="text" name="eve_axillary_hairs" class="form-control" value="{{ $test ? $test->eve_axillary_hairs : old('eve_axillary_hairs') }}">
                    @error('eve_axillary_hairs')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>{{ __('Abdomainal Examination') }}</legend>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group @error('ea_stature') has-error @enderror">
                    <label for="ea_stature">{{ __('Stature') }}</label>
                    <textarea name="ea_stature" class="form-control">{{ $test ? $test->ea_stature : old('ea_stature') }}</textarea>
                    @error('ea_stature')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>{{ __('Pelvic Examination') }}</legend>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group @error('ep_ps') has-error @enderror">
                    <label for="ep_ps">{{ __('PS') }}</label>
                    <input type="text" name="eve_stature" class="form-control" value="{{ $test ? $test->ep_ps : old('ep_ps') }}">
                    @error('ep_ps')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group @error('ep_vulva') has-error @enderror">
                    <label for="ep_vulva">{{ __('Vulva') }}</label>
                    <input type="text" name="ep_vulva" class="form-control" value="{{ $test ? $test->ep_vulva : old('ep_vulva') }}">
                    @error('ep_vulva')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group @error('ep_pv') has-error @enderror">
                    <label for="ep_pv">{{ __('PV') }}</label>
                    <input type="text" name="ep_pv" class="form-control" value="{{ $test ? $test->ep_pv : old('ep_pv') }}">
                    @error('ep_pv')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group @error('ep_veg') has-error @enderror">
                    <label for="ep_veg">{{ __('Vagina') }}</label>
                    <input type="text" name="ep_veg" class="form-control" value="{{ $test ? $test->ep_veg : old('ep_veg') }}">
                    @error('ep_veg')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>{{ __('Teatment Received') }}</legend>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group @error('tr_year') has-error @enderror">
                    <label for="tr_year">{{ __('Year') }}</label>
                    <input type="text" name="tr_year" class="form-control" value="{{ $test ? $test->tr_year : old('tr_year') }}" />
                    @error('tr_year')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>{{ __('Husband') }}</legend>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group @error('husband_dob') has-error @enderror">
                    <label for="husband_dob">{{ __('Date of birth') }}</label>
                    <input type="date" name="husband_dob" class="form-control" value="{{ $test ? $test->husband_dob : old('husband_dob') }}" />
                    @error('husband_dob')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('husband_occupation') has-error @enderror">
                    <label for="husband_occupation">{{ __('Occupation') }}</label>
                    <input type="text" name="husband_occupation" class="form-control" value="{{ $test ? $test->husband_occupation : old('husband_occupation') }}" />
                    @error('husband_occupation')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('husband_married_previously') has-error @enderror">
                    <label for="husband_married_previously">{{ __('Married Previously') }}</label>
                    <input type="date" name="husband_married_previously" class="form-control" value="{{ $test ? $test->husband_married_previously : old('husband_married_previously') }}" />
                    @error('husband_married_previously')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('husband_age') has-error @enderror">
                    <label for="husband_age">{{ __('Age') }}</label>
                    <input type="text" name="husband_age" class="form-control" value="{{ $test ? $test->husband_age : old('husband_age') }}" />
                    @error('husband_age')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('husband_children') has-error @enderror">
                    <label for="husband_children">{{ __('Children') }}</label>
                    <input type="text" name="husband_children" class="form-control" value="{{ $test ? $test->husband_children : old('husband_children') }}" />
                    @error('husband_children')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('husband_coitus_frequency') has-error @enderror">
                    <label for="husband_coitus_frequency">{{ __('Coitus frequency') }}</label>
                    <input type="text" name="husband_coitus_frequency" class="form-control" value="{{ $test ? $test->husband_coitus_frequency : old('husband_coitus_frequency') }}" />
                    @error('husband_coitus_frequency')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group @error('husband_exection') has-error @enderror">
                    <label for="husband_exection">{{ __('Exection') }}</label>
                    <input type="text" name="husband_exection" class="form-control" value="{{ $test ? $test->husband_exection : old('husband_exection') }}" />
                    @error('husband_exection')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('husband_ejaculation') has-error @enderror">
                    <label for="husband_ejaculation">{{ __('Ejaculation') }}</label>
                    <input type="text" name="husband_ejaculation" class="form-control" value="{{ $test ? $test->husband_ejaculation : old('husband_ejaculation') }}" />
                    @error('husband_ejaculation')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('husband_orgasm') has-error @enderror">
                    <label for="husband_orgasm">{{ __('Orgasm') }}</label>
                    <input type="date" name="husband_orgasm" class="form-control" value="{{ $test ? $test->husband_orgasm : old('husband_orgasm') }}" />
                    @error('husband_orgasm')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('husband_drugs') has-error @enderror">
                    <label for="husband_drugs">{{ __('Drugs') }}</label>
                    <input type="text" name="husband_drugs" class="form-control" value="{{ $test ? $test->husband_drugs : old('husband_drugs') }}" />
                    @error('husband_drugs')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('husband_smoking') has-error @enderror">
                    <label for="husband_smoking">{{ __('Smoking') }}</label>
                    <input type="text" name="husband_smoking" class="form-control" value="{{ $test ? $test->husband_smoking : old('husband_smoking') }}" />
                    @error('husband_smoking')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group @error('husband_alcohol') has-error @enderror">
                    <label for="husband_alcohol">{{ __('Alcohol') }}</label>
                    <input type="text" name="husband_alcohol" class="form-control" value="{{ $test ? $test->husband_alcohol : old('husband_alcohol') }}" />
                    @error('husband_alcohol')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group @error('husband_semon_analysic') has-error @enderror">
                    <label for="husband_semon_analysic">{{ __('Semon analysic') }}</label>
                    <textarea name="husband_semon_analysic" class="form-control">{{ $test ? $test->husband_semon_analysic : old('husband_semon_analysic') }}</textarea>
                    @error('husband_semon_analysic')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>{{ __('Investigation') }}</legend>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group @error('inv_hysteroscopy') has-error @enderror">
                    <label for="inv_hysteroscopy">{{ __('Hysteroscopy') }}</label>
                    <textarea name="inv_hysteroscopy" class="form-control">{{ $test ? $test->inv_hysteroscopy : old('inv_hysteroscopy') }}</textarea>
                    @error('inv_hysteroscopy')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('inv_laparoscopy') has-error @enderror">
                    <label for="inv_laparoscopy">{{ __('Laparoscopy') }}</label>
                    <textarea name="inv_laparoscopy" class="form-control">{{ $test ? $test->inv_laparoscopy : old('inv_laparoscopy') }}</textarea>
                    @error('inv_laparoscopy')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('inv_image') has-error @enderror">
                    <label for="inv_image">{{ __('Image') }}</label>
                    <input type="file" name="inv_image[]" class="form-control" multiple="true"/>
                    @error('inv_image')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('inv_pcr_for_tb') has-error @enderror">
                    <label for="inv_pcr_for_tb">{{ __('PCR for TB') }}</label>
                    <input type="text" name="inv_pcr_for_tb" class="form-control" value="{{ $test ? $test->inv_pcr_for_tb : old('inv_pcr_for_tb') }}" />
                    @error('inv_pcr_for_tb')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group @error('inv_hysterosalpingography') has-error @enderror">
                    <label for="inv_hysterosalpingography">{{ __('Hysterosalpingography') }}</label>
                    <textarea name="inv_hysterosalpingography" class="form-control">{{ $test ? $test->inv_hysterosalpingography : old('inv_hysterosalpingography') }}</textarea>
                    @error('inv_hysterosalpingography')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>{{ __('Hormonal Estimation') }}</legend>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>Day of cycle</th>
                        <th>Result</th>
                        <th>Normal range</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" value="ANH" readonly/>
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_anh_date') has-error @enderror">
                                <input type="date" name="he_anh_date" class="form-control" value="{{ $test ? $test->he_anh_date : old('he_anh_date') }}" />
                                @error('he_anh_date')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_anh_day_of_cycle') has-error @enderror">
                                <input type="text" name="he_anh_day_of_cycle" class="form-control" value="{{ $test ? $test->he_anh_day_of_cycle : old('he_anh_day_of_cycle') }}" />
                                @error('he_anh_day_of_cycle')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_anh_result') has-error @enderror">
                                <input type="text" name="he_anh_result" class="form-control" value="{{ $test ? $test->he_anh_result : old('he_anh_result') }}" />
                                @error('he_anh_result')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_anh_normal_range') has-error @enderror">
                                <input type="text" name="he_anh_normal_range" class="form-control" value="{{ $test ? $test->he_anh_normal_range : old('he_anh_normal_range') }}" />
                                @error('he_anh_normal_range')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" value="Prolaction" readonly/>
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_prolaction_date') has-error @enderror">
                                <input type="date" name="he_prolaction_date" class="form-control" value="{{ $test ? $test->he_prolaction_date : old('he_prolaction_date') }}" />
                                @error('he_prolaction_date')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_prolaction_day_of_cycle') has-error @enderror">
                                <input type="text" name="he_prolaction_day_of_cycle" class="form-control" value="{{ $test ? $test->he_prolaction_day_of_cycle : old('he_prolaction_day_of_cycle') }}" />
                                @error('he_prolaction_day_of_cycle')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_prolaction_result') has-error @enderror">
                                <input type="text" name="he_prolaction_result" class="form-control" value="{{ $test ? $test->he_prolaction_result : old('he_prolaction_result') }}" />
                                @error('he_prolaction_result')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_prolaction_normal_range') has-error @enderror">
                                <input type="text" name="he_prolaction_normal_range" class="form-control" value="{{ $test ? $test->he_prolaction_normal_range : old('he_prolaction_normal_range') }}" />
                                @error('he_prolaction_normal_range')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" value="L.H" readonly/>
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_lh_date') has-error @enderror">
                                <input type="date" name="he_lh_date" class="form-control" value="{{ $test ? $test->he_lh_date : old('he_lh_date') }}" />
                                @error('he_lh_date')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_lh_day_of_cycle') has-error @enderror">
                                <input type="text" name="he_lh_day_of_cycle" class="form-control" value="{{ $test ? $test->he_lh_day_of_cycle : old('he_lh_day_of_cycle') }}" />
                                @error('he_lh_day_of_cycle')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_lh_result') has-error @enderror">
                                <input type="text" name="he_lh_result" class="form-control" value="{{ $test ? $test->he_lh_result : old('he_lh_result') }}" />
                                @error('he_lh_result')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_lh_normal_range') has-error @enderror">
                                <input type="text" name="he_lh_normal_range" class="form-control" value="{{ $test ? $test->he_lh_normal_range : old('he_lh_normal_range') }}" />
                                @error('he_lh_normal_range')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" value="F.S.H" readonly/>
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_fsh_date') has-error @enderror">
                                <input type="date" name="he_fsh_date" class="form-control" value="{{ $test ? $test->he_fsh_date : old('he_fsh_date') }}" />
                                @error('he_fsh_date')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_fsh_day_of_cycle') has-error @enderror">
                                <input type="text" name="he_fsh_day_of_cycle" class="form-control" value="{{ $test ? $test->he_fsh_day_of_cycle : old('he_fsh_day_of_cycle') }}" />
                                @error('he_fsh_day_of_cycle')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_fsh_result') has-error @enderror">
                                <input type="text" name="he_fsh_result" class="form-control" value="{{ $test ? $test->he_fsh_result : old('he_fsh_result') }}" />
                                @error('he_fsh_result')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_fsh_normal_range') has-error @enderror">
                                <input type="text" name="he_fsh_normal_range" class="form-control" value="{{ $test ? $test->he_fsh_normal_range : old('he_fsh_normal_range') }}" />
                                @error('he_fsh_normal_range')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" value="Testosterone" readonly/>
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_testosterone_date') has-error @enderror">
                                <input type="date" name="he_testosterone_date" class="form-control" value="{{ $test ? $test->he_testosterone_date : old('he_testosterone_date') }}" />
                                @error('he_testosterone_date')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_testosterone_day_of_cycle') has-error @enderror">
                                <input type="text" name="he_testosterone_day_of_cycle" class="form-control" value="{{ $test ? $test->he_testosterone_day_of_cycle : old('he_testosterone_day_of_cycle') }}" />
                                @error('he_testosterone_day_of_cycle')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_testosterone_result') has-error @enderror">
                                <input type="text" name="he_testosterone_result" class="form-control" value="{{ $test ? $test->he_testosterone_result : old('he_testosterone_result') }}" />
                                @error('he_testosterone_result')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_testosterone_normal_range') has-error @enderror">
                                <input type="text" name="he_testosterone_normal_range" class="form-control" value="{{ $test ? $test->he_testosterone_normal_range : old('he_testosterone_normal_range') }}" />
                                @error('he_testosterone_normal_range')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" value="Oestrogen" readonly/>
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_oestrogen_date') has-error @enderror">
                                <input type="date" name="he_oestrogen_date" class="form-control" value="{{ $test ? $test->he_oestrogen_date : old('he_oestrogen_date') }}" />
                                @error('he_oestrogen_date')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_oestrogen_day_of_cycle') has-error @enderror">
                                <input type="text" name="he_oestrogen_day_of_cycle" class="form-control" value="{{ $test ? $test->he_oestrogen_day_of_cycle : old('he_oestrogen_day_of_cycle') }}" />
                                @error('he_oestrogen_day_of_cycle')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_oestrogen_result') has-error @enderror">
                                <input type="text" name="he_oestrogen_result" class="form-control" value="{{ $test ? $test->he_oestrogen_result : old('he_oestrogen_result') }}" />
                                @error('he_oestrogen_result')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_oestrogen_normal_range') has-error @enderror">
                                <input type="text" name="he_oestrogen_normal_range" class="form-control" value="{{ $test ? $test->he_oestrogen_normal_range : old('he_oestrogen_normal_range') }}" />
                                @error('he_oestrogen_normal_range')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" value="Progesterone" readonly/>
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_progesterone_date') has-error @enderror">
                                <input type="date" name="he_progesterone_date" class="form-control" value="{{ $test ? $test->he_progesterone_date : old('he_progesterone_date') }}" />
                                @error('he_progesterone_date')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_progesterone_day_of_cycle') has-error @enderror">
                                <input type="text" name="he_progesterone_day_of_cycle" class="form-control" value="{{ $test ? $test->he_progesterone_day_of_cycle : old('he_progesterone_day_of_cycle') }}" />
                                @error('he_progesterone_day_of_cycle')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_progesterone_result') has-error @enderror">
                                <input type="text" name="he_progesterone_result" class="form-control" value="{{ $test ? $test->he_progesterone_result : old('he_progesterone_result') }}" />
                                @error('he_progesterone_result')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_progesterone_normal_range') has-error @enderror">
                                <input type="text" name="he_progesterone_normal_range" class="form-control" value="{{ $test ? $test->he_progesterone_normal_range : old('he_progesterone_normal_range') }}" />
                                @error('he_progesterone_normal_range')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" value="DHEAS" readonly/>
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_dheas_date') has-error @enderror">
                                <input type="date" name="he_dheas_date" class="form-control" value="{{ $test ? $test->he_dheas_date : old('he_dheas_date') }}" />
                                @error('he_dheas_date')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_dheas_day_of_cycle') has-error @enderror">
                                <input type="text" name="he_dheas_day_of_cycle" class="form-control" value="{{ $test ? $test->he_dheas_day_of_cycle : old('he_dheas_day_of_cycle') }}" />
                                @error('he_dheas_day_of_cycle')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_dheas_result') has-error @enderror">
                                <input type="text" name="he_dheas_result" class="form-control" value="{{ $test ? $test->he_dheas_result : old('he_dheas_result') }}" />
                                @error('he_dheas_result')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_dheas_normal_range') has-error @enderror">
                                <input type="text" name="he_dheas_normal_range" class="form-control" value="{{ $test ? $test->he_dheas_normal_range : old('he_dheas_normal_range') }}" />
                                @error('he_dheas_normal_range')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" value="Cortisol" readonly/>
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_cortisol_date') has-error @enderror">
                                <input type="date" name="he_cortisol_date" class="form-control" value="{{ $test ? $test->he_cortisol_date : old('he_cortisol_date') }}" />
                                @error('he_cortisol_date')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_cortisol_day_of_cycle') has-error @enderror">
                                <input type="text" name="he_cortisol_day_of_cycle" class="form-control" value="{{ $test ? $test->he_cortisol_day_of_cycle : old('he_cortisol_day_of_cycle') }}" />
                                @error('he_cortisol_day_of_cycle')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_cortisol_result') has-error @enderror">
                                <input type="text" name="he_cortisol_result" class="form-control" value="{{ $test ? $test->he_cortisol_result : old('he_cortisol_result') }}" />
                                @error('he_cortisol_result')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_cortisol_normal_range') has-error @enderror">
                                <input type="text" name="he_cortisol_normal_range" class="form-control" value="{{ $test ? $test->he_cortisol_normal_range : old('he_cortisol_normal_range') }}" />
                                @error('he_cortisol_normal_range')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" value="T3" readonly/>
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_t3_date') has-error @enderror">
                                <input type="date" name="he_t3_date" class="form-control" value="{{ $test ? $test->he_t3_date : old('he_t3_date') }}" />
                                @error('he_t3_date')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_t3_day_of_cycle') has-error @enderror">
                                <input type="text" name="he_t3_day_of_cycle" class="form-control" value="{{ $test ? $test->he_t3_day_of_cycle : old('he_t3_day_of_cycle') }}" />
                                @error('he_t3_day_of_cycle')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_t3_result') has-error @enderror">
                                <input type="text" name="he_t3_result" class="form-control" value="{{ $test ? $test->he_t3_result : old('he_t3_result') }}" />
                                @error('he_t3_result')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_t3_normal_range') has-error @enderror">
                                <input type="text" name="he_t3_normal_range" class="form-control" value="{{ $test ? $test->he_t3_normal_range : old('he_t3_normal_range') }}" />
                                @error('he_t3_normal_range')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" value="T4" readonly/>
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_t4_date') has-error @enderror">
                                <input type="date" name="he_t4_date" class="form-control" value="{{ $test ? $test->he_t4_date : old('he_t4_date') }}" />
                                @error('he_t4_date')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_t4_day_of_cycle') has-error @enderror">
                                <input type="text" name="he_t4_day_of_cycle" class="form-control" value="{{ $test ? $test->he_t4_day_of_cycle : old('he_t4_day_of_cycle') }}" />
                                @error('he_t4_day_of_cycle')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_t4_result') has-error @enderror">
                                <input type="text" name="he_t4_result" class="form-control" value="{{ $test ? $test->he_t4_result : old('he_t4_result') }}" />
                                @error('he_t4_result')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_t4_normal_range') has-error @enderror">
                                <input type="text" name="he_t4_normal_range" class="form-control" value="{{ $test ? $test->he_t4_normal_range : old('he_t4_normal_range') }}" />
                                @error('he_t4_normal_range')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" value="T.S.H" readonly/>
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_tsh_date') has-error @enderror">
                                <input type="date" name="he_tsh_date" class="form-control" value="{{ $test ? $test->he_tsh_date : old('he_tsh_date') }}" />
                                @error('he_tsh_date')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_tsh_day_of_cycle') has-error @enderror">
                                <input type="text" name="he_tsh_day_of_cycle" class="form-control" value="{{ $test ? $test->he_tsh_day_of_cycle : old('he_tsh_day_of_cycle') }}" />
                                @error('he_tsh_day_of_cycle')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_tsh_result') has-error @enderror">
                                <input type="text" name="he_tsh_result" class="form-control" value="{{ $test ? $test->he_tsh_result : old('he_tsh_result') }}" />
                                @error('he_tsh_result')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                        <td>
                            <div class="form-group @error('he_tsh_normal_range') has-error @enderror">
                                <input type="text" name="he_tsh_normal_range" class="form-control" value="{{ $test ? $test->he_tsh_normal_range : old('he_tsh_normal_range') }}" />
                                @error('he_tsh_normal_range')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </fieldset>
    <fieldset>
        <legend>{{ __('OI') }}</legend>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group @error('oi_plan') has-error @enderror">
                    <label for="oi_plan">{{ __('Plan') }}</label>
                    <input type="text" name="oi_plan" class="form-control" value="{{ $test ? $test->oi_plan : old('oi_plan') }}" />
                    @error('oi_plan')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('oi_iui') has-error @enderror">
                    <label for="oi_iui">{{ __('IUI') }}</label>
                    <input type="text" name="oi_iui" class="form-control" value="{{ $test ? $test->oi_iui : old('oi_iui') }}" />
                    @error('oi_iui')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group @error('oi_iuf') has-error @enderror">
                    <label for="oi_iuf">{{ __('IUF') }}</label>
                    <input type="text" name="oi_iuf" class="form-control" value="{{ $test ? $test->oi_iuf : old('oi_iuf') }}" />
                    @error('oi_iuf')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </fieldset>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ $test ? __('Update') : __('Submit') }}</button>
    </div>
</form>
