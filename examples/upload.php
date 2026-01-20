<?php
header('Content-Type: application/json');
echo json_encode(['success' => true, 'files' => $_FILES]);
