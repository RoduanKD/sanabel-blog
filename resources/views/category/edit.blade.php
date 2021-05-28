<x-layouts.app>
  <section class="section">
    <div class="container">
      <div class="title is-2">Edit {{ $category->name }}</div>
      <form action="/categories/{{ $category->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="field">
          <label class="label">name</label>
          <div class="control">
            <input class="input @error('name')is-danger @enderror" name="name" type="text" value="{{ old('name',$category->name) }}" placeholder="Category Name">
          </div>
          @error('name')
          <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="field">
          <label class="label">slug</label>
          <div class="control">
            <input class="input @error('slug')is-danger @enderror" name="slug" type="text" value="{{ old('slug',$category->slug) }}" placeholder="Slug">
          </div>
          @error('slug')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="field">
          <label class="label">Category Icon (URL)</label>
          <div class="control">
            <input class="input @error('icon_url')is-danger @enderror" name="icon_url" type="text" value="{{ old('icon_url',$category->icon) }}" placeholder="http://hi.com/icon.jpg">
          </div>
          @error('icon_url')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="field">
          <label class="label">Category Icon (upload)</label>
          <div class="file">
            <label class="file-label">
              <input class="file-input" type="file" name="icon_upload" accept="image/*">
              <span class="file-cta">
                <span class="file-icon">
                  <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">
                  Choose an icon...
                </span>
              </span>
            </label>
          </div>
          @error('icon_upload')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="field is-grouped">
          <div class="control">
            <button class="button is-link">Update Category</button>
          </div>
          <div class="control">
            <button class="button is-link is-light">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </section>

</x-layouts.app>
