<pre>
<?php
  require __DIR__ . '/../vendor/autoload.php';

  // use CoffeeCode\DataLayer\Connect;
  //
  // $conn = Connect::getInstance();
  // $error = Connect::getError();
  //
  // if ($error):
  //   echo $error->getMessage();
  //   die();
  // endif;
  //
  // $query = $conn->query("SELECT * FROM USERS");
  // var_dump($query->fetchAll());

  use Source\Models\User;

  $user = new User();
  $list = $user->find()->fetch(true);

  // Desta forma busca tudo
  // foreach ($list as $row) {
  //   var_dump($row->data()); Trás todos os dados da tabela
  //   var_dump($row->NICKNAME); Trás apenas do dado especifico da tabela
  //   var_dump($row->comment());
  // }

  // Desta forma pega somente os dados
  foreach ($list as $row) {
    var_dump($row->data());
    foreach ($row->comment() as $comment) {
      var_dump($comment->data());
    }
  }
?>
</pre>
