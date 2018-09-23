<?php
/**
 * Created by PhpStorm.
 * User: brendan
 * Date: 22/09/2018
 * Time: 10:54 AM
 */
include 'includes/header.php';
echo "<title>Post an entry | Journlr</title></head>";


?>
<body onload="setTimeAndDate()">
<?php
include 'includes/navbar.php'; ?>
<div class="container align-vertical" style="width:40%">
    <div class="form-group align-self-center ">
        <form class="text-center border border-light p-5" action="addpost.php" method="post">
            <label for="datePicker">Date</label>
            <input type="date" id="datePicker" name="datePicker" class="form-control">
            <label for="timePicker"></label>
            <input type="time" id="timePicker" name="timePicker" class="form-control">
            <hr>
            <label for="postTitle">Title</label>
            <input type="text" placeholder="How was your day?" id="postTitle" name="postTitle" class="form-control">
            <hr>
            <label for="postBody">Type your post</label>
            <textarea name="postBody" id="postBody" cols="30" rows="10" class="form-control"></textarea>
            <hr>
            <button type="submit" id="submitPost" name="submitPost" class="btn btn-info my-4">submit post
            </button>
            <?php
            if (isset($_POST['submitPost'])) {
                $date = mysqli_real_escape_string($conn, $_POST['datePicker']);
                $time = mysqli_real_escape_string($conn, $_POST['timePicker']);
                $title = mysqli_real_escape_string($conn, $_POST['postTitle']);
                $body = mysqli_real_escape_string($conn, $_POST['postBody']);
                $username = 'bob';
                $firstName = 'bob';
                $lastName = 'downe';

                $query = "INSERT INTO journlr(username, firstName, lastName, title, postbody, created_at) VALUES('$username', '$firstName', '$lastName',  '$title', '$body', '$date $time')";
                if(mysqli_query($conn, $query)) {
                    header('Location: /journlr');
                }
                else {
                    echo "Error".mysqli_error($conn);
                }
            }

            ?>
        </form>
    </div>
</div>
<?php
include 'includes/footer.php';
?>
</body>
</html>