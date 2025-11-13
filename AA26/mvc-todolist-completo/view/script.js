document.addEventListener('DOMContentLoaded', loadTasks);

document.getElementById('taskForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const description = document.getElementById('taskDescription').value.trim();
    if (description) {
        addTask(description);
        document.getElementById('taskDescription').value = ''; // Limpiar campo
    }
});

// Cargar las tareas desde el servidor
function loadTasks() {
    fetch('controller/TaskController.php?action=getTasks')
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                renderTasks(data.pendingTasks, data.completedTasks);
            }
        });
}

// Mostrar las listas de tareas
function renderTasks(pendingTasks, completedTasks) {
    const taskList = document.getElementById('taskList');
    const completedTaskList = document.getElementById('completedTaskList');
    taskList.innerHTML = '';
    completedTaskList.innerHTML = '';

    pendingTasks.forEach(task => {
        const li = document.createElement('li');
        li.innerHTML = `
            ${task.descripcion}
            <button onclick="completeTask(${task.id})">Completar</button>
            <button onclick="deleteTask(${task.id})">Eliminar</button>
        `;
        taskList.appendChild(li);
    });

    completedTasks.forEach(task => {
        const li = document.createElement('li');
        li.textContent = `${task.descripcion} - Completado el: ${task.completed_at}`;
        completedTaskList.appendChild(li);
    });
}

// Agregar una nueva tarea
function addTask(description) {
    fetch('controller/TaskController.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `action=add&description=${encodeURIComponent(description)}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            loadTasks(); // Recargar lista
        }
    });
}

// Marcar tarea como completada
function completeTask(id) {
    fetch('controller/TaskController.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `action=complete&id=${encodeURIComponent(id)}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            loadTasks();
        }
    });
}

// Eliminar una tarea
function deleteTask(id) {
    fetch('controller/TaskController.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `action=delete&id=${encodeURIComponent(id)}`
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            loadTasks();
        }
    });
}
