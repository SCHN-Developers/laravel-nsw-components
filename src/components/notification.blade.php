@props(['type' => 'info', 'icon', 'title'])

<div class="nsw-in-page-note nsw-in-page-note--{{ $type }}">
  <span class="material-icons nsw-material-icons nsw-in-page-note__icon" focusable="false" aria-hidden="true">{{$icon}}</span>
  <div class="nsw-in-page-note__content">
    <h4>{{$title}}</h4>
   {{$slot}}
  </div>
</div>
