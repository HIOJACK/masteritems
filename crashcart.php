<?php
session_start();
if (!isset($_SESSION['authenticated'])) {
    header("Location: verify.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>سجل أدوية عربة الطوارئ</title>
  <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo&display=swap" rel="stylesheet">
  <style>
    @page {
      size: A4;
      margin: 10mm;
    }
    body {
      font-family: "Amiri", "Cairo", "Tahoma", sans-serif;
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
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
      font-size: 13px;
    }
    th, td {
      border: 2px solid #000;
      padding: 3px;
      text-align: center;
    }
    th {
      background-color: #e0e0e0;
    }
    .btn {
      margin: 10px 5px;
      padding: 6px 12px;
      font-size: 13px;
      cursor: pointer;
    }
    .delete-col {
      width: 50px;
    }
    .hidden {
      display: none;
    }
   @media print {
    .btn,
    .delete-col,
    td:last-child,
    th:last-child {
      display: none !important;
    }
    
    /* Optional: Adjust table width to fill the space */
    table {
      width: 100% !important;
    }
    }
  </style>
</head>
<body>

<div class="a4">
  <div class="header">
    <div></div>
    <img src="AIWA.png" class="logo" alt="Logo">
  </div>
<div style="margin: 10px 0; font-size: 14px;">
  <strong>الشهر:</strong> <span contenteditable="true" style="border-bottom: 1px solid black; padding: 2px 20px;"></span>
</div>
  <h2>سجل أدوية عربة الطوارئ</h2>
 <table>
  <thead>
    <tr>
      <th>الرمز</th>
      <th>الاسم</th>
      <th>الكمية القياسية</th>
      <th>الكمية المتوفرة</th>
      <th>تاريخ الانتهاء</th>
      <th>حذف</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>544064415</td><td>AMIODARONE HYDROCHLORIDE 150 MG/3 ML INJ</td><td>5</td><td></td><td></td><td><button onclick="removeRow(this)">🗑</button></td></tr>
    <tr><td>545064891</td><td>ATROPINE SULFATE 0.1MG/ML 5ML SYRING</td><td>5</td><td></td><td></td><td><button onclick="removeRow(this)">🗑</button></td></tr>
    
    <tr>
  <td>545064890</td>
  <td>ATROPINE SULPHATE INJECTION 0.5 TO 0.6 MG/ML 1 ML</td>
  <td>5</td>
  <td></td>
  <td></td>
  <td><button onclick="removeRow(this)">🗑</button></td>
</tr>
    
    
    
    <tr><td>548024475</td><td>CALCIUM CHLORIDE 10% (10ML) SYRING</td><td>10</td><td></td><td></td><td><button onclick="removeRow(this)">🗑</button></td></tr>
    <tr><td>548024310</td><td>CALCIUM GLUCONATE MONOHYDRATE 10%</td><td>10</td><td></td><td></td><td><button onclick="removeRow(this)">🗑</button></td></tr>
    <tr><td>548034600</td><td>DEXTROSE 50% (25 G/50 ML) INJECTION</td><td>2</td><td></td><td></td><td><button onclick="removeRow(this)">🗑</button></td></tr>
    <tr><td>544094610</td><td>DOPAMINE HYDROCHLORIDE 200 MG/5 ML INJECTION</td><td>5</td><td></td><td></td><td><button onclick="removeRow(this)">🗑</button></td></tr>
    <tr><td>544094621</td><td>EPINEPHRINE (ADRENALINE) 1 IN 10 000 (1:10,000)</td><td>5</td><td></td><td></td><td><button onclick="removeRow(this)">🗑</button></td></tr>
    <tr><td>544094650</td><td>NOREPINEPHRINE 1 IN 1000 (4 MG/4 ML) INJ</td><td>5</td><td></td><td></td><td><button onclick="removeRow(this)">🗑</button></td></tr>
    <tr><td>544064388</td><td>LIDOCAINE HYDROCHLORIDE ANHYDROUS 2% 5 ML SYRINGE</td><td>3</td><td></td><td></td><td><button onclick="removeRow(this)">🗑</button></td></tr>
    <tr><td>548024460</td><td>MAGNESIUM SULFATE INJECTION 10% IN 20ML</td><td>5</td><td></td><td></td><td><button onclick="removeRow(this)">🗑</button></td></tr>
    <tr><td>548024420</td><td>SODIUM BICARBONATE 8.4%</td><td>3</td><td></td><td></td><td><button onclick="removeRow(this)">🗑</button></td></tr>
    <tr><td>551074470</td><td>NALOXONE HYDROCHLORIDE 400 MICROGRAM/ML</td><td>3</td><td></td><td></td><td><button onclick="removeRow(this)">🗑</button></td></tr>
    <tr><td>544094600</td><td>DOBUTAMINE 250MG</td><td>5</td><td></td><td></td><td><button onclick="removeRow(this)">🗑</button></td></tr>
    <tr><td>544064360</td><td>PROCAINAMIDE HCL INJECTION 100 MG / ML</td><td>1</td><td></td><td></td><td><button onclick="removeRow(this)">🗑</button></td></tr>
    <tr><td>544061405</td><td>ADENOSINE 6 MG/2 ML INJECTION, 2 ML VIAL</td><td>5</td><td></td><td></td><td><button onclick="removeRow(this)">🗑</button></td></tr>
    <tr><td>548024450</td><td>POTASSIUM CHLORIDE 15% 10ML</td><td>5</td><td></td><td></td><td><button onclick="removeRow(this)">🗑</button></td></tr>
    
    <!-- Empty row 1 -->
   

  </tbody>
</table>
<div style="margin-top: 40px; font-size: 14px;">
  <strong>الاسم والتوقيع:</strong> <span contenteditable="true" style="border-bottom: 1px solid black; padding: 2px 100px;"></span>
</div>
  <button class="btn" onclick="addRow()">➕ إضافة صف</button>
  <button class="btn" onclick="window.print()">🖨️ طباعة</button>
</div>

<script>
  function addRow() {
    const tbody = document.querySelector("table tbody");
    const row = tbody.insertRow();
    for (let i = 0; i < 5; i++) {
      const cell = row.insertCell(i);
      cell.contentEditable = true;
    }
    const deleteCell = row.insertCell(5);
    deleteCell.className = "delete-col";
    deleteCell.innerHTML = '<button onclick="removeRow(this)">🗑</button>';
  }

  function removeRow(button) {
    button.closest("tr").remove();
  }
</script>

</body>
</html>
