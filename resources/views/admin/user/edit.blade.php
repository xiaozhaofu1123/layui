@extends('admin.parent')
    @section('content')
        <div class="block-area" id="text-input">
            <h3 class="block-title">修改用户</h3>

            <p>请输入用户信息</p>


        <form action="/users/{{$user->uid}}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="row">

                <div class="col-lg-6">
                    <input type="text" class="form-control m-b-10" placeholder="姓名" name="name" value="{{ $user->name }}">
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control m-b-10" placeholder="年龄" name="age" value="{{ $user->age }}">
                </div>
                <div class="col-lg-6">
                    <select class="form-control m-b-10" name="sex" value="{{ $user->sex }}">
                        <option>保密</option>
                        <option value='1' @if($user->sex == 1)selected @endif>男</option>
                        <option value='2' @if($user->sex == 2)selected @endif>女</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control m-b-10" placeholder="密码" name="pass" value="{{ $user->pass }}">
                </div>
                <div class="col-lg-12">
                     <input type="submit" value="提交" class="btn btn-block btn-alt">
                </div>
            </div>
        </form>


    @endsection