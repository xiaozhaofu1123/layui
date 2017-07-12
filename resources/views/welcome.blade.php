<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">欢迎学习Laravel 5</div>
            </div>

            <form action="/test">
                <input type="submit" value="get提交">
            </form>

            <form action="/test" method="post">
                {{csrf_field()}}
                <input type="submit" value="post提交" />
            </form>

            <form action="/test" method='post'>
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <input type="submit" value="put提交">
            </form>

            <form action="test" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                 <input type="submit" value="delete提交">
            </form>

            <form action="/aa" method='get'>
                <input type="submit" value="matchget提交">
            </form>

            <form action="/aa" method="post">
                {{csrf_field()}}
                <input type="submit" value="matchpost提交" />
            </form>

            <form action="/aa" method="post">
                {{method_field('PUT')}}
                {{csrf_field()}}
                <input type="submit" value="matchput提交">
            </form>

            <form action="/demo/10" method='get'>
                <input type="submit" value="带参数提交">
            </form>
            <h3><a href="/user">1.用户的增删改查</a></h3>
            <h3><a href="/demo2">laravel的模板继承</a></h3>
        </div>


    </body>
</html>
