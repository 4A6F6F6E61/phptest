<?php
class Model {
    protected static $tableName; // To be defined in child classes
    protected $attributes = []; // Holds table columns

    public function __construct($attributes = []) {
        $this->attributes = $attributes;
    }

    public static function all() {
        $db = DB::conn();
        $stmt = $db->query("SELECT * FROM " . static::$tableName);
        return $stmt->fetchAll(PDO::FETCH_CLASS, static::class);
    }

    public static function find($column, $value) {
        $db = DB::conn();
        $stmt = $db->prepare("SELECT * FROM " . static::$tableName . " WHERE $column = :value");
        $stmt->execute(['value' => $value]);
        return $stmt->fetchObject(static::class);
    }

    public function save() {
        $db = DB::conn();

        if (isset($this->attributes['id'])) { // Update logic (if id exists)
            $sets = [];
            foreach ($this->attributes as $key => $value) {
                $sets[] = "$key = :$key";
            }
            $sql = "UPDATE " . static::$tableName . " SET " . implode(", ", $sets) . " WHERE id = :id";
            $stmt = $db->prepare($sql);
            $stmt->execute($this->attributes);
        } else { // Insert logic
            $columns = array_keys($this->attributes);
            $placeholders = array_map(fn($col) => ":$col", $columns);
            $sql = "INSERT INTO " . static::$tableName . " (" . implode(", ", $columns) . ") 
                    VALUES (" . implode(", ", $placeholders) . ")";
            $stmt = $db->prepare($sql);
            $stmt->execute($this->attributes);
        }
    }
}
?>
