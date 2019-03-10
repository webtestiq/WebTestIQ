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
    <div id="baitestiq"></div>
    <?php foreach ($choi as $a) {?>
        <p style="font-size:18px;">
            <b>
                Câu số <?php $a['Id'] ?>:
            </b>
        </p>

        <div id="anwImg">
            <div class="baitest">
                <div class="ques">
                    <img src="~/Hinh_Cauhoi/$a['Cauhoi']" />
                </div>
                <div id="anw">
                    <div class="dapan">
                        <img src="~/Hinh_Cauhoi/$a['DAn1']" onclick="luudapan(<?php $a['Id'] ?>em.Id+1,1,<?php $a['Id'] ?>)" />
                    </div>
                    <div class="dapan">
                        <img src="~/Hinh_Cauhoi/$a['DAn2']" onclick="luudapan(<?php $a['Id'] ?>+1,2,<?php $a['Id'] ?>)" />
                    </div>
                    <div class="dapan">
                        <img src="~/Hinh_Cauhoi/$a['DAn3']" onclick="luudapan(<?php $a['Id'] ?>+1,3,<?php $a['Id'] ?>)" />
                    </div>
                    <div class="dapan">
                        <img src="~/Hinh_Cauhoi/$a['DAn4']" onclick="luudapan(<?php $a['Id'] ?>+1,4,<?php $a['Id'] ?>)" />
                    </div>
                    <div class="dapan">
                        <img src="~/Hinh_Cauhoi/$a['DAn5']" onclick="luudapan(<?php $a['Id'] ?>+1,5,<?php $a['Id'] ?>)" />
                    </div>
                    <div class="dapan">
                        <img src="~/Hinh_Cauhoi/$a['DAn6']" onclick="luudapan(<?php $a['Id'] ?>+1,6,<?php $a['Id'] ?>)" />
                    </div>
                </div>
            </div>
        </div>
        <div id="anwRadio">
            <p><?php $a['Cauhoi'] ?></p>
            <ul>
                <li><input type="radio" name="DAn1" onclick="luudapanEQ(<?php $a['Id'] ?>+1,1,<?php $a['Id'] ?>)"><?php $a['DAn1'] ?><br /></li>
                <li><input type="radio" name="DAn2" onclick="luudapanEQ(<?php $a['Id'] ?>+1,2,<?php $a['Id'] ?>)"><?php $a['DAn2'] ?><br /></li>
                <li><input type="radio" name="DAn3" onclick="luudapanEQ(<?php $a['Id'] ?>+1,3,<?php $a['Id'] ?>)"><?php $a['DAn3'] ?><br /></li>
                <li><input type="radio" name="DAn4" onclick="luudapanEQ(<?php $a['Id'] ?>+1,4,<?php $a['Id'] ?>)"><?php $a['DAn4'] ?><br /></li>
            </ul>
        </div>
        <div id="anwRadioTC">
            <p><?php $a['Cauhoi'] ?></p>
            <ul>
                <li><input type="radio" name="DAn1" onclick="luudapanTC(<?php $a['Id'] ?>+1,1,<?php $a['Id'] ?>)"><?php $a['DAn1'] ?><br /></li>
                <li><input type="radio" name="DAn2" onclick="luudapanTC(<?php $a['Id'] ?>+1,2,<?php $a['Id'] ?>)"><?php $a['DAn2'] ?><br /></li>
            </ul>
        </div> 
    <?php }?>

</div>