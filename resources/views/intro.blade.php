<!DOCTYPE html>
@extends('layouts.master')
@section('title', 'modern-love')


@section('navbar')
    @parent
@endsection

{{-- <script src="{{ elixir('js/sliders.js') }}"></script> --}}


@section('content')
<div class="content">
  <div id="epigram">There are two [kinds] of people in the world; those who constantly divide the people of the world into two kinds, and those who do not.
    - <a href="http://quoteinvestigator.com/2014/02/07/two-classes/">Robert Benchley</a></div>
  </div>

    <div class="axis">Physical intensity: from totally asexual to hypersexual
      <input type="range" id="physicality" min="0" max="100" />
      Physicality: <span id="physVal">0</span>
    </div>

    <div class="axis">Romantic intensity: from totally aromantic to Soulmatism
    <input type="range" id="romance" min="0" max="100" />
      Romance: <span id="romVal">0</span>

    <div class="axis">Gender orientation: from exclusively same-gender to exclusively other-gender.
    <input type="range" id="orientation" min="0" max="100" />
      Orientation: <span id="orienVal">0</span>

    <div class="axis">Synchronic count: from only monogamy to only polyamory
    <input type="range" id="synchrony" min="0" max="100" />
      Synchrony: <span id="syncVal">0</span>

    <div class="axis">Exclusivity: neurotically exclusive to totally transient.
    <input type="range" id="exclusivity" min="0" max="100" />
      Exclusivity: <span id="excluVal">0</span>

    <div class="axis">Paraphilia: from procreation-only puritanism to {Armin Meiwes}
    <input type="range" id="paraphilia" min="0" max="100" />
      Kink: <span id="paraVal">0</span>

    <div class="axis">Natalism: from voluntary sterilisation to Quiverfull maximisation
    <input type="range" id="natalism" min="0" max="100" />
      Parenthood: <span id="natVal">0</span>

    <button>Generate modstring.</button>
@endsection
