<x-layouts.app>
  <section class="container " style="margin-bottom: 30px;margin-top: 100px">
    <div class="title is-3">Create New Category</div>
    <form action="/categories" method="POST">
      @csrf
      <div class="field">
        <label class="label">Name</label>
        <div class="control">
          <input class="input @error('name')is-danger @enderror" value="{{ old('name')  }}" type="text" placeholder="categories name" name="name">
        </div>
        @error('name')
          <p class="help is-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="field">
        <label class="label">Category Image (URL)</label>
        <div class="control">
          <input class="input @error('icon') is-danger  @enderror" value="{{ old('icon') }}" type="text" placeholder="Image url" name="icon">
        </div>
        @error('icon')
          <p class="help is-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="field is-grouped">
        <div class="control">
          <button class="button is-link">Create new Category</button>
        </div>
        <div class="control">
          <button class="button is-link is-light">Cancel</button>
        </div>
      </div>
    </form>
  </section>
</x-layouts.app>
