<?php
require("common-functions.php");
$author = "Stefano Carlesso";
$en_title = "Activities of year 2013";
$it_title = "Attivitá dell'anno 2013";
$en_content = <<<EN_CONTENT
<h1>Activities of year 2013</h1>
<p>In the past few months (jan to may 2013) I've been working on these
personal projects.</p>
<h2>Exam</h2>
<p>January: exam as Electrician at SIAM1938</p>
<h2>Improving my English</h2>
<p>jan-june   English exercise with</p>
<ol>
  <li>Prof. Freudenstein's <cite>Intensive language course</cite> book and CDs. </li>
  <li><cite>SpeakUp</cite>: easy, every article is classified by CEFR Levels and type of accent</li>
  <li>Il Sole 24 Ore's <cite>English 24</cite>: corporate-oriented, some part funny, some tracks of CD miss the
  corresponding printed part, which is good,  in my opinion, as you need to concentrate on listening or you won't
  understand anything</li>
  <li>BBC's awesome <cite>Rough Science</cite>.</li>
  <li>Some Hollywood's movies, with subtitles.</li>
  <li>I joined an English class at OxfordCentre school in Milan.</li>
  <li><cite>Extr@</cite> is a good tv series produced by RAI (Italy) and Channel 4 (UK) for teaching purpose. Funny.</li>
</ol>
<h2>Learning electricity theory</h2>
<p>February-present.  I'm trying to learn the basis of Electrotechnics (aka Electrical Engineering) and Analog Electronics. </p>
<p>A lot of wasted time going from one bad book to one worse. The problem with books on the subjet is that
there are different books for different audience, different ways of teaching the subject...</p>
<p>These are the sources of information I checked out.</p>
<ol>
<li>Basic Physics book, for Secondary School and University introductory classes. Electricity is explained as part of a whole world of phenomena,
which is good. The problem is that they tend to explain only simple cases, and real devices are more complicated.</li>
<li>Electrotechnics books for Technical schools. They explain real devices, but sometimes there are too few explanations.</li>
<li>Electrician books. They don't deal much with the principles, because their goal is to teach you how to install civil or industrial
electrical systems.</li>
<li>Do It Yourself books. They have what is missing in most of the other categories: projects of things you can actually craft.</li>
<li>Websites some are good in examples and project schematics, but with the theory, there are many chances of reading wrong things.</li>
</ol>
<p>The <strong>problem was solved</strong> when I find and bought a book by Conte, Ceserani et Impallomeni,
<cite>Corso di Elettrotecnica ed Elettronica</cite>. A good book, belonging to the second group.</p>
<h2>Practical electronics and repair</h2>
<ul>
  <li>Better soldering with better equipment</li>
  <li>repair a steam iron</li>
  <li>some simple repair of vintage radio receivers (80s 90s)</li>
  <li>learning some techniques to improve my perfboards using EDA (Electronic Design Automation)</li>
  <li>small electrician works</li>
</ul>
<h2>Fonts</h2>
<p>A bit of study. Started a simple font project:
<ul>
  <li>I've a long history of bad hand writing and at the same time, the need of writing science and tech in a clear way. So I observed
  a lot the shape of gliphs </li>
  <li>using Fontforge and Fontmatrix</li>
  <li>picking the best ideas from others, check if this is fair</li>
  <li>Easy to distinguish 1lI|0O</li>
  <li>almost sans-serif</li>
  <li>proportional</li>
</ul>
<h2>Misc computer related</h2>
<p>My Linux computer</p>
<ol>
  <li>New partition scheme. Now I follow a KISS (Keep It Simple, Stupid!) method, with root and swap partition on one disk and home
  partition on another. No usr nor var partitions.</li>
  <li>As a consequence, new file and folder organization. I use simlinks more and more (so simple and effective!)</li>
  <li>New backup method, with BackInTime, which has the advantages of both a copy-and-paste method (immediate accessibility to your data)
  and  incremental method.</li>
  <li>New Debian installation (at last, Wheezy 7.0!).</li>
</ol>
EN_CONTENT;
$it_content = $en_content;
require_once("template.php");
?>
