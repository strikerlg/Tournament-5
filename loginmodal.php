 <?php
// Login Code
include_once '/Models/Users.php';

if(!empty($_POST))
{
  
    $UserMail = $_POST['UserMail'];
    $Userpassword = $_POST['Userpassword'];
    $User= new UsersModel();
    $Result = $User->SelectSpecific("*",array( "AND"=> array("UserMail" => $UserMail,"Userpassword" => $Userpassword) ));
if(!empty($Result))
    {
       session_start(); 

       
       if (!isset($_SESSION['user']))  
    {
         $_SESSION['User'] = $Result[0];
         
         
         if ($_SESSION["User"]['RoleId']==1)
               header("Location: ./Views/Staff/index.php");
         
         if ($_SESSION["User"]['RoleId']==0)
               header("Location: ./Views/Admin/index.php"); 
        
        if ($_SESSION["User"]['RoleId']==2)
               header("Location: ./Views/User/index.php");
    }
  }
else
  {


  }
}
?>
  <div class="modal fade" id="LoginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal of Login -->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 ><span class="glyphicon glyphicon-lock"></span> Connexion à votre compte</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> E-mail</label>
              <input type="text" class="form-control" placeholder="Entrer votre e-mail" name="UserMail" required>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Mot de passe</label>
              <input type="text" class="form-control" placeholder="Entrer votre mot de passe" name="Userpassword" required>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Connexion</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
          <p>Pas encore membre? <a href="signupmodal.php" >Inscrivez-vous!</a></p>
          <p>Vous avez oblié votre <a href="#">Mot de passe?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
