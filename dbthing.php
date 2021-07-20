<?php
class User
{
  private $_id;
  private $_name;
  private $_age;
  private $_password;
  
  
  // Liste des getters
  
  public function id()
  {
    return $this->_id;
  }
  
  public function name()
  {
    return $this->_name;
  }
  
  public function age()
  {
    return $this->_age;
  }
  
  public function password()
  {
    return $this->_password;
  }
  
  
  
  // Liste des setters
  
  public function setId($id)
  {
    // On convertit l'argument en nombre entier.
    // Si c'en était déjà un, rien ne changera.
    // Sinon, la conversion donnera le nombre 0 (à quelques exceptions près, mais rien d'important ici).
    $id = (int) $id;
    
    // On vérifie ensuite si ce nombre est bien strictement positif.
    if ($id > 0)
    {
      // Si c'est le cas, c'est tout bon, on assigne la valeur à l'attribut correspondant.
      $this->_id = $id;
    }
  }
  
  public function setName($name)
  {
    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
    if (is_string($name))
    {
      $this->_name = $name;
    }
  }
  
  public function setAge($age)
  {
    $age = (int) $age;
    
    if ($age >= 1 && $age <= 100)
    {
      $this->_age = $age;
    }
  }
  
  public function setPassword($password)
  {
    $password = (int) $password;
    
    if ($password >= 0 && $password <= 100)
    {
      $this->_password = $password;
    }
  }
  
  
  
  
}
?>