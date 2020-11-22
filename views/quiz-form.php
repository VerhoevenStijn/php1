<?php
return "
<div>
<form method='post' action='index.php?pagina=quiz'>
  <p>Is PHP leren moeilijk?</p>
  <select name='antwoord'>
    <option value='ja'>Ja, het is moeilijk</option>
    <option value='nee'>Nee, toch niet</option>
  </select>
  <input type='submit' name='quiz-submitted' value='Verstuur je antwoord'>
</form>
</div>
";
 ?>
