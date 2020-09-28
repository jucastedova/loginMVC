<?php
// Todas las clases son públicas
class User {
    // Atributos (mismo nombre que en la BBDD)
    private $id_user;
    private $email;
    private $password;
    // Constructor (pone valores a los atributos y reserva memoria)
    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    // Métodos getters
    public function getPassword() {
        return $this->password;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getId_user() {
        return $this->id_user;
    }
    // Métodos setters
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    public function setId_user($id_user) {
        $this->id_user = $id_user;
        return $this;
    }
}

?>