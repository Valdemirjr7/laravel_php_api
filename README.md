# PHP API WITH LARAVEL

## 📋 Indice

- [About](#-about)
- [How download a project and Run](#-how-download-a-project-and-run)
- [Run API](#-run-api)
- [Credits](#-credits)

## 📖 About

A simple **API** created in **Php with Laravel** Framework, only have work a **CRUD** whats is 
**CREATE, READ, UPDATE and DELETE**, that API do a CRUD of products, you can using this is in a
**e-Commerce** how a exemple.


[![](http://img.youtube.com/vi/77UPC-UPaus/0.jpg)](http://www.youtube.com/watch?v=77UPC-UPaus "How work the API")

## ⚒ How download a project and Run

You can download this project with command.

```
    $ git clone https://github.com/Valdemirjr7/laravel_php_api.git

    $ cd laravel_php_api
```

Later that you downloaded, you will rename the file .env.example to .env
and will configure your database, later you will run this command.

```
    $ php artisan migrate
```

if have all right, will do a migrate for your database, later this you already can
run the project with this command.

```
    $ php artisan serve
```

if have all right will begin open a page in your browser, but don't use the browser to run this API.

## 🛠 Run API

Now for you can run the API, you can know the **routes of it** and I recommend that your use the Insomnia
for access the route.

### Route of get all product list, **METHOD GET**.

http://IP_OF_YOUR_MACHINE:8000/api/product.

### Route of get product by Id, **METHOD GET**.

http://IP_OF_YOUR_MACHINE:8000/api/product/ID.

### Route of create new product, **METHOD POST**.

http://IP_OF_YOUR_MACHINE:8000/api/product/.

How the product work with **image send** you have use **Muiltpart** that suport a file.

### Route of update product, **METHOD POST**.

http://IP_OF_YOUR_MACHINE:8000/api/product/ID?_method=PUT.

Here you will have using method POST because the method PUT don't support the **Multipart**,
but if use method POST we are access the route of create and don't update, for this I put
in URL a this **_method=PUT** because when the send to API, it will access the update route
and will upload file still.

### Route of delete product, **METHOD DELETE**.

http://IP_OF_YOUR_MACHINE:8000/api/product/ID.

## 📌 Credits

Thank you so much, for have read.

Valdemir Valenca Jr - Full Stack Developer.