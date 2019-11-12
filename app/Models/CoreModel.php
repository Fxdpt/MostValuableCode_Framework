<?php

namespace App\Models;

use PDO;
use App\Utils\Database;

/**
 * une classe peut-être abstraite, c'est ç dire qu'elle n'a pas vocation à être instanciée directement, elle a pour vocation d'être étendue.
 */
abstract class CoreModel
{
    protected $id;
    protected $created_at;
    protected $updated_at;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Get the value of created_at
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * methode pour décider si on update ou si on insert
     *
     * @return void
     */
    public function save()
    {
        if (isset($this->id)) {
            $this->update();
        } else {
            $this->insert();
        }
    }

    protected static function findModel(int $id, string $tableName, string $fqcn)
    {
        // requete SQL
        $sql = "
            SELECT *
            FROM `" . $tableName . "`
            WHERE `id` = :id
        ";
        // :id = placeholder, variable de requete, jeton, token

        // on veut executer la requete
        // pour récupérer l'objet pdo j'utilise la méthode statique getPDO de la classe Database
        // On prépare notre requete car une donnée provient de l'extérieur (inconnu)
        $pdoStatement = Database::getPDO()->prepare($sql);

        // Je donne une valeur à chaque jeton/token/placeholder
        $pdoStatement->bindValue(':id', $id, PDO::PARAM_INT);

        // La requeête n'a pas encore été exécutée, je le fais
        $pdoStatement->execute();

        // $result = $pdoStatement->fetchObject('\Okanban\Models\ListModel');
        // self => la classe dans laquelle on a écrit le mot-clé self
        $result = $pdoStatement->fetchObject($fqcn);
        // dump($result);

        return $result;
    }
    /**
     * On peut définir des méthodes abstraites dans une classe parent ainsi les enfants
     * Elles devront obligatoirement être créée dans les classes enfants
     */
    abstract protected function insert();

    abstract protected function update();

    abstract public function delete();

    abstract public static function find(int $id);

    abstract public static function findAll();
}
