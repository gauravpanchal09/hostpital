<form method="POST" action="{{ $patient ? route('patients.update', $patient) : route('patients.store') }}">
    @if ($patient)
        @method('PUT')
    @endif
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group @error('first_name') has-error @enderror">
                <label for="first_name">{{ __('First Name') }}</label>
                <input type="text" name="first_name" class="form-control" value="{{ $patient ? $patient->first_name : old('first_name') }}" required autofocus>
                @error('first_name')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group @error('last_name') has-error @enderror">
                <label for="last_name">{{ __('Last Name') }}</label>
                <input type="text" name="last_name" class="form-control" value="{{ $patient ? $patient->last_name : old('last_name') }}" required>
                @error('last_name')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group @error('address') has-error @enderror">
                <label for="address">{{ __('Address') }}</label>
                <input type="text" name="address" class="form-control" value="{{ $patient ? $patient->address : old('address') }}">
                @error('address')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group @error('age') has-error @enderror">
                <label for="age">{{ __('Age') }}</label>
                <input type="number" name="age" class="form-control" value="{{ $patient ? $patient->age : old('age') }}">
                @error('age')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group @error('aadhar_card') has-error @enderror">
                <label for="aadhar_card">{{ __('Aadhar Card') }}</label>
                <input type="text" name="aadhar_card" class="form-control" value="{{ $patient ? $patient->aadhar_card : old('aadhar_card') }}" data-inputmask='"mask": "9999 9999 9999"' data-mask>
                @error('aadhar_card')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group @error('mobile') has-error @enderror">
                <label for="mobile">{{ __('Mobile') }}</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-mobile"></i>
                    </div>
                    <input type="text" name="mobile" class="form-control" value="{{ $patient ? $patient->mobile : old('mobile') }}" required data-inputmask='"mask": "999-999-9999"' data-mask>
                </div>
                @error('mobile')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
                <div class="col-md-6">
            <div class="form-group">
                <label for="tests">Tests</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-mobile"></i>
                    </div>
                    <select name="tests" class="form-control select2">
                        <option value="anc">ANC</option>
                        <option value="in">Infertility</option>
                        <option value="pl">Gyane</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ $patient ? __('Update') : __('Submit') }}</button>
    </div>
</form>
