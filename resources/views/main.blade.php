<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Legends User Info</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(120deg, #1e3c72, #2a5298);
            color: #333;
        }

        .container {
            max-width: 700px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            padding: 30px 40px;
        }

        h1 {
            text-align: center;
            color: #1e3c72;
            margin-bottom: 30px;
        }

        .field {
            margin: 20px 0;
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .label {
            font-weight: 600;
            color: #555;
        }

        .value {
            color: #222;
        }

        .status-ok {
            color: #28a745;
            font-weight: bold;
        }

        .status-failed {
            color: #dc3545;
            font-weight: bold;
        }

        .error {
            text-align: center;
            font-size: 1.2rem;
            color: #dc3545;
        }

        .status-icon {
            margin-right: 6px;
        }

        .status-row {
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Mobile Legends User Info</h1>

        @if (isset($response['error']) && $response['error'] === false)
            <div class="field">
                <span class="label">Status:</span>
                <span class="value status-ok status-row">
                    <span class="status-icon">✔</span> 200 OK - {{ $response['msg'] }}
                </span>
            </div>
        @else
            <div class="field">
                <span class="label">Status:</span>
                <span class="value status-failed status-row">
                    <span class="status-icon">✘</span> Error - {{ $response['msg'] ?? 'Unknown error' }}
                </span>
            </div>
        @endif

        @if (isset($response['data']))
            <div class="field">
                <span class="label">Username:</span>
                <span class="value">{{ $response['data']['username'] }}</span>
            </div>
            <div class="field">
                <span class="label">ID:</span>
                <span class="value">{{ $response['data']['id'] }}</span>
            </div>
            <div class="field">
                <span class="label">Server:</span>
                <span class="value">{{ $response['data']['server'] }}</span>
            </div>
            <div class="field">
                <span class="label">Region:</span>
                <span class="value">{{ $response['data']['region'] }}</span>
            </div>
            <div class="field">
                <span class="label">Made In:</span>
                <span class="value">{{ $response['data']['made_in'] ?: '-' }}</span>
            </div>
        @endif
    </div>
</body>

</html>
