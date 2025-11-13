USE halloween;
-- -- Estructura de tabla para la tabla disfraces
CREATE TABLE disfraces ( id int(11) NOT NULL, nombre varchar(50) NOT NULL, descripcion text NOT NULL, votos int(11) NOT NULL, foto varchar(20) NOT NULL, foto_blob blob NOT NULL, eliminado int(11) NOT NULL DEFAULT 0 );

-- -- Estructura de tabla para la tabla usuarios
CREATE TABLE usuarios ( id int(11) NOT NULL, nombre varchar(50) NOT NULL, clave text NOT NULL );

-- -- Estructura de tabla para la tabla votos
CREATE TABLE votos ( id int(11) NOT NULL, id_usuario int(11) NOT NULL, id_disfraz int(11) NOT NULL );
