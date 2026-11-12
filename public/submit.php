<?php
header('Content-Type: text/html; charset=UTF-8');

$applicantName = $_POST['applicant_name'] ?? '';

if ($applicantName === ''){
    echo '<p>申請者名を入力してください。</p>';
} else {
    echo '<p>申請者名が入力されています。</p>';
}
echo htmlspecialchars($applicantName, ENT_QUOTES, 'UTF-8');

$itemName = $_POST['item_name'] ?? '';

if ($itemName === '') {
    echo '<p>備品名を入力してください。</p>';
} else {
    echo '<p>備品名が入力されています。</p>';
}
echo htmlspecialchars($itemName, ENT_QUOTES, 'UTF-8');

$Amount = $_POST['amount'] ?? '';

if ($Amount === '') {
    echo '<p>金額を入力してください。</p>';
} else {
    echo '<p>金額が入力されています。</p>';
}
echo htmlspecialchars($Amount, ENT_QUOTES, 'UTF-8');

$Reason = $_POST['reason'] ?? '';

if (htmlspecialchars($Reason, ENT_QUOTES, 'UTF-8') === '') {
    echo '<p>購入理由を入力してください。</p>';
} else {
    echo '<p>購入理由が入力されています。</p>';
}
echo htmlspecialchars($Reason, ENT_QUOTES, 'UTF-8');