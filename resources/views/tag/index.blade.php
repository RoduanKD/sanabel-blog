<x-layouts.app>
    <section class="section">
        <h3 class="title mt-6">Tags</h3>

        <section class="container mb-6 mt-6" >
            <div class="columns is-multiline ">
                @foreach ($tags as $tag)
                    <div class="column is-one-third">
                        <div class="tags are-medium">
                            <span class="tag  is-success">{{ $tag->name }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </section>

</x-layouts.app>
