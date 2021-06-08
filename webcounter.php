<?php 
				$filetext = "webcounter.txt";
				$counter  = file($filetext);
				$visitor  = $counter[0];
				$visitor++;
				$file     = fopen($filetext,"w");
				fwrite($file, $visitor);
				fclose($file);
			?>