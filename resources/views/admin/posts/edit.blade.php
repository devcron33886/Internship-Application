@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.post.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route("admin.posts.update", [$post->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="title">{{ trans('cruds.post.fields.title') }}</label>
                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required>
                    @if($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.post.fields.title_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="positions">{{ trans('cruds.post.fields.positions') }}</label>
                    <input class="form-control {{ $errors->has('positions') ? 'is-invalid' : '' }}" type="number" name="positions" id="positions" value="{{ old('positions', $post->positions) }}" step="1" required>
                    @if($errors->has('positions'))
                        <div class="invalid-feedback">
                            {{ $errors->first('positions') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.post.fields.positions_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="opening_date">{{ trans('cruds.post.fields.opening_date') }}</label>
                    <input class="form-control date {{ $errors->has('opening_date') ? 'is-invalid' : '' }}" type="text" name="opening_date" id="opening_date" value="{{ old('opening_date', $post->opening_date) }}" required>
                    @if($errors->has('opening_date'))
                        <div class="invalid-feedback">
                            {{ $errors->first('opening_date') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.post.fields.opening_date_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="closing_date">{{ trans('cruds.post.fields.closing_date') }}</label>
                    <input class="form-control date {{ $errors->has('closing_date') ? 'is-invalid' : '' }}" type="text" name="closing_date" id="closing_date" value="{{ old('closing_date', $post->closing_date) }}" required>
                    @if($errors->has('closing_date'))
                        <div class="invalid-feedback">
                            {{ $errors->first('closing_date') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.post.fields.closing_date_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required">{{ trans('cruds.post.fields.status') }}</label>
                    <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status" required>
                        <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Models\Post::STATUS_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('status', $post->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('status'))
                        <div class="invalid-feedback">
                            {{ $errors->first('status') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.post.fields.status_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="description">{{ trans('cruds.post.fields.description') }}</label>
                    <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" required>{{ old('description', $post->description) }}</textarea>
                    @if($errors->has('description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.post.fields.description_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="institution_id">{{ trans('cruds.post.fields.institution') }}</label>
                    <select class="form-control select2 {{ $errors->has('institution') ? 'is-invalid' : '' }}" name="institution_id" id="institution_id" required>
                        @foreach($institutions as $id => $institution)
                            <option value="{{ $id }}" {{ (old('institution_id') ? old('institution_id') : $post->institution->id ?? '') == $id ? 'selected' : '' }}>{{ $institution }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('institution'))
                        <div class="invalid-feedback">
                            {{ $errors->first('institution') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.post.fields.institution_helper') }}</span>
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
