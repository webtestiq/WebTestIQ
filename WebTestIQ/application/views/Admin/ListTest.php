<?php 
    include("header.php");
?>

<h2>IQ Test</h2>

<p>
    <a href="./Create_Get"> Thêm mới </a>
</p>
<table class="table">
    <tr>
        <th>
            Mã câu hỏi
        </th>
        <th>
            STT
        </th>
        <th>
            Nội dung
        </th>
        <th>
            Đáp án chính xác
        </th>
        <th>
            Đáp án 1
        </th>
        <th>
            Đáp án 2
        </th>
        <th>
            Đáp án 3
        </th>
        <th>
            Đáp án 4
        </th>
        <th>
            Đáp án 5
        </th>
        <th>
            Đáp án 6
        </th>
        <th></th>
    </tr>

    <?php foreach ($data['$Ques'] as $ques)
    {
        foreach ($data['$Ans'] as $ans)
        {
            if ($ques['MaCHoi'] == $ans['MaCHoi'])
            {
                ?>
    <tr>
        <td>
            <?php echo $ques['MaCHoi'] ?>    
        </td>
        <td>
            <?php echo $ques['STT'] ?>
        </td>
        <td>
            <?php echo $ques['Noidung'] ?>
        </td>
        <td>
            <?php echo $ans['DAchinhxac'] ?>
        </td>
        <td>
            <?php echo $ans['DAn1'] ?>
        </td>
        <td>
            <?php echo $ans['DAn2'] ?>
        </td>
        <td>
            <?php echo $ans['DAn3'] ?>
        </td>
        <td>
            <?php echo $ans['DAn4'] ?>
        </td>
        <td>
            <?php echo $ans['DAn5'] ?>
        </td>
        <td>
            <?php echo $ans['DAn6'] ?>
        </td>
        <td>
            <a href="/webtestiq/index.php/Admin_Con/Edit_Get?MaCHoi=<?php echo $ques['MaCHoi'] ?>"> Sửa </a>
            <a href="/webtestiq/index.php/Admin_Con/Delete?MaCHoi=<?php echo $ques['MaCHoi'] ?>"> Xóa </a>
        </td>
    </tr>
    <?php
            }
        }
    }
    ?>
</table>

<?php 
    include("footer.php");
?>