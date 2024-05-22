<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>URL Shortener</h1>
    @if (session('shortened_url'))
        <div class="alert alert-success">
            Shortened URL: <a href="{{ session('shortened_url') }}">{{ session('shortened_url') }}</a>
        </div>
    @endif
    <form action="{{ route('shorten') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="url">Enter URL to shorten:</label>
            <input type="url" name="url" id="url" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Shorten</button>
    </form>
</div>
</body>
</html>
