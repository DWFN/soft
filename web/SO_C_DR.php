<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <script type="text/javascript" src="js/jquery3.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//unpkg.com/layui@2.6.8/dist/css/layui.css">
    <script src="//unpkg.com/layui@2.6.8/dist/layui.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            let i;
            var DRID ="";
            var RTime = "";
            var Da = "";
            function getURLParameter(name) {
                return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null;
            }
            var id = getURLParameter("SS");
            var Uid = getURLParameter("user");
            var Data = new Date();
            $.ajax({
                data: {},
                type: "get",
                dataType: "json",
                url: "http://localhost/soft/controller/SO_CDR.php?SS="+id,
                success: function (data) {
                    var name = "";
                    var app =  "<ul class="+"'nav nav-tabs'"+">"+
                        "<li class="+"'nav-item'"+">"+
                            "<a class="+"'nav-link'"+" href="+"'#tab1'"+" data-toggle="+"'tab'"+">"+Data.getMonth().toString()+"/"+Data.getDate().toString()+"</a>"+
                        "</li>"+
                        "<li class="+"'nav-item'"+">"+
                        "<a class="+"'nav-link'"+" href="+"'#tab2'"+" data-toggle="+"'tab'"+">"+(Data.getMonth()).toString()+"/"+(Data.getDate()+1).toString()+"</a>"+
                        "</li>"+
                        "<li class="+"'nav-item'"+">"+
                        "<a class="+"'nav-link'"+" href="+"'#tab3'"+" data-toggle="+"'tab'"+">"+(Data.getMonth()).toString()+"/"+(Data.getDate()+2).toString()+"</a>"+
                        "</li>"+
                    "</ul>" +"<div class="+"'tab-content'"+">"
                    +"<div class="+"'tab-pane'"+" id="+"'tab1'"+">"+
                            "<p>"+ "<table class="+"'table'"+">"+"<thead>" +"<tr>" +"<th>" +"医生"+
                    "</th>"+"<th>" +"职位"+ "</th> <th>" +"简介"+ "</th> <th>"+"价格"+ "</th> <th>"+
                     "<span style="+"'float: right;margin-right: 20px'"+
                    ">"+ "预约" +"</span> </th> </tr> </thead>"+"<tbody>";

                    data.forEach(function (item,index){
                        var time = data[index].Week_Time.split("/");

                            time.forEach(function (item2,index2){
                                if(time[index2] === (Data.getDate()).toString()){
                                    app = app +" <tr>" +
                                        "<td>"+
                                            data[index].DName+
                                        "</td>"+
                                            "<td>"+
                                        data[index].Level+
                                        "</td>"+
                                        "<td>"+
                                        data[index].Detail+
                                        "</td>"+
                                        "<td>"+
                                        data[index].Price+
                                         "</td>"+
                                        "<td>"+
                                            "<a id='modal-287056' href='#modal-container-287056' role='button' class='btn' data-toggle='modal'style='float: right;margin-top: -10px'>"+
                                            "<button type='button' class='btn btn-success'  id='coo' name = '"+data[index].Dr_Id+"'>"+
                                                    "预约"
                                            +"</button>"+
                                        "</a>"+ "</td>"+"</tr>";
                                }
                            })
                    })
                    app = app + "</tbody>"+"</table>"+"</p>"+"</div>"
                        +"<div class="+"'tab-pane'"+" id="+"'tab2'"+">"+
                        "<p>"+ "<table class="+"'table'"+">"+"<thead>" +"<tr>" +"<th>" +"医生"+
                    "</th>"+"<th>" +"职位 </th> <th> 简介 </th> <th>价格 </th> <th>"+
                    "<span style="+"'float: right;margin-right: 20px'"+
                    "> 预约 </span> </th> </tr> </thead>"+"<tbody>";

                    data.forEach(function (item,index){
                        var time = data[index].Week_Time.split("/");
                        time.forEach(function (item2,index2){
                            if(time[index2] === (Data.getDate()+1).toString()){
                                app = app +" <tr>" +
                                    "<td>"+
                                    data[index].DName+
                                    "</td>"+
                                    "<td>"+
                                    data[index].Level+
                                    "</td>"+
                                    "<td>"+
                                    data[index].Detail+
                                    "</td>"+
                                    "<td>"+
                                    data[index].Price+
                                    "</td>"+
                                    "<td>"+
                                    "<a id='modal-287056' href='#modal-container-287056' role='button' class='btn' data-toggle='modal'style='float: right;margin-top: -10px'>"+
                                    "<button type='button' class='btn btn-success'  id='coo' name = '"+data[index].Dr_Id+"'>"+
                                    "预约"
                                    +"</button>"+
                                    "</a>"+ "</td>"+"</tr>";
                            }
                        })
                    })
                    app = app + "</tbody>"+"</table>"+"</p>"+"</div>"
                        +"<div class="+"'tab-pane'"+" id="+"'tab3'"+">"+
                        "<p>"+ "<table class="+"'table'"+">"+"<thead>" +"<tr>" +"<th>" +"医生"+
                    "</th>"+"<th>" +"职位 </th> <th> 简介 </th> <th>价格 </th> <th>"+
                    "<span style="+"'float: right;margin-right: 20px'"+
                    "> 预约 </span> </th> </tr> </thead>"+"<tbody>";
                    data.forEach(function (item,index){
                        var time = data[index].Week_Time.split("/");
                        time.forEach(function (item2,index2){
                            if(time[index2] === (Data.getDate()+2).toString()){
                                app = app +" <tr>" +
                                    "<td>"+
                                    data[index].DName+
                                    "</td>"+
                                    "<td>"+
                                    data[index].Level+
                                    "</td>"+
                                    "<td>"+
                                    data[index].Detail+
                                    "</td>"+
                                    "<td>"+
                                    data[index].Price+
                                    "</td>"+
                                    "<td>"+
                                    "<a id='modal-287056' href='#modal-container-287056' role='button' class='btn' data-toggle='modal'style='float: right;margin-top: -10px'>"+
                                    "<button type='button' class='btn btn-success'  id='coo' name = '"+data[index].Dr_Id+"'>"+
                                    "预约"
                                    +"</button>"+
                                    "</a>"+ "</td>"+"</tr>";
                            }
                        })
                    })
                    app = app + "</tbody>"+"</table>"+"</p>"+"</div>";
                        $("#tabs-843767").append(app);
                }
            })

            $("#TIM").on("click", ".btn-link", function() {
                $(".btn-outline-secondary").removeClass("btn btn-outline-secondary").addClass("btn btn-link");
                $(this).removeClass("btn btn-link").addClass("btn btn-outline-secondary");
                RTime = $(this).html();
                console.log(RTime);
            })
            $("#tabs-843767").on("click", "#coo", function() {
                DRID = $(this).prop("name");
                console.log(DRID);
            })
            $("#tabs-843767").on("click", ".nav-link", function() {
                console.log($(this).html());
                Da = $(this).html();
            })
            $("#yu").click(function (){
                    $.ajax({
                        data: {},
                        type: "get",
                        dataType: "json",
                        url: "http://localhost/soft/controller/SO_AddReg.php?Dr=" + DRID+"&Time="+Da+"/"+RTime.trim()+"&user="+Uid,
                        success: function (data) {
                        }
                    })
                    alert("预约成功");
                    location.href="SO_reg.php";
                })

        })

    </script>
</head>
<body>
<div style="width: 90%;margin-left: 5%;margin-top: 20px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable" id="tabs-843767">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-container-287056" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">
                    选择时间
                </h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" >
                <div class="row">
                    <div class="col-md-12" id="TIM">
                        <div class="row">
                            <div class="col-md-3">

                                <button type="button" class="btn btn-link">
                                    10:00
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-link">
                                    10:10
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-link">
                                    10:20
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-link">
                                    10:30
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-link">
                                    10:40
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-link">
                                    10:50
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-link">
                                    11:00
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-link">
                                    11:10
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <button type="button" class="btn btn-link">
                                    11:20
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-link">
                                    11:30
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-link">
                                    11:40
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-link">
                                    11:50
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" >

                    <button type="button" class="btn btn-primary" id="yu">
                        预约
                    </button>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    返回
                </button>
            </div>
        </div>

    </div>

</div>
</body>
<?php
