@extends('layouts.app')

@section('content')


<div>
        <h1>Hello {{$name}}</h1>

    @if ($number == 5)
        <h3>El número enviado es 5</h3>        
    @else
        <h3>El número enviado no es 5</h3> 
    @endif

    @isset($day)
        @switch($day)
        @case($day == 'Monday')
            <h3>Es lunes</h3> 
            @break
        @case($day == 'Thuesday')
            <h3>Es martes</h3>
            @break
        @default
            <h3>Es otro día</h3>
        
    @endswitch
    @endisset

    <div class="container">
        <table class="table">

            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Complete name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Photo</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
            <tr>
                <th>{{ $user->id }}</th>
                <td>{{ $user->fullname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->photo }}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
</div>

    
@endsection