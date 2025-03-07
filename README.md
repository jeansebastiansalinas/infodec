📌 Proyecto Laravel + Angular

Este es un proyecto Full Stack desarrollado con Laravel 12 (Backend) y Angular (Frontend).
Permite obtener información del clima y tasas de cambio de moneda según la ciudad seleccionada.

🚀 Tecnologías utilizadas

Frontend: Angular (Standalone Mode), Bootstrap o CSS nativo.

Backend: Laravel 12 (PHP 7.x)

Base de datos: MySQL

Otros: Axios o Fetch para consumir APIs, API de clima y API de cambio de moneda.

⚙️ Requisitos previos

Antes de instalar, asegúrate de tener instalado:

PHP 7.x

Composer

MySQL

Node.js y npm (para Angular)

Angular CLI

📥 Instalación del Proyecto

1️⃣ Clonar el repositorio

git clone https://github.com/jeansebastiansalinas/infodec.git
cd TU_REPOSITORIO

2️⃣ Configurar el Backend (Laravel)

cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed  # Crea la base de datos con datos iniciales
php artisan serve  # Inicia el servidor Laravel

El backend estará en: http://127.0.0.1:8000/

3️⃣ Configurar el Frontend (Angular)

cd frontend
npm install  # Instala las dependencias
ng serve  # Inicia el servidor de desarrollo

El frontend estará en: http://localhost:4200/

📂 Estructura del código

📦 proyecto
 ┣ 📂 backend (Laravel)
 ┃ ┣ 📂 app/Http/Controllers (Controladores)
 ┃ ┣ 📂 database/migrations (Migraciones de BD)
 ┃ ┣ 📂 routes (Rutas API)
 ┃ ┗ .env (Configuración del entorno)
 ┣ 📂 frontend (Angular)
 ┃ ┣ 📂 src/app (Componentes y servicios)
 ┃ ┗ angular.json (Configuración Angular)

🎥 Videos explicativos

📌 [Video 1] - Explicación de la funcionalidad del proyecto [🔗 Google Drive]
📌 [Video 2] - Explicación de la estructura del código [🔗 Google Drive]

📌 Desarrollado por: Jean Sebastian Paz Salinas
📧 Email: jeansebastiansalinas@gmail.com
