
url = 'http://api.statbank.dk/v1/data/folk1c/JSONSTAT?valuePresentation=Default&Tid=*';
urlnew = 'data.json';
a = [];


var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
        var jsonData = JSON.parse(xhr.responseText);
        obj(jsonData);
    }
};

xhr.open("GET", url, true);
xhr.send();


var createNewJson(obj, a, urlnew);

//make new JSON with as value pair index:value
function createNewJson($o, &$a, &$urlnew) {
    $k = '';
    $i = 0;
    foreach($o->dataset->value as $x) {
        $nml = (array)($o->dataset->dimension->Tid->category->index);
        foreach($nml as $key => $value) {
            if ($value === $i) {
                $k = $key;
            }
        }
        $aa = array('label' => $k, 'population' => $x);
        array_push($a, $aa);
        $i++;
    }
    $json = json_encode($a); // array of objects to JSON
    file_put_contents($urlnew, $json); //save new JSON to file data,json
}