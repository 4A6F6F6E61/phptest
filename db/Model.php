<?php
class Model {
    protected static $tableName; // To be defined in child classes

    /**
     * Get all records.
     *
     * @return static[] An array of instances of the calling class.
     */
    public static function all(): array {
        $db = DB::conn();
        $stmt = $db->query("SELECT * FROM " . static::$tableName);
        return $stmt->fetchAll(PDO::FETCH_CLASS, static::class);
    }

    public static function find(string $column, $value): ?static {
        $db = DB::conn();
        $stmt = $db->prepare("SELECT * FROM " . static::$tableName . " WHERE $column = :value");
        $stmt->execute(['value' => $value]);
        
        return $stmt->fetchObject(static::class);
    }

    public function save(): void {
        $db = DB::conn();
        // If id exists, update the record
        $attributes = get_object_vars($this);
        if (isset($attributes['id'])) {
            $sets = [];
            foreach ($attributes as $key => $value) {
                $sets[] = "$key = :$key";
            }
            $sql = "UPDATE " . static::$tableName . " SET " . implode(", ", $sets) . " WHERE id = :id";
            $stmt = $db->prepare($sql);
            $stmt->execute($attributes);
        } else { // Insert logic
            $columns = array_keys($attributes);
            $placeholders = array_map(fn($col) => ":$col", $columns);
            $sql = "INSERT INTO " . static::$tableName . " (" . implode(", ", $columns) . ") 
                    VALUES (" . implode(", ", $placeholders) . ")";
            $stmt = $db->prepare($sql);
            $stmt->execute($attributes);
        }
    }
}
?>
