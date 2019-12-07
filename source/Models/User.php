<?php
  namespace Source\Models;
  // Utiliza o DataLayer para fazer a abstração
  use CoffeeCode\DataLayer\DataLayer;

  class User extends DataLayer
  {

    public function __construct()
    {
      // Aqui é passado o nome da tabela, os campos que são NOT NULL, a chave primária e se há timestamp em algum dos campos passando um valor boolean
      parent::__construct("USERS", ["NICKNAME", "PASSWORD"], "IDUSER", false);
    }

    // Este método retorna dados para qual está sendo requisado para diversos tipos de abstração
    public function comment()
    {
      return (new Comments())->find("IDUSER = :uid", "uid={$this->IDUSER}")->fetch(true);
    }
  }
?>