<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>TrendTailor</title>
    
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <!-- Flowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.css" rel="stylesheet" />
      <!-- External CSS -->
      <link rel="stylesheet" href="{{ asset('src/styles.css') }}"><!-- Adjusted link to point to your CSS file -->
</head>
<body>
    {{-- navbar page --}}
    @include('Homepage.Header_Utility.navbar')

    {{-- main page --}}

        {{-- @include('Homepage.main_content') --}}
       


        @include('Homepage.main_content')
    
   


  <!-- footer.html -->
    @include('Homepage.Header_Utility.footer')
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.3/flowbite.min.js"></script>
</body>
</html>