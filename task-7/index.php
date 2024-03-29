<?php
require_once('curl.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css"
        integrity="sha512-c93ifPoTvMdEJH/rKIcBx//AL1znq9+4/RmMGafI/vnTFe/dKwnn1uoeszE2zJBQTS1Ck5CqSBE+34ng2PthJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Weather App</title>
</head>

<body>

    <div class="container-fluid px-1 px-sm-3 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="row card0">
                <div class="card1 col-lg-8 col-md-7">
                    <small>the.weather</small>
                    <div class="text-center">
                        <img class="image mt-5" src="https://i.imgur.com/M8VyA2h.png">
                    </div>
                    <div class="row px-3 mt-3 mb-3">
                        <h1 class="large-font mr-3"><?php echo round($result['main']['temp'] - 273.15) ?>°</h1>
                        <div class="d-flex flex-column mr-3">
                            <h2 class="mt-3 mb-0">London</h2>
                            <small>10:36 - Tuesday, 22 Oct '19</small>
                        </div>
                        <div class="d-flex flex-column text-center">
                            <h3 class="fa fa-sun-o mt-4"></h3>
                            <small>Sunny</small>
                        </div>
                    </div>
                </div>
                <div class="card2 col-lg-4 col-md-5">
                    <div class="row px-3">
                        <input type="text" name="location" placeholder="Another location" class="mb-5">
                        <div class="fa fa-search mb-5 mr-0 text-center"></div>
                    </div>
                    <div class="mr-5">
                        <p class="light-text suggestion">Birmingham</p>
                        <p class="light-text suggestion">Manchester</p>
                        <p class="light-text suggestion">New York</p>
                        <p class="light-text suggestion">California</p>

                        <div class="line my-5"></div>

                        <p>Weather Details</p>
                        <div class="row px-3">
                            <p class="light-text">Cloudy</p>
                            <p class="ml-auto">12%</p>
                        </div>
                        <div class="row px-3">
                            <p class="light-text">Humidity</p>
                            <p class="ml-auto">78%</p>
                        </div>
                        <div class="row px-3">
                            <p class="light-text">Wind</p>
                            <p class="ml-auto">1km/h</p>
                        </div>
                        <div class="row px-3">
                            <p class="light-text">Rain</p>
                            <p class="ml-auto">0mm</p>
                        </div>

                        <div class="line mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>