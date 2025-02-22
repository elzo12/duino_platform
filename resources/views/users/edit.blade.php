@extends('layouts.app', ['activePage' => 'user', 'activeButton' => 'EnergyManagement', 'title' => 'ENERGYNO : Plataforma IoT ECOSUR', 'navName' => 'Edit Users'])

@section('content')
    <div class="content">
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-12 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">{{ __('Edit User') }}</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('user.index') }}" class="btn btn-sm btn-warning">{{ __('Back to list') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('user.update', $user) }}" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>
                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            <i class="w3-xxlarge fa fa-user"></i>{{ __('Name') }}
                                        </label>
                                        <input type="text" name="name" id="input-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', $user->name) }}" required autofocus>
        
                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                        <input type="email" name="email" id="input-email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', $user->email) }}" required>

                                        @include('alerts.feedback', ['field' => 'email'])
                                    </div>
                                    <div class="form-group{{ $errors->has('role_id') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-role">{{ __('Role') }}</label>
                                        <select name="role_id" id="input-role" class="form-control{{ $errors->has('role_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Role') }}" required>
                                            <option value="">-</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}" {{ $role->id == old('role_id', $user->role->id) ? 'selected' : '' }}>{{ $role->name }}</option>
                                            @endforeach
                                        </select>

                                        @include('alerts.feedback', ['field' => 'role_id'])
                                    </div>
                                    <div class="form-group{{ $errors->has('photo') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Profile photo') }}</label> <br>
                                        @if( $user->picture) 
                                            <div class="pb-2">
                                                <img class="resize-image" src="{{ $user->profilePicture() }}" alt="profile">
                                            </div>
                                        @endif
                                        <div class="custom-file">
                                            <input type="file" name="photo" class="form-control-file{{ $errors->has('photo') ? ' is-invalid' : '' }}" id="input-picture" accept="image/*">
                                        </div>
        
                                        @include('alerts.feedback', ['field' => 'photo'])
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-password">{{ __('Password') }}</label>
                                        <input type="password" name="password" id="input-password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" value="">

                                        @include('alerts.feedback', ['field' => 'password'])
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-password-confirmation">{{ __('Confirm Password') }}</label>
                                        <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}" value="">
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-warning mt-4">{{ __('Save changes') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection