<?php
$styles = ['default' => 'body {
            font-family: "DejaVu Sans", Arial, sans-serif;
            line-height: 1.5;
            color: #333;
        }
        img{
        width:250px;
        height:250px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        th, td {
            padding: 8px 12px;
            vertical-align: top;
            border: 1px solid #ddd;
        }
        .header {
            background-color:rgb(245, 245, 245);
            font-weight: bold;
        }
        .section-title {
            background-color: #3498db;
            color: white;
            padding: 10px;
            margin: 20px 0 10px 0;
        }
        .no-border {
            border: none !important;
        }',
        'creative' => 'body {
    font-family: "DejaVu Sans", Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #333;
    background: linear-gradient(to bottom, #f5f7fa 0%, #e4e8eb 100%);
}
img {
    width: 200px;
    height: 200px;
    border-radius: 10px;
    object-fit: cover;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    background: white;
    border-radius: 8px;
    overflow: hidden;
}
th, td {
    padding: 12px 15px;
    vertical-align: top;
}
.header {
    background-color: #6c5ce7;
    color: white;
    font-weight: 600;
}
.section-title {
    background: linear-gradient(to right, #6c5ce7, #a29bfe);
    color: white;
    padding: 12px 20px;
    margin: 25px 0 15px 0;
    border-radius: 5px;
    font-size: 1.1em;
    box-shadow: 0 3px 6px rgba(108, 92, 231, 0.2);
}
.no-border {
    border: none !important;
    background: transparent !important;
}
ul {
    list-style-type: none;
    padding-left: 0;
}
li {
    margin-bottom: 10px;
    padding-left: 20px;
    position: relative;
}
li:before {
    content: "•";
    color: #6c5ce7;
    font-size: 1.5em;
    position: absolute;
    left: 0;
    top: -3px;
}',
'minimalist' => 'body {
    font-family: "DejaVu Sans", Arial, sans-serif;
    line-height: 1.8;
    color: #444;
    background-color: white;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}
img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 20px;
    border: 2px solid #eee;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 30px;
}
th, td {
    padding: 12px 15px;
    vertical-align: top;
    border-bottom: 1px solid #eee;
}
.header {
    font-weight: 500;
    color: #555;
    border-bottom: 2px solid #ddd;
}
.section-title {
    color: #333;
    padding: 8px 0;
    margin: 40px 0 20px 0;
    border-bottom: 2px solid #333;
    font-size: 1.3em;
    letter-spacing: 1px;
}
.no-border {
    border: none !important;
}
ul {
    padding-left: 20px;
}
li {
    margin-bottom: 10px;
    color: #666;
}
h1 {
    color: #222;
    font-weight: 300;
    font-size: 2.2em;
    margin-bottom: 5px;
}',
'seo' => 'body {
    font-family: "DejaVu Sans", "Times New Roman", serif;
    line-height: 1.6;
    color: #333;
    background-color: #fff;
}
img {
    width: 160px;
    height: 160px;
    border: 3px solid #333;
    object-fit: cover;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 25px;
}
th, td {
    padding: 12px 15px;
    vertical-align: top;
    border: 1px solid #ddd;
}
.header {
    background-color: #333;
    color: white;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9em;
}
.section-title {
    background-color: #555;
    color: white;
    padding: 10px 15px;
    margin: 30px 0 15px 0;
    font-size: 1.1em;
    letter-spacing: 1px;
}
.no-border {
    border: none !important;
}
ul {
    padding-left: 25px;
}
li {
    margin-bottom: 8px;
}
strong {
    color: #222;
}',
    'tech' => 'body {
    font-family: "DejaVu Sans", "Courier New", monospace;
    line-height: 1.6;
    color: #e0e0e0;
    background-color: #1a1a1a;
}
img {
    width: 180px;
    height: 180px;
    border-radius: 5px;
    object-fit: cover;
    border: 2px solid #4CAF50;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    background-color: #2a2a2a;
}
th, td {
    padding: 12px 15px;
    vertical-align: top;
    border: 1px solid #3a3a3a;
}
.header {
    background-color: #4CAF50;
    color: #fff;
    font-weight: normal;
}
.section-title {
    background-color: #333;
    color: #4CAF50;
    padding: 10px 15px;
    margin: 25px 0 15px 0;
    border-left: 4px solid #4CAF50;
    font-family: "Arial", sans-serif;
}
.no-border {
    border: none !important;
    background-color: transparent !important;
}
ul {
    padding-left: 20px;
    list-style-type: square;
}
li {
    margin-bottom: 8px;
    color: #ccc;
}
h1 {
    color: #4CAF50;
    border-bottom: 2px solid #4CAF50;
    padding-bottom: 10px;
}'];

require_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Model\Resume;

$res = Resume::get_one($_GET['id']);
$style = $res['style'];
$html = str_replace('http://showyourself/assets/image/users/defolt.png', $_COOKIE['avatar'], $res['html']);
$html = str_replace('<style></style>', '<style>'.$styles[$style].'</style>', $res['html']);
// Configure Dompdf
$options = new Options();
$options->set('defaultFont', 'DejaVu Sans');
$options->set('isRemoteEnabled', true);
$options->set('isHtml5ParserEnabled', true);

$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);
$dompdf->setPaper("A4", "portrait");
$dompdf->render();

// Output the PDF
$dompdf->stream("resume.pdf", ["Attachment" => true]);
?>

   
