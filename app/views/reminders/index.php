<?php require_once 'app/views/templates/header.php' ?>
<main role="main" class="container mx-auto px-4 py-12">

  <div class="max-w-xl mx-auto bg-white shadow-md rounded-lg p-8">
    <h1 class="text-2xl font-bold text-center text-blue-600 mb-6">Reminders</h1>
    <p class="text-gray-700 text-center mb-4">
      <a href="/reminders/create" class="text-blue-500 font-medium hover:underline">
        + Create a new reminder
      </a>
    </p>
  </div>

  <div class="max-w-xl mx-auto mt-6 bg-white shadow-md rounded-lg p-4">
    <?php if (!empty($data['reminders'])): ?>
      <?php foreach ($data['reminders'] as $reminder): ?>
        <div class="flex justify-between items-center border-b py-3">
          <p class="text-gray-800 font-medium"><?= htmlspecialchars($reminder['subject']) ?></p>
          <div class="space-x-2">
            <a href="/reminders/update/<?= $reminder['id'] ?>" class="text-blue-600 hover:text-blue-800 text-sm">Update</a>
            <a href="/reminders/complete/<?= $reminder['id'] ?>" class="text-green-600 hover:text-green-800 text-sm">Complete</a>
            <a href="/reminders/delete/<?= $reminder['id'] ?>" 
               class="text-red-600 hover:text-red-800 text-sm" 
               onclick="return confirm('Are you sure you want to delete this reminder?')">Delete</a>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p class="text-center text-gray-500">No reminders found.</p>
    <?php endif; ?>
  </div>

</main>
<?php require_once 'app/views/templates/footer.php' ?>
