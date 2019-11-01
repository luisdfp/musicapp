# MusicApp
## Requerimientos
- php >= 7.2
- nodejs
## Instalación  
Paso.1 **Instala las dependencias de php**
 ```
composer install 
```

Paso 2. **Configura el entorno**

Copia el archivo de configuración de ejemplo (``.env.example``) y colócale el nombre ``.env``:
```
cd musicapp  
cp .env.example .env
```
Crea una base de datos con el nombre que quieras y modifica las variables de entorno de la base de datos en el archivo ``.env`` que creaste. Ejemplo:
```
...
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=musicdb  
DB_USERNAME=root  
DB_PASSWORD=123
...
```
Genera la llave de aplicación de Laravel:
```
php artisan key:generate
```

 Paso 3. **Prepara la base de datos** 
 Ejecuta las migraciones de la base de datos:
  ```
 php artisan migrate 
 ```
(Opcional) Ejecuta los seeders para agregar los datos de prueba.
```
php artisan db:seed
```

Paso 4. **Instala las dependencias de Nodejs y compila el frontend**
```  
npm install  
npm run prod  
```
Paso 5. (Opcional) **Ejecuta el servidor web de php**
```
php artisan serve
```
La aplicación debería estar servida en ``localhost:8000``
