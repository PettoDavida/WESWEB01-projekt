<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS/chats.css">
    <link rel="stylesheet" href="./CSS/Head.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/fix.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chats</title>
</head>

<body>
    <div id="container">
        <?php 
    include("INCLUDE/head.php");
    include("INCLUDE/db.php");
    if(isset($_POST['submit']) && isset($_POST['message'])){
       
        
        $user = $_SESSION['user']['id'];
        $msg = $_POST['message'];
        
        $query = "INSERT INTO worldchat (userid,message) VALUES ($user, '$msg')";
        
        mysqli_query($connect, $query);

        

    }
    ?>

        <main>
            <div id="chat">
                <div id="chatroom">
                    <ul>
                        <?php
                    $select = "SELECT user.username as username, worldchat.message as msg, worldchat.sent as sent FROM worldchat INNER JOIN user ON worldchat.userid=user.id";

                    $result = mysqli_query($connect, $select);
                    while($row=mysqli_fetch_array($result)){
                        ?>
                        <li>
                            <div id="msg">
                                <b><?php echo $row['username']; ?></b>
                                <br>
                                <div id="time"><?php echo $row['sent'];?></div>

                                <?php echo $row['msg']; ?>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                    </ul>
                </div>
                <div id="button">
                    <form action="chats.php" method="POST">
                        <textarea name="message" id="message" cols="30" rows="1" placeholder="Message:"></textarea>
                        <input name="submit" id="submit" type="submit" value="Send">
                    </form>
                </div>
            </div>
        </main>
        <?php include("INCLUDE/footer.php")?>

    </div>
</body>

</html>