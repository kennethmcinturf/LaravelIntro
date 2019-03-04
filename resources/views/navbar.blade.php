<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Parlevel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/articles">Articles</a>
                </li>
            <li class="nav-item">
              <a class="nav-link" href="/articles/create">Create a article</a>
            </li>
            <li class="nav-item">
                {!! link_to_action('ArticlesController@show', $latest->title, array('href' => $latest->id), array('class' => 'nav-link'))!!}
            </li>
          </ul>
        </div>
      </nav>