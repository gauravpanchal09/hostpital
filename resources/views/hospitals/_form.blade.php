<form method="POST" action="{{ $hospital ? route('hospitals.update', $hospital) : route('hospitals.store') }}">
    @if ($hospital)
        @method('PUT')
    @endif
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group @error('name') has-error @enderror">
                <label for="name">{{ __('Name') }}</label>
                <input type="text" name="name" class="form-control" value="{{ $hospital ? $hospital->name : old('name') }}" required autofocus>
                @error('name')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">{{ $hospital ? __('Update') : __('Submit') }}</button>
    </div>
</form>
