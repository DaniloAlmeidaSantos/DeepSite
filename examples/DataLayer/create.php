<pre>
<?php
  require __DIR__ . '/../vendor/autoload.php';

  use Source\Models\User;
  use Source\Models\Comments;

  $user = new User();
  $user->NICKNAME = "Pedro";
  $user->PASSWORD = "123";
  // Faz a inserção de dados na tabela
  $user->save();

  $comm = new Comments();
  $comm->comment($user, $user, "Oi eu sou o dollynho");
  $comm->save();
  var_dump($user);
?>
</pre>