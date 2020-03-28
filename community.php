if($_POST){
  $name = $_POST['name'];
  $comment = $_POST['comment'];
  $handle = fopen("comments.html", "a");
  fwrite($handle, $name, $comment."<br>");
  fclose($handle);
}
<html>
  <body>
    <form action="" method="POST">
      <input type="text" name="name" placeholder="Display name" class="form" required/><br>
      <textarea name ="comment" class="form" placeholder="Comment" row="50" column="100" required/></textarea><br>
      <input type="submit" value="Post" class="submit"/><br>
    </form>
    <?php include "comments.html"; ?>
  </body>
</html>
