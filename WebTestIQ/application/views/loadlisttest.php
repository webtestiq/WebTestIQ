<div>
        <ul>
            <?php foreach ($dschoi as $a){ ?>
                <li>
                    <a href="javascript:;" onclick="loadcauhoi(<?php echo $a['STT'] ?>,'<?php echo $a['MaTests']?>')"><?php echo $a['STT']?></a>
                </li>
            <?php } ?>
        </ul>
</div>