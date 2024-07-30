<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $post)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic" style="height: 280px;">
                            <img src="{{ asset('storage/' . $post->image)}}" style="object-fit: cover" height="100%" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> {{ $post->created_at }}</li>
                            </ul>
                            <h5><a href="{{ route('home.blog-details', ["id" => $post->id]) }}">{{ $post->title }}</a></h5>
                            <p>{{ $post->description }}  </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>