@if(count($articles)>0)
@foreach($articles as $article)
<div class="post-preview">
  <a href="{{route('single', [$article->getCategory->slug,$article->slug]     )}}">
    <h2 class="post-title">
        <font color="black">
      {{$article->title}}
        </font>
    </h2>
    <img src="{{$article->image}}"/>
    <h3 class="post-subtitle">
        <font color="black">
      {!!str_limit($article->content,75)!!}
        </font>
    </h3>
  </a>
  <p class="post-meta"> Kategori:
      <a href="#"><font color="black">{{$article->getCategory->name}}</font></a>
    <span class= "float-right">{{$article->created_at->diffForHumans()}}</span ></p>
</div>
@if(!$loop->last)
<hr>
@endif
@endforeach
<div class="float-center">
  {{$articles->links()}}
</div>
@else

<div class="alert alert-danger">

  <h1>Bu Kategoriye Ait Yazı Bulunamadı</h1>
</div>
@endif
