<!DOCTYPE html>
@extends('layouts.master')
@section('title', 'modern-love')


@section('navbar')
    @parent
@endsection

{!! Html::style( asset('css/about.css')) !!}

@section('content')

<div id="epigram">There are two [kinds] of people in the world; those who constantly divide the people of the world into two kinds, and those who do not. (<a href="http://quoteinvestigator.com/2014/02/07/two-classes/">Robert Benchley</a>)</div>

<p>This site is, or will be, a visual guide to the modern explosion of conceivable romantic and sexual identities. Before, popularly, there was a simple dichotomy between straight and gay. Now, there are many continuous grades along many different lines - including not expressing any at all.
</p>

<p>This is very exciting for everyone! It doesn't matter if, like me, your apparently honest preferences are actually quite near to the old package deal; we all benefit from the end of unreflective and unfree sex - even if we subsequently remain much the same. Choice dignifies (or, in the <a href="https://en.wikipedia.org/wiki/Biology_and_sexual_orientation">hypothesised</a> absence of choice, insight does).</p>

<p>But it is hard to think clearly about these things. I find it helpful to see sex as a high-dimensionality space which suddenly has a half a dozen <a href="https://en.wikipedia.org/wiki/Degrees_of_freedom_%28statistics%29">degrees of freedom</a>. Luckily, even things like these can be represented very intuitively with graphics. Many people dislike being measured; many more dislike labels. But in my experience, humans like pictures and need words.</p>

<h3>Planned Features</h3>

    <ol>
      <li>A breakdown into seven+ continuous sliders.</li>
    Rotatable 3D graph of any three at once.</li>
    Maybe best to have a comic diagram of stick figures as well. WebGL project #1.</li>
    Outputs the current academic and tumblr jargon for the triangulation.</li>
    Also demographics, including legal discrimination around the world.</li>
    A string representation of your settings, a la the <a href="https://en.wikipedia.org/wiki/Geek_Code">Geek Code</a>.</li>
    Option to post your (anonymous!) data for a long-term survey into the diffusion of these ideas.</li>
    <li>Take Questionnaire / Skip to data (Typeformesque)</li>
    <li>A string representation of your settings.</li>
    <li>Graphing any 3 of the seven dimensions.</li>
    <li>Animations!</li>
    <li>Allowing dynamic identities to be represented.</li>

    <br>LATER<br><br>
    <li>Estimate compatibility given two modstrings with confidence levels (and gender, obviously).</li>
    <li>Checkbox: "I don't like numbers".</li>
    <li>Add confidence levels for each variable. (Makes each axis 2D.)</li>
    <li>Function for getting graph output from modstring input.</li>
    <li>Empirical backing. (Who has open data? OKCupid research?) </li>
    </ol>

<h3>Why model romance?</h3>

For a long time, sex and love followed a strict script. If you wanted to avoid spontaneous violence and life-long ostracision, you lived according to that script. The package varied over the years, but a recent form was: "find and love one person of the opposite gender and have sex with only them; live and breed with them forever; if you don't like sex then you are defective; if you find anything except genitals erotic then you are defective".

A mass of brave people are to thank for this unprecedented latitude: mostly feminists and hippies and queers. However, the academic forms that have grown on these movements are by and large totally unreadable. So you're stuck trying to sift the blogosphere of the predominating useless noise looking for well-written, rigorous signal.

The options are actually never binary, and most of us find it hard to think about spectrums. Here is a visual approach.
<br><br><ul>
<li>For understanding. The new options are confusing at first, and unfamiliar, and existing guides are full of jargon.</li>
<li>For exploration. Emphasise the breadth of the possible space.</li>
<li>For communication. Could plausibly prevent emotional damage if we were clearer with each other about what we need. Actual measures of compatibility are covered, dubiously, elsewhere.</li>
<li>For Science! I will eventually implement an (optional!) survey in order to get a regional and gender and age-based map of the modern world.</li>
<li>I want to learn WebGL.  </li>
</ul>


<p>At the moment there are seven variables in <a href="{{ url('/model') }}">the site's model of romance</a> (see <a href="{{ url('/soproblematic') }}">the Problems page</a> for admissions of inadequacy as well as ideas for future depth and rigour): Libido, romantic intensity, orientation, synchrony, exclusivity, paraphilia, and natalism.</p>

<p>(I <i>like</i> naming concepts - but I'm aware that it's foolish to counter jargon with more Latinate neologisms; the final version will expand these into full questions: e.g. "To what degree are you?" and present intuitive sliders.)</p>


@endsection
