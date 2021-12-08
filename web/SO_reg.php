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
                $.ajax({
                    data: {},
                    type: "get",
                    dataType: "json",
                    url: "http://localhost/soft/controller/SO_REG.php",
                    success: function (data) {
                        function getURLParameter(name) {
                            return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null;
                        }
                        var id = getURLParameter("user");
                        var name = "";
                        var app = "";
                        var user=  "<a class='navbar-brand' href='SO_His.php?user="+id+"'>病历</a>";
                        $("#suser").append(user);
                        data.forEach(function (item,index){

                            if(data[index].FS === name){
                                app = app +  "<div class="+"'card-body'"+">"+
                                    data[index].SS_Name+
                                    "<a href="+"'SO_C_DR.php?SS="+data[index].SS_Id+"'>"+
                                    "<button type="+"'button'"+" class='"+"btn "+"btn-success'"+" style= 'float:" +"right;"+ "margin-top:"+ "-10px'"+" id="+"coo"+">"
                                    +"挂号"+
                                    "</button>"+"</a>"+"</div>"
                            }else{
                                if(name !== ""){
                                    app = app + "</div></div>"
                                    $("#card-497636").append(app);
                                }
                                name = data[index].FS;
                                app = "<div class="+"'card'"+">" + "<div class="+"'card-header'"+">"+
                                    "<a class="+"'card-link'"+" data-toggle="+"'collapse'"+" data-parent="+"'#card-497636'"+" href="+"'#card-element-"+index+"'>"
                                + name + "</a></div>" +
                                    "<div id="+"'card-element-'"+index+" class="+"'collapse show'"+">" +
                                    "<div class="+"'card-body'"+">"+
                                        data[index].SS_Name+
                                        "<a href="+"'SO_C_DR.php?SS="+data[index].SS_Id+"&user="+id+"'>"+
                                    "<button type="+"'button'"+" class='"+"btn "+"btn-success'"+" style= 'float:" +"right;"+ "margin-top:"+ "-10px'"+" id="+"coo"+">"
                                    +"挂号"+
                                    "</button>"+"</a>"+"</div>"
                            }
                        })
                    }
                })

        })
    </script>
</head>
<body>
<div style="width: 90%;margin-left: 5%;margin-top: 20px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light" id="suser">

                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="card-497636">
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<?php
