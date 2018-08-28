<html>
    <head>
        <?php
        $name="Soniya";
        $class="10";
        $BOD="20/05/1995";
                
        $number="";
        $No="1";
        $subject="maths";
        $FullMark=100;
        $obtained=60;
        
        
        $no1="2";
        $subject1="gujrati";
        $fullmark1=100;
        $obtained1=58;
        
        $no2="3";
        $subject2="english";
        $fullmark2=100;
        $obtained2=64;
        
        $no3="3";
        $subject3="project";
        $fullmark3=100;
        $obtained3=70;
        
        $no4="4";
        $subject4="sanskrut";
        $fullmark4=100;
        $obtained4=54; 
        
        $total=$obtained+$obtained1+$obtained2+$obtained;
        ?>
        
        <h1>name:Soniya</h1>
        <h1>class:10</h1>
        <h1>BOD:20/05/1995</h1>
        
        <table border="1" cellpadding="10">
            <tr>
                <td>number</td>
                <td>subject</td>
                <td>full mark</td>
                <td>obtained</td>
            </tr>
            <tr>
                <td><?php echo"$No";?></td>
                <td><?php echo"$subject";?></td>
                <td><?php echo"$FullMark";?></td>
                <td><?php echo"$obtained";?></td>
            </tr>
            <tr>
                <td><?php echo"$no1";?></td>
                <td><?php echo"$subject1";?></td>
                <td><?php echo"$fullmark1";?></td>
                <td><?php echo"$obtained1";?></td>
            </tr>
            <tr>
                <td><?php echo"$no2";?></td>
                <td><?php echo"$subject2";?></td>
                <td><?php echo"$fullmark2";?></td>
                <td><?php echo"$obtained2";?></td>
            </tr>
            
            <tr>
                <td><?php echo"$no3";?></td>
                <td><?php echo"$subject3";?></td>
                <td><?php echo"$fullmark3";?></td>
                <td><?php echo"$obtained3";?></td>
            </tr>
            
            <tr>
                <td><?php echo $no4;?></td>
                <td><?php echo"$subject4";?></td>
                <td><?php echo"$fullmark4";?></td>
                <td><?php echo"$obtained4";?></td>
                
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo"total= $total";?></td>
 
            </tr>
     </table>    

    </head>
</html>    