<!DOCTYPE html>
<head>
  <style>
    /* line 1, (__TEMPLATE__) */
    body {
      background: blue;
      color: white; }
  </style>
</head>
<body>
  <h1>{$title}</h1>
  COUCOU
  <h2>foo</h2>
  <ul>
    {foreach $foo as $bar}
      <li>
        {$bar}
      </li>
    {foreachelse}
      $foo est vide
    {/foreach}
  </ul>
  <h2>baz</h2>
  <ul>
    {foreach $baz as $bar}
      <li>
        {$bar}
      </li>
    {foreachelse}
      $baz est vide
    {/foreach}
  </ul>
  <h2>pouet</h2>
  <ul>
    {foreach $pouet as $bar}
      <li>
        {$bar}
      </li>
    {foreachelse}
      $pouet est vide
    {/foreach}
  </ul>
  {for $i=1 to 20 step 3}
    Number
    {$i}
    <br>
  {/for}
  <ul>
    {for $j=1 to 3}
      <li>{$foo[$j]|lower|escape:javascript}</li>
    {/for}
  </ul>
</body>
