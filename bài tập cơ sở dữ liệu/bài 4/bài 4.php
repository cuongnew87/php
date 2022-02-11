<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sữa</title>
	<link rel="stylesheet"  
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
	<style>   
		.uppercase{
			text-transform: uppercase;
		} 
		table, th, td, tr {  
			border: 1px solid black;
    	}        
        input, button{   
            height: 34px;   
        }   
  
    	.pagination {   
        	display: inline-block;   
    	}   
    	.pagination a {   
        	font-weight:bold;   
        	font-size:18px;   
        	color: black;   
        	float: left;   
        	padding: 8px 16px;   
        	text-decoration: none;   
        	border:1px solid black;   
    	}   
    	.pagination a.active {   
            background-color: pink;   
    	}   
    	.pagination a:hover:not(.active) {   
        	background-color: skyblue;   
    	}   
    	.table-striped>tbody>tr:nth-child(odd)>td, .table-striped>tbody>tr:nth-child(odd)>th {
   			background-color: #ffaa4f;
 		}
	</style>
</head>
<body>
	<center>  
		<?php  

    	// Import the file where we defined the connection to Database.     
		require_once "connection.php";   

        $per_page_record = 4;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
        if (isset($_GET["page"])) {    
        	$page  = $_GET["page"];    
        }    
        else {    
        	$page=1;    
        }    

        $start_from = ($page-1) * $per_page_record;     

        $query = "SELECT * FROM sua LIMIT $start_from, $per_page_record";     
        $rs_result = mysqli_query ($conn, $query);    
        ?>    

        <div class="container" style="background-color: #e6e6e6;">   
			<br>   
			<div>   
        		<h1 class="uppercase">Thông tin sữa</h1>     
        		<table class=" table-striped table-condensed">   
        			<thead>   
        				<tr>   
        					<th width="10%">Số TT</th>   
        					<th>Tên sữa</th>   
        					<th>Hãng sữa</th>   
        					<th>Loại sữa</th>   
        					<th>Trọng lượng</th>   
        					<th>Đơn giá</th>   
        				</tr>   
        			</thead>   
        			<tbody>   
        				<?php     
        					while ($row = mysqli_fetch_array($rs_result)) {    
                  			// Display each field of the records.    
        				?>     
        					<tr>     
        						<td><?php echo $row["id"]; ?></td>     
        						<td><?php echo $row["name"]; ?></td>   
        						<td><?php echo $row["company"]; ?></td>   
        						<td><?php echo $row["type"]; ?></td>        						
        						<td><?php echo $row["weight"]; ?> gram</td>   
        						<td><?php echo $row["price"]; ?> VND</td>                                            
        					</tr>     
        				<?php     
        				};    
        				?>     
        			</tbody>   
        		</table>   

        	<div class="pagination">    
        		<?php  
        		$query = "SELECT COUNT(*) FROM sua";     
        		$rs_result = mysqli_query($conn, $query);     
        		$row = mysqli_fetch_row($rs_result);     
        		$total_records = $row[0];     

        		echo "</br>";     
       			// Number of pages required.   
				$total_pages = ceil($total_records / $per_page_record);     
        		$pagLink = "";       

        		if($page>=2){   
        			echo "<a href='bài 4.php?page=".($page-1)."'>  Prev </a>";   
        		}       

        		for ($i=1; $i<=$total_pages; $i++) {   
        			if ($i == $page) {   
        				$pagLink .= "<a class = 'active' href='bài 4.php?page="  
        				.$i."'>".$i." </a>";   
        			}               
        			else  {   
        				$pagLink .= "<a href='bài 4.php?page=".$i."'>   
        				".$i." </a>";     
        			}   
        		};     
        		echo $pagLink;   

        		if($page<$total_pages){   
        			echo "<a href='bài 4.php?page=".($page+1)."'>  Next </a>";   
        		}   

        		?>    
        	</div>  
        </div>   
    </div>  
</center>     
</body>
</html>