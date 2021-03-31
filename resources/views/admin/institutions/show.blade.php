@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.institution.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.institutions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.institution.fields.id') }}
                        </th>
                        <td>
                            {{ $institution->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.institution.fields.name') }}
                        </th>
                        <td>
                            {{ $institution->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.institution.fields.email') }}
                        </th>
                        <td>
                            {{ $institution->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.institution.fields.address') }}
                        </th>
                        <td>
                            {{ $institution->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.institution.fields.address_two') }}
                        </th>
                        <td>
                            {{ $institution->address_two }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.institution.fields.contact') }}
                        </th>
                        <td>
                            {{ $institution->contact }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.institution.fields.contact_two') }}
                        </th>
                        <td>
                            {{ $institution->contact_two }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.institution.fields.url') }}
                        </th>
                        <td>
                            {{ $institution->url }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.institutions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
