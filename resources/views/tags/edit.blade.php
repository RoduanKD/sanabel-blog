<x-layouts.app>
  <section class="section">
    <div class="container">
      <div class="title is-2">edit{{$tags->name}}</div>
      <form action="{{ route('tags.update') }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="field">
          <label class="label">name</label>
          <div class="control">
            <input class="input @error('name')is-danger @enderror" name="name" type="text" value={{$tags->name}} placeholder="Tag name">
          </div>
          @error('name')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="field is-grouped">
          <div class="control">
            <button type="submit" class="button is-link">Update new Tag</button>
          </div>
          <div class="control">
            <button class="button is-link is-light">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </section>

</x-layouts.app>
