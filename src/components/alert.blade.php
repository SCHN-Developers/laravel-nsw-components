@props(['type' => 'info', 'icon', 'title'])

<div class="nsw-in-page-alert nsw-in-page-alert--{{ $type }}">
  <span class="material-icons nsw-material-icons nsw-in-page-alert__icon" focusable="false" aria-hidden="true">{{$icon}}</span>
  <div class="nsw-in-page-alert__content">
    <h4>{{$title}}</h4>
   {{$slot}}
  </div>
</div>
