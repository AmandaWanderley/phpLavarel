@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-12">
            <h4>Clients</h4>
            <div class="col-2"><a class="btn  btn-primary" href=" /clients/new">ADD NEW CLIENT</a></div>
      <!--        <pre>
                  {{var_dump($clients)}}
              </pre>-->
            <table class="table">
                <thead>
                <tr>
                    <th width="200">Name</th>
                    <th width="200">Email</th>
                    <th width="200">Action</th>
                </tr>
                </thead>
                <tbody>
              <!--  <tr>
                    <td>Mr. Roy Adams</td>
                    <td>roy@email.com</td>
                    <td>
                        <a class="btn btn-success" href="/clients_new.html">EDIT</a>
                        <a class="btn btn-success" href="/book_room.html">BOOK A ROOM</a>
                    </td>
                </tr>
                <tr>
                    <td>Mr. John Doe</td>
                    <td>john@email.com</td>
                    <td>
                        <a class="btn btn-success" href="/clients_new.html">EDIT</a>
                        <a class="btn btn-success" href="/book_room.html">BOOK A ROOM</a>
                    </td>
                </tr>
                <tr>
                    <td>Ms. Jane Doe</td>
                    <td>jane@email.com</td>
                    <td>
                        <a class="btn btn-success" href="/clients_new.html">EDIT</a>
                        <a class="btn btn-success" href="/book_room.html">BOOK A ROOM</a>
                    </td>
                </tr> -->
                @foreach($clients as $client)
                    <tr>
                        <td>{{$client->title}} . {{$client->name}}							{{$client->last_name}}</td>
                        <td>{{$client->email}}</td>
                        <td>
                            <a class="btn btn-success" href="{{route('show_client',['client_id' => $client->id])}}">EDIT</a>
                            <a class="btn btn-success" href="{{route('check_room',['client_id' => $client->id])}}">BOOK A ROOM</a>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>

        </div>

@endsection
