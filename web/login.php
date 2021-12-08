<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <script type="text/javascript" src="js/jquery3.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#login").click(function () {
                var uid = $("#uid").val();
                var pwd = $("#pwd").val();
                $.ajax({
                    data: {},
                    type: "get",
                    dataType: "json",
                    url: "http://localhost/soft/controller/SO_Login.php?user=" + uid + "&pwd=" + pwd,
                    success: function (data) {
                        console.log(data);
                        if (data != null && uid.length == 11) {
                            location.href = "http://localhost/soft/web/SO_reg.php?user="+data[0].User_Id;
                        }else if(data != null){
                            location.href = "http://localhost/soft/web/SO_Da.php";
                        }else{
                            alert("登录失败");
                        }

                    }
                })
            })
        })
    </script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div style="border: lightblue 3px solid;height: 300px;width: 500px;border-radius:8px;margin-top: 150px">
                        <div style="width: 80%;height: 80%;margin-left: 10%;margin-top: 10%">
                            <form role="form">
                                <div class="form-group">

                                    <label for="exampleInputEmail1">
                                        手机号：
                                    </label>
                                    <input name="uid" class="form-control" id="uid" />
                                </div>
                                <div class="form-group">

                                    <label for="exampleInputPassword1">
                                        密码：
                                    </label>
                                    <input name="pwd" type="password" class="form-control" id="pwd" autocomplete=""/>
                                </div>
                                <div class="form-group">
                                    <center><button type='button'  class="btn btn-primary" id="login" style="width: 80%">登录</button></center>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>
</div>
</body>
<?php

