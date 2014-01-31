Haml 2 Smarty
============

Introduction
------------

This project aims at automating the creation of smarty templates using Haml.

What You'll need
------------

You'll need the current tools:

+ grunt
+ middleman
+ haml

How it works
-----------

Haml files are processed through custom script to convert customs syntaxs to haml-friendly ones, then to smarty. Middleman is in charge of compiling the haml, providing all of its helpers.

For example,
> = $foo

will be converted into
> = "{$foo}"

so that it's haml compliant, and will be resolved into
> {$foo}

which is a smarty instruction

### Custom syntaxes
We introduce these new elements into haml syntax:

#### Foreach
> %foreach{:array => :var}

> &nbsp;&nbsp;...


this will result in
> {foreach $array as $var}

> &nbsp;&nbsp;...

> {/foreach}

In the same way, you can also use the
> %foreachelse

#### For
> %for{i: [1..20], step: 3}

> &nbsp;&nbsp;...

this will result in
> {for $i=1 to 20 step 3}

> &nbsp;&nbsp;...

> {/for}

Note that the step is optional

#### Smarty vars
> = $foo

will compile into
> {$foo}

### What files should I edit ?

The files that you might wanna change are located in the following directories:

+ _haml, haml/layouts_

    Here are the haml files that will be compiled into smarty templates

+ _source_

    In this folder, you'll find all the assets (css, image, js), as well as the php files which are in charge of setting smarty vars, and rendering smarty templates

+ _smarty/includes/smarty.php_

    The smarty config

### What files should I *NOT* edit ?

The files in the _smarty/templates_ folder are compiled from the HAML files. There's no point in editing them.


