@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.application.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.applications.update", [$application->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="posts">{{ trans('cruds.application.fields.post') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('posts') ? 'is-invalid' : '' }}" name="posts[]" id="posts" multiple>
                    @foreach($posts as $id => $post)
                        <option value="{{ $id }}" {{ (in_array($id, old('posts', [])) || $application->posts->contains($id)) ? 'selected' : '' }}>{{ $post }}</option>
                    @endforeach
                </select>
                @if($errors->has('posts'))
                    <div class="invalid-feedback">
                        {{ $errors->first('posts') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.post_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.application.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status" required>
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Application::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $application->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.application.fields.status_helper') }}</span>
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
