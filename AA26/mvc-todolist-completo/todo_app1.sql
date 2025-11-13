-- phpMyAdmin SQL Dump
-- Base de datos: `todo_app`
-- Servidor: 127.0.0.1

CREATE DATABASE IF NOT EXISTS `todo_app`;
USE `todo_app`;

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `completada` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` datetime DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Datos de ejemplo
INSERT INTO `tareas` (`descripcion`, `completada`, `completed_at`, `fecha_creacion`) VALUES
('Diseñar la estructura MVC', 0, NULL, '2025-11-04 14:15:05'),
('Implementar la conexión a la BD', 0, NULL, '2025-11-04 14:15:05'),
('Añadir funcionalidad de eliminar con JS', 0, NULL, '2025-11-04 14:15:05');

