@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    The users and their related groups .....<br><br>
                    @foreach ($user_groups as $user_group)
                      <p>User Name: {{ $user_group->name }} 
                         Group Name: {{ $user_group}}</p><br>
                        <p></p>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
