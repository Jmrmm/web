<?php
session_start();

if ($_SESSION['email'] != "") {
		$conn = new mysqli('localhost', 'adminRRFevX1', 'SzNbpq4StL7a', 'web');

		$sql = "SELECT * FROM contactos";
		$result = $conn->query($sql);?>

		<div class="container">
	       <div class="blog-top">
				<div class="single">
				 <div class="single_grid2">
					   <h4 class="tz-title-4 tzcolor-blue">
							Lista de Contactos
						</h4>
						<ul class="list">

<?php if ($result->num_rows > 0) {
	foreach ($result as $row) { ?>
						<li>
			            <div class="col-md-2 preview"><a href="#"><img src="images/co.png" class="img-responsive" alt=""></a></div>
			            <div class="col-md-10 data">
			                <div class="title"><a href="#"><?php echo $row['email']; ?></a><br><span class="m_14"><?php echo $row['nome']; ?></span></div>
			                <p><?php echo $row['mensagem']; ?></p>
							<h5 class="m_26"> <a href="#">reply</a></h5>
			            </div>
			           <div class="clearfix"></div>
			        </li>
	<?php }
} ?>

			     </ul>
				</div>
			 </div>
		
				</div>
			<!--//End-blog-pagenate-->
		</div>
<?php }
?>
