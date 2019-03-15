<script>
    var ktmt = localStorage.getItem("matest");
    if (ktmt == "IQ") {
        document.getElementById("anwRadio").style.display = 'none';
        document.getElementById("anwRadioTC").style.display = 'none';
    }
    if (ktmt == "EQ") {
        document.getElementById("anwImg").style.display = 'none';
        document.getElementById("anwRadioTC").style.display = 'none';
    }
    if (ktmt == "TC") {
        document.getElementById("anwRadio").style.display = 'none';
        document.getElementById("anwImg").style.display = 'none';
    }
</script>
<div>
    <?php foreach ($choi as $a) {?>
        <p style="font-size:18px;">
            <b>
                Câu số <?php echo $a['STT'] ?>:
            </b>
        </p>

        <div id="anwImg">
            <div class="baitest">
                <div class="ques">
                    <img src="/webtestiq/Hinh_Cauhoi/<?php echo $a['Noidung'] ?>" />
                </div>
                <div id="anw">
                    <div class="dapan">
                        <img src="/webtestiq/Hinh_Cauhoi/<?php echo $a['DAn1']?>" onclick="luudapan(<?php echo $a['STT']  +1?>,1,<?php echo $a['STT'] ?>)" />
                    </div>
                    <div class="dapan">
                        <img src="/webtestiq/Hinh_Cauhoi/<?php echo $a['DAn2']?>" onclick="luudapan(<?php echo $a['STT']  +1?>,2,<?php echo $a['STT'] ?>)" />
                    </div>
                    <div class="dapan">
                        <img src="/webtestiq/Hinh_Cauhoi/<?php echo $a['DAn3']?>" onclick="luudapan(<?php echo $a['STT']  +1?>,3,<?php echo $a['STT'] ?>)" />
                    </div>
                    <div class="dapan">
                        <img src="/webtestiq/Hinh_Cauhoi/<?php echo $a['DAn4']?>" onclick="luudapan(<?php echo $a['STT']  +1?>,4,<?php echo $a['STT'] ?>)" />
                    </div>
                    <div class="dapan">
                        <img src="/webtestiq/Hinh_Cauhoi/<?php echo $a['DAn5']?>" onclick="luudapan(<?php echo $a['STT']  +1?>,5,<?php echo $a['STT'] ?>)" />
                    </div>
                    <div class="dapan">
                        <img src="/webtestiq/Hinh_Cauhoi/<?php echo $a['DAn6'] ?>" onclick="luudapan(<?php echo $a['STT']  +1?>,6,<?php echo $a['STT'] ?>)" />
                    </div>
                </div>
            </div>
        </div>
        <div id="anwRadio">
            <p><?php echo $a['Noidung'] ?></p>
            <ul>
                <li><input type="radio" name="DAn1" onclick="luudapanEQ(<?php echo $a['STT'] ?>+1,1,<?php echo $a['STT'] ?>)"><?php echo $a['DAn1'] ?><br /></li>
                <li><input type="radio" name="DAn2" onclick="luudapanEQ(<?php echo $a['STT'] ?>+1,2,<?php echo $a['STT'] ?>)"><?php echo $a['DAn2'] ?><br /></li>
                <li><input type="radio" name="DAn3" onclick="luudapanEQ(<?php echo $a['STT'] ?>+1,3,<?php echo $a['STT'] ?>)"><?php echo $a['DAn3'] ?><br /></li>
                <li><input type="radio" name="DAn4" onclick="luudapanEQ(<?php echo $a['STT'] ?>+1,4,<?php echo $a['STT'] ?>)"><?php echo $a['DAn4'] ?><br /></li>
            </ul>
        </div>
        <div id="anwRadioTC">
            <p><?php echo $a['Noidung'] ?></p>
            <ul>
                <li><input type="radio" name="DAn1" onclick="luudapanTC(<?php echo $a['STT'] ?>+1,1,<?php echo $a['STT'] ?>)"><?php echo $a['DAn1'] ?><br /></li>
                <li><input type="radio" name="DAn2" onclick="luudapanTC(<?php echo $a['STT'] ?>+1,2,<?php echo $a['STT'] ?>)"><?php echo $a['DAn2'] ?><br /></li>
            </ul>
        </div> 
    <?php }?>

</div>