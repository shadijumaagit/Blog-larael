@extends('layout')
@section('pageTitle', 'Recent Posts')
@section('content')

<x-header-hero-section title="Our Recent Blog Entries"/>


  <section class="blog-posts grid-system">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="all-blog-posts">
            <div class="row">
                @foreach($articles as $article)
              <div class="col-lg-6">
                <div class="blog-post">
                  <div class="blog-thumb">
                    <img src="/assets/images/blog-thumb-01.jpg" alt="">
                  </div>
                  <div class="down-content">
                    <span>Lifestyle</span>
                    <a href="/blog/singlepost"><h4> {{ $article }}</h4></a>
                    <ul class="post-info">
                      <li><a href="#">Admin</a></li>
                      <li><a href="#">May 31, 2020</a></li>
                      <li><a href="#">12 Comments</a></li>
                    </ul>
                    <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>
                    <div class="post-options">
                      <div class="row">
                        <div class="col-lg-12">
                          <ul class="post-tags">
                            <li><i class="fa fa-tags"></i></li>
                            <li><a href="#">Best Templates</a>,</li>
                            <li><a href="#">TemplateMo</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          @include('partials._sidebar')
        </div>
      </div>
    </div>
  </section>


@endsection

