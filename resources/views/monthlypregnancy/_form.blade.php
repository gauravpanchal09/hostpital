<form method="POST" action="{{ $monthlypregnancy ? route('monthlypregnancy.update', $monthlypregnancy) : route('monthlypregnancy.store') }}">
    @if ($monthlypregnancy)
        @method('PUT')
    @endif
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group @error('first_name') has-error @enderror">
                <label for="name">{{ __('First Name') }}</label>
                <input type="text" name="first_name" class="form-control" value="{{ $monthlypregnancy ? $monthlypregnancy->first_name : old('first_name') }}" required autofocus>
                @error('name')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group @error('last_name') has-error @enderror">
                <label for="name">{{ __('Last Name') }}</label>
                <input type="text" name="last_name" class="form-control" value="{{ $monthlypregnancy ? $monthlypregnancy->last_name : old('last_name') }}" required autofocus>
                @error('name')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group @error('result_pregnancy') has-error @enderror">
                <label for="name">{{ __('Result Pregnancy Date') }}</label>
                <input type="date" name="result_pregnancy" class="form-control" value="{{ $monthlypregnancy ? $monthlypregnancy->result_pregnancy : old('result_pregnancy') }}" required autofocus>
                @error('name')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group @error('type_pregnancy') has-error @enderror">
                <label for="name">{{ __('Type Pregnancy') }}</label>
                <input type="text" name="type_pregnancy" class="form-control" value="{{ $monthlypregnancy ? $monthlypregnancy->type_pregnancy : old('type_pregnancy') }}" required autofocus>
                @error('name')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ $monthlypregnancy ? __('Update') : __('Submit') }}</button>
    </div>
</form>
