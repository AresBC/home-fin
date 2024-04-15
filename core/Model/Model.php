<?php

namespace Core\Model;

use PDO;

class Model
{
    private static ?PDO $pdo = null;
    private static Model|null $instance = null;

    public function __construct()
    {
        self::$pdo = new PDO('mysql:host=localhost;dbname=home_fin', 'root', '123');
    }

    public static function init(): static
    {
        if (static::$instance === null) {
            static::$instance = new Model();
        }
        return static::$instance;
    }

    private static function fetchTableName(): string
    {
        $tableName = explode('\\', static::class);
        $tableName = array_pop($tableName);
        $tableName = preg_replace('/[A-Z]([A-Z](?![a-z]))*/', '_$0', $tableName);
        $tableName = ltrim($tableName, '_');


        return strtolower($tableName);
    }
    private static function createModels(array $assocModels): array
    {
        $models = [];
        foreach ($assocModels as $assocModel) {
            $model = new static();
            foreach ($assocModel as $key => $value) {
                $model->$key = $value;
            }
            $models[] = $model;
        }


        return $models;
    }

    static function all(): array
    {
        $tableName = self::fetchTableName();

        $stmt = self::$pdo->prepare("SELECT * FROM $tableName");

        $stmt->execute();

        $assocModels = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $models = self::createModels($assocModels);


        return $models;
    }
}