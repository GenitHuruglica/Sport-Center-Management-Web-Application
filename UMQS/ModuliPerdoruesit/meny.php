	 <nav id="nav">
	<?php
            
            $rezultati = mysqli_query($lidh_m, "CALL selekto_m()");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  	 echo $PershkrimiD;
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

			}
            ?>
        </nav>