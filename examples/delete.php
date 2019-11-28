<pre>
<?php
  // Faz a requisição do autoload
  require __DIR__ . '/../vendor/autoload.php';

  // Requista o objeto User
  use Source\Models\User;

  $user = (new User())->findById(3);
  if ($user):
    // Deleta dados
    $user->destroy();
  else:
    var_dump($user);
  endif;
?>
</pre>