<?php
  /**
   * 
   */
  include_once("config.php");
  include_once("dB.php");
  class head extends dB
  {
    
    function __construct()
    {
      $this->sessionControl();
    }

    public function sessionControl(){
        session_start();
        if ( isset($_SESSION) && isset($_SESSION['session']) == true && isset($_SESSION['userId']) ){
          $session    = $_SESSION['session'];
          $userId     = $_SESSION['userId'];

        }else{
          header('Location: ../pages-login');
        }
    }

    public function userInfo(){
      $db = new dB;
      $userInfo = $db->select("userId, userName, userSurname, userPhone", "user", "userId = '{$_SESSION['userId']}'");
      if ( ($userInfo[0]["userId"] == 0)  or ($userInfo[0]["userId"] == null) ) {
        //session_start();
        session_unset();
        session_destroy();
        echo "<script>alert('Topluluk kurallarına uymadığınız için hesabınız silindi.');location.href = '/pages-login';</script>";
      }
      return $userInfo;
    }

  }

  $head = new head;
?>
