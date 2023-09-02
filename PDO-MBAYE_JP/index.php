<html>
        <style>
                body{
                    background:lightblue;
                }
                table{
                        border:4px groove lightblue;
                        background:lightgrey;
                        width: 25%;
                        height: 250px;
                        margin-top:100px;
                }
            
                .ip{
                    width:300px;
                    height: 40px;
                    font-size:20px
                }
                #sub{
                    font-size:20px;
                    position: right;
                }
        </style>
        <body >
            <b> <center><h1>PAGE D'AUTHENTIFICATION</h1></center></b>
       <center> <table cellspacing=10 >       
                 <form action="listing.php" method="GET" Style="text-Align:center; margin-top:250px;">
                         <tr>
                     <td><b>Login</b></td> <td><input type="text" class="ip" name="log" value=""></td>
                       </tr>
                       <tr>
                       <td><b>Mot De Passe</b></td> <td> <input type="password" class="ip" name="pass" value=""></td>
                       </tr>
                       <tr>
                       <td ><input type="submit"  id="sub" value="Connexion" name="conne"></td></tr> 
                </form><br><br><br><br>
        </table></center>

                
        </body>
</html>
<?php
$log=" ";
$mot=" ";
require "connexion.php";
if(isset($_GET['conne'])){
    $log=$_GET['log'];
    $mot=$_GET['pass'];
}
$motc= Sha1($mot);
$req= "select logi,pass from compte ";
if($res = mysqli_query($con,$req))
{
    while($resultat=mysqli_fetch_row($res)){
        if($log==$resultat[0] && $motc==$resultat[1]){
            header('location : listing.php');
        }
    }

}
?>