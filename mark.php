
<HTML>
<HEAD>
<TITLE>Mark</TITLE>
<style>
    .container{
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>

</HEAD>
    <div class="container">
<?php
$con=pg_connect("host=localhost dbname=db user=postgres password=root");
$a=$_POST['reg'];
$r=pg_query($con,"select * from student where rollno='$a'");
$f=0;

while($row=pg_fetch_row($r))
{
    if($a==$row[0])
    {
     
    echo "Register Number:" . $row[0] . "<br>";
    echo "<b>Name:</b>" ."<b> $row[1]</b>" . "<br></b>";
    echo "Mark:" . $row[2] . "<br>";
    echo "Grade:" . $row[3] . "<br>";
    $f=1;
    }
}
if($f==0)
echo "Result not found";
pg_close($con);
?>
    </div>
</HTML>