@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.institution.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.institutions.update", [$institution->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.institution.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $institution->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.institution.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.institution.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $institution->email) }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.institution.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="address">{{ trans('cruds.institution.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', $institution->address) }}" required>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.institution.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address_two">{{ trans('cruds.institution.fields.address_two') }}</label>
                <input class="form-control {{ $errors->has('address_two') ? 'is-invalid' : '' }}" type="text" name="address_two" id="address_two" value="{{ old('address_two', $institution->address_two) }}">
                @if($errors->has('address_two'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address_two') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.institution.fields.address_two_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="contact">{{ trans('cruds.institution.fields.contact') }}</label>
                <input class="form-control {{ $errors->has('contact') ? 'is-invalid' : '' }}" type="text" name="contact" id="contact" value="{{ old('contact', $institution->contact) }}" required>
                @if($errors->has('contact'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.institution.fields.contact_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_two">{{ trans('cruds.institution.fields.contact_two') }}</label>
                <input class="form-control {{ $errors->has('contact_two') ? 'is-invalid' : '' }}" type="text" name="contact_two" id="contact_two" value="{{ old('contact_two', $institution->contact_two) }}">
                @if($errors->has('contact_two'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_two') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.institution.fields.contact_two_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="url">{{ trans('cruds.institution.fields.url') }}</label>
                <input class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" type="text" name="url" id="url" value="{{ old('url', $institution->url) }}">
                @if($errors->has('url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.institution.fields.url_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection