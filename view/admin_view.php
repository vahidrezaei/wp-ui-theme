<div class="container pt-3">
    <div class="row ">
        <div class="alert py-0">
            <h4>لیست کامپوننت ها</h4>
        </div>
        <div class="col-12">
            <ul class="list-group">
                <a href="?page=wp-velemtor-icon" class="list-group-item list-group-item-action">آیکون های مرکز</a>
                <a href="?page=wp-velemtor-post" class="list-group-item list-group-item-action">لیست پست ها</a>
                <a href="?page=wp-velemtor-social" class="list-group-item list-group-item-action">شبکه های اجتماعی</a>

            </ul>

        </div>


    </div>

</div>

</div>
</div>

<?php
		

	function form_generate()
	{


		echo '<div>
			<span>text</span>
			<a href="#">link</a>
		</div>';

	}

    add_shortcode('ala-post-list', array($this, 'form_generate'));