@extends('layouts.app')
@section('content')
   

                        
   <form class="form-horizontal" method="POST" action="{{url("/update/{$data->id}") }}">
                        {{ csrf_field() }}

            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="first_name" class="col-md-4 control-label">first name</label>

                <div class="col-md-6">
                    <input id="first_name" type="first_name" class="form-control" name="first_name" value="{{ $data->first_name }}"  required autofocus>

                    @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                <label for="last_name" class="col-md-4 control-label">Last name</label>

                <div class="col-md-6">
                    <input id="last_name" type="last_name" class="form-control" name="last_name" value="{{ $data->last_name }}" required autofocus>

                    @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">email</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ $data->email}}" required autofocus
                    >

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                <label for="phone" class="col-md-4 control-label">phone</label>

                <div class="col-md-6">
                    <input id="phone" type="phone" class="form-control" name="phone" value="{{ $data->phone }}" required autofocus
                    >

                    @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Update
                                </button>

                                
                            </div>
                        </div>
                    </form>
    
@stop