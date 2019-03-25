<!DOCTYPE>
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
    <!---------------------File Script-->
   <script type="text/javascript" src="/webtestiq/js/WebTestIQ.js"></script>
</head>

<body>

<div class="container">
        <!-- php menu -->
    <?php
        include("menu.php");
    ?>
        <div class="userIQ130">
            <form action="/webtestiq/index.php/UserIQ130_Con/UserIQ130_post" method="post" enctype="multipart/form-data" onsubmit="return confirm('Do you really want to submit the form?');">
            
                <label for="fname">Họ và Tên</label>
                <input type="text" id="hoten" name="hoten" placeholder="Họ và Tên..">

                <label for="mail">Email</label>
                <input type="email" id="email" name="email" placeholder="Email.." />

                <label for="lname">Số Điện Thoại</label>
                <input type="number" id="sdt" name="sdt" placeholder="Số điện thoại..">
                <br />
                <label for="nghenghiep">Nghề Nghiệp</label>
                <input type="text" id="nghenghiep" name="nghenghiep" placeholder="Nghề Nghiệp là.." />

                <label for="namsinh">Năm Sinh</label>
                <input type="number" id="namsinh" name="namsinh" placeholder="Năm Sinh..." />
                <br />
                <label for="sothich">Sở Thích</label>
                <input type="text" id="sothich" name="sothich" placeholder="Sở Thích..." />
                <input type="text" id="ketquaiq" name="ketquaiq" readonly="readonly" style="visibility:hidden" />

                <input type="submit" name="submit" value="Submit">
            
            </form>
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

<script>
    function truyeniq() {
        var iq = parseFloat(JSON.parse(localStorage.getItem("iq")));
        document.getElementById("ketquaiq").value = iq;
    }
    window.onload = truyeniq;
</script>