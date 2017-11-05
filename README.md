# studio

require_once 'vendor/autoload.php';

use Project\Test as carro;

$a = new carro("troller");
print $a->getname();

$b = new \Project\test("troller");
print $b->getname()
