<x-layouts.app>
  <section class="section">
    <div class="container">
      <div class="title is-3 has-text-centered">
        All Tags
      </div>
      {{-- row --}}
      <div class="columns is-multiline">
        @foreach ($tags as $tag)
        <div class="column is-3">
          <a href="{{route('tags.show',$tag)}}" style="text-decoration: none">
            <div class="card form">
              <div class="card-content">
                <div class="media">
                  <div class="media-content">
                    <p class="title is-4">{{ $tag->name }}</p>
                  </div>
                </div>

              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>

</x-layouts.app>
