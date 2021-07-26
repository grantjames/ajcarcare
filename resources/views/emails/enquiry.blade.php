<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJ Car Care Enquiry</title>
</head>
<body>
    <p>
        Message from AJ Car Care website:
    </p>
    <p>
        Name: {{ $name }}
    </p>
    <p>
        Email: {{ $email }}
    </p>
    <p>
        Phone: {{ $phone }}
    </p>
    <p>
        {!! nl2br($message_body) !!}
    </p>
</body>
</html>