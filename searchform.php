<!-- 検索フォーム設定 -->
<!-- ウィジェットでも -->
<form class="form-inline" method="get" role="form" action ="<?php echo esc_url( home_url('/') ); ?>">
<div class="form-group">
		<input type="text" class="form-control" name="s">
        <button type="submit" class="btn btn-primary btn-blog-search"><i class="fas fa-search"></i></button>
</div>
</form>


<!--
    <form method="get" role="form" action ="<?php echo esc_url( home_url('/') ); ?>">
<div class="input-group">
	
		 <input type="text" class="form-control" name="s">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
		</span>
	
</div>
</form>
-->