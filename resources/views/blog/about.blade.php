@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post-item post-detail">

                    <div class="post-item-body">
                        <div class="padding-10">
                            <h1>My About</h1>
                        </div>
                    </div>
                </article>

                <article class="post-author padding-10">
                    <div class="media">
                      <div class="media-body">
                        <div class="post-author-count">
                        </div>
                        <p>
                          babababababa
                        </p>
                      </div>
                    </div>
                </article>

            </div>
        </div>
    </div>

  <script src="/js/jquery.min.js"></script>
  <script type="text/javascript">
    $(".navbar-right li:first").removeClass("active");
    $(".navbar-right li:nth-child(2)").addClass("active");
  </script>
@endsection

