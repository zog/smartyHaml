<!DOCTYPE html>
<head>
  <style>
    /* line 1, (__TEMPLATE__) */
    body {
      background: rgba(0, 40, 255, 0.2);
      color: white;
      font-family: Helvetica, Arial;
      margin: auto;
      width: 500px;
      border-left: 1px solid rgba(0, 40, 255, 0.4);
      border-right: 1px solid rgba(0, 40, 255, 0.4);
      padding: 10px 100px;
      min-height: 100%; }
    
    /* line 12, (__TEMPLATE__) */
    footer {
      font-size: 0.8em;
      margin-top: 30px;
      padding-top: 10px;
      text-align: right;
      border-top: 1px solid rgba(0, 40, 255, 0.1); }
    
    /* line 19, (__TEMPLATE__) */
    html {
      height: 100%; }
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
  <footer>
    brought to you with love by @zog
  </footer>
</body>
