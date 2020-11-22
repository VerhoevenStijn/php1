<?php
return "
<div>
<p class='titel'>Euro's omzetten naar...</p>
  <form method='post' action='index.php?pagina=wisselkoers-php'>
    <p>Bedrag in Euro:
    <input type='text' name='euroWaarde'></p>
    <p>
      <select name='munteenheid'>
        <option value='Amerikaanse Dollar'>Amerikaanse Dollar</option>
        <option value='Britse Pond'>Britse Pond</option>
        <option value='Russische Roebel'>Russische Roebel</option>
        <option value='Chinese Yuan'>Chinese Yuan</option>
        <option value='Zwitserse Frank'>Zwitserse Frank</option>
        </select>
        <input type='submit' name='wisselkoers-submitted' value='Bereken koers'
    </p></form>
</div>";
 ?>
