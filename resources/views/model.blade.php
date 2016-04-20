<!DOCTYPE html>
@extends('layouts.master')
@section('title', 'modern-love')


@section('navbar')
    @parent
@endsection

{!! Html::style( asset('css/model.css')) !!}

@section('content')
<h2>A Model of Possible Romance</h2>
<ol>
  <li class="newQ">How important is sex to you?
  <table><tr>
      <td>"Never want any"</td>
      <td class="separrow">--></td>
      <td>"I cannot be happy without<br>having it every day."</td>
  </tr>
  <tr><td><i>Existing metrics</i>: the <a href="http://www.ncbi.nlm.nih.gov/pubmed/8880651">Sexual Desire Inventory</a>, a self-report questionnaire.</td></tr>
  </table>
  </li>

  <li class="newQ">How important is romance to you?
    <table><tr>
        <td>"Romantic attachments weigh me<br>down unbearably"</td>
          <td class="separrow">--></td>
          <td>"I cannot be happy until<br>I find my soulmate."</td>
    </tr>
    </table>
    <tr><td><i>Existing metrics</i>: </td></tr>
  </li>

  <li class="newQ">Which gender of people are you attracted to?
    <table><tr>
        <td>"Only the other kind."</td>
          <td class="separrow">--></td>
          <td>"Either is equally good"</td>
          <td class="separrow">--></td>
          <td>"Only the same as myself."</td>
    </tr>
    <tr><td><i>Existing metrics</i>: This is the <a href="https://en.wikipedia.org/wiki/Kinsey_scale">Kinsey Scale</a>.</td></tr>
    </table>
  </li>

  <li class="newQ">How many partners would you want?
    <table><tr>
        <td>"One and only one."</td>
          <td class="separrow">--></td>
          <td>"As many as I can."</td>
    </tr>
    <tr><td><i>Existing metrics</i>: .</td></tr>
    </table>
  </li>

  <li class="newQ">How exclusive do you expect your relationships to be?
    <table><tr>
        <td>"Promiscuity by my partner<br>disgusts me."</td>
          <td class="separrow">--></td>
          <td>"Possessiveness over partners<br>disgusts me."</td>
    </tr>
    <tr><td><i>Existing metrics</i>: .</td></tr>
    </table>
  </li>

  <li class="newQ">How atypical are the things you find attractive?
    <table><tr>
        <td>"Not at all.<br>Just the sex organs"</td>
          <td class="separrow">--></td>
          <td>"I am <a href="https://en.wikipedia.org/wiki/Armin_Meiwes">Armin Meiwes</a>"</td>
    </tr>
    <tr><td><i>Existing metrics</i>: .</td></tr>
    </table>
  </li>

  <li class="newQ">How important is having children to you?
    <table><tr>
        <td>"It will never happen."</td>
          <td class="separrow">--></td>
          <td>"It is my main life goal."</td>
    </tr>
    <tr><td><i>Existing metrics</i>: .</td></tr>
    </table>
  </li>
</ol>
</p>

<p style="padding-top:30px">Some justification for this can be <a href="{{ url('/about') }}">found here</a>, while criticism of this approach and its parameters <a href="{{ url('/soproblematic') }}">is here</a>.</p>

@endsection
