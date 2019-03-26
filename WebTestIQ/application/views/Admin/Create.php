<?php
    include("header.php");
?>

<script>
    function CountChars() {
        var matest = document.getElementById("MaTest").value;
        var stt = document.getElementById("STT").value;
        document.getElementById("MCHoi").value = matest + stt;
    }
</script>

<h2 style="width: fit-content; margin: 0 auto" >Create</h2>

<div class="create">
    <form style="width: 500px; margin: 0 auto" action="/webtestiq/index.php/Admin_Con/Create_Post" method="post" enctype="multipart/form-data" onsubmit="return confirm('Xác nhận thông tin !');"> 
        <label for="fname">Mã test</label>
            <select id="MaTest" name="MaTest" onclick="CountChars()">
                <option value="IQ">IQ</option>
                <option value="EQ">EQ</option>
                <option value="IQTD">IQTD</option>
                <option value="TC">TC</option>
            </select>
        <br />
        <label for="fname">STT</label>
        <input type="number" id="STT" name="STT" onclick="CountChars()" onkeyup="CountChars()" value="1" />
        <br />
        <label for="fname">Mã câu hỏi</label>
        <input style="background-color: #f2f2f2" type="text" id="MCHoi" name="MCHoi" onclick="CountChars()" readonly>
        <br />
        <label for="fname">Nội dung</label>
        <input type="text" id="Nd" name="Nd" onclick="CountChars()" placeholder="Nội dung..">
        <br />
        <label for="mail">Đáp án chính xác</label>
        <input type="text" id="DAn9xac" name="DAn9xac" onclick="CountChars()" placeholder="Đáp án chính xác.." />
        <br />
        <label for="lname">Đáp án 1</label>
        <input type="text" id="DAn1" name="DAn1" onclick="CountChars()" placeholder="Đáp án 1..">
        <br />
        <label for="lname">Đáp án 2</label>
        <input type="text" id="DAn2" name="DAn2" onclick="CountChars()" placeholder="Đáp án 2..">
        <br />
        <label for="lname">Đáp án 3</label>
        <input type="text" id="DAn3" name="DAn3" onclick="CountChars()" placeholder="Đáp án 3..">
        <br />
        <label for="lname">Đáp án 4</label>
        <input type="text" id="DAn4" name="DAn4" onclick="CountChars()" placeholder="Đáp án 4..">
        <br />
        <label for="lname">Đáp án 5</label>
        <input type="text" id="DAn5" name="DAn5" onclick="CountChars()" placeholder="Đáp án 5..">
        <br />
        <label for="lname">Đáp án 6</label>
        <input type="text" id="DAn6" name="DAn6" onclick="CountChars()" placeholder="Đáp án 6..">
        <br />
        <input type="submit" value="Create">
</div>

<?php
    include("footer.php");
?>