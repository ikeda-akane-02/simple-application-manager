<?php
header('Content-Type: text/html; charset=UTF-8');

$applicantName = $_POST['applicant_name'] ?? '';

if (!is_string($applicantName)){
    exit('申請者名の形式が正しくありません。');
}
echo htmlspecialchars($applicantName, ENT_QUOTES, 'UTF-8');

$itemName = $_POST['item_name'] ?? '';

if (!is_string($itemName)) {
    exit('備品名の形式が正しくありません。');
}
echo htmlspecialchars($itemName, ENT_QUOTES, 'UTF-8');

$Amount = $_POST['amount'] ?? '';

if (!is_string($Amount)) {
    exit('金額の形式が正しくありません。');
}
echo htmlspecialchars($Amount, ENT_QUOTES, 'UTF-8');

$Reason = $_POST['reason'] ?? '';

if (!is_string($Reason)) {
    exit('購入理由の形式が正しくありません。');
}
echo htmlspecialchars($Reason, ENT_QUOTES, 'UTF-8');