@extends('layouts.app')

@section('content')
    <h4>
        @if ($modify == 1)
            Modify Client
        @elseif ($modify == 0)
            New Client
        @endif
    </h4>

    <form action="{{$modify ==1 ? route('update_client',['client_id' => $client_id ]) : route('create_client')}}" method="post">

        <div class="row form-group">
            <label class="col-form-label col-2">Title</label>
            <select class="form-control col-2" name="title">

                @foreach($titles as $title)
                    <option value="{{$title}}">{{$title}}.</option>
                @endforeach
            </select>

            <label class="col-form-label offset-1 col-1">Name</label>
            <input class="form-control col-2" name="$name" type="text" value="{{old('name') ? old('name') : $name}}">
            <small class="error">{{$errors->first('name')}}</small>

            <label class="col-form-label col-2">Last Name</label>
            <input class="form-control col-2" name="$lastname" type="text" value="{{old('lastname') ? old('lastname') : $lastname}}">
            <small class="error">{{$errors->first('lastname')}}</small>
        </div>

        <div class="row form-group">
            <label class="col-2">Address</label>
            <input class="col-10 form-control" name="$address" type="text" value="{{old('address') ? old('address') : $address}}">
            <small class="error">{{$errors->first('address')}}</small>
        </div>
        <div class="row form-group">
            <label class="col-2">zip_code</label>
            <input class="col-10 form-control" name="$zipcode" type="text" value="{{old('zipcode' ) ? old('zipcode') : $zipcode}}">
            <small class="error">{{$errors->first('zipcode')}}</small>
        </div>
        <div class="row form-group">
            <label class="col-2">City</label>
            <input class="col-10 form-control" name="$city" type="text" value="{{old('city') ? old('city') : $city }}">
            <small class="error">{{$errors->first('address')}}</small>
        </div>
        <div class="row form-group">
            <label class="col-2">State</label>
            <input class="col-10 form-control" name="$state" type="text" value="{{old('state') ? old('state') : $state}}">
            <small class="error">{{$errors->first('state')}}</small>
        </div>
        <div class="row form-group">
            <label class="col-2">Email</label>
            <input class="col-10 form-control" name="$email" type="text" value="{{old('email') ? old('email') : $email}}">
            <small class="error">{{$errors->first('email')}}</small>
        </div>
        <div class="row form-group">
            <input value="SAVE" class="btn btn-success col-1 offset-11" type="submit">
        </div>
    </form>


@endsection
