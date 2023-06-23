<div class="container">
    <div class="row ">
        <div class="col-12 text-center">
            <img src="<?= \Inc\Base\BaseController::asset_url() ?>/assets/images/post_list.jpg" class="w-75" alt="" srcset="">
        </div>
        <div class="col-12 text-center">
            <div class="row">
                <div class="col-3">
                    <div class="mb-3">
                        <label for="cat" class="form-label">دسته بندی:</label>
                        <select class="form-control" name="cat" id="cat">
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
                <div class="col-3">
                    <div class="mb-3">
                        <label for="col_md" class="form-label">تعداد ستون در سیستم:</label>
                        <select class="form-control" name="col_md" id="col_md">
                                <option value="3">3</option>
                                <option value="4">4</option>

                        </select>

                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="col" class="form-label">تعداد ستون در موبایل:</label>
                        <select class="form-control" name="col" id="col">
                            <option value="1">1</option>
                            <option value="2">2</option>

                        </select>

                    </div>
                </div>
                <div class="col-12 " >
                    <div class="alert alert-info" id="code"></div>

                </div>

            </div>

        </div>

    </div>
</div>

<script>
    var cat,col,col_md;
    document.getElementById('cat').addEventListener("change", changeValue);
    document.getElementById('col').addEventListener("change", changeValue);
    document.getElementById('col_md').addEventListener("change", changeValue);
    function changeValue(){
        cat = document.getElementById('cat').value;
        col = document.getElementById('col').value;
        col_md = document.getElementById('col_md').value;

        document.getElementById('code').innerHTML = "[ala-post-list cat="+cat+" col="+col+ " col_md="+col_md+"]";

    } 

</script>