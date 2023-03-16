## Laravel Setup

**dcr** =  `docker-compose run --rm` \
**dcra** =  `docker-compose run --rm artisan`

`dcr composer install`

`dcra key:generate`


## Domain Maker for Laravel Usage

### Create new Domain

```bash
php artisan domain:make:domain %DOMAINNAME%
```

If this is the first domain the Domains directory will be created under app/Domains along with the specified domain.

```Bash
Domains
└── Media
    ├── Exceptions
    ├── Http
    │   ├── Controllers
    │   │   ├── VimeoController.php
    │   │   └── YoutubeController.php
    │   ├── Middleware
    │   └── Requests
    │       └── YoutubeRequest.php
    ├── Jobs
    │   └── YoutubeSync.php
    ├── Models
    │   └── Youtube.php
    ├── Repositories
    │   └── YoutubeRepository.php
    ├── resources
    │   ├── css
    │   ├── js
    │   └── views
    │       └── youtube-home.blade.php
    ├── routes
    │   ├── Media.php
    │   ├── Vimeo.php
    │   └── Youtube.php
    └── Services


```

### Routing

A standard route file is created when you create a domain via the `domain:make:domain` command.

> Routes are discovered automatically via the DomainRouteServiceProvider

To create subsequent route files use:

```bash
domain:make:routes  <domain-name> <route-file-name>
```

For example, if I have a "Payments" domain, and I'd like to group my Stripe Routes I'd run the command like so:

```bash
domain:make:routes Payments Stripe
```

### Repositories

A repository with standard CRUDs can easily be generate by using the `domain:make:repository`.

```bash
domain:make:repository <domain-name> <repository-name> <model-name>
```

Using the "Payments" domain again to demonstrate, we can use the command as follows:

```bash
domain:make:repository Payments PaymentRepository Payment
```

### Stubs

Public stubs will be used as a default. If stubs are unpublished, backups are contained in the package.

There are package specific stubs that you may publish to override (i.e., routes.stub)

> If you don't need to make changes to the stubs it's not necessary to publish them.

```bash
php artisan vendor:publish --tag=domain-stubs
```

## VITE

### .env APP_URL with Port
`APP_URL=http://APP_URL:8090`

### DEV Start:

`docker-compose run --rm --service-ports npm run dev`

### Live Build

`docker-compose run --rm npm run build`
