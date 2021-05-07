<x-layouts.app>
  <section class="section">
    <div class="container">
      <div class="title is-2">Edit {{ $tag->name }}</div>
      {{-- <form action="/tags/{{$tag->id}}" method="POST" class="form"> --}}
        <form action="{{route('tags.update',$tag) }}" method="POST" class="form">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="field">
          <label class="label">Name</label>
          <div class="control">
            <input class="input  @error('name')is-danger @enderror" name="name" type="text" placeholder="Tag Name" value="{{ old('name') }}">
          </div>
          @error('name')
          <p class="help is-danger">{{ $message }}</p>
        @enderror
        </div>
        <div class="field">
          <label class="label">Slug</label>
          <div class="control">
            <input class="input  @error('slug')is-danger @enderror" name="slug" type="text" placeholder="Tag Slug" value="{{ old('slug') }}">
          </div>
          @error('slug')
          <p class="help is-danger">{{ $message }}</p>
        @enderror
        </div>

        <div class="field is-grouped">
          <div class="control">
            <button class="is-link">Update</button>
          </div>
          <div class="control">
            <button class="is-link is-light">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </section>

</x-layouts.app>

