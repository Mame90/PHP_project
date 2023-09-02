<form method="GET" action="traitement.php">
    <table>
        <tr>
            <td>Login</td>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="passwd" name="pwd"></td>
        </tr>
        <tr>
           <td> <input type="submit" name="valider" value="valider"></td>
        </tr>
    </table>
</form>
            <?php
            if(isset($_GET['valider']))
            {
                $log=$_GET['login'];
                $pwd=$_Get['pwd'];
            }
            if(isset($_GET['info']))
            {
            $v=$_GET['info'];
            echo $v;
            }
            if(isset($_GET['alert']))
            {
            $v=$_GET['alert'];
            echo $v;
             }
           ?>