	//-------------------An thông tin để hiện câu hỏi-->
	function anthongtin() {
	    document.getElementById("thongtin").style.display = 'none';
	}

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
    
    //-------------------Hiện danh sách câu hỏi------------>
    
    function loadlisttest(mtest) {
        $("#numbertest").load("dsachcauhoi", { 'matest': mtest });
    }
    
    //-------------------Load câu hỏi lên---------------->
    
    function loadcauhoi(num,mtest) {
        $("#baitestiq").load("loadcauhoi",{'id':num,'matest':mtest});
    }
    
    //-------------------Tính điểm IQ sau khi làm bài test---------------->
    
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
    
    //-------------------Tính điểm EQ sau khi làm bài test---------------->
    
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
    
    //-------------------Tính điểm Tích Cách sau khi làm bài test---------------->
    
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
    
    //---------------------Ẩn hiện menu------------------------>
    
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
    //------------- Dem Nguoc thoi gian-------------->
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
            window.location = "/WebIQ/Ketqua";
        }
    }, 1000);
}