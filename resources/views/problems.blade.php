<!DOCTYPE html>
@extends('layouts.master')
@section('title', 'modern-love')


@section('navbar')
    @parent
@endsection


@section('content')
<h2>Problems, omissions, methodology</h2>

<h3>Disclaimers</h3>

<p>No particular view of the relative causal strength of nature and nurture on sex is presented. (Though check <a href="https://en.wikipedia.org/wiki/Digit_ratio#Correlation_between_digit_ratio_and_traits">this mad business out!</a>)</p>

<p>To prevent multiplication of jargon and entities, the above variables are extensional: that is, they classify behaviour rather than identity. "Bisexual", "pansexual" and their many derivative schools are covered by the Kinsey scale, #1.</p>

<h3>Extra variables I haven't decided whether or how to include:</h3>
  <ul>
    <li>Monosexual vs bisexual.</li>
    <li>Intensity of <a href="http://blog.practicalethics.ox.ac.uk/2015/05/if-youre-a-conservative-im-not-your-friend/">ideological assortative mating</a>.</li>
    <li>Target gender archetype ("from exclusively men to exclusively women with androgynes in the middle") is a more personally informative way of obtaining 'an orientation', but obvs it misses out on a vast amount of social information: gay men and straight women differ enormously, and so on.</li>
    <li>Leaving out the model subject's own gender identity. This identity <i>certainly</i> has a profound effect on the resulting package deal you are likely to express, but it's still a distinct thing. Counter to <a href="http://geekfeminism.wikia.com/wiki/Intersectionality">one trendy idea</a>, it is not actually a sin to speak about one social identity at a time.</li>
    <li>Preference for conventional beauty: from wholly, happily indiscriminate to obsessively judgmental. It's not right to put this in "paraphilia", as the minimum value. Nor do I want to enrage anyone by calling it "fussiness"...</li>
    <li>Monogamy as distinct from jealousy. Possessiveness and reproductive pair-bond anxiety are obviously deeply related. But they are logically distinct, and some people are willing monogamists with a poly partner. The results of this voluntary, unstructured experiment are forthcoming.</li>
</ul>



<h3>Fluidity. </h3>
  <p>A very modern feature: people don't necessarily express the same sexuality over the course of their lives (or from day to day). One could perhaps model this as a dynamical system (that is, an animation), but that's beyond my WebGL skills atm. 'Fluid people are <a href="https://github.com/technicalities/modern-love/compare">very welcome to contribute</a>!</p>

<h3>Construct validity.</h3>
    Who says these seven variables are real? Who says they are the most important parts of modern love?

    <p>Studying any part of human experience entails a solid chance that what you're studying is imaginary. (Or rather, 'real, but more easily describable by delusions, habits and norms rather than direct molecular interactions'.) We call the measure of this risk <a href="https://en.wikipedia.org/wiki/Construct_validity">construct validity</a>, and it is important to ask whether the divisions presented here - sexuality and romance as seven or eight particular variables - reflect real quantities or just socially significant ones, and how much they explain, and all the manifold difficulties of real empirical work into messy and politicised human affairs.</p>

    <ol>
      <li>My first response is that ML attempts neither prediction or deep explanation of sexuality; rather, it's just for exploration of prima facie plausible axes. I suppose I will have to say it outright: I do not view this as a solution of all human sexuality.</li>

      <li>My second defence is that my instrument is not very '<a href="https://en.wikipedia.org/wiki/Theory-ladenness">theory-laden</a>': most of these tendencies and preferences are observable, and so the role of theory is happily limited.</li>

      <li>My joke defence is that I'm including a survey and look forward to doing a cluster analysis which proves that straight men aren't real. Next!</li>
    </ol>
@endsection
