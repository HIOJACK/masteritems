<?php
// Arabic month and day names
$months = [
    1 => 'يناير', 2 => 'فبراير', 3 => 'مارس', 4 => 'أبريل', 5 => 'مايو', 6 => 'يونيو',
    7 => 'يوليو', 8 => 'أغسطس', 9 => 'سبتمبر', 10 => 'أكتوبر', 11 => 'نوفمبر', 12 => 'ديسمبر'
];
$daysArabic = ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'];

$monthNumber = date('n');
$monthName = $months[$monthNumber];
$year = date('Y');
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $monthNumber, $year);
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>درجة حرارة شهر <?= $monthName ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo&display=swap" rel="stylesheet">
    <style>
        @page {
            size: A4;
            margin: 10mm;
        }
        body {
            font-family: "Amiri", "Cairo", "Tahoma", "Arial", sans-serif;
            direction: rtl;
            margin: 0;
            background: #fff;
        }
        .a4 {
            width: 190mm;
            min-height: 200mm;
            margin: auto;
            padding: 3mm;
            border: 2px solid #000;
            box-sizing: border-box;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            width: 70px;
        }
        h2 {
            text-align: center;
            margin: 10px 0 5px;
            font-size: 15px;
        }
        .department {
            font-weight: bold;
            font-size: 16px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            font-size: 13px;
        }
        th, td {
            border: 2px solid #000;
            padding: 3px 4px;
            text-align: center;
        }
        th {
            background-color: #e0e0e0;
        }
        #selected-dept {
            display: inline-block;
            min-width: 150px;
        }
        @media print {
            select {
                display: none;
            }
            #selected-dept::before {
                content: attr(data-value);
            }
        }
    </style>
</head>
<body>

<div class="a4">
    <div class="header">
        <div class="department">
            القسم:
<select onchange="updateDept(this)" style="font-size:11px; font-family:inherit;">
    <option>الصيدلية</option>
    <option>ثلاجة الصيدلية</option>
    <option>مستودع الأدوية</option>
    <option>ثلاجة الأدوية 1</option>
    <option>ثلاجة الأدوية 2</option>
    <option>مستودع الملزمة</option>
    <option>مستودع المختبر</option>
    <option>..............</option>
</select>
<span id="selected-dept" data-value="الصيدلية"></span>
 </div>
        <img src="AIWA.png" class="logo" alt="Logo">
    </div>

    <h2>درجة حرارة شهر (<?= $monthName ?>)</h2>

    <table>
        <thead>
            <tr>
                <th>اليوم</th>
                <th>التاريخ</th>
                <th>درجة الحرارة</th>
                <th>الاسم</th>
                <th>التوقيع</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($day = 1; $day <= $daysInMonth; $day++):
                $dateStr = "$year-$monthNumber-$day";
                $timestamp = strtotime($dateStr);
                $dayName = $daysArabic[date('w', $timestamp)];
            ?>
                <tr>
                    <td><?= $dayName ?></td>
                    <td><?= $day . ' / ' . $monthNumber . ' / ' . $year ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>

<script>
    function updateDept(select) {
        const deptSpan = document.getElementById("selected-dept");
        deptSpan.setAttribute("data-value", select.value);
    }
</script>

</body>
</html>
