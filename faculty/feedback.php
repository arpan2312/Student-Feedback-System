<?php 
$q=mysqli_query($conn,"select * from feedback where faculty_id='".$_SESSION['faculty_login']."'");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>

<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_feedback.php?id='+id;
     }
}
</script>	


<div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" >Feedback</h1>
	</div>
</div>
<div class="row">

<div class="col-sm-12" style="overflow-x:auto;">

<table class="table table-bordered" >

	<thead >
	
	<tr class="success">
		<th>Sr.No</th>
		
		<th>Teacher</th>
		<th>Q 1</th>
		<th>Q 2</th>
		<th>Q 3</th>
		<th>Q 4</th>
		<th>Q 5</th>
		<th>Q 6</th>
		<th>Q7</th>
		<th>Q 8</th>
		<th>Q 9</th>
		<th>Q 10</th>
		<th>Q 11</th>
		<th>Q 12</th>
		<th>Q 13</th>
		<th>Q 14</th>
		</tr>
		</thead>
		
		<?php
		$i=1;
	while($row=mysqli_fetch_array($q))
		{
			echo "<tr>";
			echo "<td>".$i."</td>";
			
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
			echo "<td>".$row[4]."</td>";
			echo "<td>".$row[5]."</td>";
			echo "<td>".$row[6]."</td>";
			echo "<td>".$row[7]."</td>";
			echo "<td>".$row[8]."</td>";
			echo "<td>".$row[9]."</td>";
			echo "<td>".$row[10]."</td>";
			echo "<td>".$row[11]."</td>";
			echo "<td>".$row[12]."</td>";
			echo "<td>".$row[13]."</td>";
			echo "<td>".$row[14]."</td>";
			echo "<td>".$row[15]."</td>";
			echo "<td>".$row[16]."</td>";
			//echo "<td><a href='#' onclick='deletes($row[id])'>Delete</a></td>";
			echo "</tr>";
		$i++;
		}
		
		?>
		
    
    
    <table class="table table-bordered">
        <h2 align="center" ><strong><u>The Questions that were asked to the students are </u></strong></h2>
<tr>
<td><b>1:</b> Teacher provided the course outline having weekly content plan with list of  required text book:</td>  
</tr>
<tr>
<td><b>2:</b>Course objectives,learning outcomes and grading criteria are clear to me:</td> 
</tr>
<tr>
<td>
<b>3:</b>Course integrates throretical course concepts with the real world examples:</td> 
</tr>
</table>
<h3>Teaching</h3>
 <table  class="table table-bordered" >
<Td><b>4:</b> Teacher is punctual,arrives on time and leaves on time:</td>
<tr>
<td>
<b>5:</b> Teacher is good at stimulating the interest in the course content:</td>
</tr>
<tr>
<td><b>6:</b> Teacher is good at explaining the subject matter:</td>
</tr>
<tr><td>
<b>7:</b> Teacher's presentation was clear,loud ad easy to understand:</td>
<tr>
<td>
<b>8:</b> Teacher is good at using innovative teaching methods/ways:</td>
</tr>
<tr>
<td>
<b>9:</b> Teacher is available and helpful during counseling hours:</td> 
</tr>
<tr>
<td>
<b>10:</b> Teacher has competed the whole course as per course outline:</td>
</tr>
</table>
<h3>Behaviour in Class</h3>
 <table  class="table table-bordered" >
<tr>
<td><b>11:</b>Teacher was always fair and impartial:</td>
</tr>
<tr>
<td><b>12:</b>Assessments conducted are clearly connected to maximize learining objectives:</td>
</tr>
</table>
<b>13:</b >What I liked about the course:<br><br>
    
<b>14:</b>Why I disliked about the course:<br>


		
</table>
</div>
</div>
<?php }?>