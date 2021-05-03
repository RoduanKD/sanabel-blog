
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
  </head>
  <body>

  <x-navbar/>

  <section class="hero is-medium is-primary">
    <div class="hero-body has-text-centered">
      <p class="title">
        Posts Page
      </p>
      <p class="subtitle">
        Welcome To Our Posts
      </p>
    </div>
  </section>

  <section class="container" style="margin-top: 30px">
    <div class="columns is-multiline ">
      @foreach ($posts as $post)
        <div class="column is-one-third">
          <a href="/showpost/{{ $post->id }}">
          <div class="card">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src={{$post->img}} alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="media">

                <div class="media-content">
                  <p class="title is-4">{{ $post->title }}</p>

                </div>
              </div>

              <div class="content">
               {{$post->body}}

                <br>
                <time datetime="2016-1-1">{{$post->created_at}}</time>
              </div>
            </div>
          </div>
          </a>
        </div>

      @endforeach



    </div>

  </section>


  <style>
    .footer {
            background-color: #37424c;
            color: #b2b9bf;
            font-size: 16px;
            min-height: 63px;
          }
          .footer-widget h3 {
            margin-bottom: 20px;
          }
          .footer-widget .stats {
            margin-top: 23px;
          }
          .footer-widget .stats .line {
            font-size: 18px;
            margin-top: 10px;
          }
          .footer-widget .stats .line .counter {
            font-weight: 600;
            float: left;
            display: block;
          }
          .footer-widget .stats .line .caption {
            color: #7b8690;
            margin-left: 56px;
            display: block;
          }

          /*Recent Post*/
          .recent-post {
            list-style-type: none;
            text-indent: -1.7em;
          }
          .recent-post li {
            margin-top: 18px;
          }
          .recent-post li:before {
            font-family: FontAwesome;
            content: "\f097";
            float: left;
            width: 1.7em;
          }
          .recent-post a {
            color: #ced8e1;
            font-size: 16px;
            margin-top: 10px;
            text-decoration: none !important;
          }
          .recent-post a:hover {
            color: #fbfbfb;
          }
          /* Tags */
          .tags {
            list-style: none;
            margin: 0 0 15px 0;
            padding-left: 0;
          }
          .tags li {
            float: left;
          }
          .tags li button {
            padding: 4px 8px;
            margin-right: 10px;
            margin-bottom: 10px;
            display: inline-block;
            border: 0;
            font-size: 18px;
            color: inherit;
            background-color: #4d5f6f;
          }
          .tags li button:hover,
          .tags li button:active {
            color: #fff;
            background-color: #00b9e8;
            outline: none;
            box-shadow: none !important;
          }

    /*************Copyright Segment*************/
          .cpyright-footer { /*shared with header */
            border-color: #333;
            background-color: #333;
            color: #ccc;
            font-size: 16px;
            min-height: 63px;
            text-align: center;

          }
          .cpyright-footer p{
            padding-top: 20px;
          }



    </style>
      <footer>
        <div class="footer">
          <div class="tile is-ancestor">
            <div class="tile is-parent">
              <div class="tile is-child footer-widget">
                <h3>Statistics</h3>
                <div class="stats">
                  <div class="line">
                    <span class="counter">{{$posts->count()}}</span>
                    <span class="caption">Articles</span>
                  </div>
                  <div class="line">
                    <span class="counter">{{$posts->count('likes')}}</span>
                    <span class="caption">Likes</span>
                  </div>
                  <div class="line">
                    <span class="counter">1</span>
                    <span class="caption">Authors</span>
                  </div>
                </div>
              </div>
              <div class="tile is-parent footer-widget">
                <div class="tile is-child">
                  <h3> Recent Post</h3>
                <ul class="recent-post">
                  <li ><a href="#"><i class="fab fa-laravel">Laravel</i></a></li>
                  <li><a href="#">MySql</a></li>
                  <li><a href="#">Bulma</a></li>
                </ul>
                </div>
              </div>
              <div class="tile is-parent footer-widget">
                <div class="tile is-child">
                  <h3>Tags</h3>
                <ul class="tags">
                  <li><button class="btn btn-primary" type="button">Laravel</button></li>
                  <li><button class="btn btn-primary" type="button">Database</button></li>
                  <li><button class="btn btn-primary" type="button">HTML</button></li>
                  <li><button class="btn btn-primary" type="button">CSS</button></li>
                  <li><button class="btn btn-primary" type="button">Javascript</button></li>
                  <li><button class="btn btn-primary" type="button">jQuery</button></li>
                </ul>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="cpyright-footer ">

            <p class="social pull-left">Copyright &copy;  Blog 2021. </p>

        </div>
      </footer>
    <!-- End of Content -->
{{-- <x-footer :post="$post">

</x-footer> --}}
</body>
</html>

