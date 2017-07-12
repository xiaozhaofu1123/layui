@extends('admin.parent')
    @section('content')
        <div class="block-area" id="text-input">
            <h3 class="block-title">添加用户</h3>

            <p>请输入用户信息</p>


        <form action="/users" method="post">
            {{ csrf_field()}}
            <div class="row">

                <div class="col-lg-6">
                    <input type="text" class="form-control m-b-10" placeholder="姓名" name="name">
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control m-b-10" placeholder="年龄" name="age">
                </div>
                <div class="col-lg-6">
                    <select class="form-control m-b-10" name="sex">
                        <option>保密</option>
                        <option  value="1">男</option>
                        <option  value="2">女</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control m-b-10" placeholder="密码" name="pass">
                </div>
                <div class="col-lg-12">
                     <input type="submit" value="提交" class="btn btn-block btn-alt">
                </div>
            </div>
        </form>


    @endsection