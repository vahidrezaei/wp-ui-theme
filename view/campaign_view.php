<?php

global $wpdb;
$row = $wpdb->get_results("SELECT * FROM ala_campaign order by id desc");



if ($_POST) {
    $active = (int) $_POST['active'];
    $title = $_POST['title'] ?? null;
    $photo = $_POST['photo'] ?? null;
    $tozih = $_POST['tozih'] ?? null;
    $mablagh = (int)$_POST['mablagh'] ?? null;
    $current_pay =(int) $_POST['current_pay'] ?? null;


    $q =  $wpdb->prepare("INSERT INTO `ala_campaign`
    (`active`, `title`, `photo`, `tozih`, `mablagh`, `current_pay`) 
VALUES (%d, %s,  %s,  %s,   %d, %d)", $active, $title, $photo, $tozih, $mablagh, $current_pay);
    $wpdb->get_results($q, ARRAY_A);
}

?>


<div class="container">
    <div class="row">
        <div class="col-2"><button class="btn btn-info" type="button" id="toggle_form">افزودن</button></div>
        
    </div>
<form action="" class="d-none" method="post" id="from_camp">

    <div class="row pt-3">

            <div class="col-6">
                <div class="mb-3">
                    <label for="">وضعیت فعال بودن:</label>
                    <select class="form-select form-select-lg w-100" name="active" id="active">
                        <option <?= @$row->active == 1 ? 'selected' : '' ?> value="1">نمایش</option>
                        <option <?= @$row->active == 0 ? 'selected' : '' ?> value="0">عدم نمایش</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="">عنوان:</label>
                   <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="">عکس:</label>
                   <input type="text" class="form-control" name="photo">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="">توضیحات:</label>
                   <input type="text" class="form-control" name="tozih">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="">مبلغ:</label>
                   <input type="number" class="form-control" name="mablagh">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="">جمع آوری شده:</label>
                   <input type="number" class="form-control" name="current_pay">
                </div>
            </div>
            <div class="col-2"><button type="submit" class="btn btn-primary btn-sm">ثبت</button></div>
            




    </div>
    </form>

</div>

<div class="container">
    <div class="row pt-3">
        <table class="table table-striped table-hover">
            <tr>
                <th>ردیف</th>
                <th>عنوان</th>
                <th>هزینه کمپین</th>
                <th>جمع آوری شده</th>
            </tr>
            <?php
            foreach ($row as $item) {
            ?>
                <tr>
                    <td><?= $item->id ?></td>
                    <td><?= $item->title ?></td>
                    <td><?= $item->mablagh ?></td>
                    <td><?= $item->current_pay ?></td>

                </tr>

            <?php
            }
            ?>
        </table>
    </div>
</div>

<script>
    var form_toggle = 'hide';
    document.getElementById('toggle_form').addEventListener('click',function(){
        if(form_toggle == 'hide'){
            form_toggle = 'show'
            document.getElementById('from_camp').classList.remove('d-none');

        }else{
            form_toggle = 'hide';
            document.getElementById('from_camp').classList.add('d-none');

        }
    })
</script>