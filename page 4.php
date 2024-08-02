<?php

			include('../dbcon.php');

			$query = "SELECT * FROM `menu`";
			$run = mysqli_query($conn, $query);

			if (mysqli_num_rows($run) < 1) 
	        {
	        	echo "<tr><td colspan='5' align='center'>No data found</td><tr>";
	        }
			else
			{
				$count = 0;
				while ($data = mysqli_fetch_assoc($run))
				{
					$count++;
					?>
					<tr align="center">
						<td> <?php echo $data['item_no']; ?> </td>
						<td> <?php echo $data['name']; ?> </td>
						<td> <?php echo $data['type']; ?> </td>
						<td><?php echo $data['detail']; ?></td>
						<td> <?php echo $data['price']; ?> </td>
						<td> <img src="../dataimg/<?php echo $data['image'] ?>" style="max-width:100px;max-height: 100px;"></td>	
						<td> <a href="updateitem1.php?sid=<?php echo $data['id']; ?>"> Edit </a></td>
						<td> <a href="deleteitem1.php?sid=<?php echo $data['id']; ?>"> Delete </a></td>
					</tr>
					<?php
				}
			}
    	?>