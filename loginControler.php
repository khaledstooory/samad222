
<?php
if(isset($_POST['login']))
{
$username=$_POST["username"];
$password=$_POST["password"];
if($username=="admin" && $password="123")
 header("Location: index.php");
else
echo "Please Try again incorrect password or username";
}
if(isset($_POST['back']))
{
header("Location: index.php");
}
?>
<html dir="rtl">
    <head>
    <meta charset="utf-8">
        <style>
            *{
                margin: 0;
                padding: 0;
                    box-sizing: border-box;

            }
            .work_space{
                width: 1010px;
                min-height:110px;
                height:auto;
                margin:auto;
                box-shadow: 2px 2px 5px 5px gray;
                position: relative;
                overflow: hidden;
                margin-top: 10px;
				padding-top:-5px;
            }
            .work_space .header{
                width: 100%;
                height: 145px;
                background-color: #efefef;
                padding: 20px;
                color: green;
				margin-top:30px;
            }
            .work_space .header img{
                width:100;
            }
            .work_space .header h1{
                text-align: center;
                font-size: 45px;
                font-weight: 100;
                font-family: Andalus;
            }
            .work_space .navigation{
                width: 100%;
                height: 49px;
                background-color:green;
                clear: both;
				margin-top:20px;
            }
            .work_space .navigation a{
                display: inline-block;
                width: 126px;
                font-size: 22px;
                color: white;
                text-decoration: none;
                padding: 13px;
font-family: Andalus;
            }
            .work_space .navigation a:hover{
                color: black;
                background-color:#efefef;
            }
            .work_space .main{
                width: 100%;
                height: auto;
                background-color: green;
            }
            .work_space .main p{
                width: 80%;
                margin: 70px auto;
                font-size: 24px;
                font-family: monospace;
                word-spacing: 8;
                text-align: justify;
            }
            .work_space .footer{
                width: 100%;
                height:400px;
                background-color: #efefef;
            }
            .work_space .footer span{
                bottom: 30px;
                right: 280px;
                color: gray;
                position: relative;
            }
            .work_space .footer .section{
                width: 33.3333%;
                height: 600;
                float: right;
                padding: 20px;
            }
            .work_space .footer .section img{
                width: 970px;
                height: 500px;
            }
            .work_space .footer .section .social{
                position: absolute;
                width: 300;
                height: 47px;
                border-radius: 15px;
            }
            .work_space .footer .section .social .link{
                display: block;
                height:  34px;
            }
            .work_space .footer .section .social .link a{
                transition: all 1s;
            }
            .work_space .footer .section .social .link span{
                display: none;
                position: relative;
                font-size: 20px;
                right: -45px;
                bottom: 40px;
                text-shadow: 1px 1px 1px gray;
                transition: 1s;
            }
            .work_space .footer .section .social .link a:hover span{
                display: block;
                right: 60px;
            }
            .work_space .footer .section .social .link img{
                margin: 10;
                width: 30px;
                height: 30px;
            }
        </style>
        
        <style>
*
{
font-size:20px;
font-family:monospace;
}
td
{
padding:15px;
}
table
{
	border-top-left-radius:20px;
	border-bottom-right-radius:20px;
	padding:15px;
	box-shadow: 0px 1px 5px 0px gray;
	background-color: #efefef;
}
input[type="text"],input[type="password"]
{
	width: 350px;
    height: 50px;
    padding:  10px;
}
input[type="submit"]
{
    background-color: #efefef; 
    box-shadow: 1px 1px 5px 0px gray;
    border: 3px solid #eee;
    font-weight: 100;
    width: 100px;
}
input[type="submit"]:hover
{
background-color:#060;
cursor:pointer;
}
</style>
    </head>
    <body>
        
       
            <div class="footer"><center>
               <table>
<br><br><br>
<form action="#" method="post">
<tr>
  <td>إسم المستخدم</td><td><input type="text" name="username" placeholder="إسم المستخدم"></td></tr>
<tr>
  <td>كلمة المرور</td><td><input type="password" name="password" placeholder="كلمة المرور"></td></tr>
<tr><td><input type="submit" name="login" value=" دخول"></td>
<td><input type="submit" name="back" value="رجوع"></td></tr>
</form>
</table>
        
        
        
    </body>
</html>
