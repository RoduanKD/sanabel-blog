<x-layouts.app>


  <div  style="margin-top: 30px;">

    <section class="main-content columns is-fullheight">

      <x-sidebar/>

      <section class="container mt-5">

        <section class="hero is-medium" style="background-color: #333;opacity: 0.8;" >
          <div class="hero-body has-text-centered" >
            <h1 class="title has-text-white">
              Posts Page
            </h1>
            <h3 class="subtitle has-text-white">
              Welcome To Our Posts
            </h3>
            <p class="has-text-primary-light ">Numbers of Our Posts Is : {{$posts->count()}}</p>
          </div>
        </section>
      <section class="container mb-6 mt-6" >
        <div class="columns is-multiline ">
          @foreach ($posts as $post)
            <div class="column is-one-third">
              <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src={{$post->img}} alt="Placeholder image">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="media">
                    <div class="media-content">
                      <p class="title is-4">{{ $post->title }}</p>
                    </div>

  <section class="hero is-large is-primary">
    <div class="container">
      <div class="hero-body has-text-centered">
        <p class="title">
          Sanabel Blog
        </p>
        <p class="subtitle">
          Welcome to our Blog, here you will learn about Laravel
        </p>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="title is-3 has-text-centered">
        Our Latest Posts
      </div>
      {{-- row --}}
      <div class="columns is-multiline">
        @foreach ($posts as $post)
        <div class="column is-4">
          <a href="{{ route('posts.show', $post) }}">
            <div class="card" style="height: 100%;">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="{{ $post->featured_image }}" alt="Placeholder image">
                </figure>
              </div>
              <div class="card-content">
                <div class="media">
                  <div class="media-left">
                    <figure class="image is-48x48">
                      <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                    </figure>

                  </div>
                  <div class="content">
                    {{ Str::limit($post->body, 30) }}
                  {{-- {{$post->body}} --}}
                    <br>
                    <time datetime="2016-1-1">{{$post->created_at}}</time>
                  </div>
                  <div>
                    <a href="/posts/{{ $post->id }}">
                      <button class="button is-fullwidth is-primary is-outlined mb-5">Show</button>
                    </a>
                    <a href="/posts/{{$post->id}}/edit">
                      <button class="button is-fullwidth is-danger  is-outlined">Edit</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </section>
    </section>
  </div>

</x-layouts.app>
