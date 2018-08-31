<?php
require_once './vendor/autoload.php';

//class PdoCollection implements \VersatileCollections\StrictlyTypedCollectionInterface {
//    
//    use \VersatileCollections\StrictlyTypedCollectionInterfaceImplementationTrait;
//    
//    public function __construct(\PDO ...$arr_objs) {
//                
//        $this->versatile_collections_items = $arr_objs;
//    }
//    
//    /**
//     * 
//     * @return bool true if $item is of the expected type, else false
//     * 
//     */
//    public function checkType($item) {
//        
//        return ($item instanceof \PDO);
//    }
//    
//    /**
//     * 
//     * @return string|array a string or array of strings of type name(s) 
//     *                      for items acceptable in instances of this 
//     *                      collection class
//     * 
//     */
//    public function getType() {
//        
//        return \PDO::class;
//    }
//}
//
//$collection = \PdoCollection::makeNew();
//$collection->item1 = new \PDO(
//                        'sqlite::memory:', 
//                        null, 
//                        null, 
//                        [
//                            PDO::ATTR_PERSISTENT => true, 
//                            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
//                        ]
//                    );;
//$collection->item2 = new \PDO(
//                        'sqlite::memory:', 
//                        null, 
//                        null, 
//                        [
//                            PDO::ATTR_PERSISTENT => true, 
//                            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
//                        ]
//                    );;
//$collection->item3 = new \PDO(
//                        'sqlite::memory:', 
//                        null, 
//                        null, 
//                        [
//                            PDO::ATTR_PERSISTENT => true, 
//                            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
//                        ]
//                    );

// items to be stored in your collection
//$item1 = ['yabadoo'];                        // an array
//$item2 = function(){ echo 'Hello World!'; }; // a callable
//$item3 = 777.888;                            // a float
//$item4 = 777;                                // an int
//$item5 = new \stdClass();                    // an object
//$item6 = new \ArrayObject([]);               // another object
//$item7 = tmpfile();                          // a resource
//$item8 = true;                               // a boolean
//$item9 = "true";                             // a string
//
//// Technique 1: pass the items to the constructor of the collection class
//$collection = new \VersatileCollections\GenericCollection(
//    $item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8, $item9
//);
//
//// Technique 2: pass the items in an array using argument unpacking
////              to the constructor of the collection class
//$collection = new \VersatileCollections\GenericCollection(
//    ...[$item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8, $item9]
//);
//
//// Technique 3: pass the items in an array to the static makeNew helper method
////              available in all collection classes
//$collection = \VersatileCollections\GenericCollection::makeNew(
//    [$item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8, $item9]
//);
//
//// Technique 4: create an empty collection object and subsequently add each
////              item to the collection via array assignment syntax or object
////              property assignment syntax or using the appendItem($item), 
////              prependItem($item, $key=null), push($item) or put($key, $value)
////              methods
//$collection = new \VersatileCollections\GenericCollection(); // empty collection
//// OR
//$collection = \VersatileCollections\GenericCollection::makeNew(); // empty collection
//
//$collection[] = $item1; // array assignment syntax without key
//                        // the item is automatically assigned
//                        // the next available integer key. In
//                        // this case 0
//
//$collection[] = $item2; // array assignment syntax without key
//                        // the next available integer key in this
//                        // case is 1
//
//$collection['some_key'] = $item3; // array assignment syntax with specified key `some_key`
//
//$collection->some_key = $item4; // object property assignment syntax with specified property
//                                // `some_key`. This will update $collection['some_key']
//                                // changing its value from $item3 to $item4
//
//$collection->appendItem($item3)  // same effect as:
//           ->appendItem($item5); //     $collection[] = $item3;
//                                 //     $collection[] = $item5;
//                                 // Adds an item to the end of the collection    
//                                 // You can chain the method calls
//
//$collection->prependItem($item6, 'new_key'); // adds an item with the optional
//                                             // specified key to the front of
//                                             // collection.
//                                             // You can chain the method calls
//
//$collection->push($item7);  // same effect as:
//                            //     $collection[] = $item7;
//                            // Adds an item to the end of the collection    
//                            // You can chain the method calls
//
//$collection->put('eight_item', $item8)  // same effect as:
//           ->put('ninth_item', $item9); //     $collection['eight_item'] = $item8;
//                                        //     $collection['ninth_item'] = $item9;
//                                        // Adds an item with the specified key to 
//                                        // the collection. If the specified key
//                                        // already exists in the collection the
//                                        // item previously associated with the 
//                                        // key is overwritten with the new item.    
//                                        // You can chain the method calls
//
//echo \VersatileCollections\var_to_string($collection);


