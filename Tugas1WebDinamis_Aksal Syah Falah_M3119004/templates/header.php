<!DOCTYPE html>
<html lang="id-ID">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $pagename; ?> </title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">
    <!-- Style -->
    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
        font-weight: bold;
    }

    /* Hide scrollbar for Chrome, Safari and Opera */
    .my-form-container::-webkit-scrollbar {
        width: 2px;
    }

    /* Track */
    .my-form-container::-webkit-scrollbar-track {
        background: #ffffff;
    }

    .my-form-container::-webkit-scrollbar-thumb {
        background: #ffffff;
    }

    /* Handle on hover */
    .my-form-container::-webkit-scrollbar-thumb:hover,
    .my-form-container:hover::-webkit-scrollbar-thumb {
        background: #263238;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .my-form-container {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    .form-control:focus {
        color: #263238;
        background-color: #fff;
        border-color: #263238;
        box-shadow: none;
    }

    textarea {
        resize: none;
    }

    textarea::-webkit-scrollbar {
        display: none;
    }

    .animate-text span {
        position: relative;
        top: 20px;
        display: inline-block;
        -webkit-animation: bounce 0.3s ease infinite alternate;
        animation: bounce 0.3s ease infinite alternate;
        font-size: 80px;
        color: #fff;
        text-shadow: 0 1px 0 #ccc, 0 2px 0 #ccc, 0 3px 0 #ccc, 0 4px 0 #ccc,
            0 5px 0 #ccc, 0 6px 0 transparent, 0 7px 0 transparent, 0 8px 0 transparent,
            0 9px 0 transparent, 0 10px 10px rgba(0, 0, 0, 0.4);
    }

    .animate-text span:nth-child(2) {
        -webkit-animation-delay: 0.1s;
        animation-delay: 0.1s;
    }

    .animate-text span:nth-child(3) {
        -webkit-animation-delay: 0.2s;
        animation-delay: 0.2s;
    }

    .animate-text span:nth-child(4) {
        -webkit-animation-delay: 0.3s;
        animation-delay: 0.3s;
    }

    .animate-text span:nth-child(5) {
        -webkit-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }

    .animate-text span:nth-child(6) {
        -webkit-animation-delay: 0.5s;
        animation-delay: 0.5s;
    }

    .animate-text span:nth-child(7) {
        -webkit-animation-delay: 0.6s;
        animation-delay: 0.6s;
    }

    .animate-text span:nth-child(8) {
        -webkit-animation-delay: 0.2s;
        animation-delay: 0.2s;
    }

    .animate-text span:nth-child(9) {
        -webkit-animation-delay: 0.3s;
        animation-delay: 0.3s;
    }

    .animate-text span:nth-child(10) {
        -webkit-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }

    .animate-text span:nth-child(11) {
        -webkit-animation-delay: 0.5s;
        animation-delay: 0.5s;
    }

    .animate-text span:nth-child(12) {
        -webkit-animation-delay: 0.6s;
        animation-delay: 0.6s;
    }

    .animate-text span:nth-child(13) {
        -webkit-animation-delay: 0.7s;
        animation-delay: 0.7s;
    }

    .animate-text span:nth-child(14) {
        -webkit-animation-delay: 0.8s;
        animation-delay: 0.8s;
    }

    /* ANIMATION */
    @keyframes bounce {
        100% {
            top: -20px;
            text-shadow: 0 1px 0 #ccc, 0 2px 0 #ccc, 0 3px 0 #ccc, 0 4px 0 #ccc,
                0 5px 0 #ccc, 0 6px 0 #ccc, 0 7px 0 #ccc, 0 8px 0 #ccc, 0 9px 0 #ccc,
                0 50px 25px rgba(0, 0, 0, 0.2);
        }
    }

    .dark-mode * {
        color: #C9D1D9;
    }
    </style>
</head>

<body>