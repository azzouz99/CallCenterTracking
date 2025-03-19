<?php
// ✅ Ensure session is started once per request
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
