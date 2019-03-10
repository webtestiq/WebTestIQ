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
        <!-- php menu -->
    <?php
        include("menu.php");
    ?>
    <div class="col-md-9">
        <div id="time" style="display:none;">
            <p style="font-weight:bold; font-size:15px; text-align:center">
                Thời gian còn lại: <b id="demo" style="color:red"></b>
            </p>
        </div>
        <div id="baitestiq"></div>
    </div>
    <!-----------------xoa loclStorage---------------------->
    <script>
        localStorage.clear();
    </script>
    <!-----------------gán ma test---------------------->
    <script>
        function lambaiTC() {
            var matestTC = "TC";
            localStorage.setItem("matest", matestTC);
        }
    </script>
    <!-----------------Luu đáp án---------------------->
    <script>
        var kq = new Array();
        var so;
        function luudapanTC(chuyencau, dapan, causo) {
            var da = parseInt(dapan);
            so = causo - 1;
            if (chuyencau <= 76) {
                kq[so] = da;
                this.loadcauhoi(chuyencau, 'TC');
            }
            else {
                kq[so] = da;
                localStorage.setItem("kq", JSON.stringify(kq));
                window.location = "/WebIQ/Ketqua";
            }
        }
    </script>
    <!-------------Dem Nguoc thoi gian-------------->
    <script>
        function CountDown() {
            var sec = 00;
            var min = 72;
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
    <div id="thongtin" class="col-md-9">
        <h2 class="big-h2">BẠN CÓ HIỂU RÕ VỀ TÍNH CÁCH CỦA CHÍNH MÌNH?</h2>
        <p class="center" style="font-family: arial;font-size: 16px;">Bài trắc nghiệm tính cách MBTI này sẽ giúp bạn xác định tính cách của bản thân</p>
        <div style="text-align: center; width: 100%; margin: 25px 0;">
            <a class="bd-t" id="bdtest" href="javascript:;" onclick="loadcauhoi(1, 'TC'); anthongtin(); CountDown(); lambaiTC();">Kiểm tra Tích Cách</a>
        </div>
        <div class="divider"></div>
        <h3>Trắc nghiệm MBTI là gì?</h3>
        <p class="gtnd">Trắc nghiệm MBTI là viết tắt của <a style="text-decoration:double" href="https://en.wikipedia.org/wiki/Myers-Briggs_Type_Indicator" target="_blank">Myers-Briggs Type Indication</a>, một phương pháp sử dụng những câu hỏi trắc nghiệm tâm lý để tìm hiểu tâm lý, tính cách cũng như cách mà con người nhận thức thế giới xung quanh, cách con người đưa ra quyết định cho một vấn đề nào đó. </p>
        <p class="gtnd">Mỗi con người chúng ta có đều có những nét cá tính và tính cách riêng tạo nên sự khác biệt và dấu ấn trong cuộc đời của mỗi người. Câu hỏi đặt ra là liệu bạn đã hiểu rõ về bản thân để phát huy tối đa thế mạnh của mình? Hãy tìm hiểu bài trắc nghiệm MBTI để tìm câu trả lời riêng cho mình nhé.</p>
        <p class="gtnd">Trắc nghiệm MBTI nhấn mạnh vào sự khác biệt tự nhiên của từng người,và trả lời cho câu hỏi tại sao mỗi người trên thế giới đều có những cá tính khác nhau. MBTI test được phát triển dựa vào nền tảng của tâm lý học, vì thế nó có tính chính xác khá cao và đang trở nên rất phổ biến. Nó giúp con người ta hiểu rõ bản thân và những người xung quanh hơn cũng như tìm được công việc phù hợp với mình. Bài Trắc nghiệm MBTI có các dạng 70 câu, 72 câu, tuy nhiên dạng 76 câu là dạng sẽ phản ánh chính xác nhất.</p>
        <h3>Trắc nghiệm MBTI dựa trên 4 tiêu chí</h3>
        <p class="gtnd"><b><i>Xu hướng tự nhiên: Extraversion (Hướng ngoại) / Introversion (Hướng nội)</i></b></p>
        <p class="gtnd">Đây là hai xu hướng đối lập thể hiện những xu hướng ứng xử của một người với thế giới quan bên ngoài.</p>
        <p class="gtnd mag10">-&nbsp; Hướng ngoại là hướng về thế giới bên ngoài gồm những hoạt động, con người, đồ vật.</p>
        <p class="gtnd mag10">-&nbsp; Hướng nội là hướng vào nội tâm, gồm cả ý nghĩ, tư tưởng, trí tưởng tượng.</p>
        <p class="gtnd"><b><i>Tìm hiểu và nhận thức thế giới: Sensing (Giác quan) / iNtuition (Trực giác)</i></b></p>
        <p class="gtnd">Trong các nhóm trắc nghiệm MBTI test. Đây chính là 2 xu hướng đối lập nhau về cách con người tiếp nhận thông tin từ thế giới xung quanh.</p>
        <p class="gtnd mag10">-&nbsp; Trung tâm “Giác quan” trong não bộ chú ý đến những chi tiết liên quan tới hình ảnh, âm thanh, mùi vị… của hiện tại được đưa tới từ 5 giác quan của cơ thể. Chúng phân loại, sắp xếp và ghi nhận các chi tiết của các sự kiện thực tế đang diễn ra. Chúng cũng cung cấp các thông tin chi tiết của sự kiện đã xảy ra trong quá khứ.</p>
        <p class="gtnd mag10">-&nbsp; Trung tâm “Trực giác” của não bộ có trách nhiệm tìm hiểu, diễn dịch, và hình thành những mô hình từ thông tin thu thập được; sắp xếp những mô hình và liên hệ chúng với nhau. Nó giúp não bộ suy đoán các khả năng và suy đoán được tương lai.</p>
        <p class="gtnd"><b><i>Quyết định và lựa chọn: Thinking (Lý trí) / Feeling (Cảm xúc)</i></b></p>
        <p class="gtnd">Ở nhóm trắc nghiệm MBTI test. Đây là 2 xu hướng đối lập về cách con người đưa ra quyết định và lựa chọn của mình.</p>
        <p class="gtnd mag10">-&nbsp; Phần lý trí trong não bộ chúng ta phân tích thông tin một cách khách quan, thực hiện việc dựa trên đúng/sai, suy luận và đưa ra những kết luận một cách có hệ thống. Nó là bản chất logic của con người chúng ta.</p>
        <p class="gtnd mag10">-&nbsp; Phần cảm xúc của não bộ đưa ra quyết định dựa vào việc xem xét tổng thể; yêu/ghét; tác động qua lại lẫn nhau; và những giá trị nhân đạo hay thẩm mỹ. Đó là bản chất chủ quan của con người chúng ta.</p>
        <p class="gtnd"><b><i>Cách thức hành động: Judging (Nguyên tắc) / Perceiving (Linh hoạt)</i></b></p>
        <p class="gtnd">Nhóm cuối của trắc nghiệm MBTI test. Đây là 2 cách thức mà mỗi người chúng ta lựa chọn để tác động tới thế giới bên ngoài.</p>
        <p class="gtnd mag10">-&nbsp; Nguyên tắc: tiếp cận thế giới có kế hoạch, có tổ chức, có chuẩn bị, quyết định và đạt đến một kết quả rõ ràng.</p>
        <p class="gtnd mag10">-&nbsp; Linh hoạt: tiếp cận thế giới một cách tự nhiên, tìm phương pháp để thích nghi với hoàn cảnh, thích một kết quả bỏ ngỏ, chấp nhận các cơ hội mới, và chấp nhận thay đổi kế hoạch.</p>
        <p class="gtnd">Từ 4 tiêu chí trên, đưa ra 16 tính cách MBTI test khách nhau. Tên của từng nhóm đều có 4 chữ cái, đại diện cho 4 tiêu chuẩn để phân loại.</p>
        <img src="/webtestiq/HinhIQ/LoaiTC.PNG" alt="trắc nghiệm tính cách mbti" style="width:100%;max-width:800px;">
        <p>Mỗi yếu tố của 4 nhóm trên kết hợp với nhau tạo thành 16 nhóm tính cách MBTI:</p>
        <img src="/webtestiq/HinhIQ/NhomTC.PNG" style="width:100%;max-width:800px;" />
        <div style="width:100%; text-align:center; margin: 20px 0 10px 0;">
            <!--Nút bấm bắt đầu làm bài có các Chức năng: ẩn div"thongtin", load khung bài test, load bài test 1, bắt đầu đếm thời gian làm-->
            <a class="bt_Test" id="bdtest" href="javascript:;" onclick="loadcauhoi(1, 'TC'); anthongtin(); lambaiTC(); CountDown();">Tôi Đã Sẵn Sàng</a>
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