//class Boo {
//    
//    public $property1 = 'boo';
//    protected $property2 = 'boo 2';
//    private $property3 = 'boo 3';
//    
//    public function __construct() {
//        ;
//    }
//    
//    public function boo($param) {
//        
//        return 'boo00';
//    }
//    
//    public function boo1($param) {
//        
//        echo 'boo00';
//    }
//    
//    protected function boo2($param) {
//        
//        return 'boo2';
//    }
//    
//    protected function boo21($param) {
//        
//        echo 'boo21';
//    }
//    
//    private function boo3($param) {
//        
//        return 'boo3';
//    }
//    
//    private function boo31($param) {
//        
//        echo 'boo31';
//    }
//}
//
//class Boo2 {
//
//}
//function dismount($object) {
//    
//    $reflectionClass = new \ReflectionClass(get_class($object));
//    
//    $array = [];
//    
//    foreach ($reflectionClass->getProperties() as $property) {
//        
//        $property->setAccessible(true);
//        $array[$property->getName()] = $property->getValue($object);
//        $property->setAccessible(false);
//    }
//    
//    return $array;
//}

//$boo = new \Boo();
//
////var_dump(get_object_vars( new Boo2() ));
////var_dump(get_object_vars( $boo ));exit;
////var_dump(\VersatileCollections\get_object_property_value($boo, 'property3'));
//var_dump($boo->property1);
//$boo->property4 = 'yay';
//var_dump($boo);
//unset($boo->property4);
//var_dump($boo);exit;
//var_dump(((array)$boo));
//var_dump(dismount($boo));
//var_dump(json_decode(json_encode($boo, JSON_FORCE_OBJECT), true)); exit;
//var_dump(isset($boo->property4));
//var_dump(array_key_exists('property4', json_decode(json_encode($boo, JSON_FORCE_OBJECT), true)));
//// defined properties and possible dynamically assigned undefined properties
//var_dump(
//    array_merge(
//       dismount($boo),
//       json_decode(json_encode($boo, JSON_FORCE_OBJECT), true)
//    )    
//);exit;

//echo var_export($collection->toArray(), true);
//echo VersatileCollections\var_to_string($collection->toArray());

    $data = [];
    $data['item1'] = ['name'=>'Joe', 'age'=>'10',];
    $data['item2'] = ['name'=>'Jane', 'age'=>'20',];
    $data['item3'] = ['name'=>'Janice', 'age'=>'30',];

    $collection = \VersatileCollections\GenericCollection::makeNew($data);
    echo VersatileCollections\var_to_string($collection->toArray()).PHP_EOL.PHP_EOL;
    // Keys preserved and $collection contains:
    //  [
    //      'item1' => [ 'name'=>'Joe', 'age'=>'10' ],
    //      'item2' => [ 'name'=>'Jane', 'age' => '20' ],
    //      'item3' => [ 'name' => 'Janice', 'age' => '30' ]
    //  ]
    
    $collection = \VersatileCollections\GenericCollection::makeNew($data, false);
    echo VersatileCollections\var_to_string($collection->toArray()).PHP_EOL.PHP_EOL;
    // Keys not preserved and $collection contains:
    //  [
    //      0 => [ 'name'=>'Joe', 'age'=>'10' ],
    //      1 => [ 'name'=>'Jane', 'age' => '20' ],
    //      2 => [ 'name' => 'Janice', 'age' => '30' ]
    //  ]



function extractNamesFromMethodsCollection(\VersatileCollections\CollectionInterface $collection) {
    
    $string_collection = \VersatileCollections\StringsCollection::makeNew();

    foreach ($collection as $item) {

        $new_item = $item->getName();
        $new_item .= $item->isPrivate()? " [private]" : '';
        $new_item .= $item->isProtected()? " [protected]" : '';
        $new_item .= $item->isPublic()? " [public]" : '';
        $new_item .= $item->isStatic()? " [static]" : '';
        
        $string_collection[] = $new_item;
    }

    return $string_collection;
}

$class = new \ReflectionClass(\VersatileCollections\CollectionInterface::class);
$methods = $class->getMethods();
$methods_collection = \VersatileCollections\ObjectsCollection::makeNew($methods);

$interface_method_names_collection = $methods_collection->pipeAndReturnCallbackResult(
    function(\VersatileCollections\CollectionInterface $collection) {

        return extractNamesFromMethodsCollection($collection);
    }
)->sortMe();

$class = new \ReflectionClass(\VersatileCollections\CollectionInterfaceImplementationTrait::class);
$trait_methods = $class->getMethods();
$trait_methods_collection = \VersatileCollections\ObjectsCollection::makeNew($trait_methods);

$trait_methods_collection->pipeAndReturnCallbackResult(
    function(\VersatileCollections\CollectionInterface $collection) {

        return extractNamesFromMethodsCollection($collection);
    }
)
->sortMe()
->each(
    function($key, $item) use ($interface_method_names_collection) {
        
        if( !$interface_method_names_collection->containsItem($item) ) {
            
            echo $item.PHP_EOL;
        }
    }
);