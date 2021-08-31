<form action="result.php" method="post">
    
        <!-- この中にinputタグを記述していきます。 --> 
        名前:<input type="text" name="myname" ><br>
        ご希望の景品:
        <input type="radio" name="khin" value="A賞">A賞
        <input type="radio" name="khin" value="B賞">B賞
        <input type="radio" name="khin" value="C賞">C賞<br>
          <select name="number">
        個数:<?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
              <?php } ?>
        </select><br>




        <input type="submit" value="送信" />
    </form>
 