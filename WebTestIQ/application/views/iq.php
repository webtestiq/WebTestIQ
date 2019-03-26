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
    var ma = "IQ";
</script>

<div class="col-md-9" >
    <h1 class="name_content hidden-xs">IQ LÀ GÌ?</h1>
    <br>
    <p class="gtnd"><b><a href="/WebIQ/BaiTestIQ">IQ</a></b> là viết tắt của cụm từ <a style="text-decoration:double" href="https://en.wikipedia.org/wiki/Intelligence_quotient" target="_blank">"lntelligent Quotient”</a> trong tiếng anh, có nghĩa là chỉ số thông minh. Là một khái niệm được đưa ra vào cuối thế kỷ 19 bởi nhà khoa học <a style="text-decoration:dashed" href="https://vi.wikipedia.org/wiki/Francis_Galton" target="_blank">Francis Galton</a> người Anh.</p>
    <h3>CHỈ SỐ IQ LÀ GÌ?</h3>
    <p class="gtnd">Chỉ số <b><a href="/WebIQ/BaiTestIQ">IQ</a></b> là một tính trạng số lượng được dùng để định giá trị thông minh của một người. Người có chỉ số IQ cao có khả năng thao tác, xử lý và phân tích thông tin ở mức độ chuyên sâu và tốc độ nhanh hơn người bình thường.</p>
    <div style="margin: 20px 0 30px;">
        <h2 class="big-h2">CHỈ SỐ IQ CỦA BẠN LÀ BAO NHIÊU?</h2>
        <div style="width: 100%; text-align: center; margin: 20px 0 10px 0;">
            <a class="bd-t" href="@Url.Action("BaiTestIQ","WebIQ")">Kiểm Tra Ngay Nào</a>
        </div>
    </div>
        <h3 style="text-transform: uppercase;">Vậy làm thế nào để đo được chỉ số <b><a href="/WebIQ/BaiTestIQ">IQ</a></b>?</h3>
            <p class="gtnd">Để đo chỉ số <b><a href="/WebIQ/BaiTestIQ">IQ</a></b>, các chuyển gia tâm lý đẫ thiết kế ra <a href="@Url.Action("BaiTestIQ","WebIQ")" style="font-weight:bold;">bài Test IQ</a> để kiểm tra khả năng lập luận logic của mỗi người</p>
            <p class="gtnd">Lần đầu tiên, chỉ số IQ được sử dụng ở Pháp vào đầu thế kỷ 20 khi người ta muốn khắc phục những khó khăn của trẻ lúc bắt đầu đi học. Tiếp đó, bài kiểm tra trắc nghiệm IQ được coi là hoàn chỉnh nhất của chuyên gia Hans Aizenk. Bài trắc nghiệm trở nên vô cùng phổ biến tại châu Âu trong những năm 1950. Mọi người tính điểm IQ của mình cả ở văn phòng và những buổi tiệc.</p>
            <p class="gtnd">Theo ông Hans Aizenk, muốn xác định IQ cần phải qua một bài kiểm tra IQ với các câu hỏi về suy luận logic, so sánh, số học, trí nhớ, kiến thức tổng quát, tính toán, xếp hình logic, sau đó so sánh tỉ lệ số điểm họ đạt được với số điểm trung bình của những nhóm tuổi khác nhau đạt được. IQ không phải là một số đo tuyệt đối, các nhà khoa học thời đó coi IQ là một tỉ lệ giữa tuổi trí lực và “tuổi thực tế” của con người. Nhưng sau đó phương pháp đo IQ được cải tiến theo ba độ lệch chuẩn 15, 16, 24 nhằm khắc phục những khuyết điểm của phương pháp cũ.</p>
            <p class="gtnd">Việc xác định chỉ số IQ là nhằm chẩn đoán và chữa trị những chứng bệnh gây hạn chế đến khả năng học tập và xác định trình độ học vấn cũng như tuyển chọn nhân viên. Tuy nhiên, cũng không nên dựa vào những con số về IQ để đánh giá khả năng một con người, bởi bài kiểm tra IQ không có tính chất kiểm tra toàn diện.</p>
            <p class="gtnd">Trong suốt cuộc đời của một con người, chỉ số IQ rất ít biến đổi và không phải lúc nào cũng có xu hướng tăng lên. Người ta nhận thấy rằng chỉ số IQ sẽ ổn định nhất ở độ tuổi từ 16 trở đi và có thể tăng chậm cho đến khi 30 tuổi, sau đó sẽ giảm dần. Vậy độ tuổi mà chỉ số IQ phát triển cao nhất của một người là vào khoảng từ 20-30 tuổi.</p>
            <p class="gtnd">Một cá nhân có thể cố gắng hoàn chỉnh sự học hỏi để gia tăng IQ. Một thí dụ điển hình là người Nhật đang cố gắng rèn luyện cho trẻ con gia tăng trí óc bằng các giáo trình đặc biệt kết hợp bồi bổ dinh dưỡng. Tuy nhiên, như đã nói ở trên, hiệu quả chỉ rõ rệt khi một người còn đang trong độ tuổi phát triển (dưới 16 tuổi). Với một người trưởng thành, chỉ số IQ đã ổn định, việc luyện tập và rèn luyện não bộ có giúp cho chỉ số IQ được gia tăng nhưng không nhiều.</p>
        <h3 style="text-transform: uppercase;">Ảnh hưởng của IQ đến đời sống con người?</h3>
            <p class="gtnd">Hiệu quả thực tế của chỉ số thông minh IQ được kiểm chứng bằng cách kiểm soát “độ liên quan giữa IQ và thực tế cuộc sống” với thước đo chuẩn là 1 cho thấy học vấn và IQ có độ liên quan là 0,5. Hiệu suất làm việc và IQ là 0,54. Như vậy một người có IQ cao chưa chắc đã học siêu giỏi hoặc làm việc có hiệu suất cao.</p>
            <p class="gtnd">Tiếp đó, chỉ số liên quan giữa tổng số năm học tập và IQ là 0.55;</p>
            <p class="gtnd">IQ và điều kiện kinh tế xã hội của cha mẹ là 0,33. Con số này cho thấy môi trường xung quanh, điều kiện sống cũng có tác động đến việc tăng giảm chỉ số IQ.</p>
            <p class="gtnd">Mối liên quan <b><a href="/WebIQ/BaiTestIQ">IQ</a></b> của vợ và chồng là 0,4, theo đó, nếu hai bên có sự hiểu biết tương đồng hay có những suy luận logic ngang nhau sẽ có sự ăn ý, hoà hợp. </p>
            <p class="gtnd">Bên cạnh đó. các nhà khoa học cho rằng người có IQ cao thường khoẻ khoắn và yêu đời hơn những người có IQ thấp hơn. Điều này được lý giải bởi họ có khả năng tránh né những rủi ro, biết bảo vệ sức khoẻ và có đời sống kinh tế khá, biết cách chống lại những cảm xúc tiêu cực của cuộc sống như chán nản, buồn bả, trầm cảm, tuyệt vọng.</p>
            <p class="gtnd">Đặc biệt thú vị là chiều cao của bố mẹ và đứa trẻ liên quan đến IQ là 0,47, trong khi đó, cha mẹ siêu thông minh lại có khuynh hướng sinh ra con cái ít thông minh hơn và các bậc cha mẹ “thường thường” lại có thể sinh con thông minh hơn. Đây là định luật hướng về trung bình mà người ta vẫn thường nhắc đến trong di truyền học.</p>
            <p class="gtnd">Một điều đặc biệt khác là người có IQ cao lại có trí nhớ “tồi" trong khi người có trí thông minh tương đối thấp thường có trí nhớ dai. Do đó, chúng ta mới có các nhân vật bác học đãng trí.</p>
            <p class="gtnd">Thành công không chịu ảnh hưởng của trí thông minh mà nó liên quan đến phong cách cá nhân sử dụng trí thông minh của mình như thế nào để mang lại kết quả tốt. Đó là kết luận của các nhà khoa học khi nói về sự ảnh hưởng của IQ đến cuộc sống con người.</p>
            <p class="gtnd">Thống kê ở Anh và Mỹ cho thấy có đến 35% thành công trong cuộc đời là nhờ chỉ số IQ; 75% còn lại là nhờ các chỉ số khác.</p>
            <p class="gtnd">Một điếu thú vị từ kết quả trắc nghiệm IQ của các nhà khoa học, chỉ số IQ cao nhất toàn cầu không chỉ ở các nước giàu có, phát triển châu Âu, châu Mỹ mà lại ở châu Á như Nhật Bản, Hàn Quốc, Trung Quốc, Singapore, Việt Nam, Thái Lan... Tại những nước này, chỉ số IQ trung bình là 105 đơn vị. Đứng vị trí thứ hai là các nước châu Âu, Mỹ, Canada, Australia, New Zealand có chỉ số IQ trung bình là 100, Nam Á, Bắc Phi và đa phần các nước châu Mỹ Latinh có chỉ số IQ trung bình là 85. Còn châu Phi nói chung và các nước vùng biển Caribe có chỉ số IQ trung bình dưới 70.</p>
    <div style="display: block;"></div>
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