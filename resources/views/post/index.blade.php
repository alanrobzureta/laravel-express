@extends('template')

@section('title')
   Conteudo
@endsection

@section('content')
   <h1>{{$post}}</h1>

   <fieldset>
      <legend></legend>
      <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt augue vel cursus vehicula. Curabitur elementum luctus tempor. Proin sollicitudin nulla orci, ut ultrices sapien porttitor id. Nulla facilisi. Integer sodales libero tempor, scelerisque tortor eu, pellentesque mauris. Etiam nec eros tristique, elementum purus non, lobortis dui. Nam sit amet bibendum turpis, sit amet posuere mauris. Integer feugiat pulvinar magna, et aliquam velit feugiat eu. Aenean pretium commodo erat. Vestibulum venenatis a magna eu feugiat. Vivamus purus velit, blandit eu pellentesque eget, ultricies sed ligula. Nulla rhoncus enim quis libero posuere scelerisque.

      Aliquam erat volutpat. Morbi lobortis, erat quis commodo convallis, purus est aliquet velit, sed facilisis dolor libero nec libero. Aliquam vel tincidunt diam, sed pretium lectus. Vivamus luctus, nisl nec accumsan mattis, elit turpis ultrices augue, nec ultrices nulla orci non nisl. Donec at velit non dolor auctor interdum sit amet molestie lacus. Maecenas ligula augue, iaculis pretium arcu at, dapibus posuere nisi. Ut eget luctus turpis. Vivamus lectus lorem, egestas scelerisque justo nec, efficitur convallis leo. Vestibulum porttitor sit amet sem vel tempor. Fusce nec massa elementum, blandit mauris sed, molestie sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec nec fermentum mauris. Curabitur congue lacinia metus, vitae dictum est placerat eget. Integer at magna vitae mauris molestie tristique. Ut cursus, ante eu finibus pellentesque, odio justo feugiat ante, rutrum rutrum odio ipsum in erat. Curabitur at justo id nibh consequat consectetur.</h5>
   </fieldset>
   <ul>
      @foreach($comments as $comment)
         <li>{{$comment}}</li>
      @endforeach
   </ul>

@stop

