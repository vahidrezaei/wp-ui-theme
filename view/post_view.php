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
                            $result = $wpdb->get_results("SELECT * FROM fadak_terms");

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
                            <option value="1">1</option>P
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
    /////////////POST 1
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
<hr>
<div class="container">
    <div class="row ">
        <div class="col-12 text-center">
            <img src="<?= \Inc\Base\BaseController::asset_url() ?>/assets/images/post_list_2.png" class="w-75" alt="" srcset="">
        </div>
        <div class="col-12 text-center">
            <div class="row">
                <div class="col-3">
                    <div class="mb-3">
                        <label for="cat" class="form-label">دسته بندی:</label>
                        <select class="form-control" name="cat2" id="cat2">
                            <?php 
                            global $wpdb;
                            $result = $wpdb->get_results("SELECT * FROM 
                            fadak_terms");

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
                        <select class="form-control" name="col_md2" id="col_md2">
                                <option value="3">3</option>
                                <option value="4">4</option>

                        </select>

                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="col" class="form-label">تعداد ستون در موبایل:</label>
                        <select class="form-control" name="col2" id="col2">
                            <option value="1">1</option>
                            <option value="2">2</option>

                        </select>

                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="col" class="form-label">نمایش عنوان:</label>
                        <select class="form-control" name="col2" id="col2">
                            <option value="_">نمایش</option>
                            <option value="d-none">عدم نمایش</option>

                        </select>

                    </div>
                </div>
                <div class="col-12 " >
                    <div class="alert alert-info" id="code2"></div>

                </div>

            </div>

        </div>

    </div>
</div>
<script>
//////////////POST 2
var cat2,col2,col_md2;
    document.getElementById('cat2').addEventListener("change", changeValue);
    document.getElementById('col2').addEventListener("change", changeValue);
    document.getElementById('col_md2').addEventListener("change", changeValue);
    function changeValue(){
        cat2 = document.getElementById('cat2').value;
        col2 = document.getElementById('col2').value;
        col_md2 = document.getElementById('col_md2').value;

        document.getElementById('code2').innerHTML = "[ala-post-list2 cat="+cat2+" col="+col2+ " col_md="+col_md2+"]";

    } 
</script>


