<?php
 include_once("connection.php");
 $query="select* from student";
 $result=mysql_query($query);
?>

<!DOCTYPE html>
<html>
    <title>
        <head>Fetch Data</head>
    </title>

    <body>
        <table align="center" border="1 px" style="width:700px;line-height:30px">
            <tr>
                <th colspan="3"><h2>Student record</h2></th>
            </tr>
            <t>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Country</th>

                </t>

                <?php
                while($rows=mysql_fetch_assoc($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $rows['ID'] ;?></td>
                        <td><?php echo $rows['Name'] ;?></td>
                        <td><?php echo $rows['Email'] ;?></td>
                        <td><?php echo $rows['Country'] ;?></td>
                        
                    </tr>

                  <?php  

                }
                ?>
                

           

        </table>
    </body>


