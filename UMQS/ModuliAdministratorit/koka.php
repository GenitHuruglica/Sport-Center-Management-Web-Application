
<?php
            
            $rezultati = mysqli_query($lidh_k, "CALL selekto_k()");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
			<header id="header" class="alt">
						<div class="box">
						<h1><?php echo $Titulli ?></h1>
						<span class="logo"><img src="images/<?php echo $Dosje ?>" alt="" /></span>
						
					</div>
					</header>
		<?php } ?>