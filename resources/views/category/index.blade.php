<x-layouts.app>
  <section class="section">
    <div class="container">
      <div class="title is-3 has-text-centered">
        @if (Session::get('success'))
    <div class="notification is-primary is-light">
      <button class="delete"></button>
      {{ Session::get('success') }}
    </div>
    @endif

    @if (Session::get('danger'))
    <div class="notification is-danger is-light">
      <button class="delete"></button>
      {{ Session::get('danger') }}
    </div>
    @endif
        All Categories
      </div>
      {{-- row --}}
      <div class="columns is-multiline">
        @foreach ($categories as $category)
        <div class="column is-4">
          {{-- <a href="/posts/{{ $post->id }}"> --}}
            <a href="{{ route('categories.show', $category) }}" style="text-decoration: none;">
            <div class="card " id="category-form">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="{{ $category->icon }}" alt="Placeholder image">
                </figure>
              </div>
              <div class="card-content">
                <div class="media">
                  <div class="media-content">
                    <p class="title is-4">{{ $category->name }}</p>
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
