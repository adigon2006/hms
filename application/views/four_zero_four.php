<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <head>
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <?php include 'otherincludes.php';?>
        <title>Page not found | <?php echo $system_title;?></title>
    </head>
<body>
  <!-- start: 404 -->
		<div class="error-full-page">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 page-error">
						<div class="error-number text-azure">
							404
						</div>
						<div class="error-details col-sm-6 col-sm-offset-3">
							<h3>Oops! You are stuck at 404</h3>
							<p>
								Unfortunately the page you were looking for could not be found.
								<br>
								It may be temporarily unavailable, moved or no longer exist.
								<br>
								Check the URL you entered for any mistakes and try again.
								<br>
								<a href="<?php echo base_url();?>" class="btn btn-red btn-return">
									Back to Dashboard
								</a>
								<!--<br>
								Still no luck?
								<br>
								Search for whatever is missing, or take a look around the rest of our site.
-->							</p>
							<!--<form action="#">
								<div class="input-group">
									<input type="text" placeholder="keyword..." size="16" class="form-control">
									<span class="input-group-btn">
										<button class="btn btn-azure">
											Search
										</button> </span>
								</div>
							</form>-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end: 404 --> 
    <?php include 'othermainjs.php' ?>
    </body>
</html>