<html>
  <link rel="stylesheet" type="text/css" href="style.css">
  <body>
    <form action="insert.php" method="post">
      organization: <input type = 'text' name='organization' 
      		class='textbox'id='organization'/><br><br>
      address: <input type='text'name='address'class="textbox"
      		id='address'/><br><br>
      Request Summary (200 character limit): <br>
      <textarea name = 'request' id='request'maxlength="200"></textarea><br/>
      <input type='submit' name='submit' value='Submit'/>
   </form> 
  </body>
</html>

