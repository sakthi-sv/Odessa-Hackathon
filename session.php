<?php
    session_start();
    $login = "<li><a href='login.php'>Login</a></li>";
    $logout = "";
    $dash = "";
    $r1 = "";
    $r2 = "";

    if(isset($_SESSION['login_user']))
    {
        $login = "";
        $logout = "<li><a href='assign.php'>Assignments</a></li>
        <li><a href='quiz.php'>Quiz</a></li><p style='color:white'>Hello!! ".$_SESSION['login_user']."</p><li><a href='logout.php'>Logout</a></li>";
        $name = $_SESSION['login_user'];
        $s = "select * from user where uname='$name'";
        $r = mysqli_query($db,$s);
        $s1 = "select distinct course from user where uname='$name'";
        $r1 = mysqli_query($db,$s1);
        $s2 = "select * from quiz";
        $r2 = mysqli_query($db,$s2);
        $data = "";
        while($row = $r->fetch_assoc()){
          $data = "<div class='card' style='width:200px'><div class='card-img-top'><h3 style='text-align:center;color:violet'>".$row['course']."</h3></div>
          <div class='card-body'>
            <span style='color:black'>Assignment mark :<label>".$row['amark']."</label></span><br>
            <span style='color:black'>Quiz mark :<label>".$row['qmak']."</label></span>
          </div>
        </div>";
        $dash = $dash.$data;
        }
    }
    else{
        $logout = "";
        $login = "<li><a href='login.php'>Login</a></li>";
        $dash = "Login to see the dash ...";
    }
?>