@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">新人</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="post" action="{{route('tickets.store')}}">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">姓名：</label>
                                <div class="col-md-6">
                                    <input id="password" type="text" class="form-control" name="name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">性别：</label>
                                <div class="radio col-md-6">
                                    <label class="col-md-2" style="color: blue;font-weight: bold">
                                        <input type="radio" value="1" name="sex">男
                                    </label>
                                    <label class="col-md-2" style="color: deeppink;font-weight: bold">
                                        <input type="radio" value="2" name="sex">女
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">电话号：</label>
                                <div class="col-md-6">
                                    <input id="password" type="text" class="form-control" name="phone_number">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">证件号：</label>
                                <div class="col-md-6">
                                    <input id="password" type="text" class="form-control" name="id_number">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-6">
                                    <button type="submit" class="btn btn-primary">提交</button>
                                </div>
                            </div>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
