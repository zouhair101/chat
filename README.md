# laravel-chat

Build a chat app with Laravel, Vue.js and Pusher. Follow the tutorial [https://pusher.com/tutorials/chat-laravel](https://pusher.com/tutorials/chat-laravel)

## Getting Started

Clonez le reposiro du projet en exécutant la commande ci-dessous

```bash
git clone https://github.com/zouhair101/chat.git
```

After cloning,run:

```bash
composer install
```

dupliquez `.env.example` et renommez-le` .env`

Puis exécutez:

```bash
php artisan key:generate
```

### Conditions préalables

#### Configurer Pusher

Si vous n'en avez pas encore, créez un compte Pusher gratuit sur [https://pusher.com/signup](https://pusher.com/signup) puis connectez-vous à votre tableau de bord et créez une application.

Met le `BROADCAST_DRIVER` dans ton fichier `.env`  à **pusher**:

```txt
BROADCAST_DRIVER=pusher
```

Saisissez ensuite les informations d'identification de votre application Pusher dans votre fichier `.env` :

```txt
PUSHER_APP_ID=xxxxxx
PUSHER_APP_KEY=xxxxxxxxxxxxxxxxxxxx
PUSHER_APP_SECRET=xxxxxxxxxxxxxxxxxxxx
PUSHER_APP_CLUSTER=
```

#### Database Migrations

Be sure to fill in your database details in your `.env` file before running the migrations:

```bash
php artisan migrate
```

And finally, start the application:

```bash
php artisan serve
```

et visiter [http://localhost:8000/](http://localhost:8000/) pour voir l'application en action.



