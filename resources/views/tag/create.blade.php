<x-layouts.app>
    <section class="container " style="margin-bottom: 30px;margin-top: 100px">
      <div class="title is-3">Create New Tag</div>
      <form action="/tags" method="POST">
        @csrf
        <div class="field">
          <label class="label">Name</label>
          <div class="control">
            <input class="input @error('name')is-danger @enderror" value="{{ old('name')  }}" type="text" placeholder="Tags name" name="name">
          </div>
          @error('name')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="field">
            <label class="label">Slug</label>
            <div class="control">
              <input class="input @error('slug')is-danger @enderror" value="{{ old('slug')  }}" type="text" placeholder="Tags slug" name="slug">
            </div>
            @error('slug')
              <p class="help is-danger">{{ $message }}</p>
            @enderror
          </div>

        <div class="field is-grouped">
          <div class="control">
            <button class="button is-link">Create new <small class="text-muted"></small></button>
          </div>
          <div class="control">
            <button class="button is-link is-light">Cancel</button>
          </div>
        </div>
      </form>
    </section>
  </x-layouts.app>
