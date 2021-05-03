<x-layouts.app>
    <section class="section mt-6 ml-6">

        <div class="columns">
            <div class="column">
                <figure class="image is-32x32">
                    <img class="is-rounded" src="{{$category->icon}}">
                </figure>
            </div>
            <div class="column">
                <h2 class="tag is-success is-large " style="margin-left: -600px">{{ $category->name }} </h2>
            </div>

        </div>
    </section>

    <section class="container mb-6 mt-6" >
        <div class="columns is-multiline ">
          @foreach ($category->posts as $post)
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
</x-layouts.app>
