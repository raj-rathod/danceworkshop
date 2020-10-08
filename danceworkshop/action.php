<?php
   $con=mysqli_connect('localhost','root','','dance');
   session_start();
  if (isset($_POST['admin'])) {
  	$name=$_POST['name'];
  	$psw=$_POST['psw'];
  	$sql="SELECT *  FROM admin WHERE name='$name'AND psw='$psw'";
  	$run=mysqli_query($con,$sql);
  	if(mysqli_num_rows($run)==1){
       $_SESSION['name']=$name;
       header('location:../admin.php');
  	}
  }
  if (isset($_POST['signup'])) {
  	$name=$_POST['name'];
  	$uname=$_POST['uname'];
  	$email=$_POST['email'];
  	$age=$_POST['age'];
  	$psw=$_POST['psw'];
  	$repsw=$_POST['repsw'];
  	if ($psw==$repsw) {
  	   $sql="SELECT * FROM performer WHERE uname='$uname'";
  	   $run=mysqli_query($con,$sql);
  	   if(mysqli_num_rows($run)>0){
         echo "<h2>USERNAME ALREADY EXIST PLEASE ENTER VALID USERNAME</h2>";
     	}else{
     		$sql="INSERT INTO `performer` (`pid`, `wid`, `pname`, `uname`, `age`, `email`, `psw`, `dance_style`, `dtime`, `ddate`, `bookingdate`, `payment`)
         VALUES (NULL, '0', '$name', '$uname', '$age', '$email', '$psw', '0', '0', '0000-00-00', '0000-00-00', 'not')";
     	    $run=mysqli_query($con,$sql);
     	    if ($run) {
     	    	header('location:login.php');
     	    }
     	}	
  	}else{
  		 echo "<h2>Password not matched</h2>";
  	}
  }
if (isset($_POST['login'])) {
    $name=$_POST['name'];
    $psw=$_POST['psw'];
    $sql="SELECT *  FROM performer WHERE uname='$name'AND psw='$psw'";
    $run=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($run);
    if(mysqli_num_rows($run)==1){
       $_SESSION['uname']=$name;
       $_SESSION['uid']=$row['pid'];
       $_SESSION['urname']=$row['pname'];
       header('location:../profile.php');
    }
  }
