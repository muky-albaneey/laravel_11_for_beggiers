<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>we just sennt job we posted {{ $job->employer->name }}</p>
    <section>
        <p>{{ $job->title }}</p>
        <p>from {{ $job->employer->user->firstname }}</p>
    </section>
</body>
</html>
