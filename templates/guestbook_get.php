<?php
$messages = $data['messages'];
?>

<section>
    <h2>Guestbook Entries</h2>
    <?php if (empty($messages)): ?>
        <p>No entries yet.</p>
    <?php else: ?>
        <?php foreach ($messages as $message): ?>
            <div class="guestbook-entry">
                <p><strong>Name:</strong> <?= htmlspecialchars($message['name'], ENT_QUOTES, 'UTF-8') ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars($message['email'], ENT_QUOTES, 'UTF-8') ?></p>
                <p><strong>Message:</strong> <?= nl2br(htmlspecialchars($message['message'], ENT_QUOTES, 'UTF-8')) ?></p>
                <small><strong>Posted on:</strong> <?= htmlspecialchars($message['created_at'], ENT_QUOTES, 'UTF-8') ?></small>
                <hr>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</section>