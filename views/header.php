<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title><?= $_ENV['APP_NAME'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        *{
            font-family: sans-serif;
        }
        body{
            background-color: #F5F5DC;
        }
        img {
            height: 550px;
            width: 350px;
            object-fit: contain;
        }
        .navbar-custom {
            background-color: #F5F5DC; /* สีพื้นหลัง */
            padding: 10px 20px;
            border-radius: 7px;
            box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.5);
        }
        .navbar-brand, .nav-link {
            color: #4E342E !important; /* สีตัวอักษร */
            font-weight: bold;
        }
        .nav-link:hover {
            text-decoration: underline;
        }

        .product-img{
            height: 490px;
        }
        .product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
        }
        .cta-btn{
            border-radius: 7px;
            background-color: #A8C3A0;
            color: #F5F5DC;
            padding: 7px 15px;
            text-decoration: none;
            box-shadow: 1px 5px 2px rgba(0, 0, 0, 0.5);
            transition-duration: 0.7s;
        }
        .cta-btn:hover{
            background-color: blue;
            padding: 8px 25px;
            
        }
        .material-img {
            margin-top: 50px;
            border-radius: 15px;
            overflow: hidden; 
        }
        .material-img img {
            border-radius: 15px;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .icon-contact{
            display: flex;
            justify-content: center;
            align-items: start;
            flex-direction: column;
            
        }
        .icon-contact li {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .icon-contact a {
            text-decoration: none;
            margin-left: 5px;
            color: #4E342E;
        }
        .send-btn {
            background-color: #A8C3A0;
            color: #F5F5DC;
            transition-duration: 0.7s;
            border: none;
            border-radius: 15px;
        }
        .send-btn:hover{
            background-color: blue;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom my-3 mx-3">
        <div class="container-fluid">
            <!-- โลโก้ -->
            <a class="navbar-brand" href="#">COFFEE</a>

            <!-- ปุ่มเมนูสำหรับมือถือ -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- เมนูหลัก -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
</nav>

 



