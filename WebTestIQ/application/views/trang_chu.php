<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	    <meta name="viewport" content="width=device-width" />
    <title>Trang Chu</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="iq test,kiem tra iq,trac nghiem iq,chi so iq,test iq,trac nghiem iq,test iq,test iq tieng viet,trac nghiem iq tieng viet,do iq,IQ,test,kiem tra,trac nghiem,test iq tuyen dung,test iq ngan hang,trac nghiem iq tuyen dung">
    <meta name="robots" content="noodp,index,follow">
    <meta name="description" content="Test IQ, Kiem tra IQ. Chi so IQ Test của người bình thường là 100, của THIÊN TÀI là trên 145. Test IQ EQ miễn phí.">
    <title>Test IQ-EQ</title>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>

	<!--Load jquery.min.js file, which store in js folder.-->
    <link rel="stylesheet" type="text/css" href="/webtestiq/css/testIQ.css">
    <link rel="stylesheet" type="text/css" href="/webtestiq/css/Menu.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!---------------------File Script-->
   <script type="text/javascript" src="/webtestiq/js/WebTestIQ.js"></script>

</head>
<body>
<?php session_start();//at the very top of the page
            $_SESSION['authenticated']=false; ?>
<div class="container">
        <!-- php menu -->
    <?php
        include("menu.php");
    ?>
    <div class="trangchu">
        <h2 style=" text-align:center">
            <b>
                Bạn có tò mò về chỉ số <b>IQ</b> của mình không?
            </b>
        </h2>
        <p style="text-align:center"> Hãy làm bài kiểm tra của chúng tôi để biết chỉ số <a href="/WebIQ_Con/BaiTestIQ">IQ</a> của mình bạn nhé!!</p>
        <div style="width:100%; text-align:center; margin: 20px 0 10px 0;">
            <a class="bt_Test" href="/webtestiq/index.php/WebIQ_Con/baitestiq">Kiểm Tra Ngay Nào</a>
        </div>
        <h4 style="margin-top:75px">
            <b>
                Bạn Có Biết:
            </b>
        </h4>
        <p>
            Người ta chia chỉ số <b><a href="/WebIQ_Con/BaiTestIQ">IQ</a></b> gồm các nhóm sau:
        </p>
        <ul>
            <li>Chỉ số IQ dưới 85-Nhóm thấp(<b>16%</b>)</li>
            <li>Chỉ số IQ từ 85-115-Nhóm bình thường(<b>68%</b>)</li>
            <li>Chỉ số IQ từ 115-130-Nhóm thông minh(<b>14%</b>)</li>
            <li>Chỉ số IQ từ 130-140-Nhóm rất thông minh(<b>2%</b>)</li>
            <li>Chỉ số IQ từ 140-Nhóm thiên tài(<b>0.1%</b>)</li>
        </ul>
    </div>
    <div class="cangiua">
        <img src="/webtestiq/HinhIQ/bieudoIQ.png" />
    </div>
    <h4 style="text-align:center; margin-top:15px">
        <b>Top 20 Bảng Xếp Hạng Chỉ Số <a href="/WebIQ_Con/BaiTestIQ">IQ</a>Thế Giới</b>
    </h4>
    <div class="cangiua">
        <img src="/webtestiq/HinhIQ/bxhIQ.PNG" />
    </div>
</div>
        </div>
    </div>
    <!-- /.container -->
    <hr>
    <!-- Footer -->
    <div class="container">
        <footer style="float:left">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; 2019; CPH_15DTH11_Hutech</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->
</body>
</body>
</html>