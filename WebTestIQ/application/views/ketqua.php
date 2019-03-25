 <!---------------------File Script-->
   <script type="text/javascript" src="/webtestiq/js/WebTestIQ.js"></script>

<script>
    function iq130() {
        var iq;
        var matestkq = localStorage.getItem("matest");
        if (matestkq == "EQ") {
            document.getElementById("kqiq").style.display = 'none';
            document.getElementById("kqtc").style.display = 'none';
            this.soEQ();
            iq = parseFloat(JSON.parse(localStorage.getItem("iq")));
            document.getElementById('ketquatesteq').innerHTML = iq;
        }
        if (matestkq == "IQ") {
            document.getElementById("kqeq").style.display = 'none';
            document.getElementById("kqtc").style.display = 'none';
            this.soIQ();
            iq = parseFloat(JSON.parse(localStorage.getItem("iq")));
            document.getElementById('ketquatest').innerHTML = iq;
        }
        if (matestkq == "TC") {
            document.getElementById("kqiq").style.display = 'none';
            document.getElementById("kqeq").style.display = 'none';
            this.soTC();
            iq = parseFloat(JSON.parse(localStorage.getItem("iq")));
            document.getElementById('ketquatesttc').innerHTML = iq;
        }
        if (iq >= 130)
            document.getElementById("iq130").style.display = "block";
    }
    window.onload = iq130;
</script>
<div class="col-md-9" style="border-top-style:double;
    border-top-color:aquamarine;
    border-top-width:5px; margin-left:-1px">
    <p style="font-size:24px; text-align:center">Chúc Mừng Bạn Đã Hoàn Thành Bài Kiểm Tra</p>
    <div id="kqiq">
        <p>
            <b>
                Điểm IQ Của bạn là:
                <i id="ketquatest" style="color:blue"></i>
            </b>

        </p>
    </div>
    <div id="kqeq">
        <p>
            <b>
                Điểm EQ Của bạn là:
                <i id="ketquatesteq" style="color:blue"></i>
            </b>
        <p>
            Bạn khá lạnh lùng và ít khi quan tâm người khác nghĩ gì. Chính nhờ sự lạnh lùng đó giúp bạn ra quyết định một cách quyết đoán hơn, nhưng đôi khi lại hay làm buồn lòng người khác mặc dù bạn không hề cố ý.</p>
        </p>
    </div>
    <div id="kqtc">
        <p>
            <b>
                Điểm Test Tính Cách Của bạn là:
                <i id="ketquatesttc" style="color:blue"></i>
            </b>
            <p>Bạn là một người hoạt náo, vui vẻ, dễ hòa đồng với mọi người, mọi người xung quanh luôn yêu quí bạn. Nhưng vì tính bạn thẳng thẳng, luôn nói thật những gì mình nghĩ nên đôi khi mất lòng người khác</p>
        </p>
    </div>
    <div id="iq130" style="display:none">
        <p>Chức Mừng Bạn Đã Đạt Đủ Điểm Để Được Thêm Vào BXH!</p>
        <p>Hãy Điền Thông Tin để có tên trong Bảng Xếp Hạng</p>
        <p>
            Nhấn vào
            <a class="btn btn-facebook" href="/UserIQ130/userIQ130">Đây</a>
            hoặc
            <a class="btn btn-facebook" href="/UserIQ130/LoginFacebook">
                Đăng Nhập Với Facebook
            </a>
        </p>
    </div>
</div>
