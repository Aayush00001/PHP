<?php
class base{
    final public const X="foo";
}
class child extends base{
    public const X="bar";
}
//fatal error:child :: x cannot overrieide final consatant base::x
?>