<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--meta name="viewport" content="width=device-width, initial-scale=0.5"-->
    <meta name="viewport" content="width=device-width,minimum-scale=0.5,maximum-scale=0.5,user-scalable=no" />
    <title>Love</title>
    <style type="text/css">
        .dia{
            //border: 1px solid red;
            height: 130px;
            width: 100%;
            position: relative;
        }
        .text{
            border: 1px solid #cccccc;
            padding: 17px;
            border-radius: 8px;
            font-size: 34px;
            color: #6a6a6a;
            //top:-26px;
            position: relative;
            margin: 0 15px;
        }
        .input_text{
            position: absolute;
            width: 96%;
            border-top: 1px solid #cccccc;
            padding: 10px;
            text-align: center;
        }
        .submit{
            width: 60px;
            height: 40px;
            float: right;
            background: #2ba245;
            border: none;
            border-radius: 5px;
            color: white;
            padding: 5px 10px;
        }
        .paw{
            border:none;
            border-bottom: 1px solid #2ba245;
            width: 80%;
            height: 40px;

        }

        .text i.l{
            position: absolute;
            height:0px;
            width:0px;
            border-width:6px;
            border-style:dashed solid dashed dashed;
            border-color:transparent  #cccccc transparent  transparent ;
            font-size: 0px;

            left: -13px;
        }
        .text b.l{
            position: absolute;
            height:0px;
            width:0px;
            border-width:6px;
            border-style:dashed solid dashed dashed;
            border-color:transparent white transparent  transparent ;
            font-size: 0px;

            left:-11px;
        }
        .text i.r{
            position: absolute;
            height:0px;
            width:0px;
            border-width:6px;
            border-style:dashed solid dashed dashed;
            border-color:transparent   transparent  transparent #cccccc;
            font-size: 0px;

            right: -12px;
        }
        .text b.r{
            position: absolute;
            height:0px;
            width:0px;
            border-width:6px;
            border-style:dashed solid dashed dashed;
            border-color:transparent  transparent  transparent white ;
            font-size: 0px;

            right:-10px;
        }
        .triangle_left{
            height:0px;
            width:0px;
            border:20px solid;
            border-color:transparent black transparent  transparent;
        }

    </style>
</head>
<body>
<!--
愿意与你把美好的今天，变成昨天美好的回忆，一起共筑爱情的堡垒，坚不可摧
-->
<div style="margin: 10px">
    <div class="triangle_left"> </div>what's this triangle on my head?[sad]
    <div class="dia">
        <img width="80px" src="./Love_files/jz.jpg" style="float: left">
        <span class="text" style="float: left">
             <i class="l"></i>
             <b class="l"></b>
            Tell me the password.
        </span>
        <br><br><br>
    </div>
    <div class="dia">
        <img width="80px" src="./Love_files/hj.jpg" style="float: right">
        <span class="text" style="float: right">
            <i class="r"></i>
            <b class="r"></b>
            <!--You guess.-->
            Wait!Give u a lovely lion,girl~
        </span><br><br>
    </div>
    <div class="dia">
       <iframe src = '/lion.php' style = 'width: 100%;height: 500px;;border: none;' scrolling = no>

       </iframe>
    </div>
</div>
<div class="input_text" id="input_text">
    <form action="/" method="post">
        <input class="paw" name="password" type="text">
        <input class="submit" type="submit" value="发送">
    </form>
</div>

</body>
</html>
<script>
    var height  = document.documentElement.clientHeight;
    var input_text = document.getElementById('input_text');
    input_text.style.top = (height-70)+'px';
</script>

