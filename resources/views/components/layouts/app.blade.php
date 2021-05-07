<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }}</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
</head>

<body>

  <x-navbar />
<x-message/>
  <section class="main-content columns is-fullheight">
    <x-sidebar />
    <div class="container ">
      <div class="section">
        {{$slot}}
      </div>
    </div>
  </section>
  <x-footer />
</body>

</html>
