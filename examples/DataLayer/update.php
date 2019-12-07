<pre>
<?php
  require __DIR__ . '/../vendor/autoload.php';

  use Source\Models\User;

  $user = (new User())->findById(2); // O findById é utilizado para buscar a chave primária da tabela, mais especificamente o id do usuário neste exemplo
  $user->NICKNAME = "Lucas";
  $user->save();
  var_dump($user);
?>
</pre>