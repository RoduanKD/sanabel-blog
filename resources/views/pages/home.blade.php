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
              Welcome To Our Blog
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
