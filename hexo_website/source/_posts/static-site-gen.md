---
title: Static site generators
date: 2016-11-05
tags:
  - development
  - web
---

# Static site generators

## Phpoole in a hurry

[Phpoole](http://phpoole.org) is a static site generator, written in PHP, by Arnaud Ligny.

This text is based on the official documentation for Phpoole and Twig. It is not meant to replace them, just to give you a guide for beginners like me.

An additional benefit is that Twig and YAML are used in many other static generators written in PHP.

I assume you have access to a bash shell and know what $PATH is.

The emphasized text is for terms that have a particular meaning in Phpoole parlance (easier than you think!).

Install Phpoole. You just need to download it in a directory that is in your $PATH. For example.

```
cd ~/bin
wget http://phpoole.org/phpoole.phar
mv phpoole.phar phpoole
chmod +x phpoole
```

Now you can execute Phpoole just entering `phpoole` at a shell.

Create a directory (say `$proj`) to hold your new web project.

Create a new site with

```
cd $proj
phpoole new
```

The source of the site is made of:

<table>
  <thead>
    <tr>
    <th>file type?</th>
    <th>what for?</th>
    <th>where in the directory hierarchy?</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td rowspan="3">Markdown documents (markup language)</td>
      <td rowspan="3">content</td>
      <td rowspan="1">each markdown document is called a <em>Page</em>; <em>Pages</em> are in <code>$proj/content</code> </td>
    </tr>
    <tr>
      <td>Directory</td>
      <td>define a <em>Section</em> of the site (for example a section can be Blog, another MyProjects)</td>
      <td>in <code>$proj/content</code></td>
    </tr>
    <tr>
      <td>in particular you write your content in the <em>body</em> of each <em>Page</em> using Markdown language</td>
    </tr>
    <tr><td>they can be organized into directories that become the <em>Sections</em> ; </td></tr>
    <tr>
      <td rowspan="2">YAML (<a href="#serialization">serialization format</a>)</td>
      <td rowspan="2">define variables</td>
      <td rowspan="1">site-wide variables are in <code>$proj/phpoole.yml</code></td>
    </tr>
    <tr>
    <td rowspan="1">page-wide variables can be defined in each <em>Page</em>, in a zone called <em>front matter</em> (it is at the beginning of the file; a line with three dashes begings the <em>front-matter</em>; another line with only three dashes ends it)</td>
    </tr>
    <tr>
      <td rowspan="4"><a href="http://twig.sensiolabs.org/">Twig</a> templates</td>
      <td rowspan="4">layout; basically it is HTML, but instead of content there are variables to be replaced as needed</td>
      <td rowspan="1">for the <em>homepage node type</em> () <code>$proj/layouts/index.html.twig</code></td>
    </tr>
    <tr>
      <td>for the <em>page node type</em> () <code>$proj/layouts/default/page.html.twig</code></td>
    </tr>
    <tr>
      <td>for the <em>list node type</em> (a <em>Section</em>) <code>$proj/layouts/default/list.html.twig</code></td>
    </tr>
    <tr>
      <td><code>$proj/layouts/default/page.html.twig</code></td>
    </tr>
    <tr>
      <td rowspan="1">CSS</td>
      <td rowspan="1">make it look good</td>
      <td rowspan="1">put your CSS in the <code>$proj/static</code> directory.</td>
    </tr>
  </tbody>
</table>

Add your stuff.

Build the site with `phpoole build`. The static site is created, by default, into `$proj/_site`. You can then copy the contendt of this directory to you production server.

<aside>

<dl> <!--Description List-->
  <dt><!--Description Term aka the term to be defined-->lexer</dt>
  <dd><!--Description Definition aka the explanation-->
  lexical analyzer, a computer program that performs lexical analysis
  </dd>
  <dt>parser</dt><dd>a computer program that parses.</dd>
  <dt>to parse</dt>
  <dd>to split an input (e.g. a file) <!--from latin exempli gratia--> into pieces of data that can be easily manipulated.</dd>
  <dt><a id="serialization">Serialization format</a></dt>
  <dd>
   a computer language designed to store  data structures (wich are typical of programming languages) on disk. A widely-used format is <abbr title="JavaScript Object Notation">JSON</abbr>; another one, <a href="www.yaml.org/spec/1.2/spec.html"><abbr title="YAML Ain’t Markup Language">YAML</abbr></a>, is even more readable; also <abbr title="eXtensible Markup Language">XML</abbr> has been used for this purpose.</dd>
</dl>

<aside>Wiktionary and Wikipedia was used extensively during the writing of this document.</aside>
