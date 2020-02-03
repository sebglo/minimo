<?php

namespace Application\Models;

require_once("Repository.php");

class EmailRepository extends Repository
{
  function create($postId, $email)
  {
    $statement = $this->db->prepare('INSERT INTO newsletter(id, newsletter_email) VALUES(?, ?,)');
    
    try {

        $statement->execute(array($postId, $email));
      } catch (\PDOException $e) {
        echo "Statement failed: " . $e->getMessage();
        return false;
      }
  
      return $statement->fetch();
  }

  function read($name)
  {
    $statement = $this->db->prepare('SELECT * FROM newsletter WHERE newsletter_email');

    try {

      $statement->execute();
    } catch (\PDOException $e) {
      echo "Statement failed: " . $e->getMessage();
      return false;
    }

    return $statement->fetch();
  }

  function update()
  {
  }

  function delete()
  {
  }

  function all($categories = array())
  {
    $statement = $this->db->prepare('SELECT * FROM posts WHERE post_type="article"');

    try {

      $statement->execute();
      
    } catch (\PDOException $e) {
      echo "Statement failed: " . $e->getMessage();
      return false;
    }
    // var_dump($statement->fetchAll(\PDO::FETCH_ASSOC));
    // die;

    // \PDO::FETCH_ASSOC demande un résultat sous forme de tableau associatif
    return $statement->fetchAll(\PDO::FETCH_ASSOC); 
  }
}
