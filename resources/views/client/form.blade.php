@extends('layouts.app')

@section('content')
    <h4>
       @if ($modify == 1)
            Modify Client
        @elseif ($modify == 0)
            New Client
        @endif
    </h4>

    <form action="{{$modify == 1 ? route('update_client',['client_id' => 1 ]) : route('create_client')}}" method="post">

        <div class="row form-group">
            <label class="col-form-label col-2">Title</label>
            <select class="form-control col-2" name="title">
                @foreach($titles as $title)
                    <option value="{{$title}}">{{$title}}. </option>
                @endforeach
            </select>

            <label class="col-form-label offset-1 col-1">Name</label>
            <small class="error">{{$errors->first('name')}}</small>
            <input class="form-control col-2" name="name" type="text" value="{{old('name')}}">


            <label class="col-form-label col-2">Last Name</label>
            <small class="error">{{$errors->first('lastName')}}</small>
            <input class="form-control col-2" name="lastName" type="text" value="{{old('lastName')}}">
        </div>

        <div class="row form-group">
            <label class="col-2">Address</label>
            <small class="error">{{$errors->first('address')}}</small>
            <input class="col-10 form-control" name="address" type="text" value="{{old('address')}}">
        </div>
        <div class="row form-group">
            <label class="col-2">zip_code</label>
            <small class="error">{{$errors->first('zipCode')}}</small>
            <input class="col-10 form-control" name="zipCode" type="text" value="{{old('zipCode')}}">
        </div>
        <div class="row form-group">
            <label class="col-2">City</label>
            <small class="error">{{$errors->first('address')}}</small>
            <input class="col-10 form-control" name="city" type="text" value="{{old('City')}}">
        </div>
        <div class="row form-group">
            <label class="col-2">State</label>
            <small class="error">{{$errors->first('state')}}</small>
            <input class="col-10 form-control" name="state" type="text" value="{{old('State')}}">
        </div>
        <div class="row form-group">
            <label class="col-2">Email</label>
            <small class="error">{{$errors->first('email')}}</small>
            <input class="col-10 form-control" name="email" type="text" value="{{old('email')}}">
        </div>
        <div class="row form-group">
            <input value="SAVE" class="btn btn-success col-1 offset-11" type="submit">
        </div>
    </form>


@endsection
