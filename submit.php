<?php
$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    require_once("secrets.php");
    header('Content-Type: application/json');

    $prefix      = $data['prefix'] ?? '';
    $fname       = $data['fname'] ?? '';
    $lname       = $data['lname'] ?? '';
    $gender      = $data['gender'] ?? '';
    $org         = $data['org'] ?? '';
    $orgType     = $data['orgType'] ?? '';
    $job         = $data['job'] ?? '';
    $email       = $data['email'] ?? '';
    $phone       = $data['phone'] ?? '';
    $parmg       = $data['parmg'] ?? '';
    $recaptchaToken = $data['recaptchaToken'] ?? '';

    if (empty($fname) || empty($lname) || empty($gender) || empty($org) || empty($orgType) || empty($job) || empty($email) || empty($phone) || empty($parmg)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'All fields except prefix are required']);
        exit;
    }

    $recaptcha_response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$recaptchaToken}");
    $recaptcha_data = json_decode($recaptcha_response, true);

    if (!$recaptcha_data['success'] || $recaptcha_data['score'] < 0.5) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Failed reCAPTCHA verification']);
        exit;
    }

    $listId = 'd1b9beb4d4';
    $dc = substr($apiKey, strpos($apiKey, '-')+1);

    $memberId = md5(strtolower($email));
    $url = "https://$dc.api.mailchimp.com/3.0/lists/$listId/members/$memberId";

    $json = json_encode([
        'email_address' => $email,
        'status_if_new' => 'subscribed',
        'merge_fields' => [
            'PREFIX'   => $prefix,
            'FNAME'    => $fname,
            'LNAME'    => $lname,
            'GENDER'   => $gender,
            'ORG'      => $org,
            'ORGTYPE'  => $orgType,
            'JOB'      => $job,
            'PARMG'    => $parmg,
            'PHONE'    => $phone
        ]
    ]);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $response = json_decode($result, true);

    if ($httpCode == 200 || $httpCode == 214) {
        http_response_code(200);
        echo json_encode(['success' => true, 'message' => 'Thank you! You are subscribed.']);
    } else {
        http_response_code(400);
        $errorMsg = $response['detail'] ?? 'Subscription failed';
        echo json_encode(['success' => false, 'message' => $errorMsg]);
    }

    exit;
}
?>
