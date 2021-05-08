<x-layouts.app>
  <section class="section">
    <div class="container">
      <div class="title is-3 has-text-centered">
        Our Latest tags
      </div>
      {{-- row --}}
      <div class="columns is-multiline">
        @foreach ($tags as $tag)
        <span class="tag is-info is-large">{{$tag->name}}</span>
        <span class="column">
          <a href="{{route('tags.edit', $tag)}}"><button class="button  is-info is-small">edit</button></a>
          <a href="{{route('tags.destroy', $tag)}}"><button class="button is-danger is-small">delete</button></a>
        </span>
        @endforeach
      </div>
    </div>
  </section>
</x-layouts.app>
