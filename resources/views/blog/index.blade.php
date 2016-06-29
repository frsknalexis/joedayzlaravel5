@extends('blog.layout.base')
@section('contenido')
<div class="row">
	<div class="col-lg-8">
		@foreach($data as $post)
			<section>
				<h1>{{$post->titulo}}</h1>
				<p class="">Fecha de creacion: <strong class="btn btn-info">{{Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i')}}</strong> | Autor: <strong class="btn btn-warning">{{ $post->creador }}</strong> </p>
				<p>{{$post->contenido}}</p>
				<p>Tags: <a href="#" class="btn btn-primary">{{$post->tag}}</a></p>
				<hr>
			</section>
		@endforeach    
	</div>
	<div class="col-lg-4">
		<h4>Tags:</h4>
		<ul class="list-inline lista_tags">	
			@foreach($arTags as $tag)
				<li><a href="#" class="btn btn-primary">{{$tag['nombre']}}</a></li>
			@endforeach
		</ul>
		<div class="row">
			<h4>Posts Recientes</h4>
			<div class="col-lg-12">
				@foreach($arRecientes as $post)
					<section>
						<h1>{{$post->titulo}}</h1>
						<p>{{$post->contenido}}</p>
						<div class="row">
							<div class="col-lg-6"><strong class="btn btn-info">{{Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</strong></div>
							
							<div class="col-lg-6"><strong class="btn btn-warning">{{ $post->creador }}</strong></div>
						</div>
						<hr>
					</section>
				@endforeach 				
			</div>
		</div>
	</div>
</div>
@stop
