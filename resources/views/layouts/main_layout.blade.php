<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Add the Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    
    <!-- Add the Bootstrap Icons CSS link here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <style>
        body{
    background: #eee;
}

label{
    display:block;
    
}

#side_nav{
    background: white;
    min-width: 250px;
    max-width: 250px;
}

.content{
    background: rgb(230, 227, 227);
    min-height: 100vh;
    width: 100%;
}


.user img{
    width: 50px;
    margin: 15px;
    border-radius: 50%;
    border: 3px solid #9c9595;

}

.content p{
    font-size: 20px;
    color: rgb(1, 71, 71);

}

.user span{
    font-size: 20px;
}

    </style>
    @yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Add the Bootstrap JS link here -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleArrow() {
          const arrowIcon = document.getElementById('arrow-icon');
          arrowIcon.classList.toggle('bi-caret-down');
          arrowIcon.classList.toggle('bi-caret-up');
        }
      </script>
</body>
</html>