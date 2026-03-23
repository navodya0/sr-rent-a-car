<?php
session_start();

if (empty($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . '/assets/includes/db_connect.php';

$success = '';
$error = '';
$inquiries = [];

try {
    $stmt = $pdo->query("
        SELECT id, name, email, subject, message, submitted_at
        FROM contact_form
        ORDER BY id DESC
    ");
    $inquiries = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $error = "Failed to load inquiries: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Inquiries | SR Rent A Car</title>
<link rel="icon" type="image/png" href="assets/images/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">

<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    background: #f4f7fb;
    font-family: Cambria, serif;
    color: #1f2937;
    font-size:12px;
}

.main-content {
    margin-left: 240px;
    padding: 30px;
}

.card {
    background: #fff;
    padding: 22px;
    border-radius: 16px;
    margin-bottom: 24px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.06);
}

.page-title {
    margin: 0 0 8px;
    font-size: 28px;
    color: #031c45;
    font-weight : 800;
}

.small-text {
    font-size: 14px;
    color: #6b7280;
    margin-bottom: 15px;
}

.alert {
    padding: 14px 16px;
    border-radius: 10px;
    margin-bottom: 18px;
    font-size: 14px;
}

.alert-success {
    background: #e8f8ee;
    color: #166534;
    border: 1px solid #bbf7d0;
}

.alert-error {
    background: #fef2f2;
    color: #991b1b;
    border: 1px solid #fecaca;
}

.table-wrapper {
    overflow-x: auto;
    border-radius: 12px;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.table th {
    background: #031c45;
    color: #fff;
    text-align: left;
    padding: 12px;
    font-size: 14px;
    white-space: nowrap;
}

.table td {
    background: #fff;
    padding: 12px;
    border-bottom: 1px solid #eef2f7;
    font-size: 14px;
    vertical-align: top;
}

.table tr:hover td {
    background: #f8fafc;
}

.email-link {
    color: #0f4c81;
    text-decoration: none;
}

.email-link:hover {
    text-decoration: underline;
}

.view-message-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 9px 14px;
    background: #031c45;
    color: #fff;
    text-decoration: none;
    border: none;
    cursor: pointer;
    font-size: 13px;
    font-weight: 600;
    white-space: nowrap;
}

.view-message-btn:hover {
    background: #052b69;
}

.modal-overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(15, 23, 42, 0.55);
    z-index: 99999;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.modal-overlay.active {
    display: flex;
}

.modal-box {
    width: 100%;
    max-width: 700px;
    max-height: calc(100vh - 40px);
    background: #fff;
    box-shadow: 0 20px 50px rgba(0,0,0,0.18);
    overflow: hidden;
    display: flex;
    flex-direction: column;
}

.modal-header {
    padding: 18px 22px;
    background: #031c45;
    color: #fff;
    flex-shrink: 0;
}

.modal-header h3 {
    margin: 0;
    font-size: 22px;
}

.modal-body {
    padding: 22px;
    overflow-y: auto;
    flex: 1 1 auto;
}

.modal-row {
    margin-bottom: 14px;
}

.modal-label {
    display: block;
    font-size: 13px;
    color: #64748b;
    margin-bottom: 4px;
}

.modal-value {
    font-size: 15px;
    color: #111827;
    line-height: 1.6;
    word-break: break-word;
}

.modal-message {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 16px;
    white-space: pre-wrap;
    word-break: break-word;
    overflow-wrap: anywhere;
}

.modal-actions {
    display: flex;
    gap: 12px;
    justify-content: flex-end;
    flex-wrap: wrap;
    padding: 16px 22px 22px;
    border-top: 1px solid #e5e7eb;
    flex-shrink: 0;
    background: #fff;
}

.modal-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 44px;
    padding: 0 18px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    border: none;
    cursor: pointer;
}

.modal-btn-reply {
    background: #031c45;
    color: #fff;
}

.modal-btn-reply:hover {
    background: #052b69;
}

.modal-btn-close {
    background: #fff;
    color: #475569;
    border: 1px solid #cbd5e1;
}

.modal-btn-close:hover {
    background: #f8fafc;
}

@media (max-width: 900px) {
    .main-content {
        margin-left: 0;
        padding: 20px;
    }
}

@media (max-width: 768px) {
    .modal-overlay {
        padding: 12px;
    }

    .modal-box {
        max-width: 100%;
        max-height: calc(100vh - 24px);
        border-radius: 14px;
    }

    .modal-header {
        padding: 14px 16px;
    }

    .modal-header h3 {
        font-size: 18px;
    }

    .modal-body {
        padding: 16px;
    }

    .modal-actions {
        padding: 14px 16px 16px;
        flex-direction: column;
    }

    .modal-btn {
        width: 100%;
    }

    .modal-message {
        max-height: none;
    }
}

@media (max-width: 900px) {
    .main-content {
        margin-left: 0;
        padding: 20px;
    }
}
</style>
</head>
<body>

<?php include 'assets/includes/sidebar.php'; ?>

<div class="main-content">
    <div class="card">
        <h1 class="page-title">Customer Inquiries</h1>
        <div class="small-text mb-0">View all messages submitted through the contact form.</div>
        <hr>
        <?php if ($success): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <div class="table-wrapper">
            <table class="table" id="inquiriesTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($inquiries)): ?>
                        <?php foreach ($inquiries as $inquiry): ?>
                            <tr>
                                <td><?php echo (int)$inquiry['id']; ?></td>
                                <td><?php echo htmlspecialchars($inquiry['name']); ?></td>
                                <td>
                                    <?php echo htmlspecialchars($inquiry['email']); ?>
                                </td>
                                <td><?php echo htmlspecialchars($inquiry['subject']); ?></td>
                                <td>
                                    <button
                                        type="button"
                                        class="view-message-btn openMessageModal"
                                        data-name="<?php echo htmlspecialchars($inquiry['name'], ENT_QUOTES); ?>"
                                        data-email="<?php echo htmlspecialchars($inquiry['email'], ENT_QUOTES); ?>"
                                        data-subject="<?php echo htmlspecialchars($inquiry['subject'], ENT_QUOTES); ?>"
                                        data-message="<?php echo htmlspecialchars($inquiry['message'], ENT_QUOTES); ?>"
                                        data-submitted="<?php echo htmlspecialchars($inquiry['submitted_at'], ENT_QUOTES); ?>"
                                    >
                                        View Message
                                    </button>
                                </td>
                                <td><?php echo htmlspecialchars($inquiry['submitted_at']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" style="text-align:center; color:#6b7280;">No inquiries found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal-overlay" id="messageModal">
    <div class="modal-box">
        <div class="modal-header">
            <h3>Inquiry Message</h3>
        </div>
        <div class="modal-body">
            <div class="modal-row">
                <span class="modal-label">Message</span>
                <div class="modal-value modal-message" id="modalMessage"></div>
            </div>
        </div>
        <div class="modal-actions">
            <a href="#" class="modal-btn modal-btn-reply" id="modalReplyBtn">Reply via Email</a>
            <button type="button" class="modal-btn modal-btn-close" id="modalCloseBtn">Close</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#inquiriesTable').DataTable({
        pageLength: 10,
        ordering: false,
        responsive: true,
        language: {
            search: "Search inquiries:",
            lengthMenu: "Show _MENU_ entries",
        }
    });

    $(document).on('click', '.openMessageModal', function() {
        var name = $(this).data('name') || '';
        var email = $(this).data('email') || '';
        var subject = $(this).data('subject') || '';
        var message = $(this).data('message') || '';
        var submitted = $(this).data('submitted') || '';

        $('#modalName').text(name);
        $('#modalEmail').text(email);
        $('#modalSubject').text(subject);
        $('#modalSubmitted').text(submitted);
        $('#modalMessage').text(message);

        var replySubject = 'Re: ' + subject;
        var replyHref = 'mailto:' + encodeURIComponent(email) + '?subject=' + encodeURIComponent(replySubject);
        $('#modalReplyBtn').attr('href', replyHref);

        $('#messageModal').addClass('active');
    });

    $('#modalCloseBtn').on('click', function() {
        $('#messageModal').removeClass('active');
    });

    $('#messageModal').on('click', function(e) {
        if (e.target === this) {
            $('#messageModal').removeClass('active');
        }
    });

    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') {
            $('#messageModal').removeClass('active');
        }
    });
});
</script>

</body>
</html>