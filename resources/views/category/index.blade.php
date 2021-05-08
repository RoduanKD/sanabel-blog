<x-layouts.app>

  <section class="section">
    <div class="container">
      <div class="title is-3 has-text-centered">
        Our Latest Categories
      </div>
      {{-- row --}}
      <div class="columns is-multiline">
        @foreach ($categories as $category)
        <div class="column is-4">
          <div class="card" style="height: 100%;">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="{{ $category->icon }}" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="media">
                <div class="media-left">
                  <figure class="image is-48x48">
                    <img src="{{$category->icon}}" alt="{{$category->name}}">
                  </figure>
                </div>
                <div class="media-content">
                  <p class="title is-4">{{$category->name}}</p>
                  <p class="subtitle is-6"><span>@</span>{{$category->name}}</p>
                  <a href="{{route('categories.edit', $category)}}"><button class="button  is-info is-small">edit</button></a>
                  <a href="{{route('categories.destroy',$category)}}"><button class="button is-danger is-small">delete</button></a>

                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</x-layouts.app>
