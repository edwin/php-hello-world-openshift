<?PHP
$data = '{
"hello":"world to PHP on OCP"
}';
header('Content-Type: application/json');
echo $data;