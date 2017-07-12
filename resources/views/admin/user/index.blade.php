@extends('admin.parent')
    @section('content')
        <ol class="breadcrumb hidden-xs">
            <li>
            <a href="#">Home</a>
            </li>
            <li>
            <a href="#">Library</a>
            </li>
            <li class="active">Data</li>
        </ol>
        <h4 class="page-title">TABLES</h4>

        <div class="block-area" id="responsiveTable">
            <h3 class="block-title">用户列表</h3>
            @if (session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                        <script type="text/javascript">
                        setTimeout(function(){
                                location.href = location.href;
                        },2000)
                        </script>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                        <script type="text/javascript">
                        setTimeout(function(){
                                location.href = location.href;
                        },2000)
                        </script>
                </div>

            @endif

            <form action="" style="display: none" method="post" name="myform">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>
            <div class="table-responsive overflow">
                <form action="/users">
                    <div class="medio-body">
                        姓名: <input type="text" class="form-control input-sm m-b-10" name="name">
                        性别:<select class="form-control input-sm m-b-10" name="sex">
                                <option>--请选择--</option>
                                <option value="1">男</option>
                                <option value="2">女</option>
                            </select>
                        <input type="submit" value="搜索" class="btn m-b-10" />
                    </div>

                </form>
                <table class="table tile">
                    <thead>
                        <tr>
                            <th>学号</th>
                            <th>姓名</th>
                            <th>年龄</th>
                            <th>性别</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($list as $v)
                            <tr>
                                <td><input type="checkbox" name="check[]" value="[]">{{$v->uid}}</td>
                                <td>{{$v->name}}</td>
                                <td>{{$v->age}}</td>
                                <td>{{($v->sex)==1?'男':'女'}}</td>
                                <td>
                                    <a class="btn btn-alt m-r-1" href="/users/{{$v->uid}}/edit">修改</a> |
                                    <a class="btn btn-alt m-r-1" href="javascript:doDel({{ $v->uid }})">删除</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {!! $list->render() !!}
            </div>
        </div>
        <script type="text/javascript">
            function doDel(uid)
            {
                if (confirm("你确定删除吗")) {
                    var form = document.myform;
                    form.action = '/users/'+uid;
                    form.submit();
                }
            }
        </script>
    @endsection