<?php 
function PrintReplyForm($root) {	
	echo <<<EOD
		<div class="panel-reply">
			<div class="panel panel-default">
				<div class="form-group">
					<div class="input-group">
						<label class="control-label"><h4>Reply</h4></label>
						<input type="text" class="form-control" name="title" id="title" placeholder="Subject"/>											
					</div>
					<div class="input-group">
						<textarea name="content" id="content" class="form-control" placeholder="Reply to thread..." rows="3"></textarea>
					</div>
				</div>
			</div>
		</div>
EOD;
}
 ?>