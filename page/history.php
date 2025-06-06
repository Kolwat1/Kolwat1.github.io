<div class="container-fluid p-4">
    <div class="container-sm m-auto p-4 pt-0 aos-init aos-animate" data-aos="<?php echo $anim; ?>">
        <div class="container-fluid ps-4 pe-4 <?php echo $bg?> ">
        <center class="m-0"><h2 class=" mb-2 mt-4"><i class="fa-regular fa-history"></i> ประวัติการสั่งซื้อ</h2></center>
        <hr class="mt-1">
            <div class="table-responsive">
                <table class="table   table-striped " id="table">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col">ชื่อรายการ</th>
                        <th scope="col">ของรางวัล</th>
                        <th scope="col">วันที่</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $q = dd_q("SELECT * FROM boxlog WHERE uid = ? ORDER BY id DESC ", [$_SESSION['id']]);
                            $i = 1;
                            while($row = $q->fetch(PDO::FETCH_ASSOC)){
                                
                        ?>


                            <tr>
                                <th scope="row" class="text-center" style="color: var(--font)"><?php echo number_format($i);?></th>
                                <td style="color: var(--font)" ><?php echo htmlspecialchars($row['category']);?></td>
                                <td style="color: var(--font)"><?php echo htmlspecialchars($row['prize_name']);?></td>
                                <td style="color: var(--font)"><?php echo htmlspecialchars($row['date']);?></td>
                            </tr>
                        <?php
                                $i++;
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>