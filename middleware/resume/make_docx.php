<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";

use Spipu\Html2Pdf\Html2Pdf;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;

// Clean HTML template
$html = ' <!DOCTYPE html>
        <html lang="ru">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
             <style>
                body {
            font-family: "DejaVu Sans", Arial, sans-serif;
            line-height: 1.5;
            color: #333;
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
            background-color: #f5f5f5;
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
        }
            </style>
            <meta charset="UTF-8">
        </head>
        <body>
        <table class="no-border">
            <tr>
             <td width="60%" class="no-border">
                <h1>Гор Артакович Асланян</h1><p><strong>Программист С++</strong></p>
                           <p>Оплата: 15000р</p>
                            <p>График: Полный день, Полная</p><p>2025-05-01</p><p>ВладикавказРФ </p>
            </td>
                            <td width="40%" class="no-border">
                            <p><strong>Контактная информация:</strong></p>
                            <p>+7 988 832 29 77</p>
                            <p>gor.aslanyan.01@mail.ru</p>
                <p>Vk: https://vk.com/im</p><p>LinkedIn: https://linkedin.com/im</p>
                </td>
                        </tr>
                    </table>
                <div class="section-title">Ключевые квалификации</div>
                                <table>
                                    <tr>
                                        <td width="50%">
                                            <ul><li>Армянский - C1 - продвинутый</li><li>Английский - C1 - продвинутый</li>  <li>С++ - Средний</li>  <li>php - Средне-продвинутый</li> </ul>
                                        </td>
                                    </tr>
                                </table><div class="section-title">Опыт работы</div><table>
                                <tr class="header">
                                    <th width="30%">Период</th>
                                    <th width="70%">Должность и обязанности</th>
                                </tr>
                                <tr>
                                    <td>Период: 2025-05-01 - 2025-05-17</td>
                                    <td>
                                    <strong>Помощник машиниста</strong>
                                    - РЖД
                                    - Катацца
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr class="header">
                                    <th width="30%">Период</th>
                                    <th width="70%">Должность и обязанности</th>
                                </tr>
                                <tr>
                                    <td>Период: 2025-05-01 - 2025-05-22</td>
                                    <td>
                                    <strong>Продавец</strong>
                                    - Книжный лабиринт
                                    - Продавать
                                    </td>
                                </tr>
                            </table>
                            <div class="section-title">Образование</div><table>
                                    <tr class="header">
                                        <th width="30%">Год</th>
                                        <th width="70%">Учебное заведение</th>
                                    </tr>
                                    <tr>
                                        <td>Период: Очно - 2016</td>
                                        <td>
                                            <strong>ВлТЖТ</strong>
                                            Специальность: Помощник машиниста 
                                                undefined
                                            Факультет: Эксплуатация подвижного состава
                                        </td>
                                    </tr>
                                </table>
                    <div class="section-title">Сертификации</div><table>
                                    <tr class="header">
                                        <th width="30%">Год</th>
                                        <th width="70%">Организация</th>
                                    </tr>
                                    <tr>
                                        <td>Период: 2025 - undefined</td>
                                        <td>
                                            <strong>JavaScript</strong>
                                            Специальность: FreeCodeCamp 
                                        </td>
                                    </tr>
                                </table>
                    <table>
                                    <tr class="header">
                                        <th width="30%">Год</th>
                                        <th width="70%">Организация</th>
                                    </tr>
                                    <tr>
                                        <td>Период: 2025 - undefined</td>
                                        <td>
                                            <strong>HTML/CSS</strong>
                                            Специальность: FreeCodeCamp 
                                        </td>
                                    </tr>
                                </table>
                    <div class="section-title">Дополнительная информация</div>
                        <table>
                            <tr>
                                <td width="50%"><strong>Семейное положение: </strong>Холост/Не замужемЕстьМуж.Есть дети</td>  <td width="50%">
                                    <strong>Медкнижка:</strong> Нет;<strong>Права категории А</strong><strong>Права категории C</strong><strong>Права категории E</strong>        </td>
                        </tr>
                    </table>
                    <div class="section-title">Обо мне</div>
                    <table>
                            <tr>
                                <td width="100%">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus consectetur est totam quasi. Soluta laboriosam culpa iure quasi enim sunt, inventore numquam vero minima error!
                                </td>
                            </tr>
                        </table>
                    <div class="section-title">Мои профессиональные качества</div>
                    <table>
                            <tr>
                                <td width="100%">
                                    sdfsdfsdfwtr Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus consectetur est totam quasi. Soluta laboriosam culpa iure quasi enim sunt, inventore numquam vero minima error!
                                </td>
                            </tr>
                        </table>
                    </body></html>';

// Create PHPWord instance
$html2pdf = new Html2Pdf('P', 'A4', 'ru');
$html2pdf->writeHTML($html);
$pdfContent = $html2pdf->output('', 'S'); // Save as string

// 2. Convert PDF to DOCX (requires PHPWord)
$phpWord = new PhpWord();
$section = $phpWord->addSection();
$section->addText('This DOCX was generated from HTML via TCPDF.');

// Save
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Disposition: attachment; filename="resume.docx"');
$writer = IOFactory::createWriter($phpWord, 'Word2007');
$writer->save('php://output');
?>