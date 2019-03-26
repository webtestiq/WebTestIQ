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
	<<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
        
<script>
    function thongbao() {
        alert("Bài Test Vẫn Đang Trong Giai Đoạn Phát Triển!!!!");
        window.location = "/webtestiq/index.php/Welcome/index/trang_chu"
    }
</script>
<div class="col-md-9" >
    <div id="Listtest"></div>
</div>
<div id="thongtin" class="col-md-9">
    <div id="ndct">
        <div id="updatetestiq">
            <p style="color: #2643CF;font-size: 23px;font-weight:bold;text-align: center;margin: 5px 0;">ĐO IQ BẰNG BÀI TEST IQ TUYỂN DỤNG</p>
            <p style="text-align: center;font-weight:bold;font-size:17px;">(Kết nạp thành viên nếu IQ > 130)</p>
            <div style="text-align: center; width: 100%; margin: 25px 0;">
                <a class="bd-t" id="bdtest" href="javascript:;" onclick="thongbao();">Bắt đầu test IQ</a>
            </div>
            <h2 style="font-size: 18px; margin: 20px 0 5px;">Bài Test IQ tuyển dụng là gì?</h2>
            <p class="line">Khác với bài <a href="/WebIQ/BaiTestIQ" style="font-weight: bold; color: rgb(0, 105, 255);">kiểm tra IQ</a>, thi IQ cơ bản theo chuẩn quốc tế Test IQ gồm 100% hình ảnh và công bằng với mọi người, mọi nền văn hóa (Culture Fair IQ test), bài trắc nghiệm IQ tuyển dụng được xây dựng với các dạng câu hỏi phong phú hơn, nhằm đánh giá không những khả năng tư duy lập luận về hình vẽ mà còn có cả tính toán IQ số học, trí nhớ , kiến thức và tư duy không gian. Có thể nói Bài <b>Test IQ tuyển dụng</b> là bài trắc nghiệm IQ toàn diện nhất, là một trong ba loại hình IQ Test phổ biến nhất thế giới (Culture Fair IQ test – IQ test tuyển dụng – High Rank IQ test)</p>
            <h2 style="font-size: 18px; margin-left: 10px; margin-bottom: 10px; margin-top: 10px; ">Test IQ 100% hình ảnh và Test IQ tuyển dụng cái nào chuẩn xác hơn? </h2>
            <p class="line" style="margin-bottom:10px;">Như đã nêu ở trên, các bài trắc nghiệm IQ tuyển dụng được xây dựng để đánh giá một cách toàn diện tất cả các kỹ năng tư duy lập luận của não trái, nhưng chính vì sự toàn diện đó dẫn đến phát sinh một vấn đề: nó không còn công bằng với mọi nền văn hóa, với mọi người kể cả người không biết chữ, chưa đi học bao giờ.</p>

            <p class="line" style="margin-bottom:10px;">Vì sao vậy? Đơn giản là một người nếu chưa từng đi học sẽ không thể biết các quy luật tính toán của những con số, các phép cộng trừ nhân chia, các kiến thức văn hóa. Vì vậy việc họ không thể giải một câu IQ tuyển dụng tổng quát hoàn toàn có khả năng là do họ không biết kiến thức đó, chứ không phải là không có khả năng tư duy logic.</p>

            <p class="line">Tuy nhiên, với những đối tượng là người đi làm, người xin việc ở các công ty, ngân hàng - tức những người có qua trường lớp đào tạo, hiểu rõ các quy tắc tính toán số học, thì bài <b>Test IQ tuyển dụng</b> này sẽ đánh giá chính xác và toàn diện nhất khả năng lập luận tư duy của người đó. Chính vì thế, các công ty lớn, ngân hàng… khi tuyển dụng nhân viên cho những vị trí cần đầu óc tính toán IQ, tư duy tốt luôn dùng những đề thi IQ tuyển dụng là như vậy.</p>
            <p class="line" style="text-decoration: underline; margin-top: 10px;">Các lưu ý trước khi làm bài <b>Test IQ tuyển dụng</b>:</p>
            <p class="line mag10">-&nbsp;  Bài trắc nghiệm IQ tuyển dụng gồm 32 câu làm trong thời gian 38 phút.</p>
            <p class="line mag10">-&nbsp;  Phân bố câu hỏi từ dễ đến khó</p>
            <p class="line mag10">-&nbsp;  Chỉ nên làm bài trắc nghiệm ở những nơi yên tĩnh, lúc đầu óc minh mẫn nhất để có kết quả chính xác cao.</p>
            <p class="line mag10">-&nbsp;  Để công bằng cho người test sau, mong các bạn đừng chia sẻ <i>đáp án</i> ra ngoài</p>
            <p class="line mag10" style="color: #A61801;">&nbsp;&nbsp;  Với một kết quả IQ Test lớn hơn 130, chúng tôi xin được vinh dự mời bạn gia nhập vào <i>Thành viên của Tổ chức trí tuệ cao Việt Nam</i>, Thông tin của bạn sẽ được đặt trong bảng thành viên ngay tại trang chủ.</p>
            <p class="line mag10">-&nbsp;  Chúc các bạn có phong độ tốt nhất khi làm bài Test IQ tuyển dụng <i>online</i> </p>
            <br>
    </div>
    <div style="width:100%; text-align:center; margin: 20px 0 10px 0;">
        <a class="bt_Test" id="bdtest" href="javascript:;" onclick="thongbao();">Tôi Đã Sẵn Sàng</a>
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