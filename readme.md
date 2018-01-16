 

## CRUD API built in Laravel Eloquent API Resource 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them:

The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

```
PHP >= 7.0.0
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension

```
 
  

### Installing

A step by step series of examples that tell you have to get a development env running:
```
1-Install the composer from the root of the project.
2-Duplicate .env.exapmle to .env and register the DB info.
3-Run: php artisan migrate to create the tables.
4-Run: php artisan db:seed.
```

 
If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command. This command will start a development server at http://localhost:8000:

```
5-php artisan serve 
```
 
 



## Running the tests

In order to test our API, we need to use an http debugger like fiddler or postman
for Get request we need to put the following commands :

Get Method
```
The URLs:
http://localhost:8000/api/customers
 

The header :
Host: localhost:8000
Content-Type:application/json
```


For POST and Delete request we need the following commands 

Create a customer (POST request):
```
The URL:
http://localhost:8000/api/customer

The header: 

Host: localhost:8000
Content-Type: application/json
Accept: application/json 
 

in the Body "jason format": 
{
   "first_Name":"John",
   "last_Name":"doe"
   "age":"23",
   "city": "NewYork"
   
}
```


Delete customer (DELETE request):

```
Url:
http://localhost:8000/api/customer/"customerid"


The header:

Host: localhost:8000
Content-Type: application/json
Accept: application/json 
 
```
Update customer (PUT request):
```
Url:
http://localhost:8000/api/customer/1


The header:

Host: localhost:8000
Content-Type: application/json
Accept: application/json
in the Body "jason format": 
{
   "first_Name":"Jin",
   "last_Name":"doe"
   "age":"23",
   "city": "NewYork"
   
}

 ```
 

### And coding style tests

This api tests the http requests (GET,POST,DELETE,..).

 
 
 
 
## Built With

* [Laravel](https://laravel.com/docs/5.5/eloquent-resources) - The web framework used
* [Composer](https://getcomposer.org/) - Dependency Management
 

 
