<pre>
{noparse}{$test}{/noparse} = {$test}
{noparse}{$secondTest}{/noparse} = {$secondTest}

<a href="/example,1?a=first">1</a>, <a href="/example,2?a=your-value-here">2</a>, <a href="/example,zzz?a=third">zzz (invalid value - will raise a validation error)</a>, <a href="/example,2?b=invalid">invalid value, with handled exception</a>

Parameters:
    <b>testParameter: </b> {$testParameter} (Validated with regexp: [0-9] - validation of routing params could be handled in Request class and in routing specification - in controller.yml)
    <b>a:</b> {$thisIsALikeAnAnarchy} (any character)
    <b>b:</b> {$bValue}

If you don't like RainTPL4 syntax you could easily implement a interface that could connect every templating engine.
</pre>