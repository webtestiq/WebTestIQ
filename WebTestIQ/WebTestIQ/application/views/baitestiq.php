<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	    <meta name="viewport" content="width=device-width" />
    <title>Test IQ</title>
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
	<<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
                <img src="/webtestiq/HinhIQ/logo1.png" />
            </div>
        </div>
        <div class="col-md-9" style="margin-left:19px">
            <img class="header" src="/webtestiq/HinhIQ/IQvsEQ.png" />
        </div>
    </div>
    <!-- Page Content -->
    <div class="container" style="padding-top:10px">
        <div class="menu_an"><a onclick="hienmenu(1);"> <img src="/webtestiq/HinhIQ/icon_menu.png" alt="icon menu" /></a></div>
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
        <!-----------------xoa loclStorage---------------------->
        <script>
            localStorage.clear();
        </script>
        <!-----------------gán ma test---------------------->
        <script>
            function lambaiIQ() {
                var matestIQ = "IQ";
                localStorage.setItem("matest", matestIQ);
            }
        </script>
        <!-----------------Luu đáp án---------------------->
        <script>
            var ma = "IQ";
            var kq = new Array();
            var so;
            function luudapan(chuyencau, dapan, causo) {
                var da = parseInt(dapan);
                so = causo - 1;
                if (chuyencau <= 26) {
                    kq[so] = da;
                    this.loadcauhoi(chuyencau, 'IQ');
                }
                else {
                    var ktda = new Array();
                    var demkt;
                    demkt = 0;
                    for (i = 0; i < 25; i++) {
                        if (kq[i] == null) {
                            ktda[i] = i + 1;
                            demkt += 1;
                        }
                    }
                    if (demkt != 0)
                        alert("Bạn vẫn còn các câu '" + ktda.join() + "' Hãy hoàn thành chúng!!");
                    else {
                        kq[so] = da;
                        localStorage.setItem("kq", JSON.stringify(kq));
                        window.location = "/WebIQ/Ketqua";
                    }
                }
            }
        </script>
        <!-------------Dem Nguoc thoi gian-------------->
        <script>
            function CountDown() {
                var sec = 00;
                var min = 24;
                document.getElementById("time").style.display = 'block';
                var count = setInterval(function () {
                    sec--;
                    if (sec == -01) {
                        sec = 59;
                        min = min - 1;
                    }
                    else {
                        min = min;
                    }
                    if (sec <= 9) {
                        sec = "0" + sec;
                    }
                    document.getElementById("demo").innerHTML = min + "phút" + sec + "giây";

                    if (min == 00 && sec == 00) {
                        clearInterval(count);
                        document.getElementById("demo").innerHTML = "Hết giờ !!";
                        window.location = "/WebIQ/Ketqua";
                    }
                }, 1000);
            }
        </script>
        <div class="col-md-9" >
            <div id="time" style="display:none;">
                <p style="font-weight:bold; font-size:15px; text-align:center;">
                    Thời gian còn lại:
                    <b id="demo" style="color:red"></b>
                </p>
            </div>
            <div id="baitestiq"></div>
            <div id="Listtest"></div>
        </div>
        <div id="thongtin" class="col-md-9">
            <p style="text-align:left;font-size:22px;">
                <b>
                    <u>
                        <b><a href="/webtestiq/trang_chu">Test IQ</a></b>
                    </u>
                </b>
            </p>
            <ul style="font-size:16px;">
                <li>25 câu hỏi.</li>
                <li>24 phút trả lời.</li>
                <li>Từ dễ đến khó.</li>
                <li>Dành cho người từ 16 tuổi.</li>
                <li>Toàn bộ câu hỏi đều là hình ảnh</li>
            </ul>
            <p style="text-align:left;font-size:22px;">
                <b>
                    <u>
                        Lưu ý:
                    </u>
                </b>
            </p>
            <ul style="font-size:16px;">
                <li>Hết 24 phút bài kiểm tra sẽ tự dừng lại.</li>
                <li>Khi làm xong không nên chia sẽ đáp án cho người khác biết, để tạo sự công bằng cho mỗi người khi làm bài kiểm tra</li>
                <li>Chọn những nơi yên tĩnh, tâm trạng thoải mái để đạt được kết quả tốt nhất khi làm bài</li>
                <li style="color:blue;text-decoration:underline">Bạn nào có kết quả kiểm tra IQ>=130 sẽ được lưu vào bảng xếp hạng! Hiện ngay ở trang chủ</li>
            </ul>
            <div style="width:100%; text-align:center; margin: 20px 0 10px 0;">
                <a class="bt_Test" id="bdtest" href="javascript:;" onclick="loadcauhoi(1, 'IQ'); anthongtin(); lambaiIQ();CountDown(); loadlisttest('IQ');">Tôi Đã Sẵn Sàng</a>
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