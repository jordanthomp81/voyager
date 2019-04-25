![logo](https://image.ibb.co/gPvS2R/voyager_logo_2x.png)

A tool for the modern office. Voyager helps you manage team members, track projects, and manage your media.

## Installation
First make sure that your `node` and `npm` installations have been updated.

Pull the repo down

```https://github.com/jordanthomp81/voyager```

If you want to make code commits then download the dev branch.

``` git fetch origin development:development```

```git checkout development```

Google a copy of the latest laraval `.env-example` file, and rename it to `.env`. After that simply update it with your db info

```mv ".env-example" ".env"```

Lastly go ahead and install the required packages

```composer install```

```npm install```

## Deploying
You can run the application with the following command:

```php artisan serve```
