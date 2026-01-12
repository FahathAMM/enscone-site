<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/head.php"); ?>
</head>

<body>

    <!-- Spinner Start -->
    <!-- <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->

    <?php include("includes/header.php"); ?>

    <?php
    $pageName = $_GET['page'] ?? 'index';
    include("includes/foot.php");
    require "$pageName.php";
    ?>

    <?php include("includes/footer.php"); ?>

    <?php

    logMessage("pageName: $pageName");
    logIPApiResponse();

    function logIPApiResponse($ipAddress = false)
    {
        // $ipAddress = $_SERVER['REMOTE_ADDR'] ?? false;
        $ipAddress = '217.165.73.244';
        $logFile = 'logs/ip_api_log.log';
        $geoApiUrl = "http://ip-api.com/php/$ipAddress?fields=61439";  // Replace with your actual IP address

        if (!$geoApiUrl) {
            $logEntry = [
                'date' => 'not found',
            ];
            file_put_contents($logFile, json_encode($logEntry, JSON_PRETTY_PRINT), FILE_APPEND);
        }

        // API URL with specific fields parameter
        $geoResponse = file_get_contents($geoApiUrl);
        $geoData = unserialize($geoResponse);  // Use unserialize for PHP serialized response
        $date = date('Y-m-d H:i:s');
        // Prepare the log entry
        $logEntry = [
            'date' => $date,
            'ip_address' => $ipAddress,
            'response' => $geoData // Log the full response data
        ];

        // Path to the new log file for IP API responses

        // Write the log entry directly into the JSON file (overwrites the file each time)
        file_put_contents($logFile, json_encode($logEntry, JSON_PRETTY_PRINT), FILE_APPEND);

        return 'Log entry saved successfully';  // Return success message
    }

    function logMessage($message, $title = 'INFO', $logFile = 'userlog.log')
    {
        date_default_timezone_set('Asia/Dubai');

        $logDir = 'logs/phplog';
        // $logDir = storage_path('logs/phplog');

        if (!is_dir($logDir)) {
            mkdir($logDir, 0777, true);
        }

        // Capture visitor details
        $ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'Unknown IP';
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown User Agent';
        $requestedUrl = $_SERVER['REQUEST_URI'] ?? 'Unknown URL';

        // Detect device type
        if (preg_match('/mobile/i', $userAgent)) {
            $deviceType = 'Mobile';
        } elseif (preg_match('/tablet|ipad/i', $userAgent)) {
            $deviceType = 'Tablet';
        } else {
            $deviceType = 'Desktop';
        }

        // Detect operating system
        if (preg_match('/Windows/i', $userAgent)) {
            $os = 'Windows';
        } elseif (preg_match('/Mac/i', $userAgent)) {
            $os = 'MacOS';
        } elseif (preg_match('/Linux/i', $userAgent)) {
            $os = 'Linux';
        } elseif (preg_match('/Android/i', $userAgent)) {
            $os = 'Android';
        } elseif (preg_match('/iPhone|iPad/i', $userAgent)) {
            $os = 'iOS';
        } else {
            $os = 'Unknown OS';
        }

        // Detect browser
        if (preg_match('/Chrome/i', $userAgent)) {
            $browser = 'Chrome';
        } elseif (preg_match('/Firefox/i', $userAgent)) {
            $browser = 'Firefox';
        } elseif (preg_match('/Safari/i', $userAgent) && !preg_match('/Chrome/i', $userAgent)) {
            $browser = 'Safari';
        } elseif (preg_match('/Edge/i', $userAgent)) {
            $browser = 'Edge';
        } elseif (preg_match('/MSIE|Trident/i', $userAgent)) {
            $browser = 'Internet Explorer';
        } else {
            $browser = 'Unknown Browser';
        }

        // Current date and time
        $date = date('Y-m-d H:i:s');

        // Prepare the log message
        $formattedMessage = "[$date] $title: $message | IP: $ipAddress | URL: $requestedUrl | User Agent: $userAgent | Device: $deviceType | Browser: $browser | OS: $os" . PHP_EOL;

        // Write to the log file
        file_put_contents("$logDir/$logFile", $formattedMessage, FILE_APPEND);


        // ---------json---------------
        // Prepare JSON format log
        $jsonLogData = [
            'date' => $date,
            'title' => $title,
            'message' => $message,
            'ip_address' => $ipAddress,
            'url' => $requestedUrl,
            // 'user_agent' => $userAgent,
            'device' => $deviceType,
            'browser' => $browser,
            'os' => $os
        ];

        // Convert array to JSON string
        $jsonFormattedMessage = json_encode($jsonLogData, JSON_PRETTY_PRINT) . PHP_EOL;

        // Write JSON log to the jsonlog file
        file_put_contents("$logDir/jsonlog.log", $jsonFormattedMessage, FILE_APPEND);
        // ---------json---------------

        return 'done';
    }

    ?>

</body>

</html>