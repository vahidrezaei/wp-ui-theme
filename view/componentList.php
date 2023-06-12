<div class="container">
    <div class="row ">
        <div class="col-6">
            <img src="<?= \Inc\Base\BaseController::asset_url() ?>/assets/images/post_list.jpg" class="w-100" alt="" srcset="">
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">دسته بندی:</label>
                        <select name="" id="">
                            <?php 
                            global $wpdb;
                            $result = $wpdb->get_results("SELECT * FROM ala_haram.wp_terms");

                            foreach ($result as $cat) {
                            ?>
                            <option value="<?= $cat->term_id  ?>"><?= $cat->name ?></option>
                            <?php
                            } ?>
                        </select>            
                        
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>