<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- google fonts  --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Montenegrin+Gothic+One&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
{{-- fine google fonts  --}}

{{-- fontawesome  --}}
<script src="https://kit.fontawesome.com/1f6080f182.js" crossorigin="anonymous"></script>
  {{-- fine fonawesome --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Presto</title>
</head>


<body>
    
    <x-navbar />

     <div class="min-vh-100">
      {{ $slot }}
     </div>
     
    <x-footer />

      <!-- Pulsante Torna Su -->
    <button id="backToTop" class="back-to-top" aria-label="Torna in alto">
        <svg xmlns="http://w3.org" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </button>


</body>
</html>