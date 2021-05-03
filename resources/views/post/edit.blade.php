<x-layouts.app>

  <section class="container" style="margin-bottom: 30px;margin-top: 100px">
    <div class="title is-3">Edit {{ $post->title }}</div>
    <form action="/posts/{{ $post->id }}" method="POST">
      @csrf
      <input type="hidden" name="_method" value="PUT">
      <div class="field">
        <label class="label">Title</label>
        <div class="control">
          <input class="input @error('title')is-danger @enderror" value="{{ $post->title  }}" type="text" placeholder="Post Title" name="title">
        </div>
        @error('title')
          <p class="help is-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="field">
        <label class="label">Featured Image (URL)</label>
        <div class="control">
          <input class="input @error('img') is-danger  @enderror" value="{{ $post->img }}" type="text" placeholder="Image url" name="img">
        </div>
        @error('img')
          <p class="help is-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="field">
        <label class="label">Content</label>
        <div class="control">
          <textarea class="textarea @error('body') is-danger @enderror"  placeholder="Post Content" name="body">{{ $post->body }}</textarea>
        </div>
        @error('body')
          <p class="help is-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="field is-grouped">
        <div class="control">
          <button class="button is-link">Submit</button>
        </div>
        <div class="control">
          <button class="button is-link is-light">Cancel</button>
        </div>
      </div>
    </form>
  </section>
</x-layouts.app>
