@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if(count($listings))
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Website</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Address</th>
                          <th scope="col">Bio</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($listings as $list)
                        <tr>
                          <th scope="row">{{$list->id}}</th>
                          <td>{{$list->name}}</td>
                          <td>{{$list->email}}</td>
                          <td>{{$list->website}}</td>
                          <td>{{$list->phone}}</td>
                          <td>{{$list->address}}</td>
                          <td>{{$list->bio}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
