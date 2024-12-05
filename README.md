# Desarrollo de una API con CodeIgniter 4

Se solicitó el desarrollo de una API utilizando PHP y la librería CodeIgniter 4, con el objetivo de implementar un sistema CRUD (Crear, Leer, Actualizar y Eliminar) en una base de datos. Esta API permitirá gestionar datos de manera eficiente y escalable, facilitando la creación de nuevos registros, la lectura de información existente, la actualización de datos y la eliminación de registros innecesarios. CodeIgniter 4 proporciona una estructura robusta que optimiza el rendimiento y la mantenibilidad del sistema.

# Instalación y Actualizaciones

Para instalar la aplicación, utiliza el comando composer create-project codeigniter4/appstarter, seguido de composer update cada vez que haya una nueva versión del framework. Al actualizar, revisa las notas de la versión para identificar cualquier cambio que debas aplicar a tu carpeta app.

# Configuración

Copia el archivo env a .env y ajusta la configuración según las necesidades de tu aplicación, prestando especial atención a la baseURL y a los ajustes de la base de datos.

# Cambio Importante con index.php

El archivo index.php ya no se encuentra en la raíz del proyecto; ha sido movido a la carpeta public para mejorar la seguridad y la separación de componentes. Por lo tanto, debes configurar tu servidor web para que apunte a la carpeta public de tu proyecto, en lugar de a la raíz del proyecto.

# Requisitos del Servidor

Se requiere PHP versión 7.4 o superior, con las siguientes extensiones instaladas: intl, mbstring, json (habilitada por defecto), mysqlnd (si planeas usar MySQL) y libcurl (si planeas usar la biblioteca HTTP\CURLRequest). Es importante tener en cuenta que PHP 7.4 y 8.0 han llegado al final de su vida útil, por lo que se recomienda actualizar a versiones más recientes.

# Comando iniciador :

php spark serve
