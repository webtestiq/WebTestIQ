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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/testIQ.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/Menu.css">
	<<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!---------------------Xét trạng thái thành tích User-->
    <script>
    function trunglap() {
            alert("Bạn Đã Tồn Tại Thành Tích Cao Hơn Rồi!");
            $.ajax({
                type: "get",
                url: '@Url.Action("TrangChu","TestIQ")',
                error: function (jqXHR, textStatus, errorThrown) {
                    alert(errorThrown)
                },
            });
    }
    function hoanthanh() {
        alert("Chúc Mừng Bạn Đã Có Tên Trong BXH!");
        $.ajax({
            type: "get",
            url: '@Url.Action("TrangChu","TestIQ")',
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown)
            },
        });
    }
    </script>
    <!---------------------An thông tin để hiện câu hỏi-->
    <script>
        function anthongtin() {
            document.getElementById("thongtin").style.display = 'none';
        }
    </script>
    <!---------------------Hiện danh sách câu hỏi------------>
    <script>
    function loadlisttest(matest) {
        $.ajax({
            type: "get",
            url: '@Url.Action("LoadListtest","WebIQ")',
            data: { matest: matest },
            success: function (a) {
                $('#Listtest').html(a);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown)
            },
        });
    }
    </script>
    <!---------------------Load câu hỏi lên---------------->
    <script>
    function loadcauhoi(num,mtest) {
        $.ajax({
            type: "get",
            url: '@Url.Action("Loadcauhoi","WebIQ")',
            data: {
                id: num,
                matest: mtest,
            },
            success: function (a) {
                $('#baitestiq').html(a);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown)
            },
        });
    }
    </script>
    <!---------------------Tính điểm IQ sau khi làm bài test---------------->
    <script>
        function soIQ() {
            var array = new Array(6, 5, 4, 2, 1, 3, 4, 5, 5, 2, 3, 3, 1, 6, 1, 3, 6, 1, 2, 4, 1, 2, 2, 1, 3, 3);
            var Iq;
            var kqq = JSON.parse(localStorage.getItem("kq"));
            var dem = 0;
            var sc = array.length;
            var i = 0;
            for (i; i < sc; i++) {
                if (array[i] == kqq[i]) {
                    dem++;
                }
                Iq = parseInt((dem / 26) * 200);
            }
            localStorage.setItem("iq", JSON.stringify(Iq));
            document.getElementById('ketquatest').innerHTML = Iq;
        }
    </script>
    <!---------------------Tính điểm EQ sau khi làm bài test---------------->
    <script>
        function soEQ() {
            var array = new Array(1, 2, 3, 1, 2, 2, 3, 4, 3, 4);
            var Iq = 0;
            var kqq = JSON.parse(localStorage.getItem("kq"));
            var dem = 0;
            Iq = 0;
            var sc = array.length;
            var i = 0;
            for (i; i < sc; i++) {
                if (array[i] == kqq[i]) {
                    dem++;
                }
                Iq = parseInt((dem / 10) * 100);
            }
            localStorage.setItem("iq", JSON.stringify(Iq));
        }
    </script>
    <!---------------------Tính điểm Tích Cách sau khi làm bài test---------------->
    <script>
        var demm;
        function soTC() {
            var array = new Array(2, 1, 2, 1, 2, 2, 2, 1, 1, 1, 2, 2, 2, 1, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 1, 1, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2);
            var Iq = 0;
            var kqq = JSON.parse(localStorage.getItem("kq"));
            var dem = 0;
            var sc = array.length;
            var i = 0;
            for (i; i < sc; i++) {
                if (array[i] == kqq[i]) {
                    dem++;
                }
                Iq = parseInt((dem / 76) * 200);
            }
            localStorage.setItem("iq", JSON.stringify(Iq));
        }
    </script>
    <!---------------------Ẩn hiện menu------------------------>
    <script>
        function hienmenu() {
            if (demm == null) {
                document.getElementById("menu").style.display = 'block';
                demm = "a";
            }
            else {
                document.getElementById("menu").style.display = 'none';
                demm = null;
            }
        }
    </script>
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
    border-top-width:5px; margin-left:-1px">
    <div class="trangchu">
        <h2 style=" text-align:center">
            <b>
                Bạn có tò mò về chỉ số <b>IQ</b> của mình không?
            </b>
        </h2>
        <p style="text-align:center"> Hãy làm bài kiểm tra của chúng tôi để biết chỉ số <a href="/WebIQ/BaiTestIQ">IQ</a> của mình bạn nhé!!</p>
        <div style="width:100%; text-align:center; margin: 20px 0 10px 0;">
            <a class="bt_Test" href="@Url.Action("BaiTestIQ","WebIQ")">Kiểm Tra Ngay Nào</a>
        </div>
        <h4 style="margin-top:75px">
            <b>
                Bạn Có Biết:
            </b>
        </h4>
        <p>
            Người ta chia chỉ số <b><a href="/WebIQ/BaiTestIQ">IQ</a></b> gồm các nhóm sau:
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
        <img src="<?php echo base_url('/HinhIQ/bieudoIQ.png'); ?>" />
    </div>
    <h4 style="text-align:center; margin-top:15px">
        <b>Top 20 Bảng Xếp Hạng Chỉ Số <a href="/WebIQ/BaiTestIQ">IQ</a>Thế Giới</b>
    </h4>
    <div class="cangiua">
        <img src="<?php echo base_url('/HinhIQ/bxhIQ.PNG'); ?>" />
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