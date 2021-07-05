<?php
$link = mysqli_connect("localhost:3307","root") or die (mysql_error());
mysqli_select_db($link,"motorsql");

$m1="";
$m2="";
$m3="";
$m4="";
$m5="";
$m6="";
if(isset($_POST['save'])){
$m1=$_POST['M1'];
$m2=$_POST['M2'];
$m3=$_POST['M3'];
$m4=$_POST['M4'];
$m5=$_POST['M5'];
$m6=$_POST['M6'];

$Mv=mysqli_query($link,"insert into motortable (Motor1,Motor2,Motor3,Motor4,Motor5,Motor6) values('$m1','$m2','$m3','$m4','$m5','$m6')")or die (mysql_error());
if($Mv){echo"Motors'values are added";}

}elseif(isset($_POST['on'])){
$m1=$_POST['M1'];
$m2=$_POST['M2'];
$m3=$_POST['M3'];
$m4=$_POST['M4'];
$m5=$_POST['M5'];
$m6=$_POST['M6'];

$ONv=mysqli_query($link,"insert into motortable (Motor1,Motor2,Motor3,Motor4,Motor5,Motor6,ONbutton) values('$m1','$m2','$m3','$m4','$m5','$m6',1)");
if($ONv){echo"Motors'values are added and ON";}


}elseif(isset($_POST['Left'])){

    $M1=mysqli_query($link,"insert into move_direction (m_direction) values('l')")or die (mysql_error());
    if($M1){$q1=mysqli_query($link,"SELECT m_direction FROM move_direction ORDER BY id DESC LIMIT 1");
        $last_op=mysqli_fetch_row($q1);
        echo $last_op[0];}
    
    }elseif(isset($_POST['Right'])){

        $M2=mysqli_query($link,"insert into move_direction (m_direction) values('r')")or die (mysql_error());
        if($M2){$q2=mysqli_query($link,"SELECT m_direction FROM move_direction ORDER BY id DESC LIMIT 1");
            $last_op=mysqli_fetch_row($q2);
            echo $last_op[0];}}
    elseif(isset($_POST['Forward'])){
    
            $M3=mysqli_query($link,"insert into move_direction (m_direction) values('f')")or die (mysql_error());
            if($M3){$q3=mysqli_query($link,"SELECT m_direction FROM move_direction ORDER BY id DESC LIMIT 1");
                $last_op=mysqli_fetch_row($q3);
                echo $last_op[0];}}
            
        elseif(isset($_POST['Backward'])){
        
                $M4=mysqli_query($link,"insert into move_direction (m_direction) values('b')")or die (mysql_error());
                if($M4){$q4=mysqli_query($link,"SELECT m_direction FROM move_direction ORDER BY id DESC LIMIT 1");
                    $last_op=mysqli_fetch_row($q4);
                    echo $last_op[0];}}

            else{ 
                if(isset($_POST['Stop'])){
                
                    $M5=mysqli_query($link,"insert into move_direction (m_direction) values('s')")or die (mysql_error());
                    if($M5){$q5=mysqli_query($link,"SELECT m_direction FROM move_direction ORDER BY id DESC LIMIT 1");
                        $last_op=mysqli_fetch_row($q5);
                        echo $last_op[0];}}

                }

                

?>