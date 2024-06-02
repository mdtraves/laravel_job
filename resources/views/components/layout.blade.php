<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>{{ $title }}</title>
</head>
<body>
    <x-nav></x-nav>
    <div class="">
        {{ $slot }}
    </div>
</body>


<script>

document.addEventListener("DOMContentLoaded", function() {
  setTimeout(function() {
    document.getElementById("flash-message").style.display = "none";
  }, 4000);
});

</script>

</html>