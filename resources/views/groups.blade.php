@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of groups that can be choosed</div>

                <div class="card-body">
                        <form method="POST" action="{{ route('group_assign') }}">
                         @csrf
                        @foreach ($groups as $group)
                            <input type="checkbox" name="groups[]" value="{{ $group->id }}"> {{ $group->Group_name }}<br>
                            
                        @endforeach
                    
                        
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif

                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                    </div>
                </div>
                <div> 
                  
                </div>
            </form>
            </div>
        </div>
              
    </div>
    
</div>
@endsection