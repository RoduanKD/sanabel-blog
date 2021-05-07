<x-layouts.app>
  <section class="section">
    <div class="container">
      <div class="title is-2">Edit {{ $post->title }}</div>
      <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="field">
          <label class="label">Title</label>
          <div class="control">
            <input class="input @error('title')is-danger @enderror" name="title" type="text" placeholder="Post Title" value="{{ $post->title }}">
          </div>
          @error('title')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="field">
          <label class="label">Featured Image (URL)</label>
          <div class="control">
            <input class="input" name="featured_image" type="text" placeholder="http://hi.com/pic.jpg" value="{{ $post->featured_image }}">
          </div>
          @error('featured_image')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="field">
          <label class="label">Content</label>
          <div class="control">
            <textarea class="textarea @error('content')is-danger @enderror" name="content" placeholder="Post Content">{{ $post->content }}</textarea>
          </div>
          @error('content')
            <p class="help is-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="field is-grouped">
          <div class="control">
            <button class="button is-link">Update post</button>
          </div>
          <div class="control">
            <button class="button is-link is-light">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </section>

</x-layouts.app>
