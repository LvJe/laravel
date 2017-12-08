@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">新人列表</div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>新郎</th>
                                <th>新郎证件号</th>
                                <th>新郎手机号</th>
                                <th>新娘</th>
                                <th>新娘证件号</th>
                                <th>新娘手机号</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($mates as $mate)
                                <tr>
                                    <td><span style="color: deepskyblue;">{{$mate->mate_one_name}}</span></td>
                                    <td>{{$mate->mate_one_id_number}}</td>
                                    <td>{{$mate->mate_one_phone_number}}</td>
                                    <td><span style="color: deeppink;">{{$mate->mate_other_name}}</span></td>
                                    <td>{{$mate->mate_other_id_number}}</td>
                                    <td>{{$mate->mate_other_phone_number}}</td>
                                    <td>
                                        <a>编辑</a>
                                        |
                                        <a>删除</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot></tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
