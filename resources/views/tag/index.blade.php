<x-layouts.app>
  <section class="hero is-medium is-primary">
    <div class="container">
      <div class="hero-body has-text-centered" style="height: 50%;">

        <p class="title">
          tag Index page
        </p>
        <p class="subtitle">
          this is where you will see all tag
        </p>
        <p class="title">
          <button class="button" class="button is-success"><a href="{{ route('tags.create') }}"><b>Create New Tag</b></a></button>
         </p>
      </div>
    </div>
  </section>
<br>
  <section>
    <div class="container">
  <ul>
    @foreach ($tags as $tag)
    <div class="columns is-centered"><li>{{ $tag->name }}</li></div>
    @endforeach
  </ul> </div></section>
 {{-- <a  class ="button is-danger is-rounded" href ="{{route('categories.create')}}" >create new category</a></button> --}}

</x-layouts.app>
