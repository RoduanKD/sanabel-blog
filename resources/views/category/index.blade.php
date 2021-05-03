<x-layouts.app>
    <section class="section">
        <h3 class="title mt-6">Categories</h3>

    <section class="container mb-6 mt-6" >
        <div class="columns is-multiline ">
          @foreach ($categories as $category)
            <div class="column is-one-third">
              <div class="card">

                <div class="card-content">
                  <div class="media">
                    <div class="media-content">
                      <p class="title is-4">{{ $category->name }}</p>
                    </div>
                  </div>
                  <div class="content">

                    <time datetime="2016-1-1">{{$category->created_at}}</time>
                  </div>
                  <div>
                    <a href="/categories/{{$category->id}}">
                      <button class="button is-fullwidth is-primary is-outlined mb-5">Show All Post</button>
                    </a>
                    <a href="/categories/{{$category->id}}/edit">
                      <button class="button is-fullwidth is-danger  is-outlined">Edit</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </section>
    </section>



</x-layouts.app>
