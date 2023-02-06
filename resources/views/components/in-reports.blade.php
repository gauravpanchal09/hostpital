@foreach ($reports as $report)
<div class="col-xs-12">
    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">{{ __('Infertility Report') }} #{{ $report->id }}</h3>
            <div class="box-tools pull-right">
                <button data-href="{{ route('in.edit', ['id' => $report->id]) }}" class="btn btn-box-tool">
                    <i class="fa fa-edit"></i> Edit
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="p_married_year">{{ __('Married Year') }}</label>
                        <span class="form-control">{{ $report->p_married_year ?: 'N/A' }}</span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="p_ttc">{{ __('Trying to conceive') }}</label>
                        <span class="form-control">{{ $report->p_ttc ?: 'N/A' }}</span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="p_ttc_year">{{ __('Year') }}</label>
                        <span class="form-control">{{ $report->p_ttc_year ?: 'N/A' }}</span>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="p_toi">{{ __('Type of infertility') }}</label>
                        <span class="form-control">{{ $report->p_toi ?: 'N/A' }}</span>
                    </div>
                </div>
            </div>
            <fieldset>
                <legend>{{ __('Previous Contraception') }}</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="pc_method">{{ __('Method') }}</label>
                            <span class="form-control">{{ $report->pc_method ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="pc_duration_year">{{ __('Duration year') }}</label>
                            <span class="form-control">{{ $report->pc_duration_year ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Method History') }}</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="mh_menarchat">{{ __('Menarch at') }}</label>
                            <span class="form-control">{{ $report->mh_menarchat ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="mh_year">{{ __('Year') }}</label>
                            <span class="form-control">{{ $report->mh_year ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="mh_previous_cycle">{{ __('Previous cycle') }}</label>
                            <span class="form-control">{{ $report->mh_previous_cycle ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="mh_present_cycle">{{ __('Present cycle') }}</label>
                            <span class="form-control">{{ $report->mh_present_cycle ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="mh_lmp">{{ __('L.M.P') }}</label>
                            <span class="form-control">{{ $report->mh_lmp ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Obsteric History') }}</legend>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="oh_delivery">{{ __('Delivery') }}</label>
                            <span class="form-control">{{ $report->oh_delivery ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="oh_miscarriage">{{ __('Miscarriage') }}</label>
                            <span class="form-control">{{ $report->oh_miscarriage ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="oh_termination">{{ __('Termination') }}</label>
                            <span class="form-control">{{ $report->oh_termination ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="oh_pgti">{{ __('Previous genital tract infection') }}</label>
                            <span class="form-control">{{ $report->oh_pgti ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="oh_pa">{{ __('Previous abdominal / Gynaecological surgery') }}</label>
                            <span class="form-control">{{ $report->oh_pa ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Previous Medical History') }}</legend>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="pmh_thyroid">{{ __('Thyroid') }}</label>
                            <span class="form-control">{{ $report->pmh_thyroid ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="pmh_tuberculosis">{{ __('Tuberculosis') }}</label>
                            <span class="form-control">{{ $report->pmh_tuberculosis ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="pmh_hypertension">{{ __('Hypertension') }}</label>
                            <span class="form-control">{{ $report->pmh_hypertension ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="pmh_diabetes">{{ __('Diabetes') }}</label>
                            <span class="form-control">{{ $report->pmh_diabetes ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="pmh_other">{{ __('Other') }}</label>
                            <span class="form-control">{{ $report->pmh_other ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Significant Family History') }}</legend>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sfh_wife">{{ __('Wife') }}</label>
                            <span class="form-control">{{ $report->sfh_wife ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sfh_husband">{{ __('Husband') }}</label>
                            <span class="form-control">{{ $report->sfh_husband ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Examination (+Ve )') }}</legend>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_stature">{{ __('Stature') }}</label>
                            <span class="form-control">{{ $report->eve_stature ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_pulse">{{ __('Pulse') }}</label>
                            <span class="form-control">{{ $report->eve_pulse ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="eve_height">{{ __('Height') }}</label>
                            <span class="form-control">{{ $report->eve_height ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="eve_weight">{{ __('Weight') }}</label>
                            <span class="form-control">{{ $report->eve_weight ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="eve_bp">{{ __('B.P') }}</label>
                            <span class="form-control">{{ $report->eve_bp ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="eve_bmi">{{ __('BMI') }}</label>
                            <span class="form-control">{{ $report->eve_bmi ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_anaemia">{{ __('Anaemia') }}</label>
                            <span class="form-control">{{ $report->eve_anaemia ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_hyriod">{{ __('Hyriod') }}</label>
                            <span class="form-control">{{ $report->eve_hyriod ?: 'N/A' }}</span>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_hirsutism">{{ __('Hirsutism') }}</label>
                            <span class="form-control">{{ $report->eve_hirsutism ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_face">{{ __('Face') }}</label>
                            <span class="form-control">{{ $report->eve_face ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_breast">{{ __('Breast') }}</label>
                            <span class="form-control">{{ $report->eve_breast ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_other">{{ __('Other') }}</label>
                            <span class="form-control">{{ $report->eve_other ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_cvs">{{ __('C.V.S') }}</label>
                            <span class="form-control">{{ $report->eve_cvs ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_rs">{{ __('R.S') }}</label>
                            <span class="form-control">{{ $report->eve_rs ?: 'N/A' }}</span>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_sec_sex_character">{{ __('Sec. Sex Character') }}</label>
                            <span class="form-control">{{ $report->eve_sec_sex_character ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_breast2">{{ __('Breast') }}</label>
                            <span class="form-control">{{ $report->eve_breast2 ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_public_hair">{{ __('Public hair') }}</label>
                            <span class="form-control">{{ $report->eve_public_hair ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="eve_axillary_hairs">{{ __('Axillary hairs') }}</label>
                            <span class="form-control">{{ $report->eve_axillary_hairs ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Abdomainal Examination') }}</legend>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="ea_stature">{{ __('Stature') }}</label>
                            <span class="form-control">{{ $report->ea_stature ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Pelvic Examination') }}</legend>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="ep_ps">{{ __('PS') }}</label>
                            <span class="form-control">{{ $report->ep_ps ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="ep_vulva">{{ __('Vulva') }}</label>
                            <span class="form-control">{{ $report->ep_vulva ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="ep_pv">{{ __('PV') }}</label>
                            <span class="form-control">{{ $report->ep_pv ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="ep_veg">{{ __('Vagina') }}</label>
                            <span class="form-control">{{ $report->ep_veg ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Teatment Received') }}</legend>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tr_year">{{ __('Year') }}</label>
                            <span class="form-control">{{ $report->tr_year ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Husband') }}</legend>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_dob">{{ __('Date of birth') }}</label>
                            <span class="form-control">{{ $report->husband_dob ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_occupation">{{ __('Occupation') }}</label>
                            <span class="form-control">{{ $report->husband_occupation ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_married_previously">{{ __('Married Previously') }}</label>
                            <span class="form-control">{{ $report->husband_married_previously ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_age">{{ __('Age') }}</label>
                            <span class="form-control">{{ $report->husband_age ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_children">{{ __('Children') }}</label>
                            <span class="form-control">{{ $report->husband_children ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_coitus_frequency">{{ __('Coitus frequency') }}</label>
                            <span class="form-control">{{ $report->husband_coitus_frequency ?: 'N/A' }}</span>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_exection">{{ __('Exection') }}</label>
                            <span class="form-control">{{ $report->husband_exection ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_ejaculation">{{ __('Ejaculation') }}</label>
                            <span class="form-control">{{ $report->husband_ejaculation ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_orgasm">{{ __('Orgasm') }}</label>
                            <span class="form-control">{{ $report->husband_orgasm ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_drugs">{{ __('Drugs') }}</label>
                            <span class="form-control">{{ $report->husband_drugs ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_smoking">{{ __('Smoking') }}</label>
                            <span class="form-control">{{ $report->husband_smoking ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="husband_alcohol">{{ __('Alcohol') }}</label>
                            <span class="form-control">{{ $report->husband_alcohol ?: 'N/A' }}</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="husband_semon_analysic">{{ __('Semon analysic') }}</label>
                            <span class="form-control">{{ $report->husband_semon_analysic ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>{{ __('Investigation') }}</legend>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inv_hysteroscopy">{{ __('Hysteroscopy') }}</label>
                            <span class="form-control">{{ $report->inv_hysteroscopy ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inv_laparoscopy">{{ __('Laparoscopy') }}</label>
                            <span class="form-control">{{ $report->inv_laparoscopy ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inv_images">{{ __('Images') }}</label>
                            @if ($report->inv_images)
                                <div class="row">
                                    @foreach($report->inv_images as $index => $file)
                                        <div class="col-md-6">
                                            <button data-href="{{ route('in.deleteImage', ['id' => $report->id, 'index' => $index]) }}" class="btn btn-remove pull-right">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            <img src="{{ route('in.displayImage', ['id' => $report->id, 'index' => $index]) }}" class="img-thumbnail" />
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <span class="form-control">{{ __('N/A') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inv_pcr_for_tb">{{ __('PCR for TB') }}</label>
                            <span class="form-control">{{ $report->inv_pcr_for_tb ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="inv_hysterosalpingography">{{ __('Hysterosalpingography') }}</label>
                            <span class="form-control">{{ $report->inv_hysterosalpingography ?: 'N/A' }}</span>
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
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_anh_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_anh_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_anh_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_anh_normal_range ?: 'N/A' }}</span>
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
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_prolaction_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_prolaction_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_prolaction_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_prolaction_normal_range ?: 'N/A' }}</span>
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
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_lh_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_lh_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_lh_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_lh_normal_range ?: 'N/A' }}</span>
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
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_fsh_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_fsh_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_fsh_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_fsh_normal_range ?: 'N/A' }}</span>
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
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_testosterone_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_testosterone_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_testosterone_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_testosterone_normal_range ?: 'N/A' }}</span>
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
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_oestrogen_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_oestrogen_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_oestrogen_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_oestrogen_normal_range ?: 'N/A' }}</span>
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
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_progesterone_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_progesterone_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_progesterone_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_progesterone_normal_range ?: 'N/A' }}</span>
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
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_dheas_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_dheas_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_dheas_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_dheas_normal_range ?: 'N/A' }}</span>
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
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_cortisol_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_cortisol_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_cortisol_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_cortisol_normal_range ?: 'N/A' }}</span>
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
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_t3_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_t3_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_t3_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_t3_normal_range ?: 'N/A' }}</span>
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
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_t4_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_t4_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_t4_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_t4_normal_range ?: 'N/A' }}</span>
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
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_tsh_date ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_tsh_day_of_cycle ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_tsh_result ?: 'N/A' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <span class="form-control">{{ $report->he_tsh_normal_range ?: 'N/A' }}</span>
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
                        <div class="form-group">
                            <label for="oi_plan">{{ __('Plan') }}</label>
                            <span class="form-control">{{ $report->oi_plan ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="oi_iui">{{ __('IUI') }}</label>
                            <span class="form-control">{{ $report->oi_iui ?: 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="oi_iuf">{{ __('IUF') }}</label>
                            <span class="form-control">{{ $report->oi_iuf ?: 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        <!-- /.box-body -->
        <!-- Loading (remove the following to stop the loading)-->
        <div class="overlay">
            <i class="fa fa-refresh fa-spin"></i>
        </div>
        <!-- end loading -->
    </div>
    <!-- /.box -->
</div>
@endforeach

@if (count($reports) === 0)
<div class="col-xs-12">
    <div class="box box-warning box-solid">
        <div class="box-body">{{ __('Infertility Report not found for this patient.') }}</div>
    </div>
</div>
@endif
