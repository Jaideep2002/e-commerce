<h1 align="center">Zuccedd</h1>
<p align="center"><a href="https://github.com/sathviksai002/e-commerce/blob/main/LICENSE.md"><img src="https://poser.pugx.org/cpriego/valet-linux/license.svg" alt="License"></a>
</p>


## About
Zuccedd is a Laravel E commerce Web application using CSS([CSS](https://developer.mozilla.org/en-US/docs/Web/CSS), [Javascript](https://devdocs.io/javascript/), [Laravel-PHP](https://laravel.com/), [Visual Studio Code](https://code.visualstudio.com/docs/introvideos/basics)).

> **Note**
> Work in Progress

* [Screenshots](#screenshots)
* [Requirements](#requirements)
* [Installation](#installation)
* [Testing](#testing)
* [Contributing](#contributing)
* [License](#license)


<a name="screenshots"></a>
## Screenshots

![Picture1](https://user-images.githubusercontent.com/92148220/177944075-a7e2e97a-90c2-4840-9bc3-2a43721f8657.png)

![Picture5](https://user-images.githubusercontent.com/92148220/177946507-42f4e1af-1143-4340-b0ac-da035bca1189.png)


![Picture6](https://user-images.githubusercontent.com/92148220/177946643-f9015d65-4396-4872-8ae4-9b094527f678.png)

![Picture2](https://user-images.githubusercontent.com/92148220/177945796-f5ebe08c-f86a-4257-90f2-e4bfae30b90a.png)

![Picture3](https://user-images.githubusercontent.com/92148220/177945809-34579eed-1f07-4862-aaff-a3024e689369.png)


![Picture4](https://user-images.githubusercontent.com/92148220/177945864-e9515d09-34a9-4ab1-952a-756f76b6f396.png)
<a name="requirements"></a>
## Requirements

Package | Version
--- | ---
[Composer](https://getcomposer.org/)  | V2.3.5+
[Laravel](https://laravel.com/docs/7.x/readme) | V7.2.28+
[Mysql](https://www.mysql.com/)  |V 7.2.28+
[Node](https://nodejs.org/en/) | V14.19.1+
[Npm](https://nodejs.org/en/)  | V6.14.16+ 

<a name="installation"></a>
## Installation

> **Warning**
> Make sure to follow the requirements first.


Here is how you can run the project locally:
1. Clone this repo
    ```sh
    git clone https://github.com/Jaideep2002/e-commerce
    ```

1. Go into the project root directory
    ```sh
    cd Jaideep2002
    ```

1. Copy .env.example file to .env file
    ```sh
    cp .env.example .env
    ```


1. Create database `--` (you can change database name)
2. Create account and get an API key. Make sure to copy `API Read Access Token (v4 auth)`.
3. Go to `.env` file 
    - set database credentials (`DB_DATABASE=`, `DB_USERNAME=root`, `DB_PASSWORD=`)
    - paste `TMDB_TOKEN=(your API key)` 
    > Make sure to follow your database username and password

1. Install PHP dependencies 
    ```sh
    composer install
    ```

1. Generate key 
    ```sh
    php artisan key:generate
    ```
1. Run migration
    ```
    php artisan migrate
    ```
    
1. Run seeder
    ```
    php artisan db:seed
    ```
    
    
1. Visit `localhost:8000` in your favorite browser.     

    > Make sure to follow your Laravel local Development Environment.

<a name="testing"></a>
## Testing

> **Warning**
> Every time you run testing, you should run `php artisan db:seed` first

```sh
    ./vendor/bin/pest
```
<a name="contributing"></a>
## Contributing
Pull requests are welcome.

<a name="license"></a>
## License


Zuccedd is an open-sourced software licensed under [the MIT license](https://github.com/sathviksai002/e-commerce/blob/main/LICENSE.md)
