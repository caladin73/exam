
<?php
class Classy {

    const      STAT = 'S' ; // no dollar sign for constants (they are always static)
    static     $stat = 'Static' ;
    public     $publ = 'Public' ;
    private    $priv = 'Private' ;
    protected  $prot = 'Protected' ;

    function __construct( ){  }

    public function showMe( ){
        print '<br> self::STAT: '  . self::STAT ; // refer to a (static) constant like this
        print '<br> self::$stat: ' . self::$stat ; // static variable
        print '<br>$this->stat: '  . $this->stat ; // legal, but not what you might think: empty result
        print '<br>$this->publ: '  . $this->publ ; // refer to an object variable like this
        print '<br>' ;
    }
}
$me = new Classy( ) ;
$me->showMe( ) ;

/* Produces this output:
self::STAT: S
self::$stat: Static
$this->stat:
$this->publ: Public
*/
?>