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
                                <th>
                                    姓名
                                </th>
                                <th>
                                    性别
                                </th>
                                <th>
                                    证件号
                                </th>
                                <th>
                                    操作
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($tickets as $ticket)
                                <tr>
                                    <td>{{$ticket->name}}</td>
                                    <td>
                                    @if($ticket->sex===1)
                                        <span style="color: deepskyblue;">男</span>
                                    @elseif($ticket->sex===2)
                                        <span style="color: deeppink;">女</span>
                                    @else
                                        未知
                                    @endif
                                    <td>{{$ticket->id_number}}}</td>
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
