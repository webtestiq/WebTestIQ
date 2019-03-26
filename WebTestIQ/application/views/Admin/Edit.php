<?php
    include("header.php");
?>


    <h2 style="width: fit-content; margin: 0 auto" >Edit</h2>

<div class="edit">
    <form style="width: 500px; margin: 0 auto" action="/webtestiq/index.php/Admin_Con/Edit_post" method="post" enctype="multipart/form-data" onsubmit="return confirm('Xác nhận thông tin !');">
        <label for="fname">Mã câu hỏi: </label>
        <input style="background-color: #f2f2f2" type="text" id="MaCHoi" name="MaCHoi" value="<?php echo $data['Ques']->MaCHoi ?>" readonly />
        <br />
        <label for="fname" style="margin-right: 20px">STT</label>
        <input style="background-color: #f2f2f2" id="STT" name="STT" value="<?php echo $data['Ques']->STT ?> " readonly /> 
        <br />
        <label for="fname">Nội dung</label>
        <input type="text" id="Nd" name="Nd" placeholder="Nội dung.." value="<?php echo $data['Ques']->Noidung ?>"/>
        <br />
        <label for="mail">Đáp án chính xác</label>
        <input type="text" id="DAn9xac" name="DAn9xac" placeholder="Đáp án chính xác.." value="<?php echo $data['Ans']->DAchinhxac ?>"/>
        <br />
        <label for="lname">Đáp án 1</label>
        <input type="text" id="DAn1" name="DAn1" placeholder="Đáp án 1.." value="<?php echo $data['Ans']->DAn1 ?>"/>
        <br />
        <label for="lname">Đáp án 2</label>
        <input type="text" id="DAn2" name="DAn2" placeholder="Đáp án 2.." value="<?php echo $data['Ans']->DAn2 ?>"/>
        <br />
        <label for="lname">Đáp án 3</label>
        <input type="text" id="DAn3" name="DAn3" placeholder="Đáp án 3.." value="<?php echo $data['Ans']->DAn3 ?>"/>
        <br />
        <label for="lname">Đáp án 4</label>
        <input type="text" id="DAn4" name="DAn4" placeholder="Đáp án 4.." value="<?php echo $data['Ans']->DAn4 ?>"/>
        <br />
        <label for="lname">Đáp án 5</label>
        <input type="text" id="DAn5" name="DAn5" placeholder="Đáp án 5.." value="<?php echo $data['Ans']->DAn5 ?>"/>
        <br />
        <label for="lname">Đáp án 6</label>
        <input type="text" id="DAn6" name="DAn6" placeholder="Đáp án 6.." value="<?php echo $data['Ans']->DAn6 ?>"/>
        <br />

        <input type="submit" value="Save"/>
</div>

<?php
    include("footer.php");
?>