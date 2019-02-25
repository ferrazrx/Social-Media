# Visage - The new Social Media 

<hr>
<p>This app were created using the PHP framework Laravel. It was initially created for WEB APPLICATION DEVELOPMENT I at NSCC and it is was promoted to an author's personal hobby.</p>
<hr>

# Installation

Follow the steps bellow to copy the project to you local environment:
<ol>
    <li>Clone your project.</li>
    <li>Go to the folder application using <code>cd</code> command on your cmd or terminal.</li>
    <li>Run <code>composer install</code> on your cmd or terminal.</li>
    <li>Copy <code>.env.example</code> file to <code>.env</code> on the root folder. You can type <code>copy .env.example .env</code> if using command prompt Windows or <code>cp .env.example .env</code> if using terminal, Ubuntu.</li>
        <li>Open your <code>.env</code> file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration. </li>
        <li>Run <code>php artisan key:generate</code></li>
        <li>Run <code>php artisan migrate</code></li>
        <li>Run <code>php artisan serve</code></li>
        </ol>
        <p>Enjoy!</p>
