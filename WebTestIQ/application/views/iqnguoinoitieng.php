<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width" />
    <title>IQ nguoi noi tieng</title>
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/testIQ.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/Menu.css">
	<<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
        <div class="col-md-2">
            <div class="logo">
                <img src="<?php echo base_url('HinhIQ/logo1.png'); ?>" />
            </div>
        </div>
        <div class="col-md-9" style="margin-left:19px">
            <img class="header" src="<?php echo base_url('HinhIQ/IQvsEQ.png'); ?>" />
        </div>
    </div>
    <!-- Page Content -->
    <div class="container" style="padding-top:10px">
        <div class="menu_an"><a onclick="hienmenu(1);"> <img src="<?php echo base_url('HinhIQ/icon_menu.png'); ?>" alt="icon menu" /></a></div>
        <div class="col-md-3" style="width:225px;">
            <div id="menu">
                <ul style="list-style-type:none;">
                    <li style="font-size:14px;">
                        <a href="/webtestiq/"
                           class="list-group-item"><span class="glyphicon glyphicon-home"></span>Trang Chủ</a>
                    </li>
                    <li style="font-size:14px">
                        <a href="/webtestiq/index.php/Welcome/baitestiq"
                           class="list-group-item"><span class="glyphicon glyphicon-star"></span>Test IQ</a>
                    </li>
                    <li style="font-size:14px">
                        <a href="/webtestiq/index.php/Welcome/baitesteq"
                           class="list-group-item"><span class="glyphicon glyphicon-heart"></span>Test EQ</a>
                    </li>
                    <li style="font-size:14px">
                        <a href="/webtestiq/index.php/Welcome/tuyendung"
                           class="list-group-item"><span class="glyphicon glyphicon-ok"></span>Test IQ Tuyển Dụng</a>
                    </li>
                    <li style="font-size:14px">
                        <a href="/webtestiq/index.php/Welcome/tinhcach"
                           class="list-group-item"><span class="glyphicon glyphicon-eye-open"></span>Test Tính Cách</a>
                    </li>
                    <li style="font-size:14px">
                        <a href="/webtestiq/index.php/Welcome/iqnoitieng"
                           class="list-group-item"><span class="glyphicon glyphicon-user"></span>IQ Các Thiên Tài</a>
                    </li>
                    <li style="font-size:14px">
                        <a href="/webtestiq/index.php/Welcome/iq"
                           class="list-group-item"><span class="glyphicon glyphicon-question-sign"></span>IQ Là Gì?</a>
                    </li>
                    <li style="font-size:14px">
                        <a href="/webtestiq/index.php/Welcome/bangxephang"
                           class="list-group-item"><span class="glyphicon glyphicon-equalizer"></span>Bảng Xếp Hạng</a>
                    </li>
                </ul>
            </div>
        </div>
        <div style="margin-left:5px">
            <div class="col-md-9" style="border-top-style:double;
    border-top-color:aquamarine;
    border-top-width:5px; margin-left:-1px" >
    <div class="col-md-9" >
    <h2 style="color:blueviolet; text-align:center">IQ Của Nhóm Người Nổi Tiếng Thế Giới</h2>
    <div class="container">
        <div class="row" style="margin-left: -6%;">
            <div class="col-md-3 thumbnail">
                <a href="<?php echo base_url('HinhIQStar/batman.jpg'); ?>">
                    <img src="<?php echo base_url('HinhIQStar/batman.jpg'); ?>" alt="EmmaWatson" />
                    <p style="text-align:center; margin-top:5px">Banman 192</p>
                </a>
            </div>
            <div class="col-md-3 thumbnail">
                <a href="<?php echo base_url('HinhIQStar/BillClinton.jpg'); ?>">
                    <img src="<?php echo base_url('HinhIQStar/BillClinton.jpg'); ?>" alt="EmmaWatson" />
                    <p style="text-align:center;margin-top:5px">Bill Clinton 156</p>
                </a>
            </div>
            <div class="col-md-3 thumbnail">
                <a href="<?php echo base_url('HinhIQStar/BillGate.jpg'); ?>">
                    <img src="<?php echo base_url('HinhIQStar/BillGate.jpg'); ?>" alt="EmmaWatson" />
                    <p style="text-align:center;margin-top:5px">Bill Gate 160</p>
                </a>
            </div>
            <div class="col-md-3 thumbnail">
                <a href="<?php echo base_url('HinhIQStar/Clinton.jpg'); ?>">
                    <img src="<?php echo base_url('HinhIQStar/Clinton.jpg'); ?>" alt="EmmaWatson" />
                    <p style="text-align:center;margin-top:5px">Clinton 140</p>
                </a>
            </div>
            <div class="col-md-3 thumbnail">
                <a href="<?php echo base_url('HinhIQStar/Hitler.jpg'); ?>">
                    <img src="<?php echo base_url('HinhIQStar/Hitler.jpg'); ?>" alt="EmmaWatson" />
                    <p style="text-align:center;margin-top:5px">Hitler 141</p>
                </a>
            </div>
            <div class="col-md-3 thumbnail">
                <a href="<?php echo base_url('HinhIQStar/Jobs.jpg'); ?>">
                    <img src="<?php echo base_url('HinhIQStar/Jobs.jpg'); ?>" alt="EmmaWatson" />
                    <p style="text-align:center;margin-top:5px">Steve Jobs 160</p>
                </a>
            </div>
            <div class="col-md-3 thumbnail">
                <a href="<?php echo base_url('HinhIQStar/Newton.jpg'); ?>">
                    <img src="<?php echo base_url('HinhIQStar/Newton.jpg'); ?>" alt="EmmaWatson" />
                    <p style="text-align:center;margin-top:5px">Issac Newton 190</p>
                </a>
            </div>
            <div class="col-md-3 thumbnail">
                <a href="<?php echo base_url('HinhIQStar/MarkZukerberg.jpg'); ?>">
                    <img src="<?php echo base_url('HinhIQStar/MarkZukerberg.jpg'); ?>" alt="EmmaWatson" />
                    <p style="text-align:center;margin-top:5px">Mark Zukerberg 152</p>
                </a>
            </div>
            <div class="col-md-3 thumbnail">
                <a href="<?php echo base_url('HinhIQStar/Shakira.jpg'); ?>">
                    <img src="<?php echo base_url('HinhIQStar/Shakira.jpg'); ?>" alt="EmmaWatson" />
                    <p style="text-align:center;margin-top:5px">Shakira 140</p>
                </a>
            </div>
            <div class="col-md-3 thumbnail">
                <a href="<?php echo base_url('HinhIQStar/SherlockHolmes.jpg'); ?>">
                    <img src="<?php echo base_url('HinhIQStar/SherlockHolmes.jpg'); ?>" style="width:130px" alt="EmmaWatson" />
                    <p style="text-align:center;margin-top:5px">Sherlock Holmes 190</p>
                </a>
            </div>
            <div class="col-md-3 thumbnail">
                <a href="<?php echo base_url('HinhIQStar/Songjongki.jpg'); ?>">
                    <img src="<?php echo base_url('HinhIQStar/Songjongki.jpg'); ?>" alt="EmmaWatson" />
                    <p style="text-align:center;margin-top:5px">Songjongki 140</p>
                </a>
            </div>
            <div class="col-md-3 thumbnail">
                <a href="<?php echo base_url('HinhIQStar/Tony.jpg'); ?>">
                    <img src="<?php echo base_url('HinhIQStar/Tony.jpg'); ?>" alt="EmmaWatson" />
                    <p style="text-align:center;margin-top:5px">Tony Stack 270</p>
                </a>
            </div>
            <div class="col-md-3 thumbnail">
                <a href="<?php echo base_url('HinhIQStar/Trump.jpg'); ?>">
                    <img src="<?php echo base_url('HinhIQStar/Trump.jpg'); ?>" alt="EmmaWatson" />
                    <p style="text-align:center;margin-top:5px">Donald Trump156</p>
                </a>
            </div>
            <div class="col-md-3 thumbnail">
                <a href="<?php echo base_url('HinhIQStar/EmmaWatson.jpg'); ?>">
                    <img style="height:200px" src="<?php echo base_url('HinhIQStar/EmmaWatson.jpg'); ?>" alt="EmmaWatson" />
                    <p style="text-align:center;margin-top:5px">Emma Watson 138</p>
                </a>
            </div>
        </div>
    </div>

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
                    <p>Copyright &copy; @DateTime.Now.Year; CPH_15DTH11_Hutech</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->
</body>
</body>
</html>