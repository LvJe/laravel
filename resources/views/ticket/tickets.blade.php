@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">新人列表</div>

                    <div class="panel-body">
                        @foreach ($tickets as $ticket)
                            <li>{{ $ticket->name }}</li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
