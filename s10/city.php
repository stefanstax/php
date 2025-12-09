<?php
require __DIR__ . "/inc/funcs.inc.php";
require __DIR__ . "/views/header.inc.php";


$city = null;

if (!empty($_GET["city"])) {
    $city = $_GET["city"];
}

if (!empty($city)) {
    $cities = json_decode(file_get_contents(__DIR__ . "/data/index.json"), true);
    $filename = null;
    foreach ($cities as $currentCity) {
        if ($currentCity["city"] === $city) {
            $filename = $currentCity["filename"];
            break;
        }
    }

    if (!empty($filename)) {
        $results = json_decode(
            file_get_contents("compress.bzip2://" . __DIR__ . "/data/{$filename}"),
            true
        )["results"];

        $stats = [];
        $units = [
            "pm25" => null,
            "pm10" => null
        ];


        foreach ($results as $result) {
            if (!empty($units["pm25"]) && !empty($units["pm10"])) break;

            if ($result["parameter"] === "pm25") {
                $units["pm25"] = $result["unit"];
            }

            if ($result["parameter"] === "pm10") {
                $units["pm10"] = $result["unit"];
            }
        }


        foreach ($results as $result) {
            if ($result["parameter"] !== "pm25" && $result["parameter"] !== "pm10") continue;
            if ($result["value"] < 0) continue;
            $month = substr($result["date"]["local"], 0, 7);
            if (!isset($stats[$month])) {
                $stats[$month] = [
                    "pm25" => [],
                    "pm10" => []
                ];
            }
            $stats[$month][$result["parameter"]][] = $result["value"];
        }
    }
}

function showMonthIcon($value)
{
    $getMonth = substr($value, 5, 7);

    if ($getMonth !== "10") {
        $getMonth = str_replace("0", "", $getMonth);
    }

    $spring = [3, 4, 5];
    $summer = [6, 7, 8];
    $autumn = [9, 10, 11];

    if (in_array($getMonth, $spring)) {
        echo "☔";
    } else if (in_array($getMonth, $summer)) {
        echo "🩴";
    } else if (in_array($getMonth, $autumn)) {
        echo "🧥";
    } else {
        echo "☃️";
    }
}

if (!empty($city)) { ?>
    <div style="padding: 0.675em; border-radius: 1.25em; margin-bottom: 1em; background-color: #90D5FF; color: white;">
        <h1 style="font-size: 1.5rem; font-weight: bold;">AQI Weather Data for <?php echo $city; ?></h1>
    </div>

    <canvas id="aqi-chart" width="400" height="400"></canvas>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const ctx = document.getElementById('aqi-chart');
            ctx.getContext("2d");
            const aqiChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: '#5152fb20',
                        borderColor: '#5152fb',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })
    </script>
    <table>
        <thead>
            <tr>
                <th>Month</th>
                <th>PM 2.5 Concentration</th>
                <th>PM 10 Concentration</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stats as $month => $measurements) { ?>
                <tr>
                    <th><?php echo showMonthIcon($month) ?><?php echo secureText($month) ?></th>
                    <?php if (count($measurements["pm25"]) > 0) { ?>
                        <td><?php echo secureText(array_sum($measurements["pm25"]) / count($measurements["pm25"])) ?> <?php echo $units["pm25"] ?></td>
                    <?php } ?>
                    <?php if (count($measurements["pm10"]) > 0) { ?>
                        <td><?php echo secureText(array_sum($measurements["pm10"]) / count($measurements["pm10"])) ?> <?php echo $units["pm10"] ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php }

require __DIR__ . "/views/footer.inc.php";
