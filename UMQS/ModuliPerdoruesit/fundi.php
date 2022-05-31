<footer id="footer">
				
					<?php
            $rezultati = mysqli_query($lidh_mszh, "CALL selekto_mszh()");
					
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
						<section>
							<h2><?php echo $Titulli ?></h2>
							<p><?php echo $PershkrimiD; ?>
							</p>
						</section>
			<?php } ?>
									<?php
                          $rezultati = mysqli_query($lidh_tdh, "CALL selekto_tdh()");
							
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
						<section>
							<h2><?php echo $Titulli ?></h2>
							<?php echo $PershkrimiD; ?>
						<hr>
			<?php } ?>
									<?php
            $rezultati = mysqli_query($lidh_rrs, "CALL selekto_rrs()");
            
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
						
							
							<?php echo $PershkrimiD; ?>
							<hr>
						</section>
			<?php } ?>
					
					
					
												<?php
            $rezultati = mysqli_query($lidh_tdr, "CALL selekto_tdr()");
			
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
					
					
							<p class="copyright"><?php echo $PershkrimiD; ?></p>
					
			<?php } ?>
						
					
			</footer>