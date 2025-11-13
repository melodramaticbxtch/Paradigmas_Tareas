
<?php
class Task {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Obtener todas las tareas según su estado (0 = pendiente, 1 = completada)
    public function getAllTasks($status = 0) {
        $stmt = $this->pdo->prepare("SELECT * FROM tareas WHERE completada = ? ORDER BY id DESC");
        $stmt->execute([$status]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Agregar una nueva tarea
    public function addTask($description, $status = 0) {
        $stmt = $this->pdo->prepare("INSERT INTO tareas (descripcion, completada) VALUES (?, ?)");
        return $stmt->execute([$description, $status]);
    }

    // Eliminar una tarea
    public function deleteTask($id) {
        $stmt = $this->pdo->prepare("DELETE FROM tareas WHERE id = ?");
        return $stmt->execute([$id]);
    }

    // Marcar una tarea como completada
    public function completeTask($id) {
        $stmt = $this->pdo->prepare("UPDATE tareas SET completada = 1, completed_at = NOW() WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
