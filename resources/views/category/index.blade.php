<x-layouts.app>
  <section class="hero is-medium is-primary">
    <div class="container">
      <div class="hero-body has-text-centered" style="height: 50%;">

        <p class="title">
          Category Index page
        </p>
        <p class="subtitle">
          this is where you will see all categories
        </p>
        <p class="title">
          <button class="button" class="button is-success"><a href="{{ route('categories.create') }}"><b>Create New Category</b></a></button>
        </p>
      </div>
    </div>
  </section>
  <br>
  <section>
  <div class="container">


  <ul>
    @foreach ($categories as $category)
    <div class="columns is-centered"> <li>{{ $category->name }}</li></div>
    @endforeach
  </ul>
 {{-- <a  class ="button is-danger is-rounded" href ="{{route('categories.create')}}" >create new category</a></button> --}}
</div></section>
</x-layouts.app>
