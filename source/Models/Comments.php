<?php
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Comments extends DataLayer
{

  public function __construct()
  { //                     Tabela              Campos
    parent::__construct("COMMENTS", ["IDUSER", "NICKNAME", "MESSAGE", "MESSAGE_DATA"]);
  }

  // Quando se quer retornar um valor no qual tem a chave estrangeira em outra tabela se utiliza este tipo de método para abstração
  public function comment(User $user, User $nickname, string $message): Comments
  {
    $this->IDUSER = $user->IDUSER;
    $this->NICKNAME = $user->NICKNAME;
    $this->MESSAGE = $message;

    return $this;
  }
}
?>