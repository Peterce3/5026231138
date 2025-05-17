<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            background-color: #135589;
            height: 100vh;
            padding-top: 20px;
        }

        .sidebar a:hover {
            background-color: #0e3e66;
        }

        .main-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }

        .profile-container {
            display: grid;
            grid-template-columns: 100px auto;
            grid-template-rows: repeat(5, auto);
            gap: 10px;
            align-items: center;
            background: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .profile-container img {
            grid-row: span 5;
            width: 100px;
            height: 100px;
            border-radius: 10px;
            height: fit-content;
            width: fit-content;
        }

        .profile-container p {
            grid-column-start: 3;
        }

        .profile-container h5 {
            grid-column-start: 3;
        }

        .profile-container button {
            grid-column-start: 3;
        }

        .profile-info {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .btn-primary {
            background-color: #135589;
            border: none;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div style="background-color: rgb(19, 85, 137); color: white; border-radius:0;"
                class="col-md-2 float-left col-0 pl-0 pr-0 collapse width show" id="sidebar">
                <div style="background-color: rgb(19, 85, 137); color: white; border-radius:0;" class="text-white mb-4">
                    <img src="user-profile.png" style="transform: scale(80%);" class="rounded-circle" width="60">

                    <a>user@gmail.com</a>
                </div>
                <div class="list-group border-0 text-md-left sidebar">
                    <a href="#"
                        style="background-color: rgb(19, 85, 137); color: white; border-radius:0; text-decoration: none;"
                        class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i
                            class="fa fa-calendar-check-o" aria-hidden="true"></i> <span
                            class="d-none d-md-inline">Helperlog</span></a>
                    <a href="#"
                        style="background-color: rgb(19, 85, 137); color: white; border-radius:0; text-decoration: none;"
                        class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-search"
                            aria-hidden="true"></i> <span class="d-none d-md-inline">Helperfind</span></a>
                    <a href="#"
                        style="background-color: rgb(19, 85, 137); color: white; border-radius:0; text-decoration: none;"
                        class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i
                            class="fa fa-commenting-o" aria-hidden="true"></i> <span
                            class="d-none d-md-inline">Helperassist</span></a>
                </div>
                <div class="col-md-9 main sidebar" style="background-color: rgb(19, 85, 137); height: 100%;">
                    <a href="#" style=" background-color: rgb(19, 85, 137);"><i class="fa fa-sign-out"
                            aria-hidden="true"></i>Logout</span></a>
                </div>
            </div>
        </div>

        <main class="col-md-9 main">
            <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                    class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
            <div class="page-header">
                <h2 class="font-weight-bold" style="margin-left: 4%;">Helperfind Dashboard</h2>
            </div>
            <p class="lead font-weight-bold" style="margin-left: 4%;">Filter PRT Berdasarkan</p>
            <hr>
    </div>
    <main style="margin-left: 4%;" class="row main-container">
        <div class="profile-container">
            <img style="height: fit-content; width: fit-content;" src="materialD/materialD/image-1.png">
            <h5 style="grid-column-start: 3;">Intan Permata</h5>
            <p><i style="color: palevioletred;" class="fa fa-user-circle-o" aria-hidden="true"></i> Baby Sitter</p>
            <p><i style="color: palevioletred;" class="fa fa-map-pin" aria-hidden="true"></i> Surabaya</p>
            <p><i style="color: palevioletred;" class="fa fa-star-o" aria-hidden="true"></i> 4.5/5</p>
            <button class="btn btn-primary">Selengkapnya</button>
        </div>
        <div class="profile-container">
            <img src="materialD/materialD/image-1.png" alt="Profile">
            <h5>Sumairi</h5>
            <p><i style="color: palevioletred;" class="fa fa-user-circle-o" aria-hidden="true"></i> Perawat Lansia</p>
            <p><i style="color: palevioletred;" class="fa fa-map-pin" aria-hidden="true"></i> Ambon</p>
            <p><i style="color: palevioletred;" class="fa fa-star-o" aria-hidden="true"></i> 4.6/5</p>
            <button class="btn btn-primary">Selengkapnya</button>
        </div>
        <div class="profile-container">
            <img src="materialD/materialD/image-1.png" alt="Profile">
            <h5>Rofiq</h5>
            <p><i style="color: palevioletred;" class="fa fa-user-circle-o" aria-hidden="true"></i> Supir Pribadi</p>
            <p><i style="color: palevioletred;" class="fa fa-map-pin" aria-hidden="true"></i> Lumajang</p>
            <p><i style="color: palevioletred;" class="fa fa-star-o" aria-hidden="true"></i> 4.7/5</p>
            <button class="btn btn-primary">Selengkapnya</button>
        </div>
        <div class="profile-container">
            <img style="height: fit-content; width: fit-content;" src="materialD/materialD/image-1.png">
            <h5 style="grid-column-start: 3;">Intan Permata</h5>
            <p><i style="color: palevioletred;" class="fa fa-user-circle-o" aria-hidden="true"></i> Baby Sitter</p>
            <p><i style="color: palevioletred;" class="fa fa-map-pin" aria-hidden="true"></i> Surabaya</p>
            <p><i style="color: palevioletred;" class="fa fa-star-o" aria-hidden="true"></i> 4.5/5</p>
            <button class="btn btn-primary">Selengkapnya</button>
        </div>
        <div class="profile-container">
            <img src="materialD/materialD/image-1.png" alt="Profile">
            <h5>Sumairi</h5>
            <p><i style="color: palevioletred;" class="fa fa-user-circle-o" aria-hidden="true"></i> Perawat Lansia</p>
            <p><i style="color: palevioletred;" class="fa fa-map-pin" aria-hidden="true"></i> Ambon</p>
            <p><i style="color: palevioletred;" class="fa fa-star-o" aria-hidden="true"></i> 4.6/5</p>
            <button class="btn btn-primary">Selengkapnya</button>
        </div>
        <div class="profile-container">
            <img src="materialD/materialD/image-1.png" alt="Profile">
            <h5>Rofiq</h5>
            <p><i style="color: palevioletred;" class="fa fa-user-circle-o" aria-hidden="true"></i> Supir Pribadi</p>
            <p><i style="color: palevioletred;" class="fa fa-map-pin" aria-hidden="true"></i> Lumajang</p>
            <p><i style="color: palevioletred;" class="fa fa-star-o" aria-hidden="true"></i> 4.7/5</p>
            <button class="btn btn-primary">Selengkapnya</button>
        </div>
    </main>
    </div>
</body>

</html>