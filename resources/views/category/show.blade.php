<x-layouts.app>
  {{-- <h2 class="title is-2">{{ $category->name }}</h2>
  <ul>
    @foreach ($category->posts as $post)
      <li>{{ $post->title }}</li>
    @endforeach
  </ul> --}}
  @foreach ($categories as $category )
    <h1>{{$categories->name}}</h1>
  @endforeach
  <h1>Hello</h1>
</x-layouts.app>
