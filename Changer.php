<form action="" method="POST">
        <input type="submit" value="Change Background" name="background">
    </form>


    <?php 
    
        if(isset($_POST['background'])){
            if(!isset($_SESSION['background'])){
                $_SESSION['background'] = 1;
            }

            
            if($_SESSION['background'] == 1){
                require('background.php');
                $_SESSION['background'] = 2;
            }else{
                require('background2.php');
                $_SESSION['background'] = 1;
            }
        }
        

    ?>