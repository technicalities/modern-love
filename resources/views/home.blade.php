<!DOCTYPE html>
@extends('layouts.master')
@section('title', 'modern-love')


@section('navbar')
    @parent
@endsection

@section('content')
<script src="{{ asset('js/sliders.js') }}"></script>

<h3>A tool for orienting orientations.</h3> At the moment there's only a string representation, but I have  <a href="{{ url('/about') }}">great plans</a>.
<div id="sliderBlock">
  <div class="axis">Physical intensity: from totally asexual to hypersexual
    <input type="range" class="slider" id="physicality" min="0" max="100" />
  </div>

  <div class="axis">Romantic intensity: from totally aromantic to Soulmatism
    <input type="range" class="slider" id="romance" min="0" max="100" />
  </div>

  <div class="axis">Gender orientation: from exclusively other-gender to exclusively same-gender.
    <input type="range" class="slider" id="orientation" min="0" max="100" />
  </div>

  <div class="axis">Synchronic count: from only monogamy to only polyamory
    <input type="range" class="slider" class="slider" id="synchrony" min="0" max="100" />
  </div>

  <div class="axis">Exclusivity: possession to total transience.
    <input type="range" class="slider" id="exclusivity" min="0" max="100" />
  </div>

  <div class="axis">Paraphilia: from puritanism to {Armin Meiwes}
    <input type="range" class="slider" id="paraphilia" min="0" max="100" />
  </div>

  <div class="axis">Natalism: from sterilisation to Quiverfull
    <input type="range" class="slider" id="natalism" min="0" max="100" />
  </div>
</div>
  <table id="modstring"><tr>
    P<span class="output" id="physVal">0</span>
    R<span class="output" id="romVal">0</span>
    O<span class="output" id="orienVal">0</span>
    S<span class="output" id="syncVal">0</span>
    E<span class="output" id="excluVal">0</span>
    K<span class="output" id="paraVal">0</span>
    N<span class="output" id="natVal">0</span>
    <tr>
  </table>

@endsection
