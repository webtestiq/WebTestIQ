<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width" />
    <title>Test EQ</title>
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
    <!---------------------File Script-->
    <script type="text/javascript" src="/webtestiq/js/WebTestIQ.js"></script>

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
    <!-- php menu -->
    <?php
        include("menu.php");
    ?>

    <!-----------------xoa loclStorage---------------------->
    <script>
        localStorage.clear();
    </script>
    <!-----------------gán ma test---------------------->
    <script>
        var ma = "EQ";
        function lambaiEQ() {
            var matestEQ = "EQ";
            localStorage.setItem("matest", matestEQ);
        }
    </script>
    <!-----------------Luu đáp án---------------------->
    <script>
        var kq = new Array();
        var so;
        function luudapanEQ(chuyencau, dapan, causo) {
            var da = parseInt(dapan);
            so = causo - 1;
            if (chuyencau <= 10) {
                kq[so] = da;
                this.loadcauhoi(chuyencau, 'EQ');
            }
            else {
                kq[so] = da;
                localStorage.setItem("kq", JSON.stringify(kq));
                window.location = "/webtestiq/index.php/WebIQ_Con/ketqua";
            }
        }
    </script>
    <!-------------Dem Nguoc thoi gian-------------->
    <script>
        function CountDown() {
            var sec = 00;
            var min = 20;
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
                    document.getElementById("demo").innerHTML = "Hết giờ cmmr !!";
                    window.location = "/webtestiq/index.php/WebIQ_Con/ketqua";
                }
            }, 1000);
        }
    </script>
    <div class="col-md-9" >
        <div id="time" style="display:none;">
            <p style="font-weight:bold; font-size:15px; text-align:center">
                Thời gian còn lại: <b id="demo" style="color:red"></b>
            </p>
        </div>
        <div id="baitestiq"></div>
        <div id="numbertest"></div> 
    </div>
    <div id="thongtin" class="col-md-9">
        <div id="ndct">
            <h2 style=" text-align:center">
                <b>
                    CHỈ SỐ EQ CỦA BẠN LÀ BAO NHIÊU?
                </b>
            </h2>
            <p class="center" style="font-family: arial;font-size: 16px;">BÀI TEST EQ NÀY SẼ GIÚP BẠN KIỂM TRA CHỈ SỐ CẢM XÚC CỦA BẢN THÂN</p>
            <p class="center" style="font-family: arial;font-size: 13px;padding-top:10px;">(Nếu bạn chưa biết <span>EQ là gì</span> có thể xem ở phần "Khái niệm về EQ" được ghi bên dưới)</p>
            <div style="width: 100%; text-align: center; margin: 20px 0 10px 0;">
                <a class="bd-t" id="bdtest" href="javascript:;" onclick="loadcauhoi(1, 'EQ'); anthongtin(); lambaiEQ();CountDown(); loadlisttest('EQ');">Kiểm tra chỉ số EQ ngay</a>
            </div>
            <div class="divider"></div>
            <h3>CHỈ SỐ EQ LÀ GÌ?</h3>
            <p class="gtnd">EQ là viết tắt của <a style="text-decoration:double" href="https://en.wikipedia.org/wiki/Emotional_intelligence" target="_blank">Emotional Quotient</a> có nghĩa là chỉ số cảm xúc - Một tính trạng số lượng được dùng để đo lường trí tưởng tượng, sáng tạo của một người. Người có EQ cao có khả năng nhận biết, đánh giá và điều tiết cảm xúc của bản thân và mọi người rất tốt, do vậy thường trở thành những nhà lãnh đạo giỏi.</p>
            <p class="gtnd">Trí thông minh cảm xúc hay gọi tắt là EI là khả năng nhận biết, đánh giá và điều tiết cảm xúc của chính bạn, của những người xung quanh bạn và của các nhóm người. Và cũng giống chỉ số IQ, chỉ số cảm xúc EQ được đo thông qua các bài Test EQ – kiểm tra EQ.</p>
            <h3>CÁC DẠNG TEST EQ – TRẮC NGHIỆM EQ</h3>
            <p class="gtnd">Nhiều mô hình và định nghĩa về <b>chỉ số EQ</b> đã được đưa ra nhưng chỉ có mô hình cảm xúc Năng Lực (ability EI model) và mô hình cảm xúc Đặc Điểm (trait EI model) là được chấp nhận rộng rãi nhất trong những tài liệu khoa học. Vì thế các bài trắc nghiệm EQ cũng chủ yếu dựa trên 2 dạng này.</p>
            <p class="gtnd">Mô hình EI Năng Lực thường được đo bằng việc sử dụng tối đa các bài <b>Test EQ</b> về hành vi, trong khi mô hình EI Đặc Điểm thường đánh giá chỉ số EI bằng việc sử dụng các bài Eq test với câu hỏi tự trả lời, do đó có mối liên hệ mật thiết với tính cách của bạn.</p>
            <p class="gtnd">Một người sở hữu <b>chỉ số EQ</b> cao là một người luôn biết tự đánh giá bản thân, biết điểm mạnh, điểm yếu của chính mình và của người khác, có khả năng đồng cảm và thấu hiểu cảm xúc người khác. Luôn biết cách giữ được sự bình tĩnh và lạc quan trong cuộc sống ngay cả trong những thử thách khó khan nhất. </p>
            <p class="gtnd">Qua đó, ta thấy được rằng, người có <b>chỉ số EQ</b> cao tự nhiên sẽ có đủ mọi tố chất để trở thành người lãnh đạo. Chính vì thế không có gì ngạc nhiên khi ngày nay bài Test EQ – trắc nghiệm EQ được đánh giá quan trọng không kém Test IQ. </p>
            <p class="gtnd">Vấn đề là, người ta thường chỉ giỏi một trong hai. Hoặc <b>Test EQ</b>, hoặc Test IQ. Hiếm có người nào cùng lúc giỏi cả hai thứ, tuy nhiên nếu có, bạn sẽ cảm thấy rất thú vị với những gì người đó có thể làm đấy!</p>
            <p class="gtnd">Không hack não nữa :), hãy xác định <b>chỉ số EQ</b> của bạn bằng những câu hỏi “hơi bị dễ” nào.  </p>
            <p class="gtnd">*Lưu ý:  Mặc dù hiện nay không có bài kiểm tra trắc nghiệm EQ nào có thể đo <b>chỉ số EQ</b> chính xác tuyệt đối như IQ, bài <b>Test EQ</b> sau đây sẽ cho các bạn một kết quả kiểm tra EQ gần đúng nhất. Bài test được dịch từ bài EQ Test được đưa ra bởi Daniel Goleman, tác giả của cuốn sách bán chạy nhất vào năm 1995: Emotional Intelligence.</p>
            <p class="gtnd">- Bài <b>Test EQ</b> hoàn toàn miễn phí. Chúc các bạn có phong độ tốt nhất khi test.</p>
            <br>
            <div style="width:100%; text-align:center; margin: 20px 0 10px 0;">
                <a class="bt_Test" id="bdtest" href="javascript:;" onclick="loadcauhoi(1, 'EQ'); anthongtin(); lambaiEQ();CountDown(); loadlisttest('EQ');">Tôi Đã Sẵn Sàng</a>
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
                    <p>Copyright &copy; _15DTH11_Hutech</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->
</body>
</body>
</html>