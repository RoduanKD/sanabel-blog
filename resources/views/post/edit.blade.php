<x-layouts.app>
  <section class="section">
    <div class="container">
      <div class="title is-2">Edit {{ $post->title }}</div>
      <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="field">
          <label class="label">title</label>
          <div class="control">
            <input class="input @error('title')is-danger @enderror" name="title" type="text" placeholder="Text input"
              value={{$post->title}}>
          </div>
          @error("title")
          <p class="help is-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="field">
          <label class="label">Image(URL)</label>
          <div class="control">
            <input name="featured_image" class="input @error('featured_image')is-danger @enderror" type="text"
              placeholder="Text input" value={{$post->featured_image}}>
          </div>
          @error("featured_image")
          <p class="help is-danger">{{$message}}</p>
          @enderror
        </div>

        <div class="field">
          <label class="label">Content</label>
          <div class="control">
            <textarea name="content" class="textarea @error('content')is-danger @enderror"
              placeholder="Textarea">{{$post->content}}</textarea>
          </div>
          @error("content")
          <p class="help is-danger">{{$message}}</p>
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