if (isset($_POST['tsignup'])) {
    $name=$_POST['name'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $sex=$_POST['sex'];
    $psw=$_POST['psw'];
    $repsw=$_POST['repsw'];
    if ($psw==$repsw) {
       $sql="SELECT * FROM coach WHERE uname='$uname'";
       $run=mysqli_query($con,$sql);
       if(mysqli_num_rows($run)>0){
         echo "<h2>USERNAME ALREADY EXIST PLEASE ENTER VALID USERNAME</h2>";
      }else{
        $sql="INSERT INTO `coach` (`cid`, `wid`, `cname`, `uname`, `gender`, `dstyle`, `psw`, `email`, `cselect`)
         VALUES (NULL, '0', '$name', '$uname', '$sex', 'a', '$psw', '$email', 'Not action')";
          $run=mysqli_query($con,$sql);
          if ($run) {
            header('location:tlogin.php');
          }
      } 
    }else{
       echo "<h2>Password not matched</h2>";
    }
  }

  if (isset($_POST['tlogin'])) {
  	$name=$_POST['name'];
  	$psw=$_POST['psw'];
  	$sql="SELECT *  FROM coach WHERE uname='$name'AND psw='$psw'";
  	$run=mysqli_query($con,$sql);
  	$row=mysqli_fetch_array($run);
  	if(mysqli_num_rows($run)==1){
       $_SESSION['cname']=$name;
       $_SESSION['cid']=$row['cid'];
       $_SESSION['crname']=$row['cname'];
       header('location:../coach.php');
  	}
  }
  
  if (isset($_POST['workshop'])) {
     $wname=$_POST['wname'];
     $wfees=$_POST['fees'];
     $wdate=$_POST['date'];
     $wtime=$_POST['time'];
     $wdesc=$_POST['desc'];
     $venue=$_POST['venue'];
     $sql="SELECT * FROM workshop WHERE wshow='1'";
     $run=mysqli_query($con,$sql);
     if(mysqli_num_rows($run)>0){
       header('location:../admin.php');
     }else{
      $sql="INSERT INTO `workshop` (`wid`, `wname`, `wdate`, `venue`, `fees`, `wshow`, `wdesc`, `wtime`) 
      VALUES (NULL, '$wname', '$wdate', '$venue', '$wfees', '1', '$wdesc', '$wtime')";
      $run=mysqli_query($con,$sql);
      if ($run) {
           header('location:../admin.php');
      }
     }
    } 


    if (isset($_POST['pjoin1'])) {
        $wid=$_POST['wid'];
        $tid=$_POST['tid'];
        $did=$_POST['did'];
        $pid=$_SESSION['uid'];
        $bdate=date("Y-m-d");
        $sql="UPDATE performer SET wid='$wid',ddate='$did',dtime='$tid',bookingdate='$bdate',payment='yes' WHERE pid='$pid'";
        $run=mysqli_query($con,$sql);
        if ($run) {
           echo "thanks for joining";
      }
     } 
  if (isset($_POST['dance1'])||isset($_POST['dance2'])||isset($_POST['dance3'])||isset($_POST['dance4'])||isset($_POST['dance5'])||isset($_POST['dance6'])||isset($_POST['dance7'])||isset($_POST['dance8'])) {
       $did=$_POST['did'];
        $pid=$_SESSION['uid'];
        $sql="UPDATE performer SET dance_style='$did' WHERE pid='$pid'";
        $run=mysqli_query($con,$sql);
        if ($run) {
           echo "Your Dance Style :"." ".$did." "." is Selected";
      }
      
  }
    if (isset($_POST['tjoin1'])) {
        $wid=$_POST['wid'];
        $cid=$_SESSION['cid'];
        $sql="UPDATE coach SET wid='$wid', cselect='In Action' WHERE cid='$cid'";
        $run=mysqli_query($con,$sql);
        if ($run) {
           echo "thanks for joining";
      }
     } 
  if (isset($_POST['dance11'])||isset($_POST['dance21'])||isset($_POST['dance31'])||isset($_POST['dance41'])||isset($_POST['dance51'])||isset($_POST['dance61'])||isset($_POST['dance71'])||isset($_POST['dance81'])) {
       $did=$_POST['did'];
        $cid=$_SESSION['cid'];
        $sql="UPDATE coach SET dstyle='$did' WHERE cid='$cid'";
        $run=mysqli_query($con,$sql);
        if ($run) {
           echo "Your Dance Style :"." ".$did." "." is Selected";
      }
      
  }
if (isset($_POST['cdetail'])) {
   $sql="SELECT * FROM coach WHERE cselect='In Action'";
   $run=mysqli_query($con,$sql);
   while ($row=mysqli_fetch_array($run)) {
         $cname=$row['cname'];
         $cid=$row['cid'];
         $dstyle=$row['dstyle'];
         $gender=$row['gender'];
            echo " <div class='row'>
          <div class='col-md-3'>
            <h4 class='text-center text-white'> $cname</h4>
          </div>
          <div class='col-md-2'>
            <h4 class='text-center text-white'>$gender</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$dstyle</h4>
          </div>
          <div class='col-md-2'>
               <h4 class='text-center text-white'><div class='btn btn-outline-info select' cid='$cid'>Select</div></h4>
          </div>
          <div class='col-md-2'>
              <h4 class='text-center text-white'><div class='btn btn-outline-danger reject' cid='$cid'>Reject</div></h4>
          </div>
        </div>";
   }
}
if (isset($_POST['selected1'])) {
   $sql="SELECT * FROM coach WHERE cselect='Selected'";
   $run=mysqli_query($con,$sql);
   while ($row=mysqli_fetch_array($run)) {
         $cname=$row['cname'];
         $cid=$row['cid'];
         $dstyle=$row['dstyle'];
         $gender=$row['gender'];
         $cselect=$row['cselect'];
            echo " <div class='row'>
          <div class='col-md-3'>
            <h4 class='text-center text-white'> $cname</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$gender</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$dstyle</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$cselect</h4>
          </div>
          
        </div>";
   }
}
if (isset($_POST['cselect'])) {
   $cid=$_POST['cid'];
   $sql="UPDATE coach SET  cselect='Selected' WHERE cid='$cid'";
        $run=mysqli_query($con,$sql);
        if ($run) {
           echo "Coach Selected";
      }
}
if (isset($_POST['creject'])) {
   $cid=$_POST['cid'];
   $sql="UPDATE coach SET  cselect='Not Selected' WHERE cid='$cid'";
        $run=mysqli_query($con,$sql);
        if ($run) {
           echo "Coach not Selected";
      }
}
if (isset($_POST['submit1'])) {
    $did=$_POST['did'];
   $sql="SELECT * FROM coach WHERE cselect='In Action'AND dstyle='$did'";
   $run=mysqli_query($con,$sql);
   while ($row=mysqli_fetch_array($run)) {
         $cname=$row['cname'];
         $cid=$row['cid'];
         $dstyle=$row['dstyle'];
         $gender=$row['gender'];
            echo " <div class='row'>
          <div class='col-md-3'>
            <h4 class='text-center text-white'> $cname</h4>
          </div>
          <div class='col-md-2'>
            <h4 class='text-center text-white'>$gender</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$dstyle</h4>
          </div>
          <div class='col-md-2'>
               <h4 class='text-center text-white'><div class='btn btn-outline-info select' cid='$cid'>Select</div></h4>
          </div>
          <div class='col-md-2'>
              <h4 class='text-center text-white'><div class='btn btn-outline-danger reject' cid='$cid'>Reject</div></h4>
          </div>
        </div>";
   }

}
if (isset($_POST['psubmit1'])) {
  $did=$_POST['did'];
  $bid=$_POST['bid'];
  $sql="SELECT * FROM performer WHERE dance_style='$did'AND bookingdate='$bid' ";
  $run=mysqli_query($con,$sql);
  while ($row=mysqli_fetch_array($run)) {
    $pname=$row['pname'];
    $age=$row['age'];
    $dstyle=$row['dance_style'];
    $bdate=$row['bookingdate'];
     echo " <div class='row'>
          <div class='col-md-3'>
            <h4 class='text-center text-white'> $pname</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$age</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$dstyle</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$bdate</h4>
          </div>
          
        </div>";
  }
}
if (isset($_POST['preg1'])) {
  $sql="SELECT * FROM performer WHERE payment='yes' ";
  $run=mysqli_query($con,$sql);
  while ($row=mysqli_fetch_array($run)) {
    $pname=$row['pname'];
    $age=$row['age'];
    $dstyle=$row['dance_style'];
    $bdate=$row['bookingdate'];
     echo " <div class='row'>
          <div class='col-md-3'>
            <h4 class='text-center text-white'> $pname</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$age</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$dstyle</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$bdate</h4>
          </div>
          
        </div>";
  }
}
if (isset($_POST['ptreg1'])) {
  $bid=date("Y-m-d");
  $sql="SELECT * FROM performer WHERE bookingdate='$bid'AND payment='yes'";
  $run=mysqli_query($con,$sql);
  while ($row=mysqli_fetch_array($run)) {
    $pname=$row['pname'];
    $age=$row['age'];
    $dstyle=$row['dance_style'];
    $bdate=$row['bookingdate'];
     echo " <div class='row'>
          <div class='col-md-3'>
            <h4 class='text-center text-white'> $pname</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$age</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$dstyle</h4>
          </div>
          <div class='col-md-3'>
            <h4 class='text-center text-white'>$bdate</h4>
          </div>
          
        </div>";
  }
}

if (isset($_POST['uptw'])) {
   $lastdate=date("Y-m-d");
      $sql="SELECT * FROM workshop WHERE wshow='1'AND wdate='$lastdate' ";
      $run=mysqli_query($con,$sql);
    if (mysqli_num_rows($run)==1){
       $sql="UPDATE workshop SET wshow='0' WHERE wdate='$lastdate'";
       $run=mysqli_query($con,$sql);
       
    }
  }
if (isset($_POST['cancle1'])) {
    $pid=$_POST['pid'];
    $sql="DELETE FROM performer WHERE pid='$pid' ";
    $run=mysqli_query($con,$sql);
    if ($run) {
        unset($_SESSION['uid']);
    }
  }
?>