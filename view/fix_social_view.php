<?php

global $wpdb;
$row = $wpdb->get_row("SELECT * FROM ala_haram.ala_social_icon order by id desc limit 1");


if ($_POST){
	$active = (int) $_POST['active'];
	$eita = $_POST['eita'] ?? null;
	$robika = $_POST['robika'] ?? null;
	$telegram= $_POST['telegram'] ?? null;
	$instagram = $_POST['instagram'] ?? null;
	$bale = $_POST['bale'] ?? null;
	$aparat = $_POST['aparat'] ?? null;


	$q =  $wpdb->prepare("INSERT INTO `ala_social_icon`
    (`active`, `eita`, `telegram`, `instagram`, `bale`, `robika`,`aparat`) 
VALUES (%d, %s,  %s,  %s,  %s,  %s, %s)",$active,$eita,$telegram,$instagram,$bale,$robika,$aparat);
	$wpdb->get_results($q,ARRAY_A );

}

?>

<div class="container">
    <div class="row pt-3">
        <div class="col-6">
            <form action="" method="post" >
            <div class="mb-3">
                <select class="form-select" name="active" id="active">
                    <option <?= @$row->active=='1' ? 'selected' : '' ?>  value="1">نمایش</option>
                    <option <?= @$row->active=='0' ? 'selected' : '' ?> value="0">عدم نمایش</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ایتا:</label>
                <input type="text" class="form-control"  value="<?= @$row->eita ?>" name="eita" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">روبیکا:</label>
                <input type="text" class="form-control"  value="<?= @$row->robika ?>" name="robika" >
            </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">آپارات:</label>
                <input type="text" class="form-control"  value="<?= @$row->aparat ?>" name="aparat" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">تلگرام:</label>
                <input type="text" class="form-control"  value="<?= @$row->telegram ?>" name="telegram" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">اینستاگرام:</label>
                <input type="text" class="form-control"  value="<?= @$row->instagram ?>" name="instagram" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">بله:</label>
                <input type="text" class="form-control"  value="<?= @$row->bale ?>" name="bale" >
            </div>
                <button type="submit" class="btn btn-primary btn-sm" >ثبت</button>
            </form>

        </div>



    </div>
</div>

