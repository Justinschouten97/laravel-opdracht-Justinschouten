<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Laravel SocyList Opdracht</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.home.css">
</head>
<body>
<div class="container bg-light">
    <div class="jumbotron bg-secondary">
        Gemaakt door Justin Schouten
    </div>
    <br>
    <hr>
    <br>
    <div class="opdracht">
        <form action="hello.php" method="get">
            <?php echo "Invoer nummer"; ?>
            <input type="number" name="number" value="1">
            <input type="submit">
            <br>
            <br>
            <hr>
            <div class="alert-danger">
                <?php $number = $_GET['number'] ?>
            </div>
            <hr>
            <?php echo "Ingevoerd wat is ingevoerd = ", $number; ?>

            <div class="jumbotron">
                <br>
                Primes zijn:
                <?php
//                require_once 'PrimeFactorsSpec.php';

                function generate($number)
                {
                    $primes = [];

                    for ($candidate = 2; $number > 1; $candidate++) {
                        for (; $number % $candidate == 0; $number /= $candidate) {
                            $primes[] = $candidate;
                        }
                    }
                    return $primes;
                }

//                echo generate($_GET['number'] == $number);
//                generate($_GET['number'] == $number);
//                TODO: deze moeten afgedrukt worden op het scherm bv 8 = [2, 2, 2]
                ?>

<!--                --><?php
//                $num1 = $number;
//
//                if ($num1 > 0) {
//                    $primes = [];
//
//                    for ($candidate = 2; $num1 > 1; $candidate++) {
//                        for (; $num1 % $candidate == 0; $num1 /= $candidate) {
//                            $primes[] = $candidate;
//                        }
//                    }
//                    return $primes;
//                }
//                TODO: deze moeten afgedrukt worden op het scherm bv 8 = [2, 2, 2]
//                ?>
            </div>
        </form>
    </div>
</div>
<br>
<footer class="card-footer">
    &copy; 2020 Justin Schouten.
    <address>
        Mail j.schouten_97@hotmail.com
        <br>
        Or Call 0639591370
    </address>
</footer>
</body>
</html>
