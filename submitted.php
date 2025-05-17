<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Submission Successful</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #f4fff4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .message {
            background-color: #d4edda;
            color: #155724;
            padding: 30px 40px;
            border: 1px solid #c3e6cb;
            border-radius: 10px;
            font-size: 20px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .countdown {
            font-weight: bold;
        }
    </style>
    <script>
        let seconds = 5;

        function updateCountdown() {
            const countdownElement = document.getElementById('countdown');
            countdownElement.textContent = seconds;
            seconds--;

            if (seconds < 0) {
                window.location.href = "/"; // Change this to any redirect destination
            }
        }

        window.onload = function () {
            updateCountdown(); // Initial update
            setInterval(updateCountdown, 1000);
        };
    </script>
</head>

<body>
    <div class="message">
        ✅ Submission Successful!<br>
        Redirecting to homepage in <span id="countdown" class="countdown">5</span> seconds...
    </div>
</body>

</html>