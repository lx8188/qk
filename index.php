<?php 
$url=isset($_GET['/qq.php'])?$_GET['/qq.php']:'/qq.php';
 ?>
<meta http-equiv="refresh" content="3;url='<?=$url?>';">



<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loading...</title>
    <style>
        .loading {
            width: 50px;
            height: 50px;
            border: 6px solid #f3f3f3;
            border-top: 6px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -25px;
            margin-top: -25px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        body {
            background-color: #ecf0f1;
        }

        .loading-text {
            text-align: center;
            font-size: 24px;
            color: #7f8c8d;
            margin-top: 75px;
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>
<body>
    <div class="loading"></div>
    <div class="loading-text">加载中</div>
</body>
</html>