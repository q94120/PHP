<form method="post" action="brad33.php"
enctype="multipart/form-data">
    Account: <input type="text" name="account"><br>
    Password: <input type="password" name="password"><br>
    Gender:<input type="radio" name="gender" checked value="male">male
    <input type="radio" name="gender" value="Female">Female <br>
    興趣: <input type="checkbox" name="habit[]" value="1">打電腦
          <input type="checkbox" name="habit[]" value="2">打籃球
          <input type="checkbox" name="habit[]" value="3">打電玩
          <input type="checkbox" name="habit[]" value="4">打麻將
          <input type="checkbox" name="habit[]" value="5">打毛線
          <input type="checkbox" name="habit[]" value="6">打美樂
          <input type="checkbox" name="habit[]" value="7">打小孩 <br>
    
    File1: <input type="file" name="upload[]" ><br>
    File2: <input type="file" name="upload[]" ><br>
    File3: <input type="file" name="upload[]" ><br>
    File4: <input type="file" name="upload[]" ><br>
    
    <input type="submit" value="test"> 
</form>