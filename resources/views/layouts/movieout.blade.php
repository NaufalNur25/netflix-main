<body>
    <div class="wrapper">
      <!-- MAIN CONTAINER -->
      <section class="container" style="margin-top: 100px">
        <div class="location" id="home">
            <h1 id="home">Popular on Netflix</h1>
            @foreach ($items as $item)
            <div class="box">
              <a href="/app/movie/{{ $item->id }}"><img src="{{ asset('/image/'.$item->filename) }}" alt="" style="width: 200px; height:300px;"></a>
            </div>
            @endforeach
        </div>
    </div>
  </body>